<?php namespace yxorP\app\lib\proxy\psr7;

use yxorP\app\lib\psr\http\message\streamInterface;

class lazyOpenStream implements streamInterface
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
