<?php namespace yxorP\protocols\Http;

use function dechex;
use function strlen;

class chunk
{
    private $_buffer = null;

    public function __construct($buffer)
    {
        $this->_buffer = $buffer;
    }

    public function __toString()
    {
        return dechex(strlen($this->_buffer)) . "\r\n$this->_buffer\r\n";
    }
}