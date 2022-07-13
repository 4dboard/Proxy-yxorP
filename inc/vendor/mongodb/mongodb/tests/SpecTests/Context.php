<?php

namespace MongoDB\Tests\SpecTests;

use JetBrains\PhpStorm\ArrayShape;
use LogicException;
use MongoDB\Client;
use MongoDB\Driver\ReadConcern;
use MongoDB\Driver\ReadPreference;
use MongoDB\Driver\Session;
use MongoDB\Driver\WriteConcern;
use PHPUnit\Framework\Assert;
use stdClass;
use function array_diff_key;
use function array_keys;
use function getenv;
use function implode;
use function mt_rand;
use function uniqid;

/**
 * Execution context for spec tests.
 *
 * This object tracks state that would be difficult to store on the test itself
 * due to the design of PHPUnit's data providers and setUp/tearDown methods.
 */
final class Context
{
    /** @var string|null */
    public ?string $bucketName;
    /** @var string|null */
    public ?string $collectionName;
    /** @var string */
    public string $databaseName;
    /** @var array */
    public array $defaultWriteOptions = [];
    /** @var array */
    public array $outcomeReadOptions = [];
    /** @var string|null */
    public ?string $outcomeCollectionName;
    /** @var Session|null */
    public ?Session $session0;
    /** @var object */
    public object $session0Lsid;
    /** @var Session|null */
    public ?Session $session1;
    /** @var object */
    public object $session1Lsid;
    /** @var Client|null */
    private ?Client $client;
    /** @var Client|null */
    private ?Client $encryptedClient;

    /** @var bool */
    private bool $useEncryptedClient = false;

    private function __construct(string $databaseName, ?string $collectionName)
    {
        $this->databaseName = $databaseName;
        $this->collectionName = $collectionName;
        $this->outcomeCollectionName = $collectionName;
    }

    public static function fromChangeStreams(stdClass $test, $databaseName, $collectionName): Context
    {
        $o = new self($databaseName, $collectionName);

        $o->client = FunctionalTestCase::createTestClient();

        return $o;
    }

    public static function fromClientSideEncryption(stdClass $test, $databaseName, $collectionName): Context
    {
        $o = new self($databaseName, $collectionName);

        $clientOptions = isset($test->clientOptions) ? (array)$test->clientOptions : [];

        /* mongocryptd caches collection information, which causes test failures
         * if we reuse the client. Thus, we add a random value to ensure we're
         * creating a new client for each test. */
        $driverOptions = ['random' => uniqid()];

        $autoEncryptionOptions = [];

        if (isset($clientOptions['autoEncryptOpts'])) {
            $autoEncryptionOptions = (array)$clientOptions['autoEncryptOpts'] + ['keyVaultNamespace' => 'keyvault.datakeys'];
            unset($clientOptions['autoEncryptOpts']);

            if (isset($autoEncryptionOptions['kmsProviders']->aws)) {
                $autoEncryptionOptions['kmsProviders']->aws = self::getAWSCredentials();
            }

            if (isset($autoEncryptionOptions['kmsProviders']->azure)) {
                $autoEncryptionOptions['kmsProviders']->azure = self::getAzureCredentials();
            }

            if (isset($autoEncryptionOptions['kmsProviders']->gcp)) {
                $autoEncryptionOptions['kmsProviders']->gcp = self::getGCPCredentials();
            }

            if (isset($autoEncryptionOptions['kmsProviders']->kmip)) {
                $autoEncryptionOptions['kmsProviders']->kmip = ['endpoint' => self::getKmipEndpoint()];

                if (empty($autoEncryptionOptions['tlsOptions'])) {
                    $autoEncryptionOptions['tlsOptions'] = new stdClass();
                }

                $autoEncryptionOptions['tlsOptions']->kmip = self::getKmsTlsOptions();
            }
        }

        if (isset($test->outcome->collection->name)) {
            $o->outcomeCollectionName = $test->outcome->collection->name;
        }

        $o->client = FunctionalTestCase::createTestClient(null, $clientOptions, $driverOptions);

        if ($autoEncryptionOptions !== []) {
            $o->encryptedClient = FunctionalTestCase::createTestClient(null, $clientOptions, $driverOptions + ['autoEncryption' => $autoEncryptionOptions]);
        }

        return $o;
    }

    #[ArrayShape(['accessKeyId' => "array|false|string", 'secretAccessKey' => "array|false|string"])] public static function getAWSCredentials(): array
    {
        if (!getenv('AWS_ACCESS_KEY_ID') || !getenv('AWS_SECRET_ACCESS_KEY')) {
            Assert::markTestSkipped('Please configure AWS credentials to use AWS KMS provider.');
        }

        return [
            'accessKeyId' => getenv('AWS_ACCESS_KEY_ID'),
            'secretAccessKey' => getenv('AWS_SECRET_ACCESS_KEY'),
        ];
    }

    #[ArrayShape(['tenantId' => "array|false|string", 'clientId' => "array|false|string", 'clientSecret' => "array|false|string"])] public static function getAzureCredentials(): array
    {
        if (!getenv('AZURE_TENANT_ID') || !getenv('AZURE_CLIENT_ID') || !getenv('AZURE_CLIENT_SECRET')) {
            Assert::markTestSkipped('Please configure Azure credentials to use Azure KMS provider.');
        }

        return [
            'tenantId' => getenv('AZURE_TENANT_ID'),
            'clientId' => getenv('AZURE_CLIENT_ID'),
            'clientSecret' => getenv('AZURE_CLIENT_SECRET'),
        ];
    }

    #[ArrayShape(['email' => "array|false|string", 'privateKey' => "array|false|string"])] public static function getGCPCredentials(): array
    {
        if (!getenv('GCP_EMAIL') || !getenv('GCP_PRIVATE_KEY')) {
            Assert::markTestSkipped('Please configure GCP credentials to use GCP KMS provider.');
        }

        return [
            'email' => getenv('GCP_EMAIL'),
            'privateKey' => getenv('GCP_PRIVATE_KEY'),
        ];
    }

    public static function getKmipEndpoint(): string
    {
        if (!getenv('KMIP_ENDPOINT')) {
            Assert::markTestSkipped('Please configure KMIP endpoint to use KMIP KMS provider.');
        }

        return getenv('KMIP_ENDPOINT');
    }

    #[ArrayShape(['tlsCAFile' => "array|false|string", 'tlsCertificateKeyFile' => "array|false|string"])] public static function getKmsTlsOptions(): array
    {
        if (!getenv('KMS_TLS_CA_FILE') || !getenv('KMS_TLS_CERTIFICATE_KEY_FILE')) {
            Assert::markTestSkipped('Please configure KMS TLS options.');
        }

        return [
            'tlsCAFile' => getenv('KMS_TLS_CA_FILE'),
            'tlsCertificateKeyFile' => getenv('KMS_TLS_CERTIFICATE_KEY_FILE'),
        ];
    }

    public static function fromCommandMonitoring(stdClass $test, $databaseName, $collectionName): Context
    {
        $o = new self($databaseName, $collectionName);

        $o->client = FunctionalTestCase::createTestClient();

        return $o;
    }

    public static function fromCrud(stdClass $test, $databaseName, $collectionName): Context
    {
        $o = new self($databaseName, $collectionName);

        $clientOptions = isset($test->clientOptions) ? (array)$test->clientOptions : [];

        if (isset($test->outcome->collection->name)) {
            $o->outcomeCollectionName = $test->outcome->collection->name;
        }

        $o->defaultWriteOptions = [
            'writeConcern' => new WriteConcern(WriteConcern::MAJORITY),
        ];

        $o->outcomeReadOptions = [
            'readConcern' => new ReadConcern('local'),
            'readPreference' => new ReadPreference('primary'),
        ];

        $o->client = FunctionalTestCase::createTestClient(null, $clientOptions);

        return $o;
    }

    public static function fromReadWriteConcern(stdClass $test, $databaseName, $collectionName): Context
    {
        $o = new self($databaseName, $collectionName);

        if (isset($test->outcome->collection->name)) {
            $o->outcomeCollectionName = $test->outcome->collection->name;
        }

        $clientOptions = isset($test->clientOptions) ? (array)$test->clientOptions : [];

        $o->client = FunctionalTestCase::createTestClient(null, $clientOptions);

        return $o;
    }

    public static function fromRetryableReads(stdClass $test, $databaseName, $collectionName, $bucketName): Context
    {
        $o = new self($databaseName, $collectionName);

        $o->bucketName = $bucketName;

        $clientOptions = isset($test->clientOptions) ? (array)$test->clientOptions : [];

        $o->client = FunctionalTestCase::createTestClient(null, $clientOptions);

        return $o;
    }

    public static function fromRetryableWrites(stdClass $test, $databaseName, $collectionName, $useMultipleMongoses): Context
    {
        $o = new self($databaseName, $collectionName);

        $clientOptions = isset($test->clientOptions) ? (array)$test->clientOptions : [];

        if (isset($test->outcome->collection->name)) {
            $o->outcomeCollectionName = $test->outcome->collection->name;
        }

        $o->client = FunctionalTestCase::createTestClient(FunctionalTestCase::getUri($useMultipleMongoses), $clientOptions);

        return $o;
    }

    public static function fromTransactions(stdClass $test, $databaseName, $collectionName, $useMultipleMongoses): Context
    {
        $o = new self($databaseName, $collectionName);

        $o->defaultWriteOptions = [
            'writeConcern' => new WriteConcern(WriteConcern::MAJORITY),
        ];

        $o->outcomeReadOptions = [
            'readConcern' => new ReadConcern('local'),
            'readPreference' => new ReadPreference('primary'),
        ];

        $clientOptions = isset($test->clientOptions) ? (array)$test->clientOptions : [];

        /* Transaction spec tests expect a new client for each test so that
         * txnNumber values are deterministic. Append a random option to avoid
         * re-using a previously persisted libmongoc client object. */
        $clientOptions += ['p' => mt_rand()];

        $o->client = FunctionalTestCase::createTestClient(FunctionalTestCase::getUri($useMultipleMongoses), $clientOptions);

        $session0Options = isset($test->sessionOptions->session0) ? (array)$test->sessionOptions->session0 : [];
        $session1Options = isset($test->sessionOptions->session1) ? (array)$test->sessionOptions->session1 : [];

        $o->session0 = $o->client->startSession($o->prepareSessionOptions($session0Options));
        $o->session1 = $o->client->startSession($o->prepareSessionOptions($session1Options));

        $o->session0Lsid = $o->session0->getLogicalSessionId();
        $o->session1Lsid = $o->session1->getLogicalSessionId();

        return $o;
    }

    private function prepareSessionOptions(array $options): array
    {
        if (isset($options['defaultTransactionOptions'])) {
            $options['defaultTransactionOptions'] = $this->prepareOptions((array)$options['defaultTransactionOptions']);
        }

        return $options;
    }

    /**
     * Prepare options readConcern, readPreference, and writeConcern options by
     * creating value objects.
     *
     * @param array $options
     * @return array
     * @throws LogicException if any option keys are unsupported
     */
    public function prepareOptions(array $options): array
    {
        if (isset($options['readConcern']) && !($options['readConcern'] instanceof ReadConcern)) {
            $readConcern = (array)$options['readConcern'];
            $diff = array_diff_key($readConcern, ['level' => 1]);

            if (!empty($diff)) {
                throw new LogicException('Unsupported readConcern args: ' . implode(',', array_keys($diff)));
            }

            $options['readConcern'] = new ReadConcern($readConcern['level']);
        }

        if (isset($options['readPreference']) && !($options['readPreference'] instanceof ReadPreference)) {
            $readPreference = (array)$options['readPreference'];
            $diff = array_diff_key($readPreference, ['mode' => 1]);

            if (!empty($diff)) {
                throw new LogicException('Unsupported readPreference args: ' . implode(',', array_keys($diff)));
            }

            $options['readPreference'] = new ReadPreference($readPreference['mode']);
        }

        if (isset($options['writeConcern']) && !($options['writeConcern'] instanceof WriteConcern)) {
            $writeConcern = (array)$options['writeConcern'];
            $diff = array_diff_key($writeConcern, ['w' => 1, 'wtimeout' => 1, 'j' => 1]);

            if (!empty($diff)) {
                throw new LogicException('Unsupported writeConcern args: ' . implode(',', array_keys($diff)));
            }

            if (!empty($writeConcern)) {
                $w = $writeConcern['w'];
                $wtimeout = $writeConcern['wtimeout'] ?? 0;
                $j = $writeConcern['j'] ?? null;

                $options['writeConcern'] = isset($j)
                    ? new WriteConcern($w, $wtimeout, $j)
                    : new WriteConcern($w, $wtimeout);
            } else {
                unset($options['writeConcern']);
            }
        }

        return $options;
    }

    public function disableEncryption(): void
    {
        $this->useEncryptedClient = false;
    }

    public function enableEncryption(): void
    {
        if (!$this->encryptedClient instanceof Client) {
            throw new LogicException('Cannot enable encryption without autoEncryption options');
        }

        $this->useEncryptedClient = true;
    }

    public function getCollection(array $collectionOptions = [], array $databaseOptions = []): \MongoDB\Collection
    {
        return $this->selectCollection(
            $this->databaseName,
            $this->collectionName,
            $collectionOptions,
            $databaseOptions
        );
    }

    public function selectCollection($databaseName, $collectionName, array $collectionOptions = [], array $databaseOptions = []): \MongoDB\Collection
    {
        return $this
            ->selectDatabase($databaseName, $databaseOptions)
            ->selectCollection($collectionName, $this->prepareOptions($collectionOptions));
    }

    public function selectDatabase($databaseName, array $databaseOptions = []): \MongoDB\Database
    {
        return $this->getClient()->selectDatabase(
            $databaseName,
            $this->prepareOptions($databaseOptions)
        );
    }

    public function getClient(): Client
    {
        return $this->useEncryptedClient && $this->encryptedClient ? $this->encryptedClient : $this->client;
    }

    public function getDatabase(array $databaseOptions = []): \MongoDB\Database
    {
        return $this->selectDatabase($this->databaseName, $databaseOptions);
    }

    public function getGridFSBucket(array $bucketOptions = []): \MongoDB\GridFS\Bucket
    {
        return $this->selectGridFSBucket($this->databaseName, $this->bucketName, $bucketOptions);
    }

    public function selectGridFSBucket($databaseName, $bucketName, array $bucketOptions = []): \MongoDB\GridFS\Bucket
    {
        return $this->selectDatabase($databaseName)->selectGridFSBucket($this->prepareGridFSBucketOptions($bucketOptions, $bucketName));
    }

    private function prepareGridFSBucketOptions(array $options, $bucketPrefix): array
    {
        if ($bucketPrefix !== null) {
            $options['bucketPrefix'] = $bucketPrefix;
        }

        return $options;
    }

    /**
     * Replace a session placeholder in an operation arguments array.
     *
     * Note: this method will modify the $args parameter.
     *
     * @param array $args Operation arguments
     * @throws LogicException if the session placeholder is unsupported
     */
    public function replaceArgumentSessionPlaceholder(array &$args): void
    {
        if (!isset($args['session'])) {
            return;
        }

        $args['session'] = match ($args['session']) {
            'session0' => $this->session0,
            'session1' => $this->session1,
            default => throw new LogicException('Unsupported session placeholder: ' . $args['session']),
        };
    }

    /**
     * Replace a logical session ID placeholder in a command document.
     *
     * Note: this method will modify the $command parameter.
     *
     * @param stdClass $command Command document
     * @throws LogicException if the session placeholder is unsupported
     */
    public function replaceCommandSessionPlaceholder(stdClass $command): void
    {
        if (!isset($command->lsid)) {
            return;
        }

        $command->lsid = match ($command->lsid) {
            'session0' => $this->session0Lsid,
            'session1' => $this->session1Lsid,
            default => throw new LogicException('Unsupported session placeholder: ' . $command->lsid),
        };
    }
}
