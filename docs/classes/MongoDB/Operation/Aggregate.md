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


### wireVersionForCollation



```php
private static int $wireVersionForCollation
```



* This property is **static**.


***

### wireVersionForDocumentLevelValidation



```php
private static int $wireVersionForDocumentLevelValidation
```



* This property is **static**.


***

### wireVersionForReadConcern



```php
private static int $wireVersionForReadConcern
```



* This property is **static**.


***

### wireVersionForWriteConcern



```php
private static int $wireVersionForWriteConcern
```



* This property is **static**.


***

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

## Methods


### __construct

Constructs an aggregate command.

```php
public __construct(string $databaseName, string|null $collectionName, array $pipeline, array $options = []): mixed
```

Supported options:

 * allowDiskUse (boolean): Enables writing to temporary files. When set
   to true, aggregation stages can write data to the _tmp sub-directory
   in the dbPath directory. The default is false.

 * batchSize (integer): The number of documents to return per batch.

 * bypassDocumentValidation (boolean): If true, allows the write to
   circumvent document level validation. This only applies when an $out
   or $merge stage is specified.

   For servers < 3.2, this option is ignored as document level validation
   is not available.

 * collation (document): Collation specification.

   This is not supported for server versions < 3.4 and will result in an
   exception at execution time if used.

 * comment (string): An arbitrary string to help trace the operation
   through the database profiler, currentOp, and logs.

 * explain (boolean): Specifies whether or not to return the information
   on the processing of the pipeline.

 * hint (string|document): The index to use. Specify either the index
   name as a string or the index key pattern as a document. If specified,
   then the query system will only consider plans using the hinted index.

 * maxTimeMS (integer): The maximum amount of time to allow the query to
   run.

 * readConcern (MongoDB\Driver\ReadConcern): Read concern.

   This is not supported for server versions < 3.2 and will result in an
   exception at execution time if used.

 * readPreference (MongoDB\Driver\ReadPreference): Read preference.

   This option is ignored if an $out or $merge stage is specified.

 * session (MongoDB\Driver\Session): Client session.

   Sessions are not supported for server versions < 3.6.

 * typeMap (array): Type map for BSON deserialization. This will be
   applied to the returned Cursor (it is not sent to the server).

 * useCursor (boolean): Indicates whether the command will request that
   the server provide results using a cursor. The default is true.

   This option allows users to turn off cursors if necessary to aid in
   mongod/mongos upgrades.

 * writeConcern (MongoDB\Driver\WriteConcern): Write concern. This only
   applies when an $out or $merge stage is specified.

   This is not supported for server versions < 3.4 and will result in an
   exception at execution time if used.

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



```php
public getCommandDocument(\MongoDB\Driver\Server $server): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |




***

### createCommandDocument



```php
private createCommandDocument(\MongoDB\Driver\Server $server, bool $hasWriteStage): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |
| `$hasWriteStage` | **bool** |  |




***

### createCommandOptions



```php
private createCommandOptions(): array
```











***

### createOptions

Create options for executing the command.

```php
private createOptions(bool $hasWriteStage, bool $hasExplain): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hasWriteStage` | **bool** |  |
| `$hasExplain` | **bool** |  |



**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executereadcommand.php - * http://php.net/manual/en/mongodb-driver-server.executereadwritecommand.php - 

***

### hasWriteStage



```php
private hasWriteStage(): bool
```











***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
