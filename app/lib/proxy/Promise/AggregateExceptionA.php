<?php namespace yxorP\app\lib\proxy\Promise;
class aggregateExceptionA extends aRejectionException
{
    public function __construct($msg, array $reasons)
    {
        parent::__construct($reasons, sprintf('%s; %d rejected promises', $msg, count($reasons)));
    }
}
