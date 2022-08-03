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

namespace yxorP\app\lib\data\mongoDB\Model;


use JetBrains\PhpStorm\Pure;
use ReturnTypeWillChange;
use function current;
use function key;
use function next;
use function reset;

/**
 * DatabaseInfoIterator for inline listDatabases command results.
 *
 * This iterator may be used to wrap the array returned within the listDatabases
 * command's single-document result.
 *
 * @internal
 * @see \MongoDB\client::listDatabases()
 * @see http://docs.mongodb.org/manual/reference/command/listDatabases/
 */
class DatabaseInfoLegacyIterator implements DatabaseInfoIteratorInterface
{
    /** @var array */
    private $databases;

    /**
     * @param array $databases
     */
    public function __construct(array $databases)
    {
        $this->databases = $databases;
    }

    /**
     * Return the current element as a DatabaseInfo instance.
     *
     * @return DatabaseInfo
     * @see http://php.net/iterator.current
     * @see DatabaseInfoIteratorInterface::current()
     */
    #[Pure] #[ReturnTypeWillChange] public function current()
    {
        return new DatabaseInfo(current($this->databases));
    }

    /**
     * Return the key of the current element.
     *
     * @see http://php.net/iterator.key
     * @return integer
     */
    #[ReturnTypeWillChange]
    public function key()
    {
        return key($this->databases);
    }

    /**
     * Move forward to next element.
     *
     * @see http://php.net/iterator.next
     * @return void
     */
    #[ReturnTypeWillChange]
    public function next()
    {
        next($this->databases);
    }

    /**
     * Rewind the Iterator to the first element.
     *
     * @see http://php.net/iterator.rewind
     * @return void
     */
    #[ReturnTypeWillChange]
    public function rewind()
    {
        reset($this->databases);
    }

    /**
     * Checks if current position is valid.
     *
     * @see http://php.net/iterator.valid
     * @return boolean
     */
    #[ReturnTypeWillChange]
    public function valid()
    {
        return key($this->databases) !== null;
    }
}
