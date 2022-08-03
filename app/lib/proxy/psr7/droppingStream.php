<?php namespace yxorP\app\lib\proxy\psr7;

use yxorP\app\lib\psr\http\message\streamInterface;

class droppingStream implements streamInterface
{
    use aStreamDecoratorTrait;

    private $maxLength;

    public function __construct(streamInterface $stream, $maxLength)
    {
        $this->stream = $stream;
        $this->maxLength = $maxLength;
    }

    public function write(string $string): int
    {
        $diff = $this->maxLength - $this->stream->getSize();
        if ($diff <= 0) {
            return 0;
        }
        if (strlen($string) < $diff) {
            return $this->stream->write($string);
        }
        return $this->stream->write(substr($string, 0, $diff));
    }
}
