***

# FunctionalTestCase

Base class for spec test runners.



* Full name: `\MongoDB\Tests\SpecTests\FunctionalTestCase`
* Parent class: [`\MongoDB\Tests\FunctionalTestCase`](../FunctionalTestCase.md)

**See Also:**

* https://github.com/mongodb/specifications - 


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TOPOLOGY_SINGLE`|public| |&#039;single&#039;|
|`TOPOLOGY_REPLICASET`|public| |&#039;replicaset&#039;|
|`TOPOLOGY_SHARDED`|public| |&#039;sharded&#039;|
|`TOPOLOGY_LOAD_BALANCED`|public| |&#039;load-balanced&#039;|
|`SERVERLESS_ALLOW`|public| |&#039;allow&#039;|
|`SERVERLESS_FORBID`|public| |&#039;forbid&#039;|
|`SERVERLESS_REQUIRE`|public| |&#039;require&#039;|

## Properties


### context



```php
private \MongoDB\Tests\SpecTests\Context|null $context
```






***

## Methods


### setUp



```php
public setUp(): void
```











***

### tearDown



```php
public tearDown(): void
```











***

### assertCommandMatches

Assert that the expected and actual command documents match.

```php
public static assertCommandMatches(\stdClass $expected, \stdClass $actual): void
```

Note: Spec tests that do not assert command started events may throw an
exception in lieu of implementing this method.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **\stdClass** |  |
| `$actual` | **\stdClass** |  |




***

### assertCommandReplyMatches

Assert that the expected and actual command reply documents match.

```php
public static assertCommandReplyMatches(\stdClass $expected, \stdClass $actual): void
```

Note: Spec tests that do not assert command started events may throw an
exception in lieu of implementing this method.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **\stdClass** | Expected command reply document |
| `$actual` | **\stdClass** | Actual command reply document |




***

### assertDocumentsMatch

Asserts that two given documents match.

```php
protected static assertDocumentsMatch(array|object $expectedDocument, array|object $actualDocument, string $message = &#039;&#039;): void
```

Extra keys in the actual value's document(s) will be ignored.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedDocument` | **array&#124;object** |  |
| `$actualDocument` | **array&#124;object** |  |
| `$message` | **string** |  |




***

### assertOutcomeCollectionData

Assert data within the outcome collection.

```php
protected assertOutcomeCollectionData(array $expectedDocuments, int $resultExpectation = ResultExpectation::ASSERT_SAME_DOCUMENT): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedDocuments` | **array** |  |
| `$resultExpectation` | **int** |  |




***

### checkServerRequirements

Checks server version and topology requirements.

```php
protected checkServerRequirements(array $runOn): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$runOn` | **array** |  |




***

### decodeJson

Decode a JSON spec test.

```php
protected decodeJson(string $json): array|object
```

This decodes the file through the driver's extended JSON parser to ensure
proper handling of special types.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$json` | **string** |  |




***

### getContext

Return the test context.

```php
protected getContext(): \MongoDB\Tests\SpecTests\Context
```











***

### setContext

Set the test context.

```php
protected setContext(\MongoDB\Tests\SpecTests\Context $context): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\MongoDB\Tests\SpecTests\Context** |  |




***

### dropTestAndOutcomeCollections

Drop the test and outcome collections by dropping them.

```php
protected dropTestAndOutcomeCollections(): void
```











***

### insertDataFixtures

Insert data fixtures into the test collection.

```php
protected insertDataFixtures(array $documents, string|null $collectionName = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$documents` | **array** |  |
| `$collectionName` | **string&#124;null** |  |




***

### getOutcomeCollection



```php
private getOutcomeCollection(array $collectionOptions = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collectionOptions` | **array** |  |




***

### getTopology

Return the corresponding topology constants for the current topology.

```php
private getTopology(): string
```











***

### isServerlessRequirementSatisfied



```php
private isServerlessRequirementSatisfied(?string $serverlessMode): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serverlessMode` | **?string** |  |




***

### isServerRequirementSatisifed

Checks if server version and topology requirements are satifised.

```php
private isServerRequirementSatisifed(string|null $minServerVersion, string|null $maxServerVersion, array|null $topologies = null, ?string $serverlessMode = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$minServerVersion` | **string&#124;null** |  |
| `$maxServerVersion` | **string&#124;null** |  |
| `$topologies` | **array&#124;null** |  |
| `$serverlessMode` | **?string** |  |




***


## Inherited methods


### setUp



```php
public setUp(): void
```











***

### tearDown



```php
public tearDown(): void
```











***

### createTestClient



```php
public static createTestClient(?string $uri = null, array $options = [], array $driverOptions = []): \MongoDB\Client
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **?string** |  |
| `$options` | **array** |  |
| `$driverOptions` | **array** |  |




***

### createTestManager



```php
public static createTestManager(?string $uri = null, array $options = [], array $driverOptions = []): \MongoDB\Driver\Manager
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **?string** |  |
| `$options` | **array** |  |
| `$driverOptions` | **array** |  |




***

### getUri

Return the connection URI.

```php
public static getUri(): string
```



* This method is **static**.







***

### assertCollectionCount



```php
protected assertCollectionCount(mixed $namespace, mixed $count): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **mixed** |  |
| `$count` | **mixed** |  |




***

### assertCollectionDoesNotExist

Asserts that a collection with the given name does not exist on the
server.

```php
protected assertCollectionDoesNotExist(string $collectionName, ?string $databaseName = null): void
```

$databaseName defaults to TestCase::getDatabaseName() if unspecified.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collectionName` | **string** |  |
| `$databaseName` | **?string** |  |




***

### assertCollectionExists

Asserts that a collection with the given name exists on the server.

```php
protected assertCollectionExists(string $collectionName, ?string $databaseName = null, ?callable $callback = null): void
```

$databaseName defaults to TestCase::getDatabaseName() if unspecified.
An optional $callback may be provided, which should take a CollectionInfo
argument as its first and only parameter. If a CollectionInfo matching
the given name is found, it will be passed to the callback, which may
perform additional assertions.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collectionName` | **string** |  |
| `$databaseName` | **?string** |  |
| `$callback` | **?callable** |  |




***

### assertCommandSucceeded



```php
protected assertCommandSucceeded(mixed $document): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **mixed** |  |




***

### assertSameObjectId



```php
protected assertSameObjectId(mixed $expectedObjectId, mixed $actualObjectId): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedObjectId` | **mixed** |  |
| `$actualObjectId` | **mixed** |  |




***

### configureFailPoint

Configure a fail point for the test.

```php
public configureFailPoint(array|\stdClass $command, ?\MongoDB\Driver\Server $server = null): void
```

The fail point will automatically be disabled during tearDown() to avoid
affecting a subsequent test.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **array&#124;\stdClass** | configureFailPoint command document |
| `$server` | **?\MongoDB\Driver\Server** |  |




***

### createCollection

Creates the test collection with the specified options.

```php
protected createCollection(array $options = []): void
```

If the "writeConcern" option is not specified but is supported by the
server, a majority write concern will be used. This is helpful for tests
using transactions or secondary reads.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### dropCollection

Drops the test collection with the specified options.

```php
protected dropCollection(array $options = []): void
```

If the "writeConcern" option is not specified but is supported by the
server, a majority write concern will be used. This is helpful for tests
using transactions or secondary reads.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### getFeatureCompatibilityVersion



```php
protected getFeatureCompatibilityVersion(?\MongoDB\Driver\ReadPreference $readPreference = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$readPreference` | **?\MongoDB\Driver\ReadPreference** |  |




***

### getPrimaryServer



```php
protected getPrimaryServer(): mixed
```











***

### getServerVersion



```php
protected getServerVersion(?\MongoDB\Driver\ReadPreference $readPreference = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$readPreference` | **?\MongoDB\Driver\ReadPreference** |  |




***

### getServerStorageEngine



```php
protected getServerStorageEngine(?\MongoDB\Driver\ReadPreference $readPreference = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$readPreference` | **?\MongoDB\Driver\ReadPreference** |  |




***

### isLoadBalanced



```php
protected isLoadBalanced(): mixed
```











***

### isReplicaSet



```php
protected isReplicaSet(): mixed
```











***

### isMongos



```php
protected isMongos(): mixed
```











***

### isServerless

Return whether serverless (i.e. proxy as mongos) is being utilized.

```php
protected static isServerless(): bool
```



* This method is **static**.







***

### isShardedCluster



```php
protected isShardedCluster(): mixed
```











***

### isShardedClusterUsingReplicasets



```php
protected isShardedClusterUsingReplicasets(): mixed
```











***

### skipIfChangeStreamIsNotSupported



```php
protected skipIfChangeStreamIsNotSupported(): void
```











***

### skipIfCausalConsistencyIsNotSupported



```php
protected skipIfCausalConsistencyIsNotSupported(): void
```











***

### skipIfClientSideEncryptionIsNotSupported



```php
protected skipIfClientSideEncryptionIsNotSupported(): void
```











***

### skipIfGeoHaystackIndexIsNotSupported



```php
protected skipIfGeoHaystackIndexIsNotSupported(): void
```











***

### skipIfTransactionsAreNotSupported



```php
protected skipIfTransactionsAreNotSupported(): void
```











***

### appendAuthenticationOptions



```php
private static appendAuthenticationOptions(array $options): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### appendServerApiOption



```php
private static appendServerApiOption(array $driverOptions): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driverOptions` | **array** |  |




***

### disableFailPoints

Disables any fail points that were configured earlier in the test.

```php
private disableFailPoints(): void
```

This tracks fail points set via configureFailPoint() and should be called
during tearDown().









***

### getModuleInfo



```php
private getModuleInfo(string $row): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$row` | **string** |  |




***

### isFailCommandSupported

Checks if the failCommand command is supported on this server version

```php
private isFailCommandSupported(): bool
```











***

### isFailCommandEnabled

Checks if the failCommand command is enabled by checking the enableTestCommands parameter

```php
private isFailCommandEnabled(): bool
```











***

### assertMatchesDocument

Asserts that a document has expected values for some fields.

```php
public assertMatchesDocument(array|object $expectedDocument, array|object $actualDocument): void
```

Only fields in the expected document will be checked. The actual document
may contain additional fields.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedDocument` | **array&#124;object** |  |
| `$actualDocument` | **array&#124;object** |  |




***

### assertSameDocument

Asserts that a document has expected values for all fields.

```php
public assertSameDocument(array|object $expectedDocument, array|object $actualDocument): void
```

The actual document will be compared directly with the expected document
and may not contain extra fields.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedDocument` | **array&#124;object** |  |
| `$actualDocument` | **array&#124;object** |  |




***

### assertSameDocuments



```php
public assertSameDocuments(array $expectedDocuments, mixed $actualDocuments): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedDocuments` | **array** |  |
| `$actualDocuments` | **mixed** |  |




***

### dataDescription

Compatibility method as PHPUnit 9 no longer includes this method.

```php
public dataDescription(): string
```











***

### provideInvalidArrayValues



```php
public provideInvalidArrayValues(): mixed
```











***

### provideInvalidDocumentValues



```php
public provideInvalidDocumentValues(): mixed
```











***

### assertDeprecated



```php
protected assertDeprecated(callable $execution): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$execution` | **callable** |  |




***

### getCollectionName

Return the test collection name.

```php
protected getCollectionName(): string
```











***

### getDatabaseName

Return the test database name.

```php
protected getDatabaseName(): string
```











***

### getInvalidArrayValues

Return a list of invalid array values.

```php
protected getInvalidArrayValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidBooleanValues

Return a list of invalid boolean values.

```php
protected getInvalidBooleanValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidDocumentValues

Return a list of invalid document values.

```php
protected getInvalidDocumentValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidIntegerValues

Return a list of invalid integer values.

```php
protected getInvalidIntegerValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidReadConcernValues

Return a list of invalid ReadPreference values.

```php
protected getInvalidReadConcernValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidReadPreferenceValues

Return a list of invalid ReadPreference values.

```php
protected getInvalidReadPreferenceValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidSessionValues

Return a list of invalid Session values.

```php
protected getInvalidSessionValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidStringValues

Return a list of invalid string values.

```php
protected getInvalidStringValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidWriteConcernValues

Return a list of invalid WriteConcern values.

```php
protected getInvalidWriteConcernValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getNamespace

Return the test namespace.

```php
protected getNamespace(): string
```











***

### wrapValuesForDataProvider

Wrap a list of values for use as a single-argument data provider.

```php
protected wrapValuesForDataProvider(array $values): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** | List of values |




***

### normalizeBSON

Normalizes a BSON document or array for use with assertEquals().

```php
private normalizeBSON(array|object $bson): \MongoDB\Model\BSONDocument|\MongoDB\Model\BSONArray
```

The argument will be converted to a BSONArray or BSONDocument based on
its type and keys. Document fields will be sorted alphabetically. Each
value within the array or document will then be normalized recursively.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bson` | **array&#124;object** |  |




***


***

