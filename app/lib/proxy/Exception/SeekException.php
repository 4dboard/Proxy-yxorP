<?php namespace yxorP\app\lib\proxy\Exception;

use RuntimeException;
use yxorP\app\lib\Psr\Http\Message\StreamInterface;

class seekException extends RuntimeException implements ProxyException
{
    private $stream;

    public function __construct(StreamInterface $stream, $pos = 0, $msg = '')
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
