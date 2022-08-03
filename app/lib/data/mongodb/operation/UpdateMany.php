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

use yxorP\app\lib\data\mongoDB\Exception\UnsupportedException;
use yxorP\app\lib\data\mongoDB\updateResult;
use yxorP\app\lib\http\mongoDB\Driver\Exception\RuntimeException as DriverRuntimeException;
use yxorP\app\lib\http\mongoDB\Driver\Server;
use yxorP\app\lib\http\mongoDB\Exception\InvalidArgumentException;
use yxorP\app\lib\http\mongoDB\Exception\UnsupportedException;
use yxorP\app\lib\http\mongoDB\updateResult;
use function is_array;
use function is_object;
use function MongoDB\is_first_key_operator;
use function MongoDB\is_pipeline;
use function yxorP\app\lib\data\mongoDB\is_first_key_operator;
use function yxorP\app\lib\data\mongoDB\is_pipeline;

/**
 * Operation for updating multiple documents with the update command.
 *
 * @api
 * @see \MongoDB\collection::updateMany()
 * @see http://docs.mongodb.org/manual/reference/command/update/
 */
class UpdateMany implements ExecutableInterface, ExplainableInterface
{
    /** @var Update */
    private Update $update;

    /**
     * Constructs an update command.
     *
     * Supported options:
     *
     *  * arrayFilters (document array): A set of filters specifying to which
     *    array elements an update should apply.
     *
     *  * bypassDocumentValidation (boolean): If true, allows the write to
     *    circumvent document level validation.
     *
     *  * collation (document): Collation specification.
     *
     *  * hint (string|document): The index to use. Specify either the index
     *    name as a string or the index key pattern as a document. If specified,
     *    then the query system will only consider plans using the hinted index.
     *
     *    This is not supported for server versions < 4.2 and will result in an
     *    exception at execution time if used.
     *
     *  * session (MongoDB\Driver\Session): Client session.
     *
     *  * upsert (boolean): When true, a new document is created if no document
     *    matches the query. The default is false.
     *
     *  * writeConcern (MongoDB\Driver\WriteConcern): Write concern.
     *
     * @param string $databaseName Database name
     * @param string $collectionName Collection name
     * @param object|array $filter Query by which to filter documents
     * @param object|array $update Update to apply to the matched documents
     * @param array $options Command options
     * @throws InvalidArgumentException for parameter/option parsing errors
     */
    public function __construct(string $databaseName, string $collectionName, object|array $filter, object|array $update, array $options = [])
    {
        if (!is_array($update) && !is_object($update)) {
            throw InvalidArgumentException::invalidType('$update', $update, 'array or object');
        }

        if (!is_first_key_operator($update) && !is_pipeline($update)) {
            throw new InvalidArgumentException('Expected an update document with operator as first key or a pipeline');
        }

        $this->update = new Update(
            $databaseName,
            $collectionName,
            $filter,
            $update,
            ['multi' => true] + $options
        );
    }

    /**
     * Execute the operation.
     *
     * @param Server $server
     * @return updateResult
     * @throws UnsupportedException if collation is used and unsupported
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see ExecutableInterface::execute()
     */
    public function execute(Server $server): updateResult
    {
        return $this->update->execute($server);
    }

    /**
     * Returns the command document for this operation.
     *
     * @param Server $server
     * @return array
     * @see ExplainableInterface::getCommandDocument()
     */
    public function getCommandDocument(Server $server): array
    {
        return $this->update->getCommandDocument($server);
    }
}
