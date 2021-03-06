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

use EmptyIterator;
use MongoDB\Driver\Command;
use MongoDB\Driver\Exception\CommandException;
use yxorP\app\lib\data\mongoDB\Model\IndexInfoIteratorIterator;
use yxorP\app\lib\http\mongoDB\Driver\command;
use yxorP\app\lib\http\mongoDB\Driver\Exception\commandException;
use yxorP\app\lib\http\mongoDB\Driver\Exception\RuntimeException as DriverRuntimeException;
use yxorP\app\lib\http\mongoDB\Driver\Server;
use yxorP\app\lib\http\mongoDB\Driver\Session;
use yxorP\app\lib\http\mongoDB\Exception\InvalidArgumentException;
use yxorP\app\lib\http\mongoDB\Model\CachingIterator;
use yxorP\app\lib\http\mongoDB\Model\IndexInfoIterator;
use yxorP\app\lib\http\mongoDB\Model\IndexInfoIteratorIterator;
use function is_integer;

/**
 * Operation for the listIndexes command.
 *
 * @api
 * @see \MongoDB\collection::listIndexes()
 * @see http://docs.mongodb.org/manual/reference/command/listIndexes/
 */
class ListIndexes implements ExecutableInterface
{
    /** @var integer */
    private static int $errorCodeDatabaseNotFound = 60;

    /** @var integer */
    private static int $errorCodeNamespaceNotFound = 26;

    /** @var string */
    private string $databaseName;

    /** @var string */
    private string $collectionName;

    /** @var array */
    private array $options;

    /**
     * Constructs a listIndexes command.
     *
     * Supported options:
     *
     *  * maxTimeMS (integer): The maximum amount of time to allow the query to
     *    run.
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
        if (isset($options['maxTimeMS']) && !is_integer($options['maxTimeMS'])) {
            throw InvalidArgumentException::invalidType('"maxTimeMS" option', $options['maxTimeMS'], 'integer');
        }

        if (isset($options['session']) && !$options['session'] instanceof Session) {
            throw InvalidArgumentException::invalidType('"session" option', $options['session'], Session::class);
        }

        $this->databaseName = (string)$databaseName;
        $this->collectionName = (string)$collectionName;
        $this->options = $options;
    }

    /**
     * Execute the operation.
     *
     * @param Server $server
     * @return IndexInfoIteratorIterator
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see ExecutableInterface::execute()
     */
    public function execute(Server $server): \yxorP\app\lib\data\mongoDB\Operation\IndexInfoIteratorIterator|IndexInfoIteratorIterator
    {
        return $this->executeCommand($server);
    }

    /**
     * Returns information for all indexes for this collection using the
     * listIndexes command.
     *
     * @param Server $server
     * @return \yxorP\app\lib\http\mongoDB\Model\IndexInfoIteratorIterator
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     */
    private function executeCommand(Server $server): IndexInfoIteratorIterator
    {
        $cmd = ['listIndexes' => $this->collectionName];

        if (isset($this->options['maxTimeMS'])) {
            $cmd['maxTimeMS'] = $this->options['maxTimeMS'];
        }

        try {
            $cursor = $server->executeReadCommand($this->databaseName, new Command($cmd), $this->createOptions());
        } catch (CommandException $e) {
            /* The server may return an error if the collection does not exist.
             * Check for possible error codes (see: SERVER-20463) and return an
             * empty iterator instead of throwing.
             */
            if ($e->getCode() === self::$errorCodeNamespaceNotFound || $e->getCode() === self::$errorCodeDatabaseNotFound) {
                return new IndexInfoIteratorIterator(new EmptyIterator());
            }

            throw $e;
        }

        $cursor->setTypeMap(['root' => 'array', 'document' => 'array']);

        return new IndexInfoIteratorIterator(new CachingIterator($cursor), $this->databaseName . '.' . $this->collectionName);
    }

    /**
     * Create options for executing the command.
     *
     * Note: read preference is intentionally omitted, as the spec requires that
     * the command be executed on the primary.
     *
     * @see http://php.net/manual/en/mongodb-driver-server.executecommand.php
     * @return array
     */
    private function createOptions(): array
    {
        $options = [];

        if (isset($this->options['session'])) {
            $options['session'] = $this->options['session'];
        }

        return $options;
    }
}
