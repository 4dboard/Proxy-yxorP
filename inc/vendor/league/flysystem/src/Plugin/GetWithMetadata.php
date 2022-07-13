<?php

namespace League\Flysystem\Plugin;

use InvalidArgumentException;
use League\Flysystem\FileNotFoundException;

class GetWithMetadata extends AbstractPlugin
{
    /**
     * Get the method name.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return 'getWithMetadata';
    }

    /**
     * Get metadata for an object with required metadata.
     *
     * @param string $path path to file
     * @param string[] $metadata metadata keys
     *
     * @return array|false metadata
     * @throws FileNotFoundException
     *
     * @throws InvalidArgumentException
     */
    public function handle(string $path, array $metadata): bool|array
    {
        $object = $this->filesystem->getMetadata($path);

        if (!$object) {
            return false;
        }

        $keys = array_diff($metadata, array_keys($object));

        foreach ($keys as $key) {
            if (!method_exists($this->filesystem, $method = 'get' . ucfirst($key))) {
                throw new InvalidArgumentException('Could not fetch metadata: ' . $key);
            }

            $object[$key] = $this->filesystem->{$method}($path);
        }

        return $object;
    }
}
