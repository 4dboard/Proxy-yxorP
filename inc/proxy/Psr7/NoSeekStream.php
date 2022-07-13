<?php

namespace yxorP\inc\proxy\Psr7;

use RuntimeException;
use yxorP\inc\psr\Http\Message\StreamInterface;

/**
 * Stream decorator that prevents a stream from being seeked
 */
class NoSeekStream implements StreamInterface
{
    use AAAStreamDecoratorTrait;

    public function seek(int $offset, int $whence = SEEK_SET)
    {
        throw new RuntimeException('Cannot seek a NoSeekStream');
    }

    public function isSeekable(): bool
    {
        return false;
    }
}
