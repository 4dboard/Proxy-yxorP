***

# UnifiedTestRunner

Unified test runner.



* Full name: `\MongoDB\Tests\UnifiedSpecTests\UnifiedTestRunner`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

**See Also:**

* https://github.com/mongodb/specifications/blob/master/source/unified-test-format/unified-test-format.rst - 


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ATLAS_TLD`|public| |&#039;mongodb.net&#039;|
|`SERVER_ERROR_INTERRUPTED`|public| |11601|
|`SERVER_ERROR_UNAUTHORIZED`|public| |13|
|`MIN_SCHEMA_VERSION`|public| |&#039;1.0&#039;|
|`MAX_SCHEMA_VERSION`|public| |&#039;1.5&#039;|

## Properties


### internalClient



```php
private \MongoDB\Tests\UnifiedSpecTests\MongoDB\Client $internalClient
```






***

### internalClientUri



```php
private string $internalClientUri
```






***

### allowKillAllSessions



```php
private bool $allowKillAllSessions
```






***

### entityMap



```php
private \MongoDB\Tests\UnifiedSpecTests\EntityMap $entityMap
```






***

### entityMapObserver



```php
private $entityMapObserver
```






***

### failPointObserver



```php
private \MongoDB\Tests\UnifiedSpecTests\FailPointObserver $failPointObserver
```






***

## Methods


### __construct



```php
public __construct(string $internalClientUri): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$internalClientUri` | **string** |  |




***

### run



```php
public run(\MongoDB\Tests\UnifiedSpecTests\UnifiedTestCase $test): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\MongoDB\Tests\UnifiedSpecTests\UnifiedTestCase** |  |




***

### setEntityMapObserver

Defines a callable to receive the EntityMap after each test.

```php
public setEntityMapObserver(callable $entityMapObserver): void
```

This function is primarily used by the Atlas testing workload executor.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entityMapObserver` | **callable** |  |




***

### doSetUp



```php
private doSetUp(): void
```











***

### doTearDown



```php
private doTearDown(bool $hasFailed): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hasFailed` | **bool** |  |




***

### doTestCase



```php
private doTestCase(\stdClass $test, string $schemaVersion, ?array $runOnRequirements = null, ?array $createEntities = null, ?array $initialData = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\stdClass** |  |
| `$schemaVersion` | **string** |  |
| `$runOnRequirements` | **?array** |  |
| `$createEntities` | **?array** |  |
| `$initialData` | **?array** |  |




***

### checkRunOnRequirements

Checks server version and topology requirements.

```php
private checkRunOnRequirements(array $runOnRequirements): void
```

Arguments for RunOnRequirement::isSatisfied() will be cached internally.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$runOnRequirements` | **array** |  |




***

### getPrimaryServer



```php
private getPrimaryServer(): \MongoDB\Driver\Server
```











***

### getServerParameters



```php
private getServerParameters(): \stdClass
```











***

### getServerVersion



```php
private getServerVersion(): string
```











***

### getTopology

Return the topology type.

```php
private getTopology(): string
```











***

### isAuthenticated

Return whether the connection is authenticated.

```php
private isAuthenticated(): bool
```

Note: if the connectionStatus command is not portable for serverless, it
may be necessary to rewrite this to instead inspect the connection string
or consult an environment variable, as is done in libmongoc.









***

### isServerless

Return whether serverless (i.e. proxy as mongos) is being utilized.

```php
private isServerless(): bool
```











***

### isSchemaVersionSupported

Checks is a test format schema version is supported.

```php
private isSchemaVersionSupported(string $schemaVersion): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schemaVersion` | **string** |  |




***

### isShardedClusterUsingReplicasets



```php
private isShardedClusterUsingReplicasets(): bool
```











***

### killAllSessions

Kill all sessions on the cluster.

```php
private killAllSessions(): void
```

This will clean up any open transactions that may remain from a
previously failed test. For sharded clusters, this command will be run
on all mongos nodes.

This method is a NOP if allowKillAllSessions is false.









***

### assertOutcome



```php
private assertOutcome(array $outcome): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$outcome` | **array** |  |




***

### prepareInitialData



```php
private prepareInitialData(array $initialData): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$initialData` | **array** |  |




***

### preventStaleDbVersionError

Work around potential error executing distinct on sharded clusters.

```php
private preventStaleDbVersionError(array $operations, \MongoDB\Tests\UnifiedSpecTests\Context $context): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operations` | **array** |  |
| `$context` | **\MongoDB\Tests\UnifiedSpecTests\Context** |  |



**See Also:**

* https://github.com/mongodb/specifications/blob/master/source/transactions/tests/README.rst#why-do-tests-that-run-distinct-sometimes-fail-with-staledbversion - 

***


***

