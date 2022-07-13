<?php

namespace League\Flysystem;

/**
 * @deprecated
 */
class File extends Handler
{
    /**
     * Check whether the file exists.
     *
     * @return bool
     */
    public function exists(): bool
    {
        return $this->filesystem->has($this->path);
    }

    /**
     * Read the file.
     *
     * @return string|false file contents
     */
    public function read(): bool|string
    {
        try {
            return $this->filesystem->read($this->path);
        } catch (FileNotFoundException $e) {
        }
    }

    /**
     * Read the file as a stream.
     *
     * @return resource|false file stream
     */
    public function readStream(): bool
    {
        try {
            return $this->filesystem->readStream($this->path);
        } catch (FileNotFoundException $e) {
        }
    }

    /**
     * Write the new file.
     *
     * @param string $content
     *
     * @return bool success boolean
     */
    public function write(string $content): bool
    {
        try {
            return $this->filesystem->write($this->path, $content);
        } catch (FileExistsException $e) {
        }
    }

    /**
     * Write the new file using a stream.
     *
     * @param resource $resource
     *
     * @return bool success boolean
     */
    public function writeStream($resource): bool
    {
        try {
            return $this->filesystem->writeStream($this->path, $resource);
        } catch (FileExistsException $e) {
        }
    }

    /**
     * Update the file contents.
     *
     * @param string $content
     *
     * @return bool success boolean
     */
    public function update(string $content): bool
    {
        try {
            return $this->filesystem->update($this->path, $content);
        } catch (FileNotFoundException $e) {
        }
    }

    /**
     * Update the file contents with a stream.
     *
     * @param resource $resource
     *
     * @return bool success boolean
     */
    public function updateStream($resource): bool
    {
        try {
            return $this->filesystem->updateStream($this->path, $resource);
        } catch (FileNotFoundException $e) {
        }
    }

    /**
     * Create the file or update if exists.
     *
     * @param string $content
     *
     * @return bool success boolean
     */
    public function put(string $content): bool
    {
        return $this->filesystem->put($this->path, $content);
    }

    /**
     * Create the file or update if exists using a stream.
     *
     * @param resource $resource
     *
     * @return bool success boolean
     */
    public function putStream($resource): bool
    {
        return $this->filesystem->putStream($this->path, $resource);
    }

    /**
     * Rename the file.
     *
     * @param string $newpath
     *
     * @return bool success boolean
     */
    public function rename(string $newpath): bool
    {
        try {
            if ($this->filesystem->rename($this->path, $newpath)) {
                $this->path = $newpath;

                return true;
            }
        } catch (FileExistsException $e) {
        } catch (FileNotFoundException $e) {
        }

        return false;
    }

    /**
     * Copy the file.
     *
     * @param string $newpath
     *
     * @return File|false new file or false
     */
    public function copy(string $newpath): File|bool
    {
        try {
            if ($this->filesystem->copy($this->path, $newpath)) {
                return new File($this->filesystem, $newpath);
            }
        } catch (FileExistsException $e) {
        } catch (FileNotFoundException $e) {
        }

        return false;
    }

    /**
     * Get the file's timestamp.
     *
     * @return string|false The timestamp or false on failure.
     */
    public function getTimestamp(): bool|string
    {
        try {
            return $this->filesystem->getTimestamp($this->path);
        } catch (FileNotFoundException $e) {
        }
    }

    /**
     * Get the file's mimetype.
     *
     * @return string|false The file mime-type or false on failure.
     */
    public function getMimetype(): bool|string
    {
        try {
            return $this->filesystem->getMimetype($this->path);
        } catch (FileNotFoundException $e) {
        }
    }

    /**
     * Get the file's visibility.
     *
     * @return string|false The visibility (public|private) or false on failure.
     */
    public function getVisibility(): bool|string
    {
        try {
            return $this->filesystem->getVisibility($this->path);
        } catch (FileNotFoundException $e) {
        }
    }

    /**
     * Get the file's metadata.
     *
     * @return array|false The file metadata or false on failure.
     */
    public function getMetadata(): bool|array
    {
        try {
            return $this->filesystem->getMetadata($this->path);
        } catch (FileNotFoundException $e) {
        }
    }

    /**
     * Get the file size.
     *
     * @return int|false The file size or false on failure.
     */
    public function getSize(): ?int
    {
        try {
            return $this->filesystem->getSize($this->path);
        } catch (FileNotFoundException $e) {
        }
    }

    /**
     * Delete the file.
     *
     * @return bool success boolean
     */
    public function delete(): bool
    {
        try {
            return $this->filesystem->delete($this->path);
        } catch (FileNotFoundException $e) {
        }
    }
}
