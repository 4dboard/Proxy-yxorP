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

use yxorP\app\lib\http\mongoDB\command\ListDatabases as ListDatabasesCommand;
use yxorP\app\lib\http\mongoDB\Driver\Exception\RuntimeException as DriverRuntimeException;
use yxorP\app\lib\http\mongoDB\Driver\Server;
use yxorP\app\lib\http\mongoDB\Exception\InvalidArgumentException;
use yxorP\app\lib\http\mongoDB\Exception\UnexpectedValueException;
use yxorP\app\lib\http\mongoDB\Model\DatabaseInfoIterator;
use yxorP\app\lib\http\mongoDB\Model\DatabaseInfoLegacyIterator;

/**
 * Operation for the ListDatabases command.
 *
 * @api
 * @see \MongoDB\client::listDatabases()
 * @see http://docs.mongodb.org/manual/reference/command/ListDatabases/
 */
class ListDatabases implements ExecutableInterface
{
    /** @var ListDatabasesCommand */
    private ListDatabasesCommand $listDatabases;

    /**
     * Constructs a listDatabases command.
     *
     * Supported options:
     *
     *  * authorizedDatabases (boolean): Determines which databases are returned
     *    based on the user privileges.
     *
     *    For servers < 4.0.5, this option is ignored.
     *
     *  * filter (document): Query by which to filter databases.
     *
     *  * maxTimeMS (integer): The maximum amount of time to allow the query to
     *    run.
     *
     *  * session (MongoDB\Driver\Session): Client session.
     *
     * @param array $options Command options
     * @throws InvalidArgumentException for parameter/option parsing errors
     */
    public function __construct(array $options = [])
    {
        $this->listDatabases = new ListDatabasesCommand(['nameOnly' => false] + $options);
    }

    /**
     * Execute the operation.
     *
     * @param Server $server
     * @return \yxorP\app\lib\data\mongoDB\Operation\DatabaseInfoLegacyIterator
     * @throws UnexpectedValueException if the command response was malformed
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see ExecutableInterface::execute()
     */
    public function execute(Server $server): \yxorP\app\lib\data\mongoDB\Operation\DatabaseInfoLegacyIterator
    {
        return new DatabaseInfoLegacyIterator($this->listDatabases->execute($server));
    }
}
