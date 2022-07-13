***

# Aggregate

Operation for the aggregate command.



* Full name: `\MongoDB\Operation\Aggregate`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md), [`\MongoDB\Operation\Explainable`](./Explainable.md)

**See Also:**

* \MongoDB\Collection::aggregate() - 
* http://docs.mongodb.org/manual/reference/command/aggregate/ - 



## Properties


### databaseName



```php
private string $databaseName
```






***

### collectionName



```php
private string|null $collectionName
```






***

### pipeline



```php
private array $pipeline
```






***

### options



```php
private array $options
```






***

### isExplain



```php
private bool $isExplain
```






***

### isWrite



```php
private bool $isWrite
```






***

## Methods


### __construct

Constructs an aggregate command.

```php
public __construct(string $databaseName, string|null $collectionName, array $pipeline, array $options = []): mixed
```

Supported options:

 * allowDiskUse (boolean): Enables writing to temporary files. When set
   to true, aggregation stages can write data to the _tmp sub-directory
   in the dbPath directory.

 * batchSize (integer): The number of documents to return per batch.

 * bypassDocumentValidation (boolean): If true, allows the write to
   circumvent document level validation. This only applies when an $out
   or $merge stage is specified.

 * collation (document): Collation specification.

 * comment (string): An arbitrary string to help trace the operation
   through the database profiler, currentOp, and logs.

 * explain (boolean): Specifies whether or not to return the information
   on the processing of the pipeline.

 * hint (string|document): The index to use. Specify either the index
   name as a string or the index key pattern as a document. If specified,
   then the query system will only consider plans using the hinted index.

 * let (document): Map of parameter names and values. Values must be
   constant or closed expressions that do not reference document fields.
   Parameters can then be accessed as variables in an aggregate
   expression context (e.g. "$$var").

   This is not supported for server versions < 5.0 and will result in an
   exception at execution time if used.

 * maxTimeMS (integer): The maximum amount of time to allow the query to
   run.

 * readConcern (MongoDB\Driver\ReadConcern): Read concern.

 * readPreference (MongoDB\Driver\ReadPreference): Read preference.

   This option is ignored if an $out or $merge stage is specified.

 * session (MongoDB\Driver\Session): Client session.

 * typeMap (array): Type map for BSON deserialization. This will be
   applied to the returned Cursor (it is not sent to the server).

 * useCursor (boolean): Indicates whether the command will request that
   the server provide results using a cursor. The default is true.

   This option allows users to turn off cursors if necessary to aid in
   mongod/mongos upgrades.

 * writeConcern (MongoDB\Driver\WriteConcern): Write concern. This only
   applies when an $out or $merge stage is specified.

Note: Collection-agnostic commands (e.g. $currentOp) may be executed by
specifying null for the collection name.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string&#124;null** | Collection name |
| `$pipeline` | **array** | List of pipeline operations |
| `$options` | **array** | Command options |




***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \Traversable
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |



**See Also:**

* \MongoDB\Operation\Executable::execute() - 

***

### getCommandDocument

Returns the command document for this operation.

```php
public getCommandDocument(\MongoDB\Driver\Server $server): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |



**See Also:**

* \MongoDB\Operation\Explainable::getCommandDocument() - 

***

### createCommandDocument

Create the aggregate command document.

```php
private createCommandDocument(): array
```











***

### createCommandOptions



```php
private createCommandOptions(): array
```











***

### executeCommand

Execute the aggregate command using the appropriate Server method.

```php
private executeCommand(\MongoDB\Driver\Server $server, \MongoDB\Driver\Command $command): \MongoDB\Driver\Cursor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |
| `$command` | **\MongoDB\Driver\Command** |  |



**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executecommand.php - * http://php.net/manual/en/mongodb-driver-server.executereadcommand.php - * http://php.net/manual/en/mongodb-driver-server.executereadwritecommand.php - 

***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
