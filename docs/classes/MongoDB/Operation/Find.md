***

# Find

Operation for the find command.



* Full name: `\MongoDB\Operation\Find`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md), [`\MongoDB\Operation\Explainable`](./Explainable.md)

**See Also:**

* \MongoDB\Collection::find() - 
* http://docs.mongodb.org/manual/tutorial/query-documents/ - 
* http://docs.mongodb.org/manual/reference/operator/query-modifier/ - 


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NON_TAILABLE`|public| |1|
|`TAILABLE`|public| |2|
|`TAILABLE_AWAIT`|public| |3|

## Properties


### databaseName



```php
private string $databaseName
```






***

### collectionName



```php
private string $collectionName
```






***

### filter



```php
private array|object $filter
```






***

### options



```php
private array $options
```






***

## Methods


### __construct

Constructs a find command.

```php
public __construct(string $databaseName, string $collectionName, array|object $filter, array $options = []): mixed
```

Supported options:

* allowDiskUse (boolean): Enables writing to temporary files. When set
  to true, queries can write data to the _tmp sub-directory in the
  dbPath directory.

* allowPartialResults (boolean): Get partial results from a mongos if
  some shards are inaccessible (instead of throwing an error).

* batchSize (integer): The number of documents to return per batch.

* collation (document): Collation specification.

* comment (string): Attaches a comment to the query. If "$comment" also
  exists in the modifiers document, this option will take precedence.

* cursorType (enum): Indicates the type of cursor to use. Must be either
  NON_TAILABLE, TAILABLE, or TAILABLE_AWAIT. The default is
  NON_TAILABLE.

* hint (string|document): The index to use. Specify either the index
  name as a string or the index key pattern as a document. If specified,
  then the query system will only consider plans using the hinted index.

* limit (integer): The maximum number of documents to return.

* max (document): The exclusive upper bound for a specific index.

* maxAwaitTimeMS (integer): The maxium amount of time for the server to wait
  on new documents to satisfy a query, if cursorType is TAILABLE_AWAIT.

* maxScan (integer): Maximum number of documents or index keys to scan
  when executing the query.

  This option has been deprecated since version 1.4.

* maxTimeMS (integer): The maximum amount of time to allow the query to
  run. If "$maxTimeMS" also exists in the modifiers document, this
  option will take precedence.

* min (document): The inclusive upper bound for a specific index.

* modifiers (document): Meta operators that modify the output or
  behavior of a query. Use of these operators is deprecated in favor of
  named options.

* noCursorTimeout (boolean): The server normally times out idle cursors
  after an inactivity period (10 minutes) to prevent excess memory use.
  Set this option to prevent that.

* oplogReplay (boolean): Internal replication use only. The driver
  should not set this. This option is deprecated as of MongoDB 4.4.

* projection (document): Limits the fields to return for the matching
  document.

* readConcern (MongoDB\Driver\ReadConcern): Read concern.

* readPreference (MongoDB\Driver\ReadPreference): Read preference.

* returnKey (boolean): If true, returns only the index keys in the
  resulting documents.

* session (MongoDB\Driver\Session): Client session.

* showRecordId (boolean): Determines whether to return the record
  identifier for each document. If true, adds a field $recordId to the
  returned documents.

* skip (integer): The number of documents to skip before returning.

* snapshot (boolean): Prevents the cursor from returning a document more
  than once because of an intervening write operation.

  This options has been deprecated since version 1.4.

* sort (document): The order in which to return matching documents. If
  "$orderby" also exists in the modifiers document, this option will
  take precedence.

* typeMap (array): Type map for BSON deserialization. This will be
  applied to the returned Cursor (it is not sent to the server).






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$options` | **array** | Command options |




***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \MongoDB\Driver\Cursor
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

Construct a command document for Find

```php
private createCommandDocument(): array
```











***

### createExecuteOptions

Create options for executing the command.

```php
private createExecuteOptions(): array
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executequery.php - 

***

### createQueryOptions

Create options for the find query.

```php
private createQueryOptions(): array
```

Note that these are separate from the options for executing the command,
which are created in createExecuteOptions().









***


***

