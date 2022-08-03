<?php
/*
 * Copyright 2020-present MongoDB, Inc.
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

namespace yxorP\app\lib\data\mongoDB\command;

use MongoDB\Driver\Command;
use mysql_xdevapi\Executable;
use yxorP\app\lib\http\mongoDB\Driver\command;
use yxorP\app\lib\http\mongoDB\Driver\Exception\RuntimeException as DriverRuntimeException;
use yxorP\app\lib\http\mongoDB\Driver\Server;
use yxorP\app\lib\http\mongoDB\Driver\Session;
use yxorP\app\lib\http\mongoDB\Exception\InvalidArgumentException;
use yxorP\app\lib\http\mongoDB\Model\CachingIterator;
use yxorP\app\lib\http\mongoDB\Operation\Executable;
use function is_array;
use function is_bool;
use function is_integer;
use function is_object;

/**
 * Wrapper for the listCollections command.
 *
 * @internal
 * @see http://docs.mongodb.org/manual/reference/command/listCollections/
 */
class ListCollections implements Executable
{
    /** @var string */
    private string $databaseName;

    /** @var array */
    private array $options;

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
     *  * nameOnly (boolean): A flag to indicate whether the command should
     *    return just the collection/view names and type or return both the name
     *    and other information.
     *
     *  * session (MongoDB\Driver\Session): Client session.
     *
     * @param string $databaseName Database name
     * @param array $options Command options
     * @throws InvalidArgumentException for parameter/option parsing errors
     */
    public function __construct(string $databaseName, array $options = [])
    {
        if (isset($options['authorizedCollections']) && !is_bool($options['authorizedCollections'])) {
            throw InvalidArgumentException::invalidType('"authorizedCollections" option', $options['authorizedCollections'], 'boolean');
        }

        if (isset($options['filter']) && !is_array($options['filter']) && !is_object($options['filter'])) {
            throw InvalidArgumentException::invalidType('"filter" option', $options['filter'], 'array or object');
        }

        if (isset($options['maxTimeMS']) && !is_integer($options['maxTimeMS'])) {
            throw InvalidArgumentException::invalidType('"maxTimeMS" option', $options['maxTimeMS'], 'integer');
        }

        if (isset($options['nameOnly']) && !is_bool($options['nameOnly'])) {
            throw InvalidArgumentException::invalidType('"nameOnly" option', $options['nameOnly'], 'boolean');
        }

        if (isset($options['session']) && !$options['session'] instanceof Session) {
            throw InvalidArgumentException::invalidType('"session" option', $options['session'], Session::class);
        }

        $this->databaseName = (string)$databaseName;
        $this->options = $options;
    }

    /**
     * Execute the operation.
     *
     * @param Server $server
     * @return CachingIterator
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see ExecutableInterface::execute()
     */
    public function execute(Server $server): CachingIterator
    {
        $cmd = ['listCollections' => 1];

        if (!empty($this->options['filter'])) {
            $cmd['filter'] = (object)$this->options['filter'];
        }

        foreach (['authorizedCollections', 'maxTimeMS', 'nameOnly'] as $option) {
            if (isset($this->options[$option])) {
                $cmd[$option] = $this->options[$option];
            }
        }

        $cursor = $server->executeReadCommand($this->databaseName, new Command($cmd), $this->createOptions());
        $cursor->setTypeMap(['root' => 'array', 'document' => 'array']);

        return new CachingIterator($cursor);
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
