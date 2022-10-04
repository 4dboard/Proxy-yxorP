<?php namespace yxorP\app\lib\proxy\exception;

use RuntimeException;
use yxorP\app\lib\psr\http\message\streamInterface;

class seekException extends RuntimeException implements proxyExceptionInterface
{
    private $stream;

    public function __construct(streamInterface $stream, $pos = 0, $msg = '')
    {
        $this->stream = $stream;
        $msg = $msg ?: 'Could not seek the stream to position ' . $pos;
        parent::__construct($msg);
    }

    public function getStream()
    {
        return $this->stream;
    }
}
