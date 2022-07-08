<?php namespace yxorP\proxy\Psr7;

use RuntimeException;
use yxorP\psr\Http\Message\StreamInterface;

class NoSeekStream implements StreamInterface
{
    use AStreamDecoratorTrait;

    public function seek($offset, $whence = SEEK_SET): mixed
    {
        throw new RuntimeException('Cannot seek a NoSeekStream');
    }

    public function isSeekable(): bool
    {
        return false;
    }
}