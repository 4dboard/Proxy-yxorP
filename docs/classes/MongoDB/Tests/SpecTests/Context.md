***

# Context

Execution context for spec tests.

This object tracks state that would be difficult to store on the test itself due to the design of PHPUnit's data
providers and setUp/tearDown methods.

* Full name: `\MongoDB\Tests\SpecTests\Context`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### bucketName

```php
public string|null $bucketName
```

***

### client

```php
private \MongoDB\Client|null $client
```

***

### collectionName

```php
public string|null $collectionName
```

***

### databaseName

```php
public string $databaseName
```

***

### defaultWriteOptions

```php
public array $defaultWriteOptions
```

***

### outcomeReadOptions

```php
public array $outcomeReadOptions
```

***

### outcomeCollectionName

```php
public string|null $outcomeCollectionName
```

***

### session0

```php
public \MongoDB\Driver\Session|null $session0
```

***

### session0Lsid

```php
public object $session0Lsid
```

***

### session1

```php
public \MongoDB\Driver\Session|null $session1
```

***

### session1Lsid

```php
public object $session1Lsid
```

***

### encryptedClient

```php
private \MongoDB\Client|null $encryptedClient
```

***

### useEncryptedClient

```php
private bool $useEncryptedClient
```

***

## Methods

### __construct

```php
private __construct(string $databaseName, ?string $collectionName): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** |  |
| `$collectionName` | **?string** |  |

***

### disableEncryption

```php
public disableEncryption(): void
```

***

### enableEncryption

```php
public enableEncryption(): void
```

***

### fromChangeStreams

```php
public static fromChangeStreams(\stdClass $test, mixed $databaseName, mixed $collectionName): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\stdClass** |  |
| `$databaseName` | **mixed** |  |
| `$collectionName` | **mixed** |  |

***

### fromClientSideEncryption

```php
public static fromClientSideEncryption(\stdClass $test, mixed $databaseName, mixed $collectionName): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\stdClass** |  |
| `$databaseName` | **mixed** |  |
| `$collectionName` | **mixed** |  |

***

### fromCommandMonitoring

```php
public static fromCommandMonitoring(\stdClass $test, mixed $databaseName, mixed $collectionName): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\stdClass** |  |
| `$databaseName` | **mixed** |  |
| `$collectionName` | **mixed** |  |

***

### fromCrud

```php
public static fromCrud(\stdClass $test, mixed $databaseName, mixed $collectionName): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\stdClass** |  |
| `$databaseName` | **mixed** |  |
| `$collectionName` | **mixed** |  |

***

### fromReadWriteConcern

```php
public static fromReadWriteConcern(\stdClass $test, mixed $databaseName, mixed $collectionName): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\stdClass** |  |
| `$databaseName` | **mixed** |  |
| `$collectionName` | **mixed** |  |

***

### fromRetryableReads

```php
public static fromRetryableReads(\stdClass $test, mixed $databaseName, mixed $collectionName, mixed $bucketName): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\stdClass** |  |
| `$databaseName` | **mixed** |  |
| `$collectionName` | **mixed** |  |
| `$bucketName` | **mixed** |  |

***

### fromRetryableWrites

```php
public static fromRetryableWrites(\stdClass $test, mixed $databaseName, mixed $collectionName, mixed $useMultipleMongoses): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\stdClass** |  |
| `$databaseName` | **mixed** |  |
| `$collectionName` | **mixed** |  |
| `$useMultipleMongoses` | **mixed** |  |

***

### fromTransactions

```php
public static fromTransactions(\stdClass $test, mixed $databaseName, mixed $collectionName, mixed $useMultipleMongoses): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\stdClass** |  |
| `$databaseName` | **mixed** |  |
| `$collectionName` | **mixed** |  |
| `$useMultipleMongoses` | **mixed** |  |

***

### getAWSCredentials

```php
public static getAWSCredentials(): array
```

* This method is **static**.

***

### getAzureCredentials

```php
public static getAzureCredentials(): array
```

* This method is **static**.

***

### getKmipEndpoint

```php
public static getKmipEndpoint(): string
```

* This method is **static**.

***

### getKmsTlsOptions

```php
public static getKmsTlsOptions(): array
```

* This method is **static**.

***

### getGCPCredentials

```php
public static getGCPCredentials(): array
```

* This method is **static**.

***

### getClient

```php
public getClient(): \MongoDB\Client
```

***

### getCollection

```php
public getCollection(array $collectionOptions = [], array $databaseOptions = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collectionOptions` | **array** |  |
| `$databaseOptions` | **array** |  |

***

### getDatabase

```php
public getDatabase(array $databaseOptions = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseOptions` | **array** |  |

***

### getGridFSBucket

```php
public getGridFSBucket(array $bucketOptions = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bucketOptions` | **array** |  |

***

### prepareOptions

Prepare options readConcern, readPreference, and writeConcern options by creating value objects.

```php
public prepareOptions(array $options): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***

### replaceArgumentSessionPlaceholder

Replace a session placeholder in an operation arguments array.

```php
public replaceArgumentSessionPlaceholder(array& $args): void
```

Note: this method will modify the $args parameter.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** | Operation arguments |

***

### replaceCommandSessionPlaceholder

Replace a logical session ID placeholder in a command document.

```php
public replaceCommandSessionPlaceholder(\stdClass $command): void
```

Note: this method will modify the $command parameter.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **\stdClass** | Command document |

***

### selectCollection

```php
public selectCollection(mixed $databaseName, mixed $collectionName, array $collectionOptions = [], array $databaseOptions = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **mixed** |  |
| `$collectionName` | **mixed** |  |
| `$collectionOptions` | **array** |  |
| `$databaseOptions` | **array** |  |

***

### selectDatabase

```php
public selectDatabase(mixed $databaseName, array $databaseOptions = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **mixed** |  |
| `$databaseOptions` | **array** |  |

***

### selectGridFSBucket

```php
public selectGridFSBucket(mixed $databaseName, mixed $bucketName, array $bucketOptions = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **mixed** |  |
| `$bucketName` | **mixed** |  |
| `$bucketOptions` | **array** |  |

***

### prepareGridFSBucketOptions

```php
private prepareGridFSBucketOptions(array $options, mixed $bucketPrefix): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |
| `$bucketPrefix` | **mixed** |  |

***

### prepareSessionOptions

```php
private prepareSessionOptions(array $options): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***


***

