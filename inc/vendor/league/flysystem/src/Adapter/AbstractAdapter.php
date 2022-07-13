<?php

namespace League\Flysystem\Adapter;

use JetBrains\PhpStorm\Pure;
use League\Flysystem\AdapterInterface;

abstract class AbstractAdapter implements AdapterInterface
{
    /**
     * @var string|null path prefix
     */
    protected ?string $pathPrefix;

    /**
     * @var string
     */
    protected $pathSeparator = '/';

    /**
     * Prefix a path.
     *
     * @param string $path
     *
     * @return string prefixed path
     */
    #[Pure] public function applyPathPrefix(string $path): string
    {
        return $this->getPathPrefix() . ltrim($path, '\\/');
    }

    /**
     * Get the path prefix.
     *
     * @return string|null path prefix or null if pathPrefix is empty
     */
    public function getPathPrefix(): ?string
    {
        return $this->pathPrefix;
    }

    /**
     * Set the path prefix.
     *
     * @param string $prefix
     *
     * @return void
     */
    public function setPathPrefix(string $prefix)
    {
        $prefix = (string)$prefix;

        if ($prefix === '') {
            $this->pathPrefix = null;

            return;
        }

        $this->pathPrefix = rtrim($prefix, '\\/') . $this->pathSeparator;
    }

    /**
     * Remove a path prefix.
     *
     * @param string $path
     *
     * @return string path without the prefix
     */
    #[Pure] public function removePathPrefix(string $path): string
    {
        return substr($path, strlen((string)$this->getPathPrefix()));
    }
}
