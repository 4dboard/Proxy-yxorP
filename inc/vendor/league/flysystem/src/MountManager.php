<?php

namespace League\Flysystem;

use InvalidArgumentException;
use League\Flysystem\Plugin\PluggableTrait;
use League\Flysystem\Plugin\PluginNotFoundException;

/**
 * Class MountManager.
 *
 * Proxies methods to Filesystem (@see __call):
 *
 * @method AdapterInterface getAdapter($prefix)
 * @method Config getConfig($prefix)
 * @method array listFiles($directory = '', $recursive = false)
 * @method array listPaths($directory = '', $recursive = false)
 * @method array getWithMetadata($path, array $metadata)
 * @method Filesystem flushCache()
 * @method void assertPresent($path)
 * @method void assertAbsent($path)
 * @method Filesystem addPlugin(PluginInterface $plugin)
 */
class MountManager implements FilesystemInterface
{
    use PluggableTrait;

    /**
     * @var FilesystemInterface[]
     */
    protected array $filesystems = [];

    /**
     * Constructor.
     *
     * @param FilesystemInterface[] $filesystems [:prefix => Filesystem,]
     *
     * @throws InvalidArgumentException
     */
    public function __construct(array $filesystems = [])
    {
        $this->mountFilesystems($filesystems);
    }

    /**
     * Mount filesystems.
     *
     * @param FilesystemInterface[] $filesystems [:prefix => Filesystem,]
     *
     * @return $this
     * @throws InvalidArgumentException
     *
     */
    public function mountFilesystems(array $filesystems): static
    {
        foreach ($filesystems as $prefix => $filesystem) {
            $this->mountFilesystem($prefix, $filesystem);
        }

        return $this;
    }

    /**
     * Mount filesystems.
     *
     * @param string $prefix
     * @param FilesystemInterface $filesystem
     *
     * @return $this
     * @throws InvalidArgumentException
     *
     */
    public function mountFilesystem(string $prefix, FilesystemInterface $filesystem): static
    {
        if (!is_string($prefix)) {
            throw new InvalidArgumentException(__METHOD__ . ' expects argument #1 to be a string.');
        }

        $this->filesystems[$prefix] = $filesystem;

        return $this;
    }

    /**
     * @param string $directory
     * @param bool $recursive
     *
     * @return array
     * @throws FilesystemNotFoundException
     *
     * @throws InvalidArgumentException
     */
    public function listContents($directory = '', $recursive = false): array
    {
        list($prefix, $directory) = $this->getPrefixAndPath($directory);
        $filesystem = $this->getFilesystem($prefix);
        $result = $filesystem->listContents($directory, $recursive);

        foreach ($result as &$file) {
            $file['filesystem'] = $prefix;
        }

        return $result;
    }

    /**
     * @param string $path
     *
     * @return string[] [:prefix, :path]
     * @throws InvalidArgumentException
     *
     */
    protected function getPrefixAndPath(string $path): array
    {
        if (strpos($path, '://') < 1) {
            throw new InvalidArgumentException('No prefix detected in path: ' . $path);
        }

        return explode('://', $path, 2);
    }

    /**
     * Get the filesystem with the corresponding prefix.
     *
     * @param string $prefix
     *
     * @return FilesystemInterface
     * @throws FilesystemNotFoundException
     *
     */
    public function getFilesystem(string $prefix): FilesystemInterface
    {
        if (!isset($this->filesystems[$prefix])) {
            throw new FilesystemNotFoundException('No filesystem mounted with prefix ' . $prefix);
        }

        return $this->filesystems[$prefix];
    }

    /**
     * Call forwarder.
     *
     * @param string $method
     * @param array $arguments
     *
     * @return mixed
     * @throws FilesystemNotFoundException
     *
     * @throws InvalidArgumentException
     */
    public function __call($method, array $arguments)
    {
        list($prefix, $arguments) = $this->filterPrefix($arguments);

        return $this->invokePluginOnFilesystem($method, $arguments, $prefix);
    }

    /**
     * Retrieve the prefix from an arguments array.
     *
     * @param array $arguments
     *
     * @return array [:prefix, :arguments]
     * @throws InvalidArgumentException
     *
     */
    public function filterPrefix(array $arguments): array
    {
        if (empty($arguments)) {
            throw new InvalidArgumentException('At least one argument needed');
        }

        $path = array_shift($arguments);

        if (!is_string($path)) {
            throw new InvalidArgumentException('First argument should be a string');
        }

        list($prefix, $path) = $this->getPrefixAndPath($path);
        array_unshift($arguments, $path);

        return [$prefix, $arguments];
    }

    /**
     * Invoke a plugin on a filesystem mounted on a given prefix.
     *
     * @param string $method
     * @param array $arguments
     * @param string $prefix
     *
     * @return mixed
     * @throws FilesystemNotFoundException
     *
     */
    public function invokePluginOnFilesystem(string $method, array $arguments, string $prefix): mixed
    {
        $filesystem = $this->getFilesystem($prefix);

        try {
            return $this->invokePlugin($method, $arguments, $filesystem);
        } catch (PluginNotFoundException $e) {
            // Let it pass, it's ok, don't panic.
        }

        $callback = [$filesystem, $method];

        return call_user_func_array($callback, $arguments);
    }

    /**
     * List with plugin adapter.
     *
     * @param array $keys
     * @param string $directory
     * @param bool $recursive
     *
     * @return array
     * @throws FilesystemNotFoundException
     *
     * @throws InvalidArgumentException
     */
    public function listWith(array $keys = [], string $directory = '', bool $recursive = false): array
    {
        list($prefix, $directory) = $this->getPrefixAndPath($directory);
        $arguments = [$keys, $directory, $recursive];

        return $this->invokePluginOnFilesystem('listWith', $arguments, $prefix);
    }

    /**
     * Move a file.
     *
     * @param string $from
     * @param string $to
     * @param array $config
     *
     * @return bool
     */
    public function move(string $from, string $to, array $config = []): bool
    {
        list($prefixFrom, $pathFrom) = $this->getPrefixAndPath($from);
        list($prefixTo, $pathTo) = $this->getPrefixAndPath($to);

        if ($prefixFrom === $prefixTo) {
            $filesystem = $this->getFilesystem($prefixFrom);
            try {
                $renamed = $filesystem->rename($pathFrom, $pathTo);
            } catch (FileExistsException $e) {
            } catch (FileNotFoundException $e) {
            }

            if ($renamed && isset($config['visibility'])) {
                try {
                    return $filesystem->setVisibility($pathTo, $config['visibility']);
                } catch (FileNotFoundException $e) {
                }
            }

            return $renamed;
        }

        try {
            $copied = $this->copy($from, $to, $config);
        } catch (FileExistsException $e) {
        } catch (FileNotFoundException $e) {
        }

        if ($copied) {
            try {
                return $this->delete($from);
            } catch (FileNotFoundException $e) {
            }
        }

        return false;
    }

    /**
     * Rename a file.
     *
     * @param string $path Path to the existing file.
     * @param string $newpath The new path of the file.
     *
     * @return bool True on success, false on failure.
     * @throws FileNotFoundException Thrown if $path does not exist.
     *
     * @throws FileExistsException   Thrown if $newpath exists.
     */
    public function rename($path, $newpath): bool
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->rename($path, $newpath);
    }

    /**
     * Set the visibility for a file.
     *
     * @param string $path The path to the file.
     * @param string $visibility One of 'public' or 'private'.
     *
     * @return bool True on success, false on failure.
     * @throws FileNotFoundException
     *
     */
    public function setVisibility($path, $visibility): bool
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->setVisibility($path, $visibility);
    }

    /**
     * @param string $from
     * @param string $to
     * @param array $config
     *
     * @return bool
     * @throws FileExistsException
     */
    public function copy($from, $to, array $config = []): bool
    {
        list($prefixFrom, $from) = $this->getPrefixAndPath($from);

        try {
            $buffer = $this->getFilesystem($prefixFrom)->readStream($from);
        } catch (FileNotFoundException $e) {
        }

        if ($buffer === false) {
            return false;
        }

        list($prefixTo, $to) = $this->getPrefixAndPath($to);

        $result = $this->getFilesystem($prefixTo)->writeStream($to, $buffer, $config);

        if (is_resource($buffer)) {
            fclose($buffer);
        }

        return $result;
    }

    /**
     * Retrieves a read-stream for a path.
     *
     * @param string $path The path to the file.
     *
     * @return resource|false The path resource or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function readStream($path): bool
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->readStream($path);
    }

    /**
     * Write a new file using a stream.
     *
     * @param string $path The path of the new file.
     * @param resource $resource The file handle.
     * @param array $config An optional configuration array.
     *
     * @return bool True on success, false on failure.
     * @throws FileExistsException
     *
     * @throws InvalidArgumentException If $resource is not a file handle.
     */
    public function writeStream($path, $resource, array $config = []): bool
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->writeStream($path, $resource, $config);
    }

    /**
     * Delete a file.
     *
     * @param string $path
     *
     * @return bool True on success, false on failure.
     * @throws FileNotFoundException
     *
     */
    public function delete($path): bool
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->delete($path);
    }

    /**
     * Check whether a file exists.
     *
     * @param string $path
     *
     * @return bool
     */
    public function has($path): bool
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->has($path);
    }

    /**
     * Read a file.
     *
     * @param string $path The path to the file.
     *
     * @return string|false The file contents or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function read($path): bool|string
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->read($path);
    }

    /**
     * Get a file's metadata.
     *
     * @param string $path The path to the file.
     *
     * @return array|false The file metadata or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function getMetadata($path): bool|array
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->getMetadata($path);
    }

    /**
     * Get a file's size.
     *
     * @param string $path The path to the file.
     *
     * @return int|false The file size or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function getSize($path): bool|int
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->getSize($path);
    }

    /**
     * Get a file's mime-type.
     *
     * @param string $path The path to the file.
     *
     * @return string|false The file mime-type or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function getMimetype($path): bool|string
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->getMimetype($path);
    }

    /**
     * Get a file's timestamp.
     *
     * @param string $path The path to the file.
     *
     * @return false|int The timestamp or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function getTimestamp($path): bool|int
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->getTimestamp($path);
    }

    /**
     * Get a file's visibility.
     *
     * @param string $path The path to the file.
     *
     * @return string|false The visibility (public|private) or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function getVisibility($path): bool|string
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->getVisibility($path);
    }

    /**
     * Write a new file.
     *
     * @param string $path The path of the new file.
     * @param string $contents The file contents.
     * @param array $config An optional configuration array.
     *
     * @return bool True on success, false on failure.
     * @throws FileExistsException
     *
     */
    public function write($path, $contents, array $config = []): bool
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->write($path, $contents, $config);
    }

    /**
     * Update an existing file.
     *
     * @param string $path The path of the existing file.
     * @param string $contents The file contents.
     * @param array $config An optional configuration array.
     *
     * @return bool True on success, false on failure.
     * @throws FileNotFoundException
     *
     */
    public function update($path, $contents, array $config = []): bool
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->update($path, $contents, $config);
    }

    /**
     * Update an existing file using a stream.
     *
     * @param string $path The path of the existing file.
     * @param resource $resource The file handle.
     * @param array $config An optional configuration array.
     *
     * @return bool True on success, false on failure.
     * @throws FileNotFoundException
     *
     * @throws InvalidArgumentException If $resource is not a file handle.
     */
    public function updateStream($path, $resource, array $config = []): bool
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->updateStream($path, $resource, $config);
    }

    /**
     * Delete a directory.
     *
     * @param string $dirname
     *
     * @return bool True on success, false on failure.
     * @throws RootViolationException Thrown if $dirname is empty.
     *
     */
    public function deleteDir($dirname): bool
    {
        list($prefix, $dirname) = $this->getPrefixAndPath($dirname);

        return $this->getFilesystem($prefix)->deleteDir($dirname);
    }

    /**
     * Create a directory.
     *
     * @param string $dirname The name of the new directory.
     * @param array $config An optional configuration array.
     *
     * @return bool True on success, false on failure.
     */
    public function createDir($dirname, array $config = []): bool
    {
        list($prefix, $dirname) = $this->getPrefixAndPath($dirname);

        return $this->getFilesystem($prefix)->createDir($dirname);
    }

    /**
     * Create a file or update if exists.
     *
     * @param string $path The path to the file.
     * @param string $contents The file contents.
     * @param array $config An optional configuration array.
     *
     * @return bool True on success, false on failure.
     */
    public function put($path, $contents, array $config = []): bool
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->put($path, $contents, $config);
    }

    /**
     * Create a file or update if exists.
     *
     * @param string $path The path to the file.
     * @param resource $resource The file handle.
     * @param array $config An optional configuration array.
     *
     * @return bool True on success, false on failure.
     * @throws InvalidArgumentException Thrown if $resource is not a resource.
     *
     */
    public function putStream($path, $resource, array $config = []): bool
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->putStream($path, $resource, $config);
    }

    /**
     * Read and delete a file.
     *
     * @param string $path The path to the file.
     *
     * @return string|false The file contents, or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function readAndDelete($path): bool|string
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->readAndDelete($path);
    }

    /**
     * Get a file/directory handler.
     *
     * @param string $path The path to the file.
     * @param Handler|null $handler An optional existing handler to populate.
     *
     * @return Handler Either a file or directory handler.
     * @deprecated
     *
     */
    public function get($path, Handler $handler = null): Handler
    {
        list($prefix, $path) = $this->getPrefixAndPath($path);

        return $this->getFilesystem($prefix)->get($path);
    }
}
