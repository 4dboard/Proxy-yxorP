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

namespace MongoDB;

use JetBrains\PhpStorm\ArrayShape;
use MongoDB\BSON\JavascriptInterface;
use MongoDB\Driver\Cursor;
use MongoDB\Driver\Exception\RuntimeException as DriverRuntimeException;
use MongoDB\Driver\Manager;
use MongoDB\Driver\ReadConcern;
use MongoDB\Driver\ReadPreference;
use MongoDB\Driver\WriteConcern;
use MongoDB\Exception\InvalidArgumentException;
use MongoDB\Exception\UnexpectedValueException;
use MongoDB\Exception\UnsupportedException;
use MongoDB\Model\BSONArray;
use MongoDB\Model\BSONDocument;
use MongoDB\Model\IndexInfo;
use MongoDB\Model\IndexInfoIterator;
use MongoDB\Operation\Aggregate;
use MongoDB\Operation\BulkWrite;
use MongoDB\Operation\Count;
use MongoDB\Operation\CountDocuments;
use MongoDB\Operation\CreateIndexes;
use MongoDB\Operation\DeleteMany;
use MongoDB\Operation\DeleteOne;
use MongoDB\Operation\Distinct;
use MongoDB\Operation\DropCollection;
use MongoDB\Operation\DropIndexes;
use MongoDB\Operation\EstimatedDocumentCount;
use MongoDB\Operation\Explain;
use MongoDB\Operation\Explainable;
use MongoDB\Operation\Find;
use MongoDB\Operation\FindOne;
use MongoDB\Operation\FindOneAndDelete;
use MongoDB\Operation\FindOneAndReplace;
use MongoDB\Operation\FindOneAndUpdate;
use MongoDB\Operation\InsertMany;
use MongoDB\Operation\InsertOne;
use MongoDB\Operation\ListIndexes;
use MongoDB\Operation\MapReduce;
use MongoDB\Operation\RenameCollection;
use MongoDB\Operation\ReplaceOne;
use MongoDB\Operation\UpdateMany;
use MongoDB\Operation\UpdateOne;
use MongoDB\Operation\Watch;
use Traversable;
use function array_diff_key;
use function array_intersect_key;
use function current;
use function is_array;
use function strlen;

class Collection
{
    /** @var array */
    private static array $defaultTypeMap = [
        'array' => BSONArray::class,
        'document' => BSONDocument::class,
        'root' => BSONDocument::class,
    ];

    /** @var integer */
    private static int $wireVersionForReadConcernWithWriteStage = 8;

    /** @var string */
    private string $collectionName;

    /** @var string */
    private string $databaseName;

    /** @var Manager */
    private Manager $manager;

    /** @var ReadConcern */
    private ReadConcern $readConcern;

    /** @var ReadPreference */
    private ReadPreference $readPreference;

    /** @var array */
    private array $typeMap;

    /** @var WriteConcern */
    private WriteConcern $writeConcern;

    /**
     * Constructs new Collection instance.
     *
     * This class provides methods for collection-specific operations, such as
     * CRUD (i.e. create, read, update, and delete) and index management.
     *
     * Supported options:
     *
     *  * readConcern (MongoDB\Driver\ReadConcern): The default read concern to
     *    use for collection operations. Defaults to the Manager's read concern.
     *
     *  * readPreference (MongoDB\Driver\ReadPreference): The default read
     *    preference to use for collection operations. Defaults to the Manager's
     *    read preference.
     *
     *  * typeMap (array): Default type map for cursors and BSON documents.
     *
     *  * writeConcern (MongoDB\Driver\WriteConcern): The default write concern
     *    to use for collection operations. Defaults to the Manager's write
     *    concern.
     *
     * @param Manager $manager Manager instance from the driver
     * @param string $databaseName Database name
     * @param string $collectionName Collection name
     * @param array $options Collection options
     * @throws InvalidArgumentException for parameter/option parsing errors
     */
    public function __construct(Manager $manager, string $databaseName, string $collectionName, array $options = [])
    {
        if (strlen((string)$databaseName) < 1) {
            throw new InvalidArgumentException('$databaseName is invalid: ' . $databaseName);
        }

        if (strlen((string)$collectionName) < 1) {
            throw new InvalidArgumentException('$collectionName is invalid: ' . $collectionName);
        }

        if (isset($options['readConcern']) && !$options['readConcern'] instanceof ReadConcern) {
            throw InvalidArgumentException::invalidType('"readConcern" option', $options['readConcern'], ReadConcern::class);
        }

        if (isset($options['readPreference']) && !$options['readPreference'] instanceof ReadPreference) {
            throw InvalidArgumentException::invalidType('"readPreference" option', $options['readPreference'], ReadPreference::class);
        }

        if (isset($options['typeMap']) && !is_array($options['typeMap'])) {
            throw InvalidArgumentException::invalidType('"typeMap" option', $options['typeMap'], 'array');
        }

        if (isset($options['writeConcern']) && !$options['writeConcern'] instanceof WriteConcern) {
            throw InvalidArgumentException::invalidType('"writeConcern" option', $options['writeConcern'], WriteConcern::class);
        }

        $this->manager = $manager;
        $this->databaseName = (string)$databaseName;
        $this->collectionName = (string)$collectionName;
        $this->readConcern = $options['readConcern'] ?? $this->manager->getReadConcern();
        $this->readPreference = $options['readPreference'] ?? $this->manager->getReadPreference();
        $this->typeMap = $options['typeMap'] ?? self::$defaultTypeMap;
        $this->writeConcern = $options['writeConcern'] ?? $this->manager->getWriteConcern();
    }

    /**
     * Return internal properties for debugging purposes.
     *
     * @see http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.debuginfo
     * @return array
     */
    #[ArrayShape(['collectionName' => "string", 'databaseName' => "string", 'manager' => "\MongoDB\Driver\Manager", 'readConcern' => "\MongoDB\Driver\ReadConcern", 'readPreference' => "\MongoDB\Driver\ReadPreference", 'typeMap' => "array|string[]", 'writeConcern' => "\MongoDB\Driver\WriteConcern"])] public function __debugInfo()
    {
        return [
            'collectionName' => $this->collectionName,
            'databaseName' => $this->databaseName,
            'manager' => $this->manager,
            'readConcern' => $this->readConcern,
            'readPreference' => $this->readPreference,
            'typeMap' => $this->typeMap,
            'writeConcern' => $this->writeConcern,
        ];
    }

    /**
     * Return the collection namespace (e.g. "db.collection").
     *
     * @see https://docs.mongodb.org/manual/faq/developers/#faq-dev-namespace
     * @return string
     */
    public function __toString()
    {
        return $this->databaseName . '.' . $this->collectionName;
    }

    /**
     * Executes an aggregation framework pipeline on the collection.
     *
     * Note: this method's return value depends on the MongoDB server version
     * and the "useCursor" option. If "useCursor" is true, a Cursor will be
     * returned; otherwise, an ArrayIterator is returned, which wraps the
     * "result" array from the command response document.
     *
     * @param array $pipeline List of pipeline operations
     * @param array $options Command options
     * @return Traversable
     * @throws UnexpectedValueException if the command response was malformed
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see Aggregate::__construct() for supported options
     */
    public function aggregate(array $pipeline, array $options = []): Traversable
    {
        $hasWriteStage = is_last_pipeline_operator_write($pipeline);

        if (!isset($options['readPreference']) && !is_in_transaction($options)) {
            $options['readPreference'] = $this->readPreference;
        }

        $server = $hasWriteStage
            ? select_server_for_aggregate_write_stage($this->manager, $options)
            : select_server($this->manager, $options);

        /* MongoDB 4.2 and later supports a read concern when an $out stage is
         * being used, but earlier versions do not.
         *
         * A read concern is also not compatible with transactions.
         */
        if (
            !isset($options['readConcern']) &&
            !is_in_transaction($options) &&
            (!$hasWriteStage || server_supports_feature($server, self::$wireVersionForReadConcernWithWriteStage))
        ) {
            $options['readConcern'] = $this->readConcern;
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        if ($hasWriteStage && !isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new Aggregate($this->databaseName, $this->collectionName, $pipeline, $options);

        return $operation->execute($server);
    }

    /**
     * Executes multiple write operations.
     *
     * @param array[] $operations List of write operations
     * @param array $options Command options
     * @return BulkWriteResult
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see BulkWrite::__construct() for supported options
     */
    public function bulkWrite(array $operations, array $options = []): BulkWriteResult
    {
        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new BulkWrite($this->databaseName, $this->collectionName, $operations, $options);
        $server = select_server($this->manager, $options);

        return $operation->execute($server);
    }

    /**
     * Gets the number of documents matching the filter.
     *
     * @param object|array $filter Query by which to filter documents
     * @param array $options Command options
     * @return integer
     * @throws UnexpectedValueException if the command response was malformed
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     *
     * @see Count::__construct() for supported options
     * @deprecated 1.4
     */
    public function count(object|array $filter = [], array $options = []): int
    {
        if (!isset($options['readPreference']) && !is_in_transaction($options)) {
            $options['readPreference'] = $this->readPreference;
        }

        $server = select_server($this->manager, $options);

        if (!isset($options['readConcern']) && !is_in_transaction($options)) {
            $options['readConcern'] = $this->readConcern;
        }

        $operation = new Count($this->databaseName, $this->collectionName, $filter, $options);

        return $operation->execute($server);
    }

    /**
     * Gets the number of documents matching the filter.
     *
     * @param object|array $filter Query by which to filter documents
     * @param array $options Command options
     * @return integer
     * @throws UnexpectedValueException if the command response was malformed
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see CountDocuments::__construct() for supported options
     */
    public function countDocuments(object|array $filter = [], array $options = []): int
    {
        if (!isset($options['readPreference']) && !is_in_transaction($options)) {
            $options['readPreference'] = $this->readPreference;
        }

        $server = select_server($this->manager, $options);

        if (!isset($options['readConcern']) && !is_in_transaction($options)) {
            $options['readConcern'] = $this->readConcern;
        }

        $operation = new CountDocuments($this->databaseName, $this->collectionName, $filter, $options);

        return $operation->execute($server);
    }

    /**
     * Create a single index for the collection.
     *
     * @param object|array $key Document containing fields mapped to values,
     *                              which denote order or an index type
     * @param array $options Index and command options
     * @return string The name of the created index
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see Collection::createIndexes()
     * @see CreateIndexes::__construct() for supported command options
     */
    public function createIndex(object|array $key, array $options = []): string
    {
        $commandOptionKeys = ['commitQuorum' => 1, 'maxTimeMS' => 1, 'session' => 1, 'writeConcern' => 1];
        $indexOptions = array_diff_key($options, $commandOptionKeys);
        $commandOptions = array_intersect_key($options, $commandOptionKeys);

        return current($this->createIndexes([['key' => $key] + $indexOptions], $commandOptions));
    }

    /**
     * Create one or more indexes for the collection.
     *
     * Each element in the $indexes array must have a "key" document, which
     * contains fields mapped to an order or type. Other options may follow.
     * For example:
     *
     *     $indexes = [
     *         // Create a unique index on the "username" field
     *         [ 'key' => [ 'username' => 1 ], 'unique' => true ],
     *         // Create a 2dsphere index on the "loc" field with a custom name
     *         [ 'key' => [ 'loc' => '2dsphere' ], 'name' => 'geo' ],
     *     ];
     *
     * If the "name" option is unspecified, a name will be generated from the
     * "key" document.
     *
     * @see http://docs.mongodb.org/manual/reference/command/createIndexes/
     * @see http://docs.mongodb.org/manual/reference/method/db.collection.createIndex/
     * @see CreateIndexes::__construct() for supported command options
     * @param array[] $indexes List of index specifications
     * @param array $options Command options
     * @return string[] The names of the created indexes
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     */
    public function createIndexes(array $indexes, array $options = []): array
    {
        $server = select_server($this->manager, $options);

        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new CreateIndexes($this->databaseName, $this->collectionName, $indexes, $options);

        return $operation->execute($server);
    }

    /**
     * Deletes all documents matching the filter.
     *
     * @param object|array $filter Query by which to delete documents
     * @param array $options Command options
     * @return DeleteResult
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see DeleteMany::__construct() for supported options
     * @see http://docs.mongodb.org/manual/reference/command/delete/
     */
    public function deleteMany(object|array $filter, array $options = []): DeleteResult
    {
        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new DeleteMany($this->databaseName, $this->collectionName, $filter, $options);
        $server = select_server($this->manager, $options);

        return $operation->execute($server);
    }

    /**
     * Deletes at most one document matching the filter.
     *
     * @param object|array $filter Query by which to delete documents
     * @param array $options Command options
     * @return DeleteResult
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see DeleteOne::__construct() for supported options
     * @see http://docs.mongodb.org/manual/reference/command/delete/
     */
    public function deleteOne(object|array $filter, array $options = []): DeleteResult
    {
        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new DeleteOne($this->databaseName, $this->collectionName, $filter, $options);
        $server = select_server($this->manager, $options);

        return $operation->execute($server);
    }

    /**
     * Finds the distinct values for a specified field across the collection.
     *
     * @param string $fieldName Field for which to return distinct values
     * @param object|array $filter Query by which to filter documents
     * @param array $options Command options
     * @return array
     * @throws UnexpectedValueException if the command response was malformed
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see Distinct::__construct() for supported options
     */
    public function distinct(string $fieldName, object|array $filter = [], array $options = []): array
    {
        if (!isset($options['readPreference']) && !is_in_transaction($options)) {
            $options['readPreference'] = $this->readPreference;
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $server = select_server($this->manager, $options);

        if (!isset($options['readConcern']) && !is_in_transaction($options)) {
            $options['readConcern'] = $this->readConcern;
        }

        $operation = new Distinct($this->databaseName, $this->collectionName, $fieldName, $filter, $options);

        return $operation->execute($server);
    }

    /**
     * Drop this collection.
     *
     * @param array $options Additional options
     * @return array|object Command result document
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see DropCollection::__construct() for supported options
     */
    public function drop(array $options = []): object|array
    {
        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $server = select_server($this->manager, $options);

        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new DropCollection($this->databaseName, $this->collectionName, $options);

        return $operation->execute($server);
    }

    /**
     * Drop a single index in the collection.
     *
     * @param string|IndexInfo $indexName Index name or model object
     * @param array $options Additional options
     * @return array|object Command result document
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see DropIndexes::__construct() for supported options
     */
    public function dropIndex(string|IndexInfo $indexName, array $options = []): object|array
    {
        $indexName = (string)$indexName;

        if ($indexName === '*') {
            throw new InvalidArgumentException('dropIndexes() must be used to drop multiple indexes');
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $server = select_server($this->manager, $options);

        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new DropIndexes($this->databaseName, $this->collectionName, $indexName, $options);

        return $operation->execute($server);
    }

    /**
     * Drop all indexes in the collection.
     *
     * @param array $options Additional options
     * @return array|object Command result document
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see DropIndexes::__construct() for supported options
     */
    public function dropIndexes(array $options = []): object|array
    {
        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $server = select_server($this->manager, $options);

        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new DropIndexes($this->databaseName, $this->collectionName, '*', $options);

        return $operation->execute($server);
    }

    /**
     * Gets an estimated number of documents in the collection using the collection metadata.
     *
     * @param array $options Command options
     * @return integer
     * @throws UnexpectedValueException if the command response was malformed
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see EstimatedDocumentCount::__construct() for supported options
     */
    public function estimatedDocumentCount(array $options = []): int
    {
        if (!isset($options['readPreference']) && !is_in_transaction($options)) {
            $options['readPreference'] = $this->readPreference;
        }

        $server = select_server($this->manager, $options);

        if (!isset($options['readConcern']) && !is_in_transaction($options)) {
            $options['readConcern'] = $this->readConcern;
        }

        $operation = new EstimatedDocumentCount($this->databaseName, $this->collectionName, $options);

        return $operation->execute($server);
    }

    /**
     * Explains explainable commands.
     *
     * @param Explainable $explainable Command on which to run explain
     * @param array $options Additional options
     * @return array|object
     * @throws UnsupportedException if explainable or options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see Explain::__construct() for supported options
     * @see http://docs.mongodb.org/manual/reference/command/explain/
     */
    public function explain(Explainable $explainable, array $options = []): object|array
    {
        if (!isset($options['readPreference']) && !is_in_transaction($options)) {
            $options['readPreference'] = $this->readPreference;
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $server = select_server($this->manager, $options);

        $operation = new Explain($this->databaseName, $explainable, $options);

        return $operation->execute($server);
    }

    /**
     * Finds documents matching the query.
     *
     * @param object|array $filter Query by which to filter documents
     * @param array $options Additional options
     * @return Cursor
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see Find::__construct() for supported options
     * @see http://docs.mongodb.org/manual/core/read-operations-introduction/
     */
    public function find(object|array $filter = [], array $options = []): Cursor
    {
        if (!isset($options['readPreference']) && !is_in_transaction($options)) {
            $options['readPreference'] = $this->readPreference;
        }

        $server = select_server($this->manager, $options);

        if (!isset($options['readConcern']) && !is_in_transaction($options)) {
            $options['readConcern'] = $this->readConcern;
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $operation = new Find($this->databaseName, $this->collectionName, $filter, $options);

        return $operation->execute($server);
    }

    /**
     * Finds a single document matching the query.
     *
     * @param object|array $filter Query by which to filter documents
     * @param array $options Additional options
     * @return array|object|null
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see FindOne::__construct() for supported options
     * @see http://docs.mongodb.org/manual/core/read-operations-introduction/
     */
    public function findOne(object|array $filter = [], array $options = []): object|array|null
    {
        if (!isset($options['readPreference']) && !is_in_transaction($options)) {
            $options['readPreference'] = $this->readPreference;
        }

        $server = select_server($this->manager, $options);

        if (!isset($options['readConcern']) && !is_in_transaction($options)) {
            $options['readConcern'] = $this->readConcern;
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $operation = new FindOne($this->databaseName, $this->collectionName, $filter, $options);

        return $operation->execute($server);
    }

    /**
     * Finds a single document and deletes it, returning the original.
     *
     * The document to return may be null if no document matched the filter.
     *
     * @param object|array $filter Query by which to filter documents
     * @param array $options Command options
     * @return array|object|null
     * @throws UnexpectedValueException if the command response was malformed
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see http://docs.mongodb.org/manual/reference/command/findAndModify/
     * @see FindOneAndDelete::__construct() for supported options
     */
    public function findOneAndDelete(object|array $filter, array $options = []): object|array|null
    {
        $server = select_server($this->manager, $options);

        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $operation = new FindOneAndDelete($this->databaseName, $this->collectionName, $filter, $options);

        return $operation->execute($server);
    }

    /**
     * Finds a single document and replaces it, returning either the original or
     * the replaced document.
     *
     * The document to return may be null if no document matched the filter. By
     * default, the original document is returned. Specify
     * FindOneAndReplace::RETURN_DOCUMENT_AFTER for the "returnDocument" option
     * to return the updated document.
     *
     * @param object|array $filter Query by which to filter documents
     * @param object|array $replacement Replacement document
     * @param array $options Command options
     * @return array|object|null
     * @throws UnexpectedValueException if the command response was malformed
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see FindOneAndReplace::__construct() for supported options
     * @see http://docs.mongodb.org/manual/reference/command/findAndModify/
     */
    public function findOneAndReplace(object|array $filter, object|array $replacement, array $options = []): object|array|null
    {
        $server = select_server($this->manager, $options);

        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $operation = new FindOneAndReplace($this->databaseName, $this->collectionName, $filter, $replacement, $options);

        return $operation->execute($server);
    }

    /**
     * Finds a single document and updates it, returning either the original or
     * the updated document.
     *
     * The document to return may be null if no document matched the filter. By
     * default, the original document is returned. Specify
     * FindOneAndUpdate::RETURN_DOCUMENT_AFTER for the "returnDocument" option
     * to return the updated document.
     *
     * @param object|array $filter Query by which to filter documents
     * @param object|array $update Update to apply to the matched document
     * @param array $options Command options
     * @return array|object|null
     * @throws UnexpectedValueException if the command response was malformed
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see FindOneAndReplace::__construct() for supported options
     * @see http://docs.mongodb.org/manual/reference/command/findAndModify/
     */
    public function findOneAndUpdate(object|array $filter, object|array $update, array $options = []): object|array|null
    {
        $server = select_server($this->manager, $options);

        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $operation = new FindOneAndUpdate($this->databaseName, $this->collectionName, $filter, $update, $options);

        return $operation->execute($server);
    }

    /**
     * Return the collection name.
     *
     * @return string
     */
    public function getCollectionName(): string
    {
        return $this->collectionName;
    }

    /**
     * Return the database name.
     *
     * @return string
     */
    public function getDatabaseName(): string
    {
        return $this->databaseName;
    }

    /**
     * Return the Manager.
     *
     * @return Manager
     */
    public function getManager(): Manager
    {
        return $this->manager;
    }

    /**
     * Return the collection namespace.
     *
     * @see https://docs.mongodb.org/manual/reference/glossary/#term-namespace
     * @return string
     */
    public function getNamespace(): string
    {
        return $this->databaseName . '.' . $this->collectionName;
    }

    /**
     * Return the read concern for this collection.
     *
     * @see http://php.net/manual/en/mongodb-driver-readconcern.isdefault.php
     * @return ReadConcern
     */
    public function getReadConcern(): ReadConcern
    {
        return $this->readConcern;
    }

    /**
     * Return the read preference for this collection.
     *
     * @return ReadPreference
     */
    public function getReadPreference(): ReadPreference
    {
        return $this->readPreference;
    }

    /**
     * Return the type map for this collection.
     *
     * @return array
     */
    public function getTypeMap(): array
    {
        return $this->typeMap;
    }

    /**
     * Return the write concern for this collection.
     *
     * @see http://php.net/manual/en/mongodb-driver-writeconcern.isdefault.php
     * @return WriteConcern
     */
    public function getWriteConcern(): WriteConcern
    {
        return $this->writeConcern;
    }

    /**
     * Inserts multiple documents.
     *
     * @param array[]|object[] $documents The documents to insert
     * @param array $options Command options
     * @return InsertManyResult
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see http://docs.mongodb.org/manual/reference/command/insert/
     * @see InsertMany::__construct() for supported options
     */
    public function insertMany(array $documents, array $options = []): InsertManyResult
    {
        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new InsertMany($this->databaseName, $this->collectionName, $documents, $options);
        $server = select_server($this->manager, $options);

        return $operation->execute($server);
    }

    /**
     * Inserts one document.
     *
     * @param object|array $document The document to insert
     * @param array $options Command options
     * @return InsertOneResult
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see http://docs.mongodb.org/manual/reference/command/insert/
     * @see InsertOne::__construct() for supported options
     */
    public function insertOne(object|array $document, array $options = []): InsertOneResult
    {
        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new InsertOne($this->databaseName, $this->collectionName, $document, $options);
        $server = select_server($this->manager, $options);

        return $operation->execute($server);
    }

    /**
     * Returns information for all indexes for the collection.
     *
     * @param array $options
     * @return IndexInfoIterator
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see ListIndexes::__construct() for supported options
     */
    public function listIndexes(array $options = []): IndexInfoIterator
    {
        $operation = new ListIndexes($this->databaseName, $this->collectionName, $options);
        $server = select_server($this->manager, $options);

        return $operation->execute($server);
    }

    /**
     * Executes a map-reduce aggregation on the collection.
     *
     * @param JavascriptInterface $map Map function
     * @param JavascriptInterface $reduce Reduce function
     * @param object|array|string $out Output specification
     * @param array $options Command options
     * @return MapReduceResult
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @throws UnexpectedValueException if the command response was malformed
     * @see MapReduce::__construct() for supported options
     * @see http://docs.mongodb.org/manual/reference/command/mapReduce/
     */
    public function mapReduce(JavascriptInterface $map, JavascriptInterface $reduce, object|array|string $out, array $options = []): MapReduceResult
    {
        $hasOutputCollection = !is_mapreduce_output_inline($out);

        if (!isset($options['readPreference']) && !is_in_transaction($options)) {
            $options['readPreference'] = $this->readPreference;
        }

        // Check if the out option is inline because we will want to coerce a primary read preference if not
        if ($hasOutputCollection) {
            $options['readPreference'] = new ReadPreference(ReadPreference::RP_PRIMARY);
        }

        $server = select_server($this->manager, $options);

        /* A "majority" read concern is not compatible with inline output, so
         * avoid providing the Collection's read concern if it would conflict.
         *
         * A read concern is also not compatible with transactions.
         */
        if (!isset($options['readConcern']) && !($hasOutputCollection && $this->readConcern->getLevel() === ReadConcern::MAJORITY) && !is_in_transaction($options)) {
            $options['readConcern'] = $this->readConcern;
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new MapReduce($this->databaseName, $this->collectionName, $map, $reduce, $out, $options);

        return $operation->execute($server);
    }

    /**
     * Renames the collection.
     *
     * @param string $toCollectionName New name of the collection
     * @param ?string $toDatabaseName New database name of the collection. Defaults to the original database.
     * @param array $options Additional options
     * @return array|object Command result document
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see RenameCollection::__construct() for supported options
     */
    public function rename(string $toCollectionName, ?string $toDatabaseName = null, array $options = []): object|array
    {
        if (!isset($toDatabaseName)) {
            $toDatabaseName = $this->databaseName;
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $server = select_server($this->manager, $options);

        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new RenameCollection($this->databaseName, $this->collectionName, $toDatabaseName, $toCollectionName, $options);

        return $operation->execute($server);
    }

    /**
     * Replaces at most one document matching the filter.
     *
     * @param object|array $filter Query by which to filter documents
     * @param object|array $replacement Replacement document
     * @param array $options Command options
     * @return UpdateResult
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see http://docs.mongodb.org/manual/reference/command/update/
     * @see ReplaceOne::__construct() for supported options
     */
    public function replaceOne(object|array $filter, object|array $replacement, array $options = []): UpdateResult
    {
        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new ReplaceOne($this->databaseName, $this->collectionName, $filter, $replacement, $options);
        $server = select_server($this->manager, $options);

        return $operation->execute($server);
    }

    /**
     * Updates all documents matching the filter.
     *
     * @param object|array $filter Query by which to filter documents
     * @param object|array $update Update to apply to the matched documents
     * @param array $options Command options
     * @return UpdateResult
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see http://docs.mongodb.org/manual/reference/command/update/
     * @see UpdateMany::__construct() for supported options
     */
    public function updateMany(object|array $filter, object|array $update, array $options = []): UpdateResult
    {
        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new UpdateMany($this->databaseName, $this->collectionName, $filter, $update, $options);
        $server = select_server($this->manager, $options);

        return $operation->execute($server);
    }

    /**
     * Updates at most one document matching the filter.
     *
     * @param object|array $filter Query by which to filter documents
     * @param object|array $update Update to apply to the matched document
     * @param array $options Command options
     * @return UpdateResult
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see http://docs.mongodb.org/manual/reference/command/update/
     * @see UpdateOne::__construct() for supported options
     */
    public function updateOne(object|array $filter, object|array $update, array $options = []): UpdateResult
    {
        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new UpdateOne($this->databaseName, $this->collectionName, $filter, $update, $options);
        $server = select_server($this->manager, $options);

        return $operation->execute($server);
    }

    /**
     * Create a change stream for watching changes to the collection.
     *
     * @param array $pipeline List of pipeline operations
     * @param array $options Command options
     * @return ChangeStream
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @see Watch::__construct() for supported options
     */
    public function watch(array $pipeline = [], array $options = []): ChangeStream
    {
        if (!isset($options['readPreference']) && !is_in_transaction($options)) {
            $options['readPreference'] = $this->readPreference;
        }

        $server = select_server($this->manager, $options);

        /* Although change streams require a newer version of the server than
         * read concerns, perform the usual wire version check before inheriting
         * the collection's read concern. In the event that the server is too
         * old, this makes it more likely that users will encounter an error
         * related to change streams being unsupported instead of an
         * UnsupportedException regarding use of the "readConcern" option from
         * the Aggregate operation class. */
        if (!isset($options['readConcern']) && !is_in_transaction($options)) {
            $options['readConcern'] = $this->readConcern;
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $operation = new Watch($this->manager, $this->databaseName, $this->collectionName, $pipeline, $options);

        return $operation->execute($server);
    }

    /**
     * Get a clone of this collection with different options.
     *
     * @param array $options Collection constructor options
     * @return Collection
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @see Collection::__construct() for supported options
     */
    public function withOptions(array $options = []): Collection
    {
        $options += [
            'readConcern' => $this->readConcern,
            'readPreference' => $this->readPreference,
            'typeMap' => $this->typeMap,
            'writeConcern' => $this->writeConcern,
        ];

        return new Collection($this->manager, $this->databaseName, $this->collectionName, $options);
    }
}
