<?php

namespace League\Flysystem\Adapter\Polyfill;

use League\Flysystem\Config;
use League\Flysystem\Util;

trait StreamedWritingTrait
{
    /**
     * Write using a stream.
     *
     * @param string $path
     * @param resource $resource
     * @param Config $config
     *
     * @return mixed false or file metadata
     */
    public function writeStream($path, $resource, Config $config): mixed
    {
        return $this->stream($path, $resource, $config, 'write');
    }

    /**
     * Stream fallback delegator.
     *
     * @param string $path
     * @param resource $resource
     * @param Config $config
     * @param string $fallback
     *
     * @return mixed fallback result
     */
    protected function stream($path, $resource, Config $config, $fallback): mixed
    {
        Util::rewindStream($resource);
        $contents = stream_get_contents($resource);
        $fallbackCall = [$this, $fallback];

        return call_user_func($fallbackCall, $path, $contents, $config);
    }

    /**
     * Update a file using a stream.
     *
     * @param string $path
     * @param resource $resource
     * @param Config $config Config object or visibility setting
     *
     * @return mixed false of file metadata
     */
    public function updateStream($path, $resource, Config $config): mixed
    {
        return $this->stream($path, $resource, $config, 'update');
    }

    // Required abstract methods
    abstract public function write($pash, $contents, Config $config);

    abstract public function update($pash, $contents, Config $config);
}
