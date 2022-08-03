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

use MongoDB\Driver\WriteConcern;
use yxorP\app\lib\http\mongoDB\Driver\command;
use yxorP\app\lib\http\mongoDB\Driver\Exception\RuntimeException as DriverRuntimeException;
use yxorP\app\lib\http\mongoDB\Driver\Server;
use yxorP\app\lib\http\mongoDB\Driver\Session;
use yxorP\app\lib\http\mongoDB\Driver\WriteConcern;
use yxorP\app\lib\http\mongoDB\Exception\InvalidArgumentException;
use yxorP\app\lib\http\mongoDB\Exception\UnexpectedValueException;
use yxorP\app\lib\http\mongoDB\Exception\UnsupportedException;
use function current;
use function is_array;
use function is_bool;
use function is_integer;
use function is_object;
use function is_string;
use function MongoDB\create_field_path_type_map;
use function MongoDB\is_pipeline;
use function MongoDB\is_write_concern_acknowledged;
use function MongoDB\server_supports_feature;
use function yxorP\app\lib\data\mongoDB\create_field_path_type_map;
use function yxorP\app\lib\data\mongoDB\is_pipeline;
use function yxorP\app\lib\data\mongoDB\is_write_concern_acknowledged;

/**
 * Operation for the findAndModify command.
 *
 * This class is used internally by the FindOneAndDelete, FindOneAndReplace, and
 * FindOneAndUpdate operation classes.
 *
 * @internal
 * @see http://docs.mongodb.org/manual/reference/command/findAndModify/
 */
class FindAndModify implements ExecutableInterface, ExplainableInterface
{
    /** @var integer */
    private static int $wireVersionForHint = 9;

    /** @var integer */
    private static int $wireVersionForUnsupportedOptionServerSideError = 8;

    /** @var string */
    private string $databaseName;

    /** @var string */
    private string $collectionName;

    /** @var array */
    private array $options;

    /**
     * Constructs a findAndModify command.
     *
     * Supported options:
     *
     *  * arrayFilters (document array): A set of filters specifying to which
     *    array elements an update should apply.
     *
     *  * collation (document): Collation specification.
     *
     *  * bypassDocumentValidation (boolean): If true, allows the write to
     *    circumvent document level validation.
     *
     *  * fields (document): Limits the fields to return for the matching
     *    document.
     *
     *  * hint (string|document): The index to use. Specify either the index
     *    name as a string or the index key pattern as a document. If specified,
     *    then the query system will only consider plans using the hinted index.
     *
     *    This is only supported on server versions >= 4.4. Using this option in
     *    other contexts will result in an exception at execution time.
     *
     *  * maxTimeMS (integer): The maximum amount of time to allow the query to
     *    run.
     *
     *  * new (boolean): When true, returns the modified document rather than
     *    the original. This option is ignored for remove operations. The
     *    The default is false.
     *
     *  * query (document): Query by which to filter documents.
     *
     *  * remove (boolean): When true, removes the matched document. This option
     *    cannot be true if the update option is set. The default is false.
     *
     *  * session (MongoDB\Driver\Session): Client session.
     *
     *  * sort (document): Determines which document the operation modifies if
     *    the query selects multiple documents.
     *
     *  * typeMap (array): Type map for BSON deserialization.
     *
     *  * update (document): Update or replacement to apply to the matched
     *    document. This option cannot be set if the remove option is true.
     *
     *  * upsert (boolean): When true, a new document is created if no document
     *    matches the query. This option is ignored for remove operations. The
     *    default is false.
     *
     *  * writeConcern (MongoDB\Driver\WriteConcern): Write concern.
     *
     * @param string $databaseName Database name
     * @param string $collectionName Collection name
     * @param array $options Command options
     * @throws InvalidArgumentException for parameter/option parsing errors
     */
    public function __construct(string $databaseName, string $collectionName, array $options)
    {
        $options += [
            'new' => false,
            'remove' => false,
            'upsert' => false,
        ];

        if (isset($options['arrayFilters']) && !is_array($options['arrayFilters'])) {
            throw InvalidArgumentException::invalidType('"arrayFilters" option', $options['arrayFilters'], 'array');
        }

        if (isset($options['bypassDocumentValidation']) && !is_bool($options['bypassDocumentValidation'])) {
            throw InvalidArgumentException::invalidType('"bypassDocumentValidation" option', $options['bypassDocumentValidation'], 'boolean');
        }

        if (isset($options['collation']) && !is_array($options['collation']) && !is_object($options['collation'])) {
            throw InvalidArgumentException::invalidType('"collation" option', $options['collation'], 'array or object');
        }

        if (isset($options['fields']) && !is_array($options['fields']) && !is_object($options['fields'])) {
            throw InvalidArgumentException::invalidType('"fields" option', $options['fields'], 'array or object');
        }

        if (isset($options['hint']) && !is_string($options['hint']) && !is_array($options['hint']) && !is_object($options['hint'])) {
            throw InvalidArgumentException::invalidType('"hint" option', $options['hint'], ['string', 'array', 'object']);
        }

        if (isset($options['maxTimeMS']) && !is_integer($options['maxTimeMS'])) {
            throw InvalidArgumentException::invalidType('"maxTimeMS" option', $options['maxTimeMS'], 'integer');
        }

        if (!is_bool($options['new'])) {
            throw InvalidArgumentException::invalidType('"new" option', $options['new'], 'boolean');
        }

        if (isset($options['query']) && !is_array($options['query']) && !is_object($options['query'])) {
            throw InvalidArgumentException::invalidType('"query" option', $options['query'], 'array or object');
        }

        if (!is_bool($options['remove'])) {
            throw InvalidArgumentException::invalidType('"remove" option', $options['remove'], 'boolean');
        }

        if (isset($options['session']) && !$options['session'] instanceof Session) {
            throw InvalidArgumentException::invalidType('"session" option', $options['session'], Session::class);
        }

        if (isset($options['sort']) && !is_array($options['sort']) && !is_object($options['sort'])) {
            throw InvalidArgumentException::invalidType('"sort" option', $options['sort'], 'array or object');
        }

        if (isset($options['typeMap']) && !is_array($options['typeMap'])) {
            throw InvalidArgumentException::invalidType('"typeMap" option', $options['typeMap'], 'array');
        }

        if (isset($options['update']) && !is_array($options['update']) && !is_object($options['update'])) {
            throw InvalidArgumentException::invalidType('"update" option', $options['update'], 'array or object');
        }

        if (isset($options['writeConcern']) && !$options['writeConcern'] instanceof WriteConcern) {
            throw InvalidArgumentException::invalidType('"writeConcern" option', $options['writeConcern'], WriteConcern::class);
        }

        if (!is_bool($options['upsert'])) {
            throw InvalidArgumentException::invalidType('"upsert" option', $options['upsert'], 'boolean');
        }

        if (isset($options['bypassDocumentValidation']) && !$options['bypassDocumentValidation']) {
            unset($options['bypassDocumentValidation']);
        }

        if (!(isset($options['update']) xor $options['remove'])) {
            throw new InvalidArgumentException('The "remove" option must be true or an "update" document must be specified, but not both');
        }

        if (isset($options['writeConcern']) && $options['writeConcern']->isDefault()) {
            unset($options['writeConcern']);
        }

        $this->databaseName = (string)$databaseName;
        $this->collectionName = (string)$collectionName;
        $this->options = $options;
    }

    /**
     * Execute the operation.
     *
     * @param Server $server
     * @return array|object|null
     * @throws UnexpectedValueException if the command response was malformed
     * @throws UnsupportedException if hint or write concern is used and unsupported
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see ExecutableInterface::execute()
     */
    public function execute(Server $server): object|array|null
    {
        /* Server versions >= 4.2.0 raise errors for unsupported update options.
         * For previous versions, the CRUD spec requires a client-side error. */
        if (isset($this->options['hint']) && !server_supports_feature($server, self::$wireVersionForUnsupportedOptionServerSideError)) {
            throw UnsupportedException::hintNotSupported();
        }

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

        $cursor = $server->executeWriteCommand($this->databaseName, new Command($this->createCommandDocument()), $this->createOptions());

        if (isset($this->options['typeMap'])) {
            $cursor->setTypeMap(create_field_path_type_map($this->options['typeMap'], 'value'));
        }

        $result = current($cursor->toArray());

        return $result->value ?? null;
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
        return $this->createCommandDocument();
    }

    /**
     * Create the findAndModify command document.
     *
     * @return array
     */
    private function createCommandDocument(): array
    {
        $cmd = ['findAndModify' => $this->collectionName];

        if ($this->options['remove']) {
            $cmd['remove'] = true;
        } else {
            $cmd['new'] = $this->options['new'];
            $cmd['upsert'] = $this->options['upsert'];
        }

        foreach (['collation', 'fields', 'query', 'sort'] as $option) {
            if (isset($this->options[$option])) {
                $cmd[$option] = (object)$this->options[$option];
            }
        }

        if (isset($this->options['update'])) {
            $cmd['update'] = is_pipeline($this->options['update'])
                ? $this->options['update']
                : (object)$this->options['update'];
        }

        foreach (['arrayFilters', 'bypassDocumentValidation', 'hint', 'maxTimeMS'] as $option) {
            if (isset($this->options[$option])) {
                $cmd[$option] = $this->options[$option];
            }
        }

        return $cmd;
    }

    /**
     * Create options for executing the command.
     *
     * @see http://php.net/manual/en/mongodb-driver-server.executewritecommand.php
     * @return array
     */
    private function createOptions(): array
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
