***

# UpdateMany

Operation for updating multiple documents with the update command.



* Full name: `\MongoDB\Operation\UpdateMany`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md), [`\MongoDB\Operation\Explainable`](./Explainable.md)

**See Also:**

* \MongoDB\Collection::updateMany() - 
* http://docs.mongodb.org/manual/reference/command/update/ - 



## Properties


### update



```php
private \MongoDB\Operation\Update $update
```






***

## Methods


### __construct

Constructs an update command.

```php
public __construct(string $databaseName, string $collectionName, array|object $filter, array|object $update, array $options = []): mixed
```

Supported options:

* arrayFilters (document array): A set of filters specifying to which
  array elements an update should apply.

* bypassDocumentValidation (boolean): If true, allows the write to
  circumvent document level validation.

* collation (document): Collation specification.

* hint (string|document): The index to use. Specify either the index
  name as a string or the index key pattern as a document. If specified,
  then the query system will only consider plans using the hinted index.

  This is not supported for server versions < 4.2 and will result in an
  exception at execution time if used.

* session (MongoDB\Driver\Session): Client session.

* upsert (boolean): When true, a new document is created if no document
  matches the query. The default is false.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$update` | **array&#124;object** | Update to apply to the matched documents |
| `$options` | **array** | Command options |




***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \MongoDB\UpdateResult
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


***

