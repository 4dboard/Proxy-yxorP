<?php namespace yxorP\app\lib\proxy\psr7;

use yxorP\app\lib\Psr\Http\Message\StreamInterface;

class lazyOpenStream implements StreamInterface
{
    use aStreamDecoratorTrait;

    private $filename;
    private $mode;

    public function __construct($filename, $mode)
    {
        $this->filename = $filename;
        $this->mode = $mode;
    }

    protected function createStream()
    {
        return stream_for(try_fopen($this->filename, $this->mode));
    }
}
