<?php namespace yxorP\app\lib\psr\http\mongoDB;

use IteratorAggregate;
use stdClass;
use function call_user_func;

class mapReduceResult implements IteratorAggregate
{
    private $getIterator;
    private $executionTimeMS;
    private $counts;
    private $timing;

    public function __construct(callable $getIterator, stdClass $result)
    {
        $this->getIterator = $getIterator;
        $this->executionTimeMS = isset($result->timeMillis) ? (integer)$result->timeMillis : 0;
        $this->counts = isset($result->counts) ? (array)$result->counts : [];
        $this->timing = isset($result->timing) ? (array)$result->timing : [];
    }

    public function getCounts()
    {
        return $this->counts;
    }

    public function getExecutionTimeMS()
    {
        return (integer)$this->executionTimeMS;
    }

    #[ReturnTypeWillChange] public function getIterator()
    {
        return call_user_func($this->getIterator);
    }

    public function getTiming()
    {
        return $this->timing;
    }
}
