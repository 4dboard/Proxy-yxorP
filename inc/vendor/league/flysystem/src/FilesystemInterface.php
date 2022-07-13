<?php

namespace League\Flysystem;

use InvalidArgumentException;

interface FilesystemInterface
{
    /**
     * Check whether a file exists.
     *
     * @param string $path
     *
     * @return bool
     */
    public function has($path): bool;

    /**
     * Read a file.
     *
     * @param string $path The path to the file.
     *
     * @return string|false The file contents or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function read($path): bool|string;

    /**
     * Retrieves a read-stream for a path.
     *
     * @param string $path The path to the file.
     *
     * @return resource|false The path resource or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function readStream($path): bool;

    /**
     * List contents of a directory.
     *
     * @param string $directory The directory to list.
     * @param bool $recursive Whether to list recursively.
     *
     * @return array A list of file metadata.
     */
    public function listContents($directory = '', $recursive = false): array;

    /**
     * Get a file's metadata.
     *
     * @param string $path The path to the file.
     *
     * @return array|false The file metadata or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function getMetadata($path): bool|array;

    /**
     * Get a file's size.
     *
     * @param string $path The path to the file.
     *
     * @return int|false The file size or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function getSize($path): bool|int;

    /**
     * Get a file's mime-type.
     *
     * @param string $path The path to the file.
     *
     * @return string|false The file mime-type or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function getMimetype($path): bool|string;

    /**
     * Get a file's timestamp.
     *
     * @param string $path The path to the file.
     *
     * @return int|false The timestamp or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function getTimestamp($path): bool|int;

    /**
     * Get a file's visibility.
     *
     * @param string $path The path to the file.
     *
     * @return string|false The visibility (public|private) or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function getVisibility($path): bool|string;

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
    public function write($path, $contents, array $config = []): bool;

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
    public function writeStream($path, $resource, array $config = []): bool;

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
    public function update($path, $contents, array $config = []): bool;

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
    public function updateStream($path, $resource, array $config = []): bool;

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
    public function rename($path, $newpath): bool;

    /**
     * Copy a file.
     *
     * @param string $path Path to the existing file.
     * @param string $newpath The new path of the file.
     *
     * @return bool True on success, false on failure.
     * @throws FileNotFoundException Thrown if $path does not exist.
     *
     * @throws FileExistsException   Thrown if $newpath exists.
     */
    public function copy($path, $newpath): bool;

    /**
     * Delete a file.
     *
     * @param string $path
     *
     * @return bool True on success, false on failure.
     * @throws FileNotFoundException
     *
     */
    public function delete($path): bool;

    /**
     * Delete a directory.
     *
     * @param string $dirname
     *
     * @return bool True on success, false on failure.
     * @throws RootViolationException Thrown if $dirname is empty.
     *
     */
    public function deleteDir($dirname): bool;

    /**
     * Create a directory.
     *
     * @param string $dirname The name of the new directory.
     * @param array $config An optional configuration array.
     *
     * @return bool True on success, false on failure.
     */
    public function createDir($dirname, array $config = []): bool;

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
    public function setVisibility($path, $visibility): bool;

    /**
     * Create a file or update if exists.
     *
     * @param string $path The path to the file.
     * @param string $contents The file contents.
     * @param array $config An optional configuration array.
     *
     * @return bool True on success, false on failure.
     */
    public function put($path, $contents, array $config = []): bool;

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
    public function putStream($path, $resource, array $config = []): bool;

    /**
     * Read and delete a file.
     *
     * @param string $path The path to the file.
     *
     * @return string|false The file contents, or false on failure.
     * @throws FileNotFoundException
     *
     */
    public function readAndDelete($path): bool|string;

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
    public function get($path, Handler $handler = null): Handler;

    /**
     * Register a plugin.
     *
     * @param PluginInterface $plugin The plugin to register.
     *
     * @return $this
     */
    public function addPlugin(PluginInterface $plugin): static;
}
