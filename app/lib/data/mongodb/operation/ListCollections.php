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

namespace yxorP\app\lib\data\mongoDB\Operation;

use yxorP\app\lib\data\mongoDB\Model\CollectionInfoCommandIterator;
use yxorP\app\lib\http\mongoDB\command\ListCollections as ListCollectionsCommand;
use yxorP\app\lib\http\mongoDB\Driver\Exception\RuntimeException as DriverRuntimeException;
use yxorP\app\lib\http\mongoDB\Driver\Server;
use yxorP\app\lib\http\mongoDB\Exception\InvalidArgumentException;
use yxorP\app\lib\http\mongoDB\Model\CollectionInfoCommandIterator;
use yxorP\app\lib\http\mongoDB\Model\CollectionInfoIterator;

/**
 * Operation for the listCollections command.
 *
 * @api
 * @see \MongoDB\database::listCollections()
 * @see http://docs.mongodb.org/manual/reference/command/listCollections/
 */
class ListCollections implements ExecutableInterface
{
    /** @var string */
    private string $databaseName;

    /** @var ListCollectionsCommand */
    private ListCollectionsCommand $listCollections;

    /**
     * Constructs a listCollections command.
     *
     * Supported options:
     *
     *  * authorizedCollections (boolean): Determines which collections are
     *    returned based on the user privileges.
     *
     *    For servers < 4.0, this option is ignored.
     *
     *  * filter (document): Query by which to filter collections.
     *
     *  * maxTimeMS (integer): The maximum amount of time to allow the query to
     *    run.
     *
     *  * session (MongoDB\Driver\Session): Client session.
     *
     * @param string $databaseName Database name
     * @param array $options Command options
     * @throws InvalidArgumentException for parameter/option parsing errors
     */
    public function __construct(string $databaseName, array $options = [])
    {
        $this->databaseName = (string)$databaseName;
        $this->listCollections = new ListCollectionsCommand($databaseName, ['nameOnly' => false] + $options);
    }

    /**
     * Execute the operation.
     *
     * @param Server $server
     * @return CollectionInfoCommandIterator
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see ExecutableInterface::execute()
     */
    public function execute(Server $server): CollectionInfoCommandIterator
    {
        return new CollectionInfoCommandIterator($this->listCollections->execute($server), $this->databaseName);
    }
}
