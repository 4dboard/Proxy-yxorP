<?php namespace yxorP\guzzle\Exception;

use JetBrains\PhpStorm\Pure;
use yxorP\psr\Http\Message\StreamInterface;
use RuntimeException;

class SeekException extends RuntimeException implements GuzzleException
{
    private StreamInterface $stream;

    #[Pure] public function __construct(StreamInterface $stream, $pos = 0, $msg = '')
    {
        $this->stream = $stream;
        $msg = $msg ?: 'Could not seek the stream to position ' . $pos;
        parent::__construct($msg);
    }

    public function getStream(): StreamInterface
    {
        return $this->stream;
    }
}