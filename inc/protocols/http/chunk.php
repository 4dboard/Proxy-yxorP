<?php namespace yxorP\inc\protocols\http;

use function dechex;
use function strlen;

/* A class that is used to create a chunked HTTP response. */

class chunk
{
    private $_buffer = null;

    /* A constructor. */
    public function __construct($buffer)
    {
        $this->_buffer = $buffer;
    }

    /* A magic method that is called when the object is used as a string. */
    public function __toString()
    {
        return dechex(strlen($this->_buffer)) . "\r\n$this->_buffer\r\n";
    }
}