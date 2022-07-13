<?php

namespace League\Flysystem\Plugin;

use InvalidArgumentException;

class ListWith extends AbstractPlugin
{
    /**
     * Get the method name.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return 'listWith';
    }

    /**
     * List contents with metadata.
     *
     * @param string[] $keys
     * @param string $directory
     * @param bool $recursive
     *
     * @return array listing with metadata
     */
    public function handle(array $keys = [], string $directory = '', bool $recursive = false): array
    {
        $contents = $this->filesystem->listContents($directory, $recursive);

        foreach ($contents as $index => $object) {
            if ($object['type'] === 'file') {
                $missingKeys = array_diff($keys, array_keys($object));
                $contents[$index] = array_reduce($missingKeys, [$this, 'getMetadataByName'], $object);
            }
        }

        return $contents;
    }

    /**
     * Get a meta-data value by key name.
     *
     * @param array $object
     * @param string $key
     *
     * @return array
     */
    protected function getMetadataByName(array $object, string $key): array
    {
        $method = 'get' . ucfirst($key);

        if (!method_exists($this->filesystem, $method)) {
            throw new InvalidArgumentException('Could not get meta-data for key: ' . $key);
        }

        $object[$key] = $this->filesystem->{$method}($object['path']);

        return $object;
    }
}
