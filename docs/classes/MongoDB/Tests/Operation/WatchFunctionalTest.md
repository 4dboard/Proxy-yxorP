***

# WatchFunctionalTest

Base class for Operation functional tests.



* Full name: `\MongoDB\Tests\Operation\WatchFunctionalTest`
* Parent class: [`\MongoDB\Tests\Operation\FunctionalTestCase`](./FunctionalTestCase.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`INTERRUPTED`|public| |11601|
|`NOT_PRIMARY`|public| |10107|

## Properties


### wireVersionForStartAtOperationTime



```php
private static int $wireVersionForStartAtOperationTime
```



* This property is **static**.


***

### defaultOptions



```php
private array $defaultOptions
```






***

## Methods


### setUp



```php
public setUp(): void
```











***

### testGetResumeToken

Prose test 1: "ChangeStream must continuously track the last seen
resumeToken"

```php
public testGetResumeToken(): void
```











***

### testGetResumeTokenWithPostBatchResumeToken

Prose test 1: "ChangeStream must continuously track the last seen
resumeToken"

```php
public testGetResumeTokenWithPostBatchResumeToken(): void
```

Prose test 11:
For a ChangeStream under these conditions:
 - Running against a server >=4.0.7.
 - The batch is empty or has been iterated to the last document.
Expected result: getResumeToken must return the postBatchResumeToken from
the current command response.

Prose test 13:
For a ChangeStream under these conditions:
 - The batch is not empty.
 - The batch has been iterated up to but not including the last element.
Expected result: getResumeToken must return the _id of the previous
document returned.









***

### testNextResumesAfterConnectionException



```php
public testNextResumesAfterConnectionException(): void
```











***

### testResumeBeforeReceivingAnyResultsIncludesPostBatchResumeToken



```php
public testResumeBeforeReceivingAnyResultsIncludesPostBatchResumeToken(): void
```











***

### assertResumeAfter



```php
private assertResumeAfter(mixed $expectedResumeToken, \stdClass $command): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedResumeToken` | **mixed** |  |
| `$command` | **\stdClass** |  |




***

### testResumeBeforeReceivingAnyResultsIncludesStartAtOperationTime

Prose test 9: "$changeStream stage for ChangeStream against a server
>=4.0 and <4.0.7 that has not received any results yet MUST include a
startAtOperationTime option when resuming a changestream."

```php
public testResumeBeforeReceivingAnyResultsIncludesStartAtOperationTime(): void
```











***

### assertStartAtOperationTime



```php
private assertStartAtOperationTime(\MongoDB\BSON\TimestampInterface $expectedOperationTime, \stdClass $command): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedOperationTime` | **\MongoDB\BSON\TimestampInterface** |  |
| `$command` | **\stdClass** |  |




***

### testRewindMultipleTimesWithResults



```php
public testRewindMultipleTimesWithResults(): void
```











***

### testRewindMultipleTimesWithNoResults



```php
public testRewindMultipleTimesWithNoResults(): void
```











***

### testNoChangeAfterResumeBeforeInsert



```php
public testNoChangeAfterResumeBeforeInsert(): void
```











***

### testResumeMultipleTimesInSuccession



```php
public testResumeMultipleTimesInSuccession(): void
```











***

### testKey



```php
public testKey(): void
```











***

### testNonEmptyPipeline



```php
public testNonEmptyPipeline(): void
```











***

### testInitialCursorIsNotClosed

Prose test 7: "Ensure that a cursor returned from an aggregate command
with a cursor id and an initial empty batch is not closed on the driver
side."

```php
public testInitialCursorIsNotClosed(): void
```











***

### testResumeTokenNotFoundClientSideError

Prose test 2: "ChangeStream will throw an exception if the server
response is missing the resume token (if wire version is < 8, this is a
driver-side error; for 8+, this is a server-side error)"

```php
public testResumeTokenNotFoundClientSideError(): void
```











***

### testResumeTokenNotFoundServerSideError

Prose test 2: "ChangeStream will throw an exception if the server
response is missing the resume token (if wire version is < 8, this is a
driver-side error; for 8+, this is a server-side error)"

```php
public testResumeTokenNotFoundServerSideError(): void
```











***

### testResumeTokenInvalidTypeClientSideError

Prose test 2: "ChangeStream will throw an exception if the server
response is missing the resume token (if wire version is < 8, this is a
driver-side error; for 8+, this is a server-side error)"

```php
public testResumeTokenInvalidTypeClientSideError(): void
```











***

### testResumeTokenInvalidTypeServerSideError

Prose test 2: "ChangeStream will throw an exception if the server
response is missing the resume token (if wire version is < 8, this is a
driver-side error; for 8+, this is a server-side error)"

```php
public testResumeTokenInvalidTypeServerSideError(): void
```











***

### testMaxAwaitTimeMS



```php
public testMaxAwaitTimeMS(): void
```











***

### testRewindExtractsResumeTokenAndNextResumes



```php
public testRewindExtractsResumeTokenAndNextResumes(): void
```











***

### testResumeAfterOption



```php
public testResumeAfterOption(): void
```











***

### testStartAfterOption



```php
public testStartAfterOption(): void
```











***

### testTypeMapOption



```php
public testTypeMapOption(array $typeMap, mixed $expectedChangeDocument): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeMap` | **array** |  |
| `$expectedChangeDocument` | **mixed** |  |




***

### provideTypeMapOptionsAndExpectedChangeDocument



```php
public provideTypeMapOptionsAndExpectedChangeDocument(): mixed
```











***

### testNextAdvancesKey



```php
public testNextAdvancesKey(): void
```











***

### testResumeTokenNotFoundDoesNotAdvanceKey



```php
public testResumeTokenNotFoundDoesNotAdvanceKey(): void
```











***

### testSessionPersistsAfterResume



```php
public testSessionPersistsAfterResume(): void
```











***

### testSessionFreed



```php
public testSessionFreed(): void
```











***

### testResumeRepeatsOriginalPipelineAndOptions

Prose test 3: "ChangeStream will automatically resume one time on a
resumable error (including not primary) with the initial pipeline and
options, except for the addition/update of a resumeToken."

```php
public testResumeRepeatsOriginalPipelineAndOptions(): void
```











***

### testErrorDuringAggregateCommandDoesNotCauseResume

Prose test 4: "ChangeStream will not attempt to resume on any error
encountered while executing an aggregate command."

```php
public testErrorDuringAggregateCommandDoesNotCauseResume(): void
```











***

### testOriginalReadPreferenceIsPreservedOnResume

Prose test 6: "ChangeStream will perform server selection before
attempting to resume, using initial readPreference"

```php
public testOriginalReadPreferenceIsPreservedOnResume(): void
```











***

### testGetResumeTokenReturnsOriginalResumeTokenOnEmptyBatch

Prose test 12
For a ChangeStream under these conditions:
- Running against a server <4.0.7.

```php
public testGetResumeTokenReturnsOriginalResumeTokenOnEmptyBatch(): void
```

- The batch is empty or has been iterated to the last document.
Expected result:
- getResumeToken must return the _id of the last document returned if one exists.
- getResumeToken must return resumeAfter from the initial aggregate if the option was specified.
- If resumeAfter was not specified, the getResumeToken result must be empty.









***

### testResumeTokenBehaviour

Prose test 14
For a ChangeStream under these conditions:
 - The batch is not empty.

```php
public testResumeTokenBehaviour(): void
```

- The batch hasn’t been iterated at all.
 - Only the initial aggregate command has been executed.
Expected result:
 - getResumeToken must return startAfter from the initial aggregate if the option was specified.
 - getResumeToken must return resumeAfter from the initial aggregate if the option was specified.
 - If neither the startAfter nor resumeAfter options were specified, the getResumeToken result must be empty.









***

### testResumingChangeStreamWithoutPreviousResultsIncludesStartAfterOption

Prose test 17: "$changeStream stage for ChangeStream started with
startAfter against a server >=4.1.1 that has not received any results yet
MUST include a startAfter option and MUST NOT include a resumeAfter
option when resuming a change stream."

```php
public testResumingChangeStreamWithoutPreviousResultsIncludesStartAfterOption(): void
```











***

### testResumingChangeStreamWithPreviousResultsIncludesResumeAfterOption

Prose test 18: "$changeStream stage for ChangeStream started with
startAfter against a server >=4.1.1 that has received at least one result
MUST include a resumeAfter option and MUST NOT include a startAfter
option when resuming a change stream."

```php
public testResumingChangeStreamWithPreviousResultsIncludesResumeAfterOption(): void
```











***

### assertNoCommandExecuted



```php
private assertNoCommandExecuted(callable $callable): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** |  |




***

### forceChangeStreamResume



```php
private forceChangeStreamResume(): void
```











***

### getPostBatchResumeTokenFromReply



```php
private getPostBatchResumeTokenFromReply(\stdClass $reply): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reply` | **\stdClass** |  |




***

### insertDocument



```php
private insertDocument(mixed $document): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **mixed** |  |




***

### isPostBatchResumeTokenSupported



```php
private isPostBatchResumeTokenSupported(): mixed
```











***

### isStartAtOperationTimeSupported



```php
private isStartAtOperationTimeSupported(): mixed
```











***

### advanceCursorUntilValid



```php
private advanceCursorUntilValid(\Iterator $iterator, mixed $limitOnShardedClusters = 10): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Iterator** |  |
| `$limitOnShardedClusters` | **mixed** |  |




***

### skipIfIsShardedCluster



```php
private skipIfIsShardedCluster(mixed $message): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |




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

### createDefaultReadConcern



```php
protected createDefaultReadConcern(): mixed
```











***

### createDefaultWriteConcern



```php
protected createDefaultWriteConcern(): mixed
```











***

### createSession



```php
protected createSession(): mixed
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
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
