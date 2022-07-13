<?php
/*
 * Copyright 2015-present MongoDB, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace MongoDB;

use MongoDB\Driver\WriteResult;
use MongoDB\Exception\BadMethodCallException;

/**
 * Result class for a single-document insert operation.
 */
class InsertOneResult
{
    /** @var WriteResult */
    private WriteResult $writeResult;

    /** @var mixed */
    private mixed $insertedId;

    /** @var boolean */
    private bool $isAcknowledged;

    /**
     * @param WriteResult $writeResult
     * @param mixed $insertedId
     */
    public function __construct(WriteResult $writeResult, mixed $insertedId)
    {
        $this->writeResult = $writeResult;
        $this->insertedId = $insertedId;
        $this->isAcknowledged = $writeResult->isAcknowledged();
    }

    /**
     * Return the number of documents that were inserted.
     *
     * This method should only be called if the write was acknowledged.
     *
     * @return integer
     * @throws BadMethodCallException is the write result is unacknowledged
     * @see InsertOneResult::isAcknowledged()
     */
    public function getInsertedCount(): int
    {
        if ($this->isAcknowledged) {
            return $this->writeResult->getInsertedCount();
        }

        throw BadMethodCallException::unacknowledgedWriteResultAccess(__METHOD__);
    }

    /**
     * Return the inserted document's ID.
     *
     * If the document had an ID prior to inserting (i.e. the driver did not
     * need to generate an ID), this will contain its "_id". Any
     * driver-generated ID will be a MongoDB\BSON\ObjectId instance.
     *
     * @return mixed
     */
    public function getInsertedId(): mixed
    {
        return $this->insertedId;
    }

    /**
     * Return whether this insert was acknowledged by the server.
     *
     * If the insert was not acknowledged, other fields from the WriteResult
     * (e.g. insertedCount) will be undefined.
     *
     * If the insert was not acknowledged, other fields from the WriteResult
     * (e.g. insertedCount) will be undefined and their getter methods should
     * not be invoked.
     *
     * @return boolean
     */
    public function isAcknowledged(): bool
    {
        return $this->writeResult->isAcknowledged();
    }
}
