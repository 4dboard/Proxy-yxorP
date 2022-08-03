<?php namespace yxorP\app\lib\data\mongoDB;

use yxorP\app\lib\http\mongoDB\Driver\WriteResult;
use yxorP\app\lib\http\mongoDB\Exception\BadMethodCallException;

class insertManyResult
{
    private WriteResult $writeResult;
    private array $insertedIds;
    private $isAcknowledged;

    public function __construct(WriteResult $writeResult, array $insertedIds)
    {
        $this->writeResult = $writeResult;
        $this->insertedIds = $insertedIds;
        $this->isAcknowledged = $writeResult->isAcknowledged();
    }

    public function getInsertedCount()
    {
        if ($this->isAcknowledged) {
            return $this->writeResult->getInsertedCount();
        }
        throw BadMethodCallException::unacknowledgedWriteResultAccess(__METHOD__);
    }

    public function getInsertedIds(): array
    {
        return $this->insertedIds;
    }

    public function isAcknowledged()
    {
        return $this->writeResult->isAcknowledged();
    }
}
