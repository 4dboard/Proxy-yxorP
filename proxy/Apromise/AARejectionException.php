<?php namespace yxorP\proxy\Promise;

use JsonSerializable;
use RuntimeException;

class AARejectionException extends RuntimeException
{
    private mixed $reason;

    public function __construct($reason, $description = null)
    {
        $this->reason = $reason;
        $message = 'The promise was rejected';
        if ($description) {
            $message .= ' with reason: ' . $description;
        } elseif (is_string($reason) || (is_object($reason) && method_exists($reason, '__toString'))) {
            $message .= ' with reason: ' . $this->reason;
        } elseif ($reason instanceof JsonSerializable) {
            $message .= ' with reason: ' . json_encode($this->reason, JSON_PRETTY_PRINT);
        }
        parent::__construct($message);
    }

    public function getReason()
    {
        return $this->reason;
    }
}