<?php namespace yxorP\app\lib\proxy\psr7;

use RuntimeException;
use yxorP\app\lib\psr\http\message\streamInterface;

class noSeekStream implements streamInterface
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
