<?php namespace yxorP\proxzle\Psr7;

use yxorP\psr\Http\Message\StreamInterface;

class LazyOpenStream implements StreamInterface
{
    use StreamDecoratorTrait;

    private $filename;
    private $mode;

    public function __construct($filename, $mode)
    {
        $this->filename = $filename;
        $this->mode = $mode;
    }

    protected function createStream(): PumpStream|Stream|StreamInterface
    {
        return stream_for(try_fopen($this->filename, $this->mode));
    }
}