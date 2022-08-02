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

use MongoDB\Driver\Command;
use MongoDB\Driver\WriteConcern;
use yxorP\app\lib\data\mongoDB\Exception\UnsupportedException;
use yxorP\app\lib\http\mongoDB\Driver\command;
use yxorP\app\lib\http\mongoDB\Driver\Exception\RuntimeException as DriverRuntimeException;
use yxorP\app\lib\http\mongoDB\Driver\Server;
use yxorP\app\lib\http\mongoDB\Driver\Session;
use yxorP\app\lib\http\mongoDB\Driver\WriteConcern;
use yxorP\app\lib\http\mongoDB\Exception\InvalidArgumentException;
use yxorP\app\lib\http\mongoDB\Exception\UnsupportedException;
use function current;
use function is_array;
use function is_integer;

/**
 * Operation for the dropIndexes command.
 *
 * @api
 * @see \MongoDB\collection::dropIndexes()
 * @see http://docs.mongodb.org/manual/reference/command/dropIndexes/
 */
class DropIndexes implements ExecutableInterface
{
    /** @var string */
    private $databaseName;

    /** @var string */
    private $collectionName;

    /** @var string */
    private $indexName;

    /** @var array */
    private $options;

    /**
     * Constructs a dropIndexes command.
     *
     * Supported options:
     *
     *  * maxTimeMS (integer): The maximum amount of time to allow the query to
     *    run.
     *
     *  * session (MongoDB\Driver\Session): Client session.
     *
     *  * typeMap (array): Type map for BSON deserialization. This will be used
     *    for the returned command result document.
     *
     *  * writeConcern (MongoDB\Driver\WriteConcern): Write concern.
     *
     * @param string $databaseName Database name
     * @param string $collectionName Collection name
     * @param string $indexName Index name (use "*" to drop all indexes)
     * @param array $options Command options
     * @throws InvalidArgumentException for parameter/option parsing errors
     */
    public function __construct($databaseName, $collectionName, $indexName, array $options = [])
    {
        $indexName = (string)$indexName;

        if ($indexName === '') {
            throw new InvalidArgumentException('$indexName cannot be empty');
        }

        if (isset($options['maxTimeMS']) && !is_integer($options['maxTimeMS'])) {
            throw InvalidArgumentException::invalidType('"maxTimeMS" option', $options['maxTimeMS'], 'integer');
        }

        if (isset($options['session']) && !$options['session'] instanceof Session) {
            throw InvalidArgumentException::invalidType('"session" option', $options['session'], Session::class);
        }

        if (isset($options['typeMap']) && !is_array($options['typeMap'])) {
            throw InvalidArgumentException::invalidType('"typeMap" option', $options['typeMap'], 'array');
        }

        if (isset($options['writeConcern']) && !$options['writeConcern'] instanceof WriteConcern) {
            throw InvalidArgumentException::invalidType('"writeConcern" option', $options['writeConcern'], WriteConcern::class);
        }

        if (isset($options['writeConcern']) && $options['writeConcern']->isDefault()) {
            unset($options['writeConcern']);
        }

        $this->databaseName = (string)$databaseName;
        $this->collectionName = (string)$collectionName;
        $this->indexName = $indexName;
        $this->options = $options;
    }

    /**
     * Execute the operation.
     *
     * @param Server $server
     * @return array|object Command result document
     * @throws UnsupportedException if write concern is used and unsupported
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see ExecutableInterface::execute()
     */
    public function execute(Server $server)
    {
        $inTransaction = isset($this->options['session']) && $this->options['session']->isInTransaction();
        if ($inTransaction && isset($this->options['writeConcern'])) {
            throw UnsupportedException::writeConcernNotSupportedInTransaction();
        }

        $cursor = $server->executeWriteCommand($this->databaseName, $this->createCommand(), $this->createOptions());

        if (isset($this->options['typeMap'])) {
            $cursor->setTypeMap($this->options['typeMap']);
        }

        return current($cursor->toArray());
    }

    /**
     * Create the dropIndexes command.
     *
     * @return Command
     */
    private function createCommand()
    {
        $cmd = [
            'dropIndexes' => $this->collectionName,
            'index' => $this->indexName,
        ];

        if (isset($this->options['maxTimeMS'])) {
            $cmd['maxTimeMS'] = $this->options['maxTimeMS'];
        }

        return new Command($cmd);
    }

    /**
     * Create options for executing the command.
     *
     * @see http://php.net/manual/en/mongodb-driver-server.executewritecommand.php
     * @return array
     */
    private function createOptions()
    {
        $options = [];

        if (isset($this->options['session'])) {
            $options['session'] = $this->options['session'];
        }

        if (isset($this->options['writeConcern'])) {
            $options['writeConcern'] = $this->options['writeConcern'];
        }

        return $options;
    }
}
