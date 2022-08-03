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
use MongoDB\Driver\ReadPreference;
use yxorP\app\lib\http\mongoDB\Driver\command;
use yxorP\app\lib\http\mongoDB\Driver\Cursor;
use yxorP\app\lib\http\mongoDB\Driver\ReadPreference;
use yxorP\app\lib\http\mongoDB\Driver\Server;
use yxorP\app\lib\http\mongoDB\Driver\Session;
use yxorP\app\lib\http\mongoDB\Exception\InvalidArgumentException;
use function is_array;
use function is_object;

/**
 * Operation for executing a database command.
 *
 * @api
 * @see \MongoDB\database::command()
 */
class DatabaseCommand implements ExecutableInterface
{
    /** @var string */
    private string $databaseName;

    /** @var array|Command|object */
    private command|array|object $command;

    /** @var array */
    private array $options;

    /**
     * Constructs a command.
     *
     * Supported options:
     *
     *  * readPreference (MongoDB\Driver\ReadPreference): The read preference to
     *    use when executing the command. This may be used when issuing the
     *    command to a replica set or mongos node to ensure that the driver sets
     *    the wire protocol accordingly or adds the read preference to the
     *    command document, respectively.
     *
     *  * session (MongoDB\Driver\Session): Client session.
     *
     *  * typeMap (array): Type map for BSON deserialization. This will be
     *    applied to the returned Cursor (it is not sent to the server).
     *
     * @param string $databaseName Database name
     * @param object|array $command Command document
     * @param array $options Options for command execution
     * @throws InvalidArgumentException for parameter/option parsing errors
     */
    public function __construct(string $databaseName, object|array $command, array $options = [])
    {
        if (!is_array($command) && !is_object($command)) {
            throw InvalidArgumentException::invalidType('$command', $command, 'array or object');
        }

        if (isset($options['readPreference']) && !$options['readPreference'] instanceof ReadPreference) {
            throw InvalidArgumentException::invalidType('"readPreference" option', $options['readPreference'], ReadPreference::class);
        }

        if (isset($options['session']) && !$options['session'] instanceof Session) {
            throw InvalidArgumentException::invalidType('"session" option', $options['session'], Session::class);
        }

        if (isset($options['typeMap']) && !is_array($options['typeMap'])) {
            throw InvalidArgumentException::invalidType('"typeMap" option', $options['typeMap'], 'array');
        }

        $this->databaseName = $databaseName;
        $this->command = $command instanceof Command ? $command : new Command($command);
        $this->options = $options;
    }

    /**
     * Execute the operation.
     *
     * @param Server $server
     * @return Cursor
     * @see ExecutableInterface::execute()
     */
    public function execute(Server $server): Cursor
    {
        $cursor = $server->executeCommand($this->databaseName, $this->command, $this->createOptions());

        if (isset($this->options['typeMap'])) {
            $cursor->setTypeMap($this->options['typeMap']);
        }

        return $cursor;
    }

    /**
     * Create options for executing the command.
     *
     * @see http://php.net/manual/en/mongodb-driver-server.executecommand.php
     * @return array
     */
    private function createOptions(): array
    {
        $options = [];

        if (isset($this->options['readPreference'])) {
            $options['readPreference'] = $this->options['readPreference'];
        }

        if (isset($this->options['session'])) {
            $options['session'] = $this->options['session'];
        }

        return $options;
    }
}
