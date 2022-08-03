<?php namespace yxorP\app\lib\data\mongoDB;

use IteratorAggregate;
use ReturnTypeWillChange;
use stdClass;
use function call_user_func;

class mapReduceResult implements IteratorAggregate
{
    private $getIterator;
    private int $executionTimeMS;
    private array $counts;
    private array $timing;

    public function __construct(callable $getIterator, stdClass $result)
    {
        $this->getIterator = $getIterator;
        $this->executionTimeMS = isset($result->timeMillis) ? (integer)$result->timeMillis : 0;
        $this->counts = isset($result->counts) ? (array)$result->counts : [];
        $this->timing = isset($result->timing) ? (array)$result->timing : [];
    }

    public function getCounts(): array
    {
        return $this->counts;
    }

    public function getExecutionTimeMS(): int
    {
        return $this->executionTimeMS;
    }

    #[ReturnTypeWillChange] public function getIterator()
    {
        return call_user_func($this->getIterator);
    }

    public function getTiming(): array
    {
        return $this->timing;
    }
}
