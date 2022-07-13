<?php

namespace yxorP\inc\proxy\Exception;

use JetBrains\PhpStorm\Pure;
use RuntimeException;
use yxorP\inc\psr\Http\Message\StreamInterface;

/**
 * Exception thrown when a seek fails on a stream.
 */
class SeekException extends RuntimeException implements proxyException
{
    private StreamInterface $stream;

    #[Pure] public function __construct(StreamInterface $stream, $pos = 0, $msg = '')
    {
        $this->stream = $stream;
        $msg = $msg ?: 'Could not seek the stream to position ' . $pos;
        parent::__construct($msg);
    }

    /**
     * @return StreamInterface
     */
    public function getStream(): StreamInterface
    {
        return $this->stream;
    }
}
