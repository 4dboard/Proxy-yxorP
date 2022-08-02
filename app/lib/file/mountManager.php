<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use Throwable;
use function sprintf;

class mountManager implements filesystemOperatorInterface
{
    private $filesystems = [];

    public function __construct(array $filesystems = [])
    {
        $this->mountFilesystems($filesystems);
    }

    private function mountFilesystems(array $filesystems): void
    {
        foreach ($filesystems as $key => $filesystem) {
            $this->guardAgainstInvalidMount($key, $filesystem);
            $this->mountFilesystem($key, $filesystem);
        }
    }

    private function guardAgainstInvalidMount($key, $filesystem): void
    {
        if (!is_string($key)) {
            throw unableToMountFilesystem::becauseTheKeyIsNotValid($key);
        }
        if (!$filesystem instanceof filesystemOperatorInterface) {
            throw unableToMountFilesystem::becauseTheFilesystemWasNotValid($filesystem);
        }
    }

    private function mountFilesystem(string $key, filesystemOperatorInterface $filesystem): void
    {
        $this->filesystems[$key] = $filesystem;
    }

    public function fileExists(string $location): bool
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        try {
            return $filesystem->fileExists($path);
        } catch (Throwable $exception) {
            throw unableToCheckFileExistence::forLocation($location, $exception);
        }
    }

    private function determineFilesystemAndPath(string $path): array
    {
        if (strpos($path, '://') < 1) {
            throw unableToResolveFilesystemMount::becauseTheSeparatorIsMissing($path);
        }
        [$mountIdentifier, $mountPath] = explode('://', $path, 2);
        if (!array_key_exists($mountIdentifier, $this->filesystems)) {
            throw unableToResolveFilesystemMount::becauseTheMountWasNotRegistered($mountIdentifier);
        }
        return [$this->filesystems[$mountIdentifier], $mountPath, $mountIdentifier];
    }

    public function has(string $location): bool
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        try {
            return $filesystem->fileExists($path) || $filesystem->directoryExists($path);
        } catch (Throwable $exception) {
            throw unableToCheckExistence::forLocation($location, $exception);
        }
    }

    public function directoryExists(string $location): bool
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        try {
            return $filesystem->directoryExists($path);
        } catch (Throwable $exception) {
            throw unableToCheckDirectoryExistence::forLocation($location, $exception);
        }
    }

    public function read(string $location): string
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        try {
            return $filesystem->read($path);
        } catch (unableToReadFile $exception) {
            throw unableToReadFile::fromLocation($location, $exception->reason(), $exception);
        }
    }

    public function listContents(string $location, bool $deep = self::LIST_SHALLOW): directoryListing
    {
        [$filesystem, $path, $mountIdentifier] = $this->determineFilesystemAndPath($location);
        return $filesystem->listContents($path, $deep)->map(function (storageAttributesInterface $attributes) use ($mountIdentifier) {
            return $attributes->withPath(sprintf('%s://%s', $mountIdentifier, $attributes->path()));
        });
    }

    public function lastModified(string $location): int
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        try {
            return $filesystem->lastModified($path);
        } catch (unableToRetrieveMetadata $exception) {
            throw unableToRetrieveMetadata::lastModified($location, $exception->reason(), $exception);
        }
    }

    public function fileSize(string $location): int
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        try {
            return $filesystem->fileSize($path);
        } catch (unableToRetrieveMetadata $exception) {
            throw unableToRetrieveMetadata::fileSize($location, $exception->reason(), $exception);
        }
    }

    public function mimeType(string $location): string
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        try {
            return $filesystem->mimeType($path);
        } catch (unableToRetrieveMetadata $exception) {
            throw unableToRetrieveMetadata::mimeType($location, $exception->reason(), $exception);
        }
    }

    public function write(string $location, string $contents, array $config = []): void
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        try {
            $filesystem->write($path, $contents, $config);
        } catch (unableToWriteFile $exception) {
            throw unableToWriteFile::atLocation($location, $exception->reason(), $exception);
        }
    }

    public function setVisibility(string $path, string $visibility): void
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($path);
        $filesystem->setVisibility($path, $visibility);
    }

    public function deleteDirectory(string $location): void
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        try {
            $filesystem->deleteDirectory($path);
        } catch (unableToDeleteDirectory $exception) {
            throw unableToDeleteDirectory::atLocation($location, '', $exception);
        }
    }

    public function createDirectory(string $location, array $config = []): void
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        try {
            $filesystem->createDirectory($path, $config);
        } catch (unableToCreateDirectory $exception) {
            throw unableToCreateDirectory::dueToFailure($location, $exception);
        }
    }

    public function move(string $source, string $destination, array $config = []): void
    {
        [$sourceFilesystem, $sourcePath] = $this->determineFilesystemAndPath($source);
        [$destinationFilesystem, $destinationPath] = $this->determineFilesystemAndPath($destination);
        $sourceFilesystem === $destinationFilesystem ? $this->moveInTheSameFilesystem($sourceFilesystem, $sourcePath, $destinationPath, $source, $destination) : $this->moveAcrossFilesystems($source, $destination);
    }

    private function moveInTheSameFilesystem(filesystemOperatorInterface $sourceFilesystem, string $sourcePath, string $destinationPath, string $source, string $destination): void
    {
        try {
            $sourceFilesystem->move($sourcePath, $destinationPath);
        } catch (unableToMoveFile $exception) {
            throw unableToMoveFile::fromLocationTo($source, $destination, $exception);
        }
    }

    private function moveAcrossFilesystems(string $source, string $destination): void
    {
        try {
            $this->copy($source, $destination);
            $this->delete($source);
        } catch (unableToCopyFile|unableToDeleteFile $exception) {
            throw unableToMoveFile::fromLocationTo($source, $destination, $exception);
        }
    }

    public function copy(string $source, string $destination, array $config = []): void
    {
        [$sourceFilesystem, $sourcePath] = $this->determineFilesystemAndPath($source);
        [$destinationFilesystem, $destinationPath] = $this->determineFilesystemAndPath($destination);
        $sourceFilesystem === $destinationFilesystem ? $this->copyInSameFilesystem($sourceFilesystem, $sourcePath, $destinationPath, $source, $destination) : $this->copyAcrossFilesystem($config['visibility'] ?? null, $sourceFilesystem, $sourcePath, $destinationFilesystem, $destinationPath, $source, $destination);
    }

    private function copyInSameFilesystem(filesystemOperatorInterface $sourceFilesystem, string $sourcePath, string $destinationPath, string $source, string $destination): void
    {
        try {
            $sourceFilesystem->copy($sourcePath, $destinationPath);
        } catch (unableToCopyFile $exception) {
            throw unableToCopyFile::fromLocationTo($source, $destination, $exception);
        }
    }

    private function copyAcrossFilesystem(?string $visibility, filesystemOperatorInterface $sourceFilesystem, string $sourcePath, filesystemOperatorInterface $destinationFilesystem, string $destinationPath, string $source, string $destination): void
    {
        try {
            $visibility = $visibility ?? $sourceFilesystem->visibility($sourcePath);
            $stream = $sourceFilesystem->readStream($sourcePath);
            $destinationFilesystem->writeStream($destinationPath, $stream, compact('visibility'));
        } catch (unableToRetrieveMetadata|unableToReadFile|unableToWriteFile $exception) {
            throw unableToCopyFile::fromLocationTo($source, $destination, $exception);
        }
    }

    public function visibility(string $location): string
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        try {
            return $filesystem->visibility($path);
        } catch (unableToRetrieveMetadata $exception) {
            throw unableToRetrieveMetadata::visibility($location, $exception->reason(), $exception);
        }
    }

    public function readStream(string $location)
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        try {
            return $filesystem->readStream($path);
        } catch (unableToReadFile $exception) {
            throw unableToReadFile::fromLocation($location, $exception->reason(), $exception);
        }
    }

    public function writeStream(string $location, $contents, array $config = []): void
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        $filesystem->writeStream($path, $contents, $config);
    }

    public function delete(string $location): void
    {
        [$filesystem, $path] = $this->determineFilesystemAndPath($location);
        try {
            $filesystem->delete($path);
        } catch (unableToDeleteFile $exception) {
            throw unableToDeleteFile::atLocation($location, '', $exception);
        }
    }
}
