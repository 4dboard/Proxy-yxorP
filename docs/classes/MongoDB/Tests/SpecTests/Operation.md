***

# Operation

Spec test operation.

* Full name: `\MongoDB\Tests\SpecTests\Operation`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`OBJECT_CLIENT`|public| |&#039;client&#039;|
|`OBJECT_COLLECTION`|public| |&#039;collection&#039;|
|`OBJECT_DATABASE`|public| |&#039;database&#039;|
|`OBJECT_GRIDFS_BUCKET`|public| |&#039;gridfsbucket&#039;|
|`OBJECT_SELECT_COLLECTION`|public| |&#039;selectCollection&#039;|
|`OBJECT_SELECT_DATABASE`|public| |&#039;selectDatabase&#039;|
|`OBJECT_SESSION0`|public| |&#039;session0&#039;|
|`OBJECT_SESSION1`|public| |&#039;session1&#039;|
|`OBJECT_TEST_RUNNER`|public| |&#039;testRunner&#039;|

## Properties

### errorExpectation

```php
public \MongoDB\Tests\SpecTests\ErrorExpectation|null $errorExpectation
```

***

### resultExpectation

```php
public \MongoDB\Tests\SpecTests\ResultExpectation|null $resultExpectation
```

***

### arguments

```php
private array $arguments
```

***

### collectionName

```php
private string|null $collectionName
```

***

### collectionOptions

```php
private array $collectionOptions
```

***

### databaseName

```php
private string|null $databaseName
```

***

### databaseOptions

```php
private array $databaseOptions
```

***

### name

```php
private string $name
```

***

### object

```php
private string $object
```

***

## Methods

### __construct

```php
private __construct(\stdClass $operation): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |

***

### fromChangeStreams

```php
public static fromChangeStreams(\stdClass $operation): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |

***

### fromClientSideEncryption

```php
public static fromClientSideEncryption(\stdClass $operation): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |

***

### fromCommandMonitoring

```php
public static fromCommandMonitoring(\stdClass $operation): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |

***

### fromConvenientTransactions

This method is exclusively used to prepare nested operations for the withTransaction session operation

```php
private static fromConvenientTransactions(\stdClass $operation): \MongoDB\Tests\SpecTests\Operation
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |

***

### fromCrud

```php
public static fromCrud(\stdClass $operation): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |

***

### fromReadWriteConcern

```php
public static fromReadWriteConcern(\stdClass $operation): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |

***

### fromRetryableReads

```php
public static fromRetryableReads(\stdClass $operation): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |

***

### fromRetryableWrites

```php
public static fromRetryableWrites(\stdClass $operation, \stdClass $outcome): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |
| `$outcome` | **\stdClass** |  |

***

### fromTransactions

```php
public static fromTransactions(\stdClass $operation): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |

***

### assert

Execute the operation and assert its outcome.

```php
public assert(\MongoDB\Tests\SpecTests\FunctionalTestCase $test, \MongoDB\Tests\SpecTests\Context $context, bool $bubbleExceptions = false): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\MongoDB\Tests\SpecTests\FunctionalTestCase** | Test instance |
| `$context` | **\MongoDB\Tests\SpecTests\Context** | Execution context |
| `$bubbleExceptions` | **bool** | If true, any exception that was caught is rethrown |

***

### execute

Executes the operation with a given context.

```php
private execute(\MongoDB\Tests\SpecTests\FunctionalTestCase $test, \MongoDB\Tests\SpecTests\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\MongoDB\Tests\SpecTests\FunctionalTestCase** |  |
| `$context` | **\MongoDB\Tests\SpecTests\Context** | Execution context |

***

### executeForClient

Executes the client operation and return its result.

```php
private executeForClient(\MongoDB\Client $client, \MongoDB\Tests\SpecTests\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\MongoDB\Client** |  |
| `$context` | **\MongoDB\Tests\SpecTests\Context** | Execution context |

***

### executeForCollection

Executes the collection operation and return its result.

```php
private executeForCollection(\MongoDB\Collection $collection, \MongoDB\Tests\SpecTests\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **\MongoDB\Collection** |  |
| `$context` | **\MongoDB\Tests\SpecTests\Context** | Execution context |

***

### executeForDatabase

Executes the database operation and return its result.

```php
private executeForDatabase(\MongoDB\Database $database, \MongoDB\Tests\SpecTests\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$database` | **\MongoDB\Database** |  |
| `$context` | **\MongoDB\Tests\SpecTests\Context** | Execution context |

***

### executeForGridFSBucket

Executes the GridFS bucket operation and return its result.

```php
private executeForGridFSBucket(\MongoDB\GridFS\Bucket $bucket, \MongoDB\Tests\SpecTests\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bucket` | **\MongoDB\GridFS\Bucket** |  |
| `$context` | **\MongoDB\Tests\SpecTests\Context** | Execution context |

***

### executeForSession

Executes the session operation and return its result.

```php
private executeForSession(\MongoDB\Driver\Session $session, \MongoDB\Tests\SpecTests\FunctionalTestCase $test, \MongoDB\Tests\SpecTests\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session` | **\MongoDB\Driver\Session** |  |
| `$test` | **\MongoDB\Tests\SpecTests\FunctionalTestCase** |  |
| `$context` | **\MongoDB\Tests\SpecTests\Context** | Execution context |

***

### executeForTestRunner

```php
private executeForTestRunner(\MongoDB\Tests\SpecTests\FunctionalTestCase $test, \MongoDB\Tests\SpecTests\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\MongoDB\Tests\SpecTests\FunctionalTestCase** |  |
| `$context` | **\MongoDB\Tests\SpecTests\Context** |  |

***

### getIndexNames

```php
private getIndexNames(\MongoDB\Tests\SpecTests\Context $context, string $databaseName, string $collectionName): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\MongoDB\Tests\SpecTests\Context** |  |
| `$databaseName` | **string** |  |
| `$collectionName` | **string** |  |

***

### getResultAssertionType

```php
private getResultAssertionType(): mixed
```

***

### getResultAssertionTypeForClient

```php
private getResultAssertionTypeForClient(): mixed
```

***

### getResultAssertionTypeForCollection

```php
private getResultAssertionTypeForCollection(): mixed
```

***

### getResultAssertionTypeForDatabase

```php
private getResultAssertionTypeForDatabase(): mixed
```

***

### prepareBulkWriteRequest

Prepares a request element for a bulkWrite operation.

```php
private prepareBulkWriteRequest(\stdClass $request): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\stdClass** |  |

***


***

