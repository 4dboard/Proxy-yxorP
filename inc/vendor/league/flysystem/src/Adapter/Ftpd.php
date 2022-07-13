<?php

namespace League\Flysystem\Adapter;

class Ftpd extends Ftp
{
    /**
     * @inheritdoc
     */
    public function getMetadata($path): array|bool
    {
        if ($path === '') {
            return ['type' => 'dir', 'path' => ''];
        }

        if (@ftp_chdir($this->getConnection(), $path) === true) {
            $this->setConnectionRoot();

            return ['type' => 'dir', 'path' => $path];
        }

        $object = ftp_raw($this->getConnection(), 'STAT ' . $this->escapePath($path));

        if (!$object || count($object) < 3) {
            return false;
        }

        if (str_starts_with($object[1], "ftpd:")) {
            return false;
        }

        return $this->normalizeObject($object[1], '');
    }

    /**
     * @inheritdoc
     */
    protected function listDirectoryContents($directory, $recursive = true): array
    {
        $listing = ftp_rawlist($this->getConnection(), $this->escapePath($directory), $recursive);

        if ($listing === false || (!empty($listing) && str_starts_with($listing[0], "ftpd:"))) {
            return [];
        }

        return $this->normalizeListing($listing, $directory);
    }
}
