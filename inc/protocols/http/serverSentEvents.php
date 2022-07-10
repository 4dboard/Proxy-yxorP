<?php namespace yxorP\inc\protocols\http;

use function str_replace;

/* A class that is used to create a server-sent event. */

class serverSentEvents
{
    private ?array $_data = null;

    /* Creating a new instance of the class. */
    public function __construct(array $data)
    {
        $this->_data = $data;
    }

    /* A magic method that is called when the object is used as a string. */
    public function __toString()
    {
        $buffer = '';
        $data = $this->_data;
        if (isset($data[''])) $buffer = ": {$data['']}\n";
        if (isset($data['event'])) $buffer .= "event: {$data['event']}\n";
        if (isset($data['data'])) $buffer .= 'data: ' . str_replace("\n", "\ndata: ", $data['data']) . "\n\n";
        if (isset($data['id'])) $buffer .= "id: {$data['id']}\n";
        if (isset($data['retry'])) $buffer .= "retry: {$data['retry']}\n";
        return $buffer;
    }
}