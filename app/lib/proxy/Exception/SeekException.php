<?php namespace yxorP\app\lib\proxy\exception;

use JetBrains\PhpStorm\Pure;
use RuntimeException;
use yxorP\app\lib\psr\http\message\streamInterface;

class seekException extends RuntimeException implements proxyException
{
    private streamInterface $stream;

    #[Pure] public function __construct(streamInterface $stream, $pos = 0, $msg = '')
    {
        $this->stream = $stream;
        $msg = $msg ?: 'Could not seek the stream to position ' . $pos;
        parent::__construct($msg);
    }

    public function getStream(): streamInterface
    {
        return $this->stream;
    }
}
