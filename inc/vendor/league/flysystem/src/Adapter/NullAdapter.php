<?php

namespace League\Flysystem\Adapter;

use JetBrains\PhpStorm\ArrayShape;
use League\Flysystem\Adapter\Polyfill\StreamedCopyTrait;
use League\Flysystem\Adapter\Polyfill\StreamedTrait;
use League\Flysystem\Config;

class NullAdapter extends AbstractAdapter
{
    use StreamedTrait;
    use StreamedCopyTrait;

    /**
     * Check whether a file is present.
     *
     * @param string $path
     *
     * @return bool
     */
    public function has($path): bool
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function write($path, $contents, Config $config): array
    {
        $type = 'file';
        $result = compact('contents', 'type', 'path');

        if ($visibility = $config->get('visibility')) {
            $result['visibility'] = $visibility;
        }

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function update($path, $contents, Config $config): bool|array
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function read($path): bool
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function rename($path, $newpath): bool
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function delete($path): bool
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function listContents($directory = '', $recursive = false): array
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function getMetadata($path): bool|array
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function getSize($path): bool
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function getMimetype($path): bool|array
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function getTimestamp($path): bool|array
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function getVisibility($path): bool
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function setVisibility($path, $visibility): bool|array
    {
        return compact('visibility');
    }

    /**
     * @inheritdoc
     */
    #[ArrayShape(['path' => "", 'type' => "string"])] public function createDir($dirname, Config $config): bool|array
    {
        return ['path' => $dirname, 'type' => 'dir'];
    }

    /**
     * @inheritdoc
     */
    public function deleteDir($dirname): bool
    {
        return false;
    }
}
