<?php namespace yxorP\guzzle\Promise;
class AggregateException extends RejectionException
{
    public function __construct($msg, array $reasons)
    {
        parent::__construct($reasons, sprintf('%s; %d rejected promises', $msg, count($reasons)));
    }
}