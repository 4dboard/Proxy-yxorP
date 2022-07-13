<?php

namespace League\Flysystem;

/**
 * @deprecated
 */
class Directory extends Handler
{
    /**
     * Delete the directory.
     *
     * @return bool
     */
    public function delete(): bool
    {
        return $this->filesystem->deleteDir($this->path);
    }

    /**
     * List the directory contents.
     *
     * @param bool $recursive
     *
     * @return array directory contents or false
     */
    public function getContents(bool $recursive = false): array
    {
        return $this->filesystem->listContents($this->path, $recursive);
    }
}
