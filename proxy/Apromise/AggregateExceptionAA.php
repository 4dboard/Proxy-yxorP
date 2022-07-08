<?php namespace yxorP\proxyApromise;
class AggregateExceptionAA extends AARejectionException
{
    public function __construct($msg, array $reasons)
    {
        parent::__construct($reasons, sprintf('%s; %d rejected promises', $msg, count($reasons)));
    }
}