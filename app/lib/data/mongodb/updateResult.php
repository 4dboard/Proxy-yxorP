<?php namespace yxorP\app\lib\psr\http\mongoDB;

use yxorP\app\lib\http\mongoDB\Driver\WriteResult;
use yxorP\app\lib\http\mongoDB\Exception\BadMethodCallException;

class updateResult
{
    private $writeResult;
    private $isAcknowledged;

    public function __construct(WriteResult $writeResult)
    {
        $this->writeResult = $writeResult;
        $this->isAcknowledged = $writeResult->isAcknowledged();
    }

    public function getMatchedCount()
    {
        if ($this->isAcknowledged) {
            return $this->writeResult->getMatchedCount();
        }
        throw BadMethodCallException::unacknowledgedWriteResultAccess(__METHOD__);
    }

    public function getModifiedCount()
    {
        if ($this->isAcknowledged) {
            return $this->writeResult->getModifiedCount();
        }
        throw BadMethodCallException::unacknowledgedWriteResultAccess(__METHOD__);
    }

    public function getUpsertedCount()
    {
        if ($this->isAcknowledged) {
            return $this->writeResult->getUpsertedCount();
        }
        throw BadMethodCallException::unacknowledgedWriteResultAccess(__METHOD__);
    }

    public function getUpsertedId()
    {
        if ($this->isAcknowledged) {
            foreach ($this->writeResult->getUpsertedIds() as $id) {
                return $id;
            }
            return null;
        }
        throw BadMethodCallException::unacknowledgedWriteResultAccess(__METHOD__);
    }

    public function isAcknowledged()
    {
        return $this->isAcknowledged;
    }
}
