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

use MongoDB\Driver\Exception\CommandException;
use MongoDB\Driver\ReadConcern;
use MongoDB\Driver\ReadPreference;
use yxorP\app\lib\data\mongoDB\Exception\UnsupportedException;
use yxorP\app\lib\http\mongoDB\Driver\Exception\commandException;
use yxorP\app\lib\http\mongoDB\Driver\Exception\RuntimeException as DriverRuntimeException;
use yxorP\app\lib\http\mongoDB\Driver\ReadConcern;
use yxorP\app\lib\http\mongoDB\Driver\ReadPreference;
use yxorP\app\lib\http\mongoDB\Driver\Server;
use yxorP\app\lib\http\mongoDB\Driver\Session;
use yxorP\app\lib\http\mongoDB\Exception\InvalidArgumentException;
use yxorP\app\lib\http\mongoDB\Exception\UnexpectedValueException;
use yxorP\app\lib\http\mongoDB\Exception\UnsupportedException;
use function array_intersect_key;
use function is_integer;
use function MongoDB\server_supports_feature;
use function yxorP\app\lib\data\mongoDB\server_supports_feature;

/**
 * Operation for obtaining an estimated count of documents in a collection
 *
 * @api
 * @see \MongoDB\collection::estimatedDocumentCount()
 * @see http://docs.mongodb.org/manual/reference/command/count/
 */
class EstimatedDocumentCount implements ExecutableInterface, ExplainableInterface
{
    /** @var int */
    private static int $errorCodeCollectionNotFound = 26;
    /** @var int */
    private static int $wireVersionForCollStats = 12;
    /** @var string */
    private string $databaseName;
    /** @var string */
    private string $collectionName;
    /** @var array */
    private array $options;

    /**
     * Constructs a command to get the estimated number of documents in a
     * collection.
     *
     * Supported options:
     *
     *  * maxTimeMS (integer): The maximum amount of time to allow the query to
     *    run.
     *
     *  * readConcern (MongoDB\Driver\ReadConcern): Read concern.
     *
     *  * readPreference (MongoDB\Driver\ReadPreference): Read preference.
     *
     *  * session (MongoDB\Driver\Session): Client session.
     *
     * @param string $databaseName Database name
     * @param string $collectionName Collection name
     * @param array $options Command options
     * @throws InvalidArgumentException for parameter/option parsing errors
     */
    public function __construct(string $databaseName, string $collectionName, array $options = [])
    {
        $this->databaseName = (string)$databaseName;
        $this->collectionName = (string)$collectionName;

        if (isset($options['maxTimeMS']) && !is_integer($options['maxTimeMS'])) {
            throw InvalidArgumentException::invalidType('"maxTimeMS" option', $options['maxTimeMS'], 'integer');
        }

        if (isset($options['readConcern']) && !$options['readConcern'] instanceof ReadConcern) {
            throw InvalidArgumentException::invalidType('"readConcern" option', $options['readConcern'], ReadConcern::class);
        }

        if (isset($options['readPreference']) && !$options['readPreference'] instanceof ReadPreference) {
            throw InvalidArgumentException::invalidType('"readPreference" option', $options['readPreference'], ReadPreference::class);
        }

        if (isset($options['session']) && !$options['session'] instanceof Session) {
            throw InvalidArgumentException::invalidType('"session" option', $options['session'], Session::class);
        }

        $this->options = array_intersect_key($options, ['maxTimeMS' => 1, 'readConcern' => 1, 'readPreference' => 1, 'session' => 1]);
    }

    /**
     * Execute the operation.
     *
     * @param Server $server
     * @return integer
     * @throws UnexpectedValueException if the command response was malformed
     * @throws UnsupportedException if collation or read concern is used and unsupported
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see ExecutableInterface::execute()
     */
    public function execute(Server $server): int
    {
        $command = $this->createCommand($server);

        if ($command instanceof Aggregate) {
            try {
                $cursor = $command->execute($server);
            } catch (CommandException $e) {
                if ($e->getCode() == self::$errorCodeCollectionNotFound) {
                    return 0;
                }

                throw $e;
            }

            $cursor->rewind();

            return $cursor->current()->n;
        }

        return $command->execute($server);
    }

    /** @return Aggregate|Count */
    private function createCommand(Server $server): Count|Aggregate
    {
        return server_supports_feature($server, self::$wireVersionForCollStats)
            ? $this->createAggregate()
            : $this->createCount();
    }

    private function createAggregate(): Aggregate
    {
        return new Aggregate(
            $this->databaseName,
            $this->collectionName,
            [
                ['$collStats' => ['count' => (object)[]]],
                ['$group' => ['_id' => 1, 'n' => ['$sum' => '$count']]],
            ],
            $this->options
        );
    }

    private function createCount(): Count
    {
        return new Count($this->databaseName, $this->collectionName, [], $this->options);
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
        return $this->createCommand($server)->getCommandDocument($server);
    }
}
