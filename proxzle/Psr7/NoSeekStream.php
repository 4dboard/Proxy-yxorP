<?php namespace yxorP\guzzle\Psr7;

use RuntimeException;
use yxorP\psr\Http\Message\StreamInterface;

class NoSeekStream implements StreamInterface
{
    use StreamDecoratorTrait;

    public function seek($offset, $whence = SEEK_SET)
    {
        throw new RuntimeException('Cannot seek a NoSeekStream');
    }

    public function isSeekable(): bool
    {
        return false;
    }
}