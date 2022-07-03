<?php namespace yxorP\protocols\Http;

use function str_replace;

class serverSentEvents
{
    private ?array $_data = null;

    public function __construct(array $data)
    {
        $this->_data = $data;
    }

    public function __toString()
    {
        $buffer = '';
        $data = $this->_data;
        if (isset($data[''])) {
            $buffer = ": {$data['']}\n";
        }
        if (isset($data['event'])) {
            $buffer .= "event: {$data['event']}\n";
        }
        if (isset($data['data'])) {
            $buffer .= 'data: ' . str_replace("\n", "\ndata: ", $data['data']) . "\n\n";
        }
        if (isset($data['id'])) {
            $buffer .= "id: {$data['id']}\n";
        }
        if (isset($data['retry'])) {
            $buffer .= "retry: {$data['retry']}\n";
        }
        return $buffer;
    }
}