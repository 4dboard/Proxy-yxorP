<?php namespace yxorP\app\lib\data\mongoDB;

use Iterator;
use JetBrains\PhpStorm\ArrayShape;
use MongoDB\Driver\ReadConcern;
use yxorP\app\lib\http\mongoDB\Driver\Manager;
use yxorP\app\lib\http\mongoDB\Driver\ReadConcern;
use yxorP\app\lib\http\mongoDB\Driver\ReadPreference;
use yxorP\app\lib\http\mongoDB\Driver\WriteConcern;
use yxorP\app\lib\http\mongoDB\Exception\InvalidArgumentException;
use yxorP\app\lib\http\mongoDB\Exception\UnexpectedValueException;
use yxorP\app\lib\http\mongoDB\Exception\UnsupportedException;
use yxorP\app\lib\http\mongoDB\GridFS\Bucket;
use yxorP\app\lib\http\mongoDB\Model\BSONArray;
use yxorP\app\lib\http\mongoDB\Model\BSONDocument;
use yxorP\app\lib\http\mongoDB\Model\CollectionInfoIterator;
use yxorP\app\lib\http\mongoDB\Operation\Aggregate;
use yxorP\app\lib\http\mongoDB\Operation\CreateCollection;
use yxorP\app\lib\http\mongoDB\Operation\DatabaseCommand;
use yxorP\app\lib\http\mongoDB\Operation\DropCollection;
use yxorP\app\lib\http\mongoDB\Operation\DropDatabase;
use yxorP\app\lib\http\mongoDB\Operation\ListCollectionNames;
use yxorP\app\lib\http\mongoDB\Operation\ListCollections;
use yxorP\app\lib\http\mongoDB\Operation\ModifyCollection;
use yxorP\app\lib\http\mongoDB\Operation\RenameCollection;
use yxorP\app\lib\http\mongoDB\Operation\Watch;
use function is_array;
use function strlen;

class database
{
    private static array $defaultTypeMap = ['array' => BSONArray::class, 'document' => BSONDocument::class, 'root' => BSONDocument::class,];
    private static int $wireVersionForReadConcernWithWriteStage = 8;
    private string $databaseName;
    private Manager $manager;
    private \yxorP\app\lib\data\mongoDB\ReadConcern $readConcern;
    private ReadPreference $readPreference;
    private array $typeMap;
    private \yxorP\app\lib\data\mongoDB\WriteConcern $writeConcern;

    public function __construct(Manager $manager, $databaseName, array $options = [])
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

    #[ArrayShape(['databaseName' => "string", 'manager' => "\yxorP\app\lib\http\mongoDB\Driver\Manager", 'readConcern' => "mixed", 'readPreference' => "mixed", 'typeMap' => "array|string[]", 'writeConcern' => "mixed"])] public function __debugInfo()
    {
        return ['databaseName' => $this->databaseName, 'manager' => $this->manager, 'readConcern' => $this->readConcern, 'readPreference' => $this->readPreference, 'typeMap' => $this->typeMap, 'writeConcern' => $this->writeConcern,];
    }

    public function __get($collectionName)
    {
        return $this->selectCollection($collectionName);
    }

    public function selectCollection($collectionName, array $options = []): collection
    {
        $options += ['readConcern' => $this->readConcern, 'readPreference' => $this->readPreference, 'typeMap' => $this->typeMap, 'writeConcern' => $this->writeConcern,];
        return new collection($this->manager, $this->databaseName, $collectionName, $options);
    }

    public function __toString()
    {
        return $this->databaseName;
    }

    public function aggregate(array $pipeline, array $options = [])
    {
        $hasWriteStage = is_last_pipeline_operator_write($pipeline);
        if (!isset($options['readPreference']) && !is_in_transaction($options)) {
            $options['readPreference'] = $this->readPreference;
        }
        $server = $hasWriteStage ? select_server_for_aggregate_write_stage($this->manager, $options) : select_server($this->manager, $options);
        if (!isset($options['readConcern']) && !is_in_transaction($options) && (!$hasWriteStage || server_supports_feature($server, self::$wireVersionForReadConcernWithWriteStage))) {
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

    public function command($command, array $options = [])
    {
        if (!isset($options['typeMap'])) {
            $options['typeMap'] = $this->typeMap;
        }
        $operation = new DatabaseCommand($this->databaseName, $command, $options);
        $server = select_server($this->manager, $options);
        return $operation->execute($server);
    }

    public function createCollection($collectionName, array $options = [])
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

    public function drop(array $options = [])
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

    public function dropCollection($collectionName, array $options = [])
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

    public function getDatabaseName(): string
    {
        return $this->databaseName;
    }

    public function getManager(): Manager
    {
        return $this->manager;
    }

    public function getReadConcern(): \yxorP\app\lib\data\mongoDB\ReadConcern
    {
        return $this->readConcern;
    }

    public function getReadPreference(): ReadPreference
    {
        return $this->readPreference;
    }

    public function getTypeMap(): array
    {
        return $this->typeMap;
    }

    public function getWriteConcern(): \yxorP\app\lib\data\mongoDB\WriteConcern
    {
        return $this->writeConcern;
    }

    public function listCollectionNames(array $options = []): Iterator
    {
        $operation = new ListCollectionNames($this->databaseName, $options);
        $server = select_server($this->manager, $options);
        return $operation->execute($server);
    }

    public function listCollections(array $options = [])
    {
        $operation = new ListCollections($this->databaseName, $options);
        $server = select_server($this->manager, $options);
        return $operation->execute($server);
    }

    public function modifyCollection($collectionName, array $collectionOptions, array $options = [])
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

    public function renameCollection(string $fromCollectionName, string $toCollectionName, ?string $toDatabaseName = null, array $options = [])
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

    public function selectGridFSBucket(array $options = []): Bucket
    {
        $options += ['readConcern' => $this->readConcern, 'readPreference' => $this->readPreference, 'typeMap' => $this->typeMap, 'writeConcern' => $this->writeConcern,];
        return new Bucket($this->manager, $this->databaseName, $options);
    }

    public function watch(array $pipeline = [], array $options = [])
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

    public function withOptions(array $options = []): database
    {
        $options += ['readConcern' => $this->readConcern, 'readPreference' => $this->readPreference, 'typeMap' => $this->typeMap, 'writeConcern' => $this->writeConcern,];
        return new database($this->manager, $this->databaseName, $options);
    }
}
