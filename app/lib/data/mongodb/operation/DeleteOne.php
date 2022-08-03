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

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\mongoDB\Exception\UnsupportedException;
use yxorP\app\lib\http\mongoDB\deleteResult;
use yxorP\app\lib\http\mongoDB\Driver\Exception\RuntimeException as DriverRuntimeException;
use yxorP\app\lib\http\mongoDB\Driver\Server;
use yxorP\app\lib\http\mongoDB\Exception\InvalidArgumentException;
use yxorP\app\lib\http\mongoDB\Exception\UnsupportedException;

/**
 * Operation for deleting a single document with the delete command.
 *
 * @api
 * @see \MongoDB\collection::deleteOne()
 * @see http://docs.mongodb.org/manual/reference/command/delete/
 */
class DeleteOne implements ExecutableInterface, ExplainableInterface
{
    /** @var Delete */
    private Delete $delete;

    /**
     * Constructs a delete command.
     *
     * Supported options:
     *
     *  * collation (document): Collation specification.
     *
     *  * hint (string|document): The index to use. Specify either the index
     *    name as a string or the index key pattern as a document. If specified,
     *    then the query system will only consider plans using the hinted index.
     *
     *    This is not supported for server versions < 4.4 and will result in an
     *    exception at execution time if used.
     *
     *  * session (MongoDB\Driver\Session): Client session.
     *
     *  * writeConcern (MongoDB\Driver\WriteConcern): Write concern.
     *
     * @param string $databaseName Database name
     * @param string $collectionName Collection name
     * @param object|array $filter Query by which to delete documents
     * @param array $options Command options
     * @throws InvalidArgumentException for parameter/option parsing errors
     */
    public function __construct(string $databaseName, string $collectionName, object|array $filter, array $options = [])
    {
        $this->delete = new Delete($databaseName, $collectionName, $filter, 1, $options);
    }

    /**
     * Execute the operation.
     *
     * @param Server $server
     * @return \yxorP\app\lib\data\mongoDB\Operation\deleteResult
     * @throws UnsupportedException if collation is used and unsupported
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see ExecutableInterface::execute()
     */
    public function execute(Server $server): \yxorP\app\lib\data\mongoDB\Operation\deleteResult
    {
        return $this->delete->execute($server);
    }

    /**
     * Returns the command document for this operation.
     *
     * @param Server $server
     * @return array
     * @see ExplainableInterface::getCommandDocument()
     */
    #[ArrayShape(['delete' => "string", 'deletes' => "mixed", 'writeConcern' => "mixed"])] public function getCommandDocument(Server $server): array
    {
        return $this->delete->getCommandDocument($server);
    }
}
