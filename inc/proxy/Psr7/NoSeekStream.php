<?php

namespace yxorP\inc\proxy\Psr7;

use yxorP\inc\psr\Http\Message\StreamInterface;
use RuntimeException;

/**
 * Stream decorator that prevents a stream from being seeked
 */
class NoSeekStream implements StreamInterface
{
    use AAAStreamDecoratorTrait;

    public function seek($offset, $whence = SEEK_SET)
    {
        throw new RuntimeException('Cannot seek a NoSeekStream');
    }

    public function isSeekable()
    {
        return false;
    }
}
