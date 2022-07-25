***

# Watch

Operation for creating a change stream with the aggregate command.

Note: the implementation of CommandSubscriber is an internal implementation
detail and should not be considered part of the public API.

* Full name: `\MongoDB\Operation\Watch`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md), [`\MongoDB\Driver\Monitoring\CommandSubscriber`](../Driver/Monitoring/CommandSubscriber.md)

**See Also:**

* \MongoDB\Collection::watch() - 
* https://docs.mongodb.com/manual/changeStreams/ - 


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`FULL_DOCUMENT_DEFAULT`|public| |&#039;default&#039;|
|`FULL_DOCUMENT_UPDATE_LOOKUP`|public| |&#039;updateLookup&#039;|

## Properties


### wireVersionForStartAtOperationTime



```php
private static int $wireVersionForStartAtOperationTime
```



* This property is **static**.


***

### aggregate



```php
private \MongoDB\Operation\Aggregate $aggregate
```






***

### aggregateOptions



```php
private array $aggregateOptions
```






***

### changeStreamOptions



```php
private array $changeStreamOptions
```






***

### collectionName



```php
private string|null $collectionName
```






***

### databaseName



```php
private string $databaseName
```






***

### firstBatchSize



```php
private int|null $firstBatchSize
```






***

### hasResumed



```php
private bool $hasResumed
```






***

### manager



```php
private \MongoDB\Driver\Manager $manager
```






***

### operationTime



```php
private \MongoDB\BSON\TimestampInterface $operationTime
```






***

### pipeline



```php
private array $pipeline
```






***

### postBatchResumeToken



```php
private object|null $postBatchResumeToken
```






***

## Methods


### __construct

Constructs an aggregate command for creating a change stream.

```php
public __construct(\MongoDB\Driver\Manager $manager, string|null $databaseName, string|null $collectionName, array $pipeline, array $options = []): mixed
```

Supported options:

 * batchSize (integer): The number of documents to return per batch.

 * collation (document): Specifies a collation.

 * fullDocument (string): Determines whether the "fullDocument" field
   will be populated for update operations. By default, change streams
   only return the delta of fields during the update operation (via the
   "updateDescription" field). To additionally return the most current
   majority-committed version of the updated document, specify
   "updateLookup" for this option. Defaults to "default".

   Insert and replace operations always include the "fullDocument" field
   and delete operations omit the field as the document no longer exists.

 * maxAwaitTimeMS (integer): The maximum amount of time for the server to
   wait on new documents to satisfy a change stream query.

 * readConcern (MongoDB\Driver\ReadConcern): Read concern.

 * readPreference (MongoDB\Driver\ReadPreference): Read preference. This
   will be used to select a new server when resuming. Defaults to a
   "primary" read preference.

 * resumeAfter (document): Specifies the logical starting point for the
   new change stream.

   Using this option in conjunction with "startAfter" and/or
   "startAtOperationTime" will result in a server error. The options are
   mutually exclusive.

 * session (MongoDB\Driver\Session): Client session.

   Sessions are not supported for server versions < 3.6.

 * startAfter (document): Specifies the logical starting point for the
   new change stream. Unlike "resumeAfter", this option can be used with
   a resume token from an "invalidate" event.

   Using this option in conjunction with "resumeAfter" and/or
   "startAtOperationTime" will result in a server error. The options are
   mutually exclusive.

 * startAtOperationTime (MongoDB\BSON\TimestampInterface): If specified,
   the change stream will only provide changes that occurred at or after
   the specified timestamp. Any command run against the server will
   return an operation time that can be used here. Alternatively, an
   operation time may be obtained from MongoDB\Driver\Server::getInfo().

   Using this option in conjunction with "resumeAfter" and/or
   "startAfter" will result in a server error. The options are mutually
   exclusive.

   This option is not supported for server versions < 4.0.

 * typeMap (array): Type map for BSON deserialization. This will be
   applied to the returned Cursor (it is not sent to the server).

Note: A database-level change stream may be created by specifying null
for the collection name. A cluster-level change stream may be created by
specifying null for both the database and collection name.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$manager` | **\MongoDB\Driver\Manager** | Manager instance from the driver |
| `$databaseName` | **string&#124;null** | Database name |
| `$collectionName` | **string&#124;null** | Collection name |
| `$pipeline` | **array** | List of pipeline operations |
| `$options` | **array** | Command options |




***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \MongoDB\ChangeStream
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |



**See Also:**

* \MongoDB\Operation\Executable::execute() - 

***

### createAggregate

Create the aggregate command for a change stream.

```php
private createAggregate(): \MongoDB\Operation\Aggregate
```

This method is also used to recreate the aggregate command when resuming.









***

### createChangeStreamIterator

Create a ChangeStreamIterator by executing the aggregate command.

```php
private createChangeStreamIterator(\MongoDB\Driver\Server $server): \MongoDB\Model\ChangeStreamIterator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |




***

### executeAggregate

Execute the aggregate command.

```php
private executeAggregate(\MongoDB\Driver\Server $server): \MongoDB\Driver\Cursor
```

The command will be executed using APM so that we can capture data from
its response (e.g. firstBatch size, postBatchResumeToken).






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |




***

### getInitialResumeToken

Return the initial resume token for creating the ChangeStreamIterator.

```php
private getInitialResumeToken(): array|object|null
```










**See Also:**

* https://github.com/mongodb/specifications/blob/master/source/change-streams/change-streams.rst#updating-the-cached-resume-token - 

***

### resume

Resumes a change stream.

```php
private resume(array|object|null $resumeToken = null, bool $hasAdvanced = false): \MongoDB\Model\ChangeStreamIterator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resumeToken` | **array&#124;object&#124;null** |  |
| `$hasAdvanced` | **bool** |  |



**See Also:**

* https://github.com/mongodb/specifications/blob/master/source/change-streams/change-streams.rst#resume-process - 

***

### shouldCaptureOperationTime

Determine whether to capture operation time from an aggregate response.

```php
private shouldCaptureOperationTime(\MongoDB\Driver\Server $server): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |



**See Also:**

* https://github.com/mongodb/specifications/blob/master/source/change-streams/change-streams.rst#startatoperationtime - 

***


***
> Automatically generated from source code comments on 2022-07-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
