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

namespace MongoDB\Operation;

use JetBrains\PhpStorm\ArrayShape;
use MongoDB\DeleteResult;
use MongoDB\Driver\BulkWrite as Bulk;
use MongoDB\Driver\Exception\RuntimeException as DriverRuntimeException;
use MongoDB\Driver\Server;
use MongoDB\Driver\Session;
use MongoDB\Driver\WriteConcern;
use MongoDB\Exception\InvalidArgumentException;
use MongoDB\Exception\UnsupportedException;
use function is_array;
use function is_object;
use function is_string;
use function MongoDB\is_write_concern_acknowledged;
use function MongoDB\server_supports_feature;

/**
 * Operation for the delete command.
 *
 * This class is used internally by the DeleteMany and DeleteOne operation
 * classes.
 *
 * @internal
 * @see http://docs.mongodb.org/manual/reference/command/delete/
 */
class Delete implements Executable, Explainable
{
    /** @var integer */
    private static int $wireVersionForHint = 9;

    /** @var string */
    private string $databaseName;

    /** @var string */
    private string $collectionName;

    /** @var array|object */
    private array|object $filter;

    /** @var integer */
    private ?int $limit;

    /** @var array */
    private array $options;

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
     * @param integer $limit The number of matching documents to
     *                                     delete. Must be 0 or 1, for all or a
     *                                     single document, respectively.
     * @param array $options Command options
     * @throws InvalidArgumentException for parameter/option parsing errors
     */
    public function __construct(string $databaseName, string $collectionName, object|array $filter, int $limit, array $options = [])
    {
        if (!is_array($filter) && !is_object($filter)) {
            throw InvalidArgumentException::invalidType('$filter', $filter, 'array or object');
        }

        if ($limit !== 0 && $limit !== 1) {
            throw new InvalidArgumentException('$limit must be 0 or 1');
        }

        if (isset($options['collation']) && !is_array($options['collation']) && !is_object($options['collation'])) {
            throw InvalidArgumentException::invalidType('"collation" option', $options['collation'], 'array or object');
        }

        if (isset($options['hint']) && !is_string($options['hint']) && !is_array($options['hint']) && !is_object($options['hint'])) {
            throw InvalidArgumentException::invalidType('"hint" option', $options['hint'], ['string', 'array', 'object']);
        }

        if (isset($options['session']) && !$options['session'] instanceof Session) {
            throw InvalidArgumentException::invalidType('"session" option', $options['session'], Session::class);
        }

        if (isset($options['writeConcern']) && !$options['writeConcern'] instanceof WriteConcern) {
            throw InvalidArgumentException::invalidType('"writeConcern" option', $options['writeConcern'], WriteConcern::class);
        }

        if (isset($options['writeConcern']) && $options['writeConcern']->isDefault()) {
            unset($options['writeConcern']);
        }

        $this->databaseName = (string)$databaseName;
        $this->collectionName = (string)$collectionName;
        $this->filter = $filter;
        $this->limit = $limit;
        $this->options = $options;
    }

    /**
     * Execute the operation.
     *
     * @param Server $server
     * @return DeleteResult
     * @throws UnsupportedException if hint or write concern is used and unsupported
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see Executable::execute()
     */
    public function execute(Server $server): DeleteResult
    {
        /* CRUD spec requires a client-side error when using "hint" with an
         * unacknowledged write concern on an unsupported server. */
        if (
            isset($this->options['writeConcern']) && !is_write_concern_acknowledged($this->options['writeConcern']) &&
            isset($this->options['hint']) && !server_supports_feature($server, self::$wireVersionForHint)
        ) {
            throw UnsupportedException::hintNotSupported();
        }

        $inTransaction = isset($this->options['session']) && $this->options['session']->isInTransaction();
        if ($inTransaction && isset($this->options['writeConcern'])) {
            throw UnsupportedException::writeConcernNotSupportedInTransaction();
        }

        $bulk = new Bulk();
        $bulk->delete($this->filter, $this->createDeleteOptions());

        $writeResult = $server->executeBulkWrite($this->databaseName . '.' . $this->collectionName, $bulk, $this->createExecuteOptions());

        return new DeleteResult($writeResult);
    }

    /**
     * Create options for the delete command.
     *
     * Note that these options are different from the bulk write options, which
     * are created in createExecuteOptions().
     *
     * @return array
     */
    #[ArrayShape(['limit' => "int|null", 'hint' => "mixed", 'collation' => "object"])] private function createDeleteOptions(): array
    {
        $deleteOptions = ['limit' => $this->limit];

        if (isset($this->options['collation'])) {
            $deleteOptions['collation'] = (object)$this->options['collation'];
        }

        if (isset($this->options['hint'])) {
            $deleteOptions['hint'] = $this->options['hint'];
        }

        return $deleteOptions;
    }

    /**
     * Create options for executing the bulk write.
     *
     * @see http://php.net/manual/en/mongodb-driver-server.executebulkwrite.php
     * @return array
     */
    private function createExecuteOptions(): array
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

    /**
     * Returns the command document for this operation.
     *
     * @param Server $server
     * @return array
     * @see Explainable::getCommandDocument()
     */
    #[ArrayShape(['delete' => "string", 'deletes' => "mixed", 'writeConcern' => "mixed"])] public function getCommandDocument(Server $server): array
    {
        $cmd = ['delete' => $this->collectionName, 'deletes' => [['q' => $this->filter] + $this->createDeleteOptions()]];

        if (isset($this->options['writeConcern'])) {
            $cmd['writeConcern'] = $this->options['writeConcern'];
        }

        return $cmd;
    }
}
