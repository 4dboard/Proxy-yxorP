<?php

declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem\Local;

use DirectoryIterator;
use FilesystemIterator;
use Generator;
use JetBrains\PhpStorm\Pure;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;
use yxorP\app\lib\file\Flysystem\config;
use yxorP\app\lib\file\Flysystem\directoryAttributes;
use yxorP\app\lib\file\Flysystem\fileAttributes;
use yxorP\app\lib\file\Flysystem\filesystemAdapterInterface;
use yxorP\app\lib\file\Flysystem\pathPrefixer;
use yxorP\app\lib\file\Flysystem\symbolicLinkEncountered;
use yxorP\app\lib\file\Flysystem\unableToCopyFile;
use yxorP\app\lib\file\Flysystem\unableToCreateDirectory;
use yxorP\app\lib\file\Flysystem\unableToDeleteDirectory;
use yxorP\app\lib\file\Flysystem\unableToDeleteFile;
use yxorP\app\lib\file\Flysystem\unableToMoveFile;
use yxorP\app\lib\file\Flysystem\unableToReadFile;
use yxorP\app\lib\file\Flysystem\unableToRetrieveMetadata;
use yxorP\app\lib\file\Flysystem\unableToSetVisibility;
use yxorP\app\lib\file\Flysystem\unableToWriteFile;
use yxorP\app\lib\file\Flysystem\UnixVisibility\portableVisibilityConverter;
use yxorP\app\lib\file\Flysystem\UnixVisibility\visibilityConverterInterface;
use yxorP\app\lib\file\MimeTypeDetection\finfoMimeTypeDetector;
use yxorP\app\lib\file\MimeTypeDetection\mimeTypeDetectorInterface;
use function chmod;
use function clearstatcache;
use function dirname;
use function error_clear_last;
use function error_get_last;
use function file_exists;
use function file_put_contents;
use function is_dir;
use function is_file;
use function mkdir;
use function rename;
use const DIRECTORY_SEPARATOR;
use const LOCK_EX;

class localFilesystemAdapter implements filesystemAdapterInterface
{
    /**
     * @var int
     */
    public const SKIP_LINKS = 0001;

    /**
     * @var int
     */
    public const DISALLOW_LINKS = 0002;

    /**
     * @var pathPrefixer
     */
    private pathPrefixer $prefixer;

    /**
     * @var int
     */
    private int $writeFlags;

    /**
     * @var int
     */
    private int $linkHandling;

    /**
     * @var portableVisibilityConverter|visibilityConverterInterface
     */
    private visibilityConverterInterface|portableVisibilityConverter $visibility;

    /**
     * @var fallbackMimeTypeDetector|mimeTypeDetectorInterface
     */
    private fallbackMimeTypeDetector|mimeTypeDetectorInterface $mimeTypeDetector;

    /**
     * @var string
     */
    private string $rootLocation;

    /**
     * @var bool
     */
    private bool $rootLocationIsSetup = false;

    public function __construct(
        string                       $location,
        visibilityConverterInterface $visibility = null,
        int                          $writeFlags = LOCK_EX,
        int                          $linkHandling = self::DISALLOW_LINKS,
        mimeTypeDetectorInterface    $mimeTypeDetector = null,
        bool                         $lazyRootCreation = false,
    )
    {
        $this->prefixer = new pathPrefixer($location, DIRECTORY_SEPARATOR);
        $this->writeFlags = $writeFlags;
        $this->linkHandling = $linkHandling;
        $this->visibility = $visibility ?: new portableVisibilityConverter();
        $this->rootLocation = $location;
        $this->mimeTypeDetector = $mimeTypeDetector ?: new fallbackMimeTypeDetector(new finfoMimeTypeDetector());

        if (!$lazyRootCreation) {
            $this->ensureRootDirectoryExists();
        }
    }

    private function ensureRootDirectoryExists(): void
    {
        if ($this->rootLocationIsSetup) {
            return;
        }

        $this->ensureDirectoryExists($this->rootLocation, $this->visibility->defaultForDirectories());
    }

    protected function ensureDirectoryExists(string $dirname, int $visibility): void
    {
        if (is_dir($dirname)) {
            return;
        }

        error_clear_last();

        if (!@mkdir($dirname, $visibility, true)) {
            $mkdirError = error_get_last();
        }

        clearstatcache(true, $dirname);

        if (!is_dir($dirname)) {
            $errorMessage = $mkdirError['message'] ?? '';

            throw unableToCreateDirectory::atLocation($dirname, $errorMessage);
        }
    }

    public function write(string $path, string $contents, config $config): void
    {
        $this->writeToFile($path, $contents, $config);
    }

    /**
     * @param string $path
     * @param string $contents
     * @param config $config
     */
    private function writeToFile(string $path, string $contents, config $config): void
    {
        $prefixedLocation = $this->prefixer->prefixPath($path);
        $this->ensureRootDirectoryExists();
        $this->ensureDirectoryExists(
            dirname($prefixedLocation),
            $this->resolveDirectoryVisibility($config->get(config::OPTION_DIRECTORY_VISIBILITY))
        );
        error_clear_last();

        if (@file_put_contents($prefixedLocation, $contents, $this->writeFlags) === false) {
            throw unableToWriteFile::atLocation($path, error_get_last()['message'] ?? '');
        }

        if ($visibility = $config->get(config::OPTION_VISIBILITY)) {
            $this->setVisibility($path, (string)$visibility);
        }
    }

    private function resolveDirectoryVisibility(?string $visibility): int
    {
        return $visibility === null ? $this->visibility->defaultForDirectories() : $this->visibility->forDirectory(
            $visibility
        );
    }

    public function setVisibility(string $path, string $visibility): void
    {
        $path = $this->prefixer->prefixPath($path);
        $visibility = is_dir($path) ? $this->visibility->forDirectory($visibility) : $this->visibility->forFile(
            $visibility
        );

        $this->setPermissions($path, $visibility);
    }

    private function setPermissions(string $location, int $visibility): void
    {
        error_clear_last();
        if (!@chmod($location, $visibility)) {
            $extraMessage = error_get_last()['message'] ?? '';
            throw unableToSetVisibility::atLocation($this->prefixer->stripPrefix($location), $extraMessage);
        }
    }

    public function writeStream(string $path, $contents, config $config): void
    {
        $this->writeToFile($path, $contents, $config);
    }

    public function delete(string $path): void
    {
        $location = $this->prefixer->prefixPath($path);

        if (!file_exists($location)) {
            return;
        }

        error_clear_last();

        if (!@unlink($location)) {
            throw unableToDeleteFile::atLocation($location, error_get_last()['message'] ?? '');
        }
    }

    public function deleteDirectory(string $prefix): void
    {
        $location = $this->prefixer->prefixPath($prefix);

        if (!is_dir($location)) {
            return;
        }

        $contents = $this->listDirectoryRecursively($location, RecursiveIteratorIterator::CHILD_FIRST);

        /** @var SplFileInfo $file */
        foreach ($contents as $file) {
            if (!$this->deleteFileInfoObject($file)) {
                throw unableToDeleteDirectory::atLocation($prefix, "Unable to delete file at " . $file->getPathname());
            }
        }

        unset($contents);

        if (!@rmdir($location)) {
            throw unableToDeleteDirectory::atLocation($prefix, error_get_last()['message'] ?? '');
        }
    }

    private function listDirectoryRecursively(
        string $path,
        int    $mode = RecursiveIteratorIterator::SELF_FIRST
    ): Generator
    {
        if (!is_dir($path)) {
            return;
        }

        yield from new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS),
            $mode
        );
    }

    protected function deleteFileInfoObject(SplFileInfo $file): bool
    {
        return match ($file->getType()) {
            'dir' => @rmdir((string)$file->getRealPath()),
            'link' => @unlink($file->getPathname()),
            default => @unlink((string)$file->getRealPath()),
        };
    }

    public function listContents(string $path, bool $deep): iterable
    {
        $location = $this->prefixer->prefixPath($path);

        if (!is_dir($location)) {
            return;
        }

        /** @var SplFileInfo[] $iterator */
        $iterator = $deep ? $this->listDirectoryRecursively($location) : $this->listDirectory($location);

        foreach ($iterator as $fileInfo) {
            if ($fileInfo->isLink()) {
                if ($this->linkHandling & self::SKIP_LINKS) {
                    continue;
                }
                throw symbolicLinkEncountered::atLocation($fileInfo->getPathname());
            }

            $path = $this->prefixer->stripPrefix($fileInfo->getPathname());
            $lastModified = $fileInfo->getMTime();
            $isDirectory = $fileInfo->isDir();
            $permissions = octdec(substr(sprintf('%o', $fileInfo->getPerms()), -4));
            $visibility = $isDirectory ? $this->visibility->inverseForDirectory($permissions) : $this->visibility->inverseForFile($permissions);

            yield $isDirectory ? new directoryAttributes(str_replace('\\', '/', $path), $visibility, $lastModified) : new fileAttributes(
                str_replace('\\', '/', $path),
                $fileInfo->getSize(),
                $visibility,
                $lastModified
            );
        }
    }

    private function listDirectory(string $location): Generator
    {
        $iterator = new DirectoryIterator($location);

        foreach ($iterator as $item) {
            if ($item->isDot()) {
                continue;
            }

            yield $item;
        }
    }

    public function move(string $source, string $destination, config $config): void
    {
        $sourcePath = $this->prefixer->prefixPath($source);
        $destinationPath = $this->prefixer->prefixPath($destination);

        $this->ensureRootDirectoryExists();
        $this->ensureDirectoryExists(
            dirname($destinationPath),
            $this->resolveDirectoryVisibility($config->get(config::OPTION_DIRECTORY_VISIBILITY))
        );

        if (!@rename($sourcePath, $destinationPath)) {
            throw unableToMoveFile::fromLocationTo($sourcePath, $destinationPath);
        }
    }

    public function copy(string $source, string $destination, config $config): void
    {
        $sourcePath = $this->prefixer->prefixPath($source);
        $destinationPath = $this->prefixer->prefixPath($destination);
        $this->ensureRootDirectoryExists();
        $this->ensureDirectoryExists(
            dirname($destinationPath),
            $this->resolveDirectoryVisibility($config->get(config::OPTION_DIRECTORY_VISIBILITY))
        );

        if (!@copy($sourcePath, $destinationPath)) {
            throw unableToCopyFile::fromLocationTo($sourcePath, $destinationPath);
        }
    }

    public function read(string $path): string
    {
        $location = $this->prefixer->prefixPath($path);
        error_clear_last();
        $contents = @file_get_contents($location);

        if ($contents === false) {
            throw unableToReadFile::fromLocation($path, error_get_last()['message'] ?? '');
        }

        return $contents;
    }

    public function readStream(string $path)
    {
        $location = $this->prefixer->prefixPath($path);
        error_clear_last();
        $contents = @fopen($location, 'rb');

        if ($contents === false) {
            throw unableToReadFile::fromLocation($path, error_get_last()['message'] ?? '');
        }

        return $contents;
    }

    #[Pure] public function fileExists(string $location): bool
    {
        $location = $this->prefixer->prefixPath($location);

        return is_file($location);
    }

    #[Pure] public function directoryExists(string $location): bool
    {
        $location = $this->prefixer->prefixPath($location);

        return is_dir($location);
    }

    public function createDirectory(string $path, config $config): void
    {
        $this->ensureRootDirectoryExists();
        $location = $this->prefixer->prefixPath($path);
        $visibility = $config->get(config::OPTION_VISIBILITY, $config->get(config::OPTION_DIRECTORY_VISIBILITY));
        $permissions = $this->resolveDirectoryVisibility($visibility);

        if (is_dir($location)) {
            $this->setPermissions($location, $permissions);

            return;
        }

        error_clear_last();

        if (!@mkdir($location, $permissions, true)) {
            throw unableToCreateDirectory::atLocation($path, error_get_last()['message'] ?? '');
        }
    }

    public function visibility(string $path): fileAttributes
    {
        $location = $this->prefixer->prefixPath($path);
        clearstatcache(false, $location);
        error_clear_last();
        $fileperms = @fileperms($location);

        if ($fileperms === false) {
            throw unableToRetrieveMetadata::visibility($path, error_get_last()['message'] ?? '');
        }

        $permissions = $fileperms & 0777;
        $visibility = $this->visibility->inverseForFile($permissions);

        return new fileAttributes($path, null, $visibility);
    }

    public function mimeType(string $path): fileAttributes
    {
        $location = $this->prefixer->prefixPath($path);
        error_clear_last();

        if (!is_file($location)) {
            throw unableToRetrieveMetadata::mimeType($location, 'No such file exists.');
        }

        $mimeType = $this->mimeTypeDetector->detectMimeTypeFromFile($location);

        if ($mimeType === null) {
            throw unableToRetrieveMetadata::mimeType($path, error_get_last()['message'] ?? '');
        }

        return new fileAttributes($path, null, null, null, $mimeType);
    }

    public function lastModified(string $path): fileAttributes
    {
        $location = $this->prefixer->prefixPath($path);
        error_clear_last();
        $lastModified = @filemtime($location);

        if ($lastModified === false) {
            throw unableToRetrieveMetadata::lastModified($path, error_get_last()['message'] ?? '');
        }

        return new fileAttributes($path, null, null, $lastModified);
    }

    public function fileSize(string $path): fileAttributes
    {
        $location = $this->prefixer->prefixPath($path);
        error_clear_last();

        if (is_file($location) && ($fileSize = @filesize($location)) !== false) {
            return new fileAttributes($path, $fileSize);
        }

        throw unableToRetrieveMetadata::fileSize($path, error_get_last()['message'] ?? '');
    }
}
