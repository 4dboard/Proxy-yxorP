<?php

namespace League\Flysystem\Plugin;

use League\Flysystem\FileExistsException;
use League\Flysystem\FileNotFoundException;

class ForcedRename extends AbstractPlugin
{
    /**
     * @inheritdoc
     */
    public function getMethod(): string
    {
        return 'forceRename';
    }

    /**
     * Renames a file, overwriting the destination if it exists.
     *
     * @param string $path Path to the existing file.
     * @param string $newpath The new path of the file.
     *
     * @return bool True on success, false on failure.
     * @throws FileExistsException
     *
     * @throws FileNotFoundException Thrown if $path does not exist.
     */
    public function handle(string $path, string $newpath): bool
    {
        try {
            $deleted = $this->filesystem->delete($newpath);
        } catch (FileNotFoundException $e) {
            // The destination path does not exist. That's ok.
            $deleted = true;
        }

        if ($deleted) {
            return $this->filesystem->rename($path, $newpath);
        }

        return false;
    }
}
