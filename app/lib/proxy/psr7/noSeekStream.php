<?php namespace yxorP\app\lib\proxy\psr7;

use RuntimeException;
use yxorP\app\lib\Psr\Http\Message\StreamInterface;

class noSeekStream implements StreamInterface
{
    use aStreamDecoratorTrait;

    public function seek($offset, $whence = SEEK_SET)
    {
        throw new RuntimeException('Cannot seek a NoSeekStream');
    }

    public function isSeekable()
    {
        return false;
    }
}
