***

# BucketFunctionalTest

Functional tests for the Bucket class.



* Full name: `\MongoDB\Tests\GridFS\BucketFunctionalTest`
* Parent class: [`\MongoDB\Tests\GridFS\FunctionalTestCase`](./FunctionalTestCase.md)




## Methods


### testValidConstructorOptions



```php
public testValidConstructorOptions(): void
```











***

### testConstructorOptionTypeChecks



```php
public testConstructorOptionTypeChecks(array $options): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### provideInvalidConstructorOptions



```php
public provideInvalidConstructorOptions(): mixed
```











***

### testConstructorShouldRequireChunkSizeBytesOptionToBePositive



```php
public testConstructorShouldRequireChunkSizeBytesOptionToBePositive(): void
```











***

### testDelete



```php
public testDelete(mixed $input, mixed $expectedChunks): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |
| `$expectedChunks` | **mixed** |  |




***

### provideInputDataAndExpectedChunks



```php
public provideInputDataAndExpectedChunks(): mixed
```











***

### testDeleteShouldRequireFileToExist



```php
public testDeleteShouldRequireFileToExist(): void
```











***

### testDeleteStillRemovesChunksIfFileDoesNotExist



```php
public testDeleteStillRemovesChunksIfFileDoesNotExist(mixed $input, mixed $expectedChunks): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |
| `$expectedChunks` | **mixed** |  |




***

### testDownloadingFileWithMissingChunk



```php
public testDownloadingFileWithMissingChunk(): void
```











***

### testDownloadingFileWithUnexpectedChunkIndex



```php
public testDownloadingFileWithUnexpectedChunkIndex(): void
```











***

### testDownloadingFileWithUnexpectedChunkSize



```php
public testDownloadingFileWithUnexpectedChunkSize(): void
```











***

### testDownloadToStream



```php
public testDownloadToStream(mixed $input): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### testDownloadToStreamShouldRequireDestinationStream



```php
public testDownloadToStreamShouldRequireDestinationStream(mixed $destination): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$destination` | **mixed** |  |




***

### provideInvalidStreamValues



```php
public provideInvalidStreamValues(): mixed
```











***

### testDownloadToStreamShouldRequireFileToExist



```php
public testDownloadToStreamShouldRequireFileToExist(): void
```











***

### testDownloadToStreamByName



```php
public testDownloadToStreamByName(): void
```











***

### testDownloadToStreamByNameShouldRequireDestinationStream



```php
public testDownloadToStreamByNameShouldRequireDestinationStream(mixed $destination): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$destination` | **mixed** |  |




***

### testDownloadToStreamByNameShouldRequireFilenameAndRevisionToExist



```php
public testDownloadToStreamByNameShouldRequireFilenameAndRevisionToExist(mixed $filename, mixed $revision): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **mixed** |  |
| `$revision` | **mixed** |  |




***

### provideNonexistentFilenameAndRevision



```php
public provideNonexistentFilenameAndRevision(): mixed
```











***

### testDrop



```php
public testDrop(): void
```











***

### testFind



```php
public testFind(): void
```











***

### testFindUsesTypeMap



```php
public testFindUsesTypeMap(): void
```











***

### testFindOne



```php
public testFindOne(): void
```











***

### testGetBucketNameWithCustomValue



```php
public testGetBucketNameWithCustomValue(): void
```











***

### testGetBucketNameWithDefaultValue



```php
public testGetBucketNameWithDefaultValue(): void
```











***

### testGetChunksCollection



```php
public testGetChunksCollection(): void
```











***

### testGetChunkSizeBytesWithCustomValue



```php
public testGetChunkSizeBytesWithCustomValue(): void
```











***

### testGetChunkSizeBytesWithDefaultValue



```php
public testGetChunkSizeBytesWithDefaultValue(): void
```











***

### testGetDatabaseName



```php
public testGetDatabaseName(): void
```











***

### testGetFileDocumentForStreamUsesTypeMap



```php
public testGetFileDocumentForStreamUsesTypeMap(): void
```











***

### testGetFileDocumentForStreamWithReadableStream



```php
public testGetFileDocumentForStreamWithReadableStream(): void
```











***

### testGetFileDocumentForStreamWithWritableStream



```php
public testGetFileDocumentForStreamWithWritableStream(): void
```











***

### testGetFileDocumentForStreamShouldRequireGridFSStreamResource



```php
public testGetFileDocumentForStreamShouldRequireGridFSStreamResource(mixed $stream): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **mixed** |  |




***

### provideInvalidGridFSStreamValues



```php
public provideInvalidGridFSStreamValues(): mixed
```











***

### testGetFileIdForStreamUsesTypeMap



```php
public testGetFileIdForStreamUsesTypeMap(): void
```











***

### testGetFileIdForStreamWithReadableStream



```php
public testGetFileIdForStreamWithReadableStream(): void
```











***

### testGetFileIdForStreamWithWritableStream



```php
public testGetFileIdForStreamWithWritableStream(): void
```











***

### testGetFileIdForStreamShouldRequireGridFSStreamResource



```php
public testGetFileIdForStreamShouldRequireGridFSStreamResource(mixed $stream): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **mixed** |  |




***

### testGetFilesCollection



```php
public testGetFilesCollection(): void
```











***

### testOpenDownloadStream



```php
public testOpenDownloadStream(mixed $input): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### testOpenDownloadStreamAndMultipleReadOperations



```php
public testOpenDownloadStreamAndMultipleReadOperations(mixed $input): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### testOpenDownloadStreamShouldRequireFileToExist



```php
public testOpenDownloadStreamShouldRequireFileToExist(): void
```











***

### testOpenDownloadStreamByNameShouldRequireFilenameToExist



```php
public testOpenDownloadStreamByNameShouldRequireFilenameToExist(): void
```











***

### testOpenDownloadStreamByName



```php
public testOpenDownloadStreamByName(): void
```











***

### testOpenDownloadStreamByNameShouldRequireFilenameAndRevisionToExist



```php
public testOpenDownloadStreamByNameShouldRequireFilenameAndRevisionToExist(mixed $filename, mixed $revision): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **mixed** |  |
| `$revision` | **mixed** |  |




***

### testOpenUploadStream



```php
public testOpenUploadStream(): void
```











***

### testOpenUploadStreamAndMultipleWriteOperations



```php
public testOpenUploadStreamAndMultipleWriteOperations(mixed $input): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### testRename



```php
public testRename(): void
```











***

### testRenameShouldNotRequireFileToBeModified



```php
public testRenameShouldNotRequireFileToBeModified(): void
```











***

### testRenameShouldRequireFileToExist



```php
public testRenameShouldRequireFileToExist(): void
```











***

### testUploadFromStream



```php
public testUploadFromStream(): void
```











***

### testUploadFromStreamShouldRequireSourceStream



```php
public testUploadFromStreamShouldRequireSourceStream(mixed $source): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **mixed** |  |




***

### testUploadingAnEmptyFile



```php
public testUploadingAnEmptyFile(): void
```











***

### testUploadingFirstFileCreatesIndexes



```php
public testUploadingFirstFileCreatesIndexes(): void
```











***

### testExistingIndexIsReused



```php
public testExistingIndexIsReused(): void
```











***

### testDownloadToStreamFails



```php
public testDownloadToStreamFails(): void
```











***

### testDownloadToStreamByNameFails



```php
public testDownloadToStreamByNameFails(): void
```











***

### testUploadFromStreamFails



```php
public testUploadFromStreamFails(): void
```











***

### testDanglingOpenWritableStream



```php
public testDanglingOpenWritableStream(): void
```











***

### assertIndexExists

Asserts that an index with the given name exists for the collection.

```php
private assertIndexExists(string $collectionName, string $indexName, callable $callback = null): void
```

An optional $callback may be provided, which should take an IndexInfo
argument as its first and only parameter. If an IndexInfo matching the
given name is found, it will be passed to the callback, which may perform
additional assertions.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collectionName` | **string** |  |
| `$indexName` | **string** |  |
| `$callback` | **callable** |  |




***

### assertIndexNotExists

Asserts that an index with the given name does not exist for the collection.

```php
private assertIndexNotExists(string $collectionName, string $indexName): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collectionName` | **string** |  |
| `$indexName` | **string** |  |




***

### getInvalidStreamValues

Return a list of invalid stream values.

```php
private getInvalidStreamValues(): array
```











***


## Inherited methods


### setUp



```php
public setUp(): void
```











***

### assertStreamContents

Asserts that a variable is a stream containing the expected data.

```php
protected assertStreamContents(string $expectedContents, resource $stream): void
```

Note: this will seek to the beginning of the stream before reading.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedContents` | **string** |  |
| `$stream` | **resource** |  |




***

### createStream

Creates an in-memory stream with the given data.

```php
protected createStream(string $data = &#039;&#039;): resource
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **string** |  |




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

