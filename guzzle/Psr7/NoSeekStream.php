<?php namespace yxorP\guzzle\Psr7;

use Psr\Http\Message\StreamInterface;
use RuntimeException;

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