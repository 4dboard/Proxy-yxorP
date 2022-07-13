<?php

namespace League\Flysystem\Util;

class StreamHasher
{
    /**
     * @var string
     */
    private string $algo;

    /**
     * StreamHasher constructor.
     *
     * @param string $algo
     */
    public function __construct(string $algo)
    {
        $this->algo = $algo;
    }

    /**
     * @param resource $resource
     *
     * @return string
     */
    public function hash($resource): string
    {
        rewind($resource);
        $context = hash_init($this->algo);
        hash_update_stream($context, $resource);
        fclose($resource);

        return hash_final($context);
    }
}
