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

use Iterator;
use JetBrains\PhpStorm\ArrayShape;
use MongoDB\Driver\Cursor;
use MongoDB\Driver\Exception\RuntimeException as DriverRuntimeException;
use MongoDB\Driver\Manager;
use MongoDB\Driver\ReadConcern;
use MongoDB\Driver\ReadPreference;
use MongoDB\Driver\WriteConcern;
use MongoDB\Exception\InvalidArgumentException;
use MongoDB\Exception\UnexpectedValueException;
use MongoDB\Exception\UnsupportedException;
use MongoDB\GridFS\Bucket;
use MongoDB\Model\BSONArray;
use MongoDB\Model\BSONDocument;
use MongoDB\Model\CollectionInfoIterator;
use MongoDB\Operation\Aggregate;
use MongoDB\Operation\CreateCollection;
use MongoDB\Operation\DatabaseCommand;
use MongoDB\Operation\DropCollection;
use MongoDB\Operation\DropDatabase;
use MongoDB\Operation\ListCollectionNames;
use MongoDB\Operation\ListCollections;
use MongoDB\Operation\ModifyCollection;
use MongoDB\Operation\RenameCollection;
use MongoDB\Operation\Watch;
use Traversable;
use function is_array;
use function strlen;

/**
 * @property \MongoDB\Collection $sales
 * @property \MongoDB\Collection $sales
 * @property \MongoDB\Collection $sales
 * @property \MongoDB\Collection $sales
 * @property \MongoDB\Collection $items
 * @property \MongoDB\Collection $items
 * @property \MongoDB\Collection $items
 * @property \MongoDB\Collection $events
 * @property \MongoDB\Collection $employees
 * @property \MongoDB\Collection $events
 * @property \MongoDB\Collection $employees
 * @property \MongoDB\Collection $restaurants
 * @property \MongoDB\Collection $records
 * @property \MongoDB\Collection $air_alliances
 * @property \MongoDB\Collection $sales
 * @property \MongoDB\Collection $sales
 * @property \MongoDB\Collection $sales
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $inventory
 * @property \MongoDB\Collection $driverdata
 * @property Collection $foo
 * @property Collection $foo
 */
class Database
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
     * Constructs new Database instance.
     *
     * This class provides methods for database-specific operations and serves
     * as a gateway for accessing collections.
     *
     * Supported options:
     *
     *  * readConcern (MongoDB\Driver\ReadConcern): The default read concern to
     *    use for database operations and selected collections. Defaults to the
     *    Manager's read concern.
     *
     *  * readPreference (MongoDB\Driver\ReadPreference): The default read
     *    preference to use for database operations and selected collections.
     *    Defaults to the Manager's read preference.
     *
     *  * typeMap (array): Default type map for cursors and BSON documents.
     *
     *  * writeConcern (MongoDB\Driver\WriteConcern): The default write concern
     *    to use for database operations and selected collections. Defaults to
     *    the Manager's write concern.
     *
     * @param Manager $manager Manager instance from the driver
     * @param string $databaseName Database name
     * @param array $options Database options
     * @throws InvalidArgumentException for parameter/option parsing errors
     */
    public function __construct(Manager $manager, string $databaseName, array $options = [])
    {
        if (strlen((string)$databaseName) < 1) {
            throw new InvalidArgumentException('$databaseName is invalid: ' . $databaseName);
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
    #[ArrayShape(['databaseName' => "string", 'manager' => "\MongoDB\Driver\Manager", 'readConcern' => "\MongoDB\Driver\ReadConcern", 'readPreference' => "\MongoDB\Driver\ReadPreference", 'typeMap' => "array|string[]", 'writeConcern' => "\MongoDB\Driver\WriteConcern"])] public function __debugInfo()
    {
        return [
            'databaseName' => $this->databaseName,
            'manager' => $this->manager,
            'readConcern' => $this->readConcern,
            'readPreference' => $this->readPreference,
            'typeMap' => $this->typeMap,
            'writeConcern' => $this->writeConcern,
        ];
    }

    /**
     * Select a collection within this database.
     *
     * Note: collections whose names contain special characters (e.g. ".") may
     * be selected with complex syntax (e.g. $database->{"system.profile"}) or
     * {@link selectCollection()}.
     *
     * @see http://php.net/oop5.overloading#object.get
     * @see http://php.net/types.string#language.types.string.parsing.complex
     * @param string $collectionName Name of the collection to select
     * @return Collection
     */
    public function __get(string $collectionName)
    {
        return $this->selectCollection($collectionName);
    }

    /**
     * Select a collection within this database.
     *
     * @param string $collectionName Name of the collection to select
     * @param array $options Collection constructor options
     * @return Collection
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @see Collection::__construct() for supported options
     */
    public function selectCollection(string $collectionName, array $options = []): Collection
    {
        $options += [
            'readConcern' => $this->readConcern,
            'readPreference' => $this->readPreference,
            'typeMap' => $this->typeMap,
            'writeConcern' => $this->writeConcern,
        ];

        return new Collection($this->manager, $this->databaseName, $collectionName, $options);
    }

    /**
     * Return the database name.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->databaseName;
    }

    /**
     * Runs an aggregation framework pipeline on the database for pipeline
     * stages that do not require an underlying collection, such as $currentOp
     * and $listLocalSessions. Requires MongoDB >= 3.6
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

        $operation = new Aggregate($this->databaseName, null, $pipeline, $options);

        return $operation->execute($server);
    }

    /**
     * Execute a command on this database.
     *
     * @param object|array $command Command document
     * @param array $options Options for command execution
     * @return Cursor
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see DatabaseCommand::__construct() for supported options
     */
    public function command(object|array $command, array $options = []): Cursor
    {
        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $operation = new DatabaseCommand($this->databaseName, $command, $options);
        $server = select_server($this->manager, $options);

        return $operation->execute($server);
    }

    /**
     * Create a new collection explicitly.
     *
     * @param string $collectionName
     * @param array $options
     * @return array|object Command result document
     * @throws UnsupportedException if options are not supported by the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see CreateCollection::__construct() for supported options
     */
    public function createCollection(string $collectionName, array $options = []): object|array
    {
        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $server = select_server($this->manager, $options);

        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new CreateCollection($this->databaseName, $collectionName, $options);

        return $operation->execute($server);
    }

    /**
     * Drop this database.
     *
     * @param array $options Additional options
     * @return array|object Command result document
     * @throws UnsupportedException if options are unsupported on the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see DropDatabase::__construct() for supported options
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

        $operation = new DropDatabase($this->databaseName, $options);

        return $operation->execute($server);
    }

    /**
     * Drop a collection within this database.
     *
     * @param string $collectionName Collection name
     * @param array $options Additional options
     * @return array|object Command result document
     * @throws UnsupportedException if options are unsupported on the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see DropCollection::__construct() for supported options
     */
    public function dropCollection(string $collectionName, array $options = []): object|array
    {
        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $server = select_server($this->manager, $options);

        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new DropCollection($this->databaseName, $collectionName, $options);

        return $operation->execute($server);
    }

    /**
     * Returns the database name.
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
     * Return the read concern for this database.
     *
     * @see http://php.net/manual/en/mongodb-driver-readconcern.isdefault.php
     * @return ReadConcern
     */
    public function getReadConcern(): ReadConcern
    {
        return $this->readConcern;
    }

    /**
     * Return the read preference for this database.
     *
     * @return ReadPreference
     */
    public function getReadPreference(): ReadPreference
    {
        return $this->readPreference;
    }

    /**
     * Return the type map for this database.
     *
     * @return array
     */
    public function getTypeMap(): array
    {
        return $this->typeMap;
    }

    /**
     * Return the write concern for this database.
     *
     * @see http://php.net/manual/en/mongodb-driver-writeconcern.isdefault.php
     * @return WriteConcern
     */
    public function getWriteConcern(): WriteConcern
    {
        return $this->writeConcern;
    }

    /**
     * Returns the names of all collections in this database
     *
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see ListCollectionNames::__construct() for supported options
     */
    public function listCollectionNames(array $options = []): Iterator
    {
        $operation = new ListCollectionNames($this->databaseName, $options);
        $server = select_server($this->manager, $options);

        return $operation->execute($server);
    }

    /**
     * Returns information for all collections in this database.
     *
     * @param array $options
     * @return CollectionInfoIterator
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see ListCollections::__construct() for supported options
     */
    public function listCollections(array $options = []): CollectionInfoIterator
    {
        $operation = new ListCollections($this->databaseName, $options);
        $server = select_server($this->manager, $options);

        return $operation->execute($server);
    }

    /**
     * Modifies a collection or view.
     *
     * @param string $collectionName Collection or view to modify
     * @param array $collectionOptions Collection or view options to assign
     * @param array $options Command options
     * @return array|object
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see ModifyCollection::__construct() for supported options
     */
    public function modifyCollection(string $collectionName, array $collectionOptions, array $options = []): object|array
    {
        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $server = select_server($this->manager, $options);

        if (!isset($options['writeConcern']) && !is_in_transaction($options)) {
            $options['writeConcern'] = $this->writeConcern;
        }

        $operation = new ModifyCollection($this->databaseName, $collectionName, $collectionOptions, $options);

        return $operation->execute($server);
    }

    /**
     * Rename a collection within this database.
     *
     * @param string $fromCollectionName Collection name
     * @param string $toCollectionName New name of the collection
     * @param ?string $toDatabaseName New database name of the collection. Defaults to the original database.
     * @param array $options Additional options
     * @return array|object Command result document
     * @throws UnsupportedException if options are unsupported on the selected server
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @throws DriverRuntimeException for other driver errors (e.g. connection errors)
     * @see RenameCollection::__construct() for supported options
     */
    public function renameCollection(string $fromCollectionName, string $toCollectionName, ?string $toDatabaseName = null, array $options = []): object|array
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

        $operation = new RenameCollection($this->databaseName, $fromCollectionName, $toDatabaseName, $toCollectionName, $options);

        return $operation->execute($server);
    }

    /**
     * Select a GridFS bucket within this database.
     *
     * @param array $options Bucket constructor options
     * @return Bucket
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @see Bucket::__construct() for supported options
     */
    public function selectGridFSBucket(array $options = []): Bucket
    {
        $options += [
            'readConcern' => $this->readConcern,
            'readPreference' => $this->readPreference,
            'typeMap' => $this->typeMap,
            'writeConcern' => $this->writeConcern,
        ];

        return new Bucket($this->manager, $this->databaseName, $options);
    }

    /**
     * Create a change stream for watching changes to the database.
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

        if (!isset($options['readConcern']) && !is_in_transaction($options)) {
            $options['readConcern'] = $this->readConcern;
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }

        $operation = new Watch($this->manager, $this->databaseName, null, $pipeline, $options);

        return $operation->execute($server);
    }

    /**
     * Get a clone of this database with different options.
     *
     * @param array $options Database constructor options
     * @return Database
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @see Database::__construct() for supported options
     */
    public function withOptions(array $options = []): Database
    {
        $options += [
            'readConcern' => $this->readConcern,
            'readPreference' => $this->readPreference,
            'typeMap' => $this->typeMap,
            'writeConcern' => $this->writeConcern,
        ];

        return new Database($this->manager, $this->databaseName, $options);
    }
}
