<?php namespace yxorP\app\lib\psr\http\mongoDB;

use yxorP\app\lib\http\mongoDB\Driver\WriteResult;
use yxorP\app\lib\http\mongoDB\Exception\BadMethodCallException;

class deleteResult
{
    private $writeResult;
    private $isAcknowledged;

    public function __construct(WriteResult $writeResult)
    {
        $this->writeResult = $writeResult;
        $this->isAcknowledged = $writeResult->isAcknowledged();
    }

    public function getDeletedCount()
    {
        if ($this->isAcknowledged) {
            return $this->writeResult->getDeletedCount();
        }
        throw BadMethodCallException::unacknowledgedWriteResultAccess(__METHOD__);
    }

    public function isAcknowledged()
    {
        return $this->isAcknowledged;
    }
}