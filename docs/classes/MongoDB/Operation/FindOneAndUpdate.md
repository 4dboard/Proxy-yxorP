***

# FindOneAndUpdate

Operation for updating a document with the findAndModify command.



* Full name: `\MongoDB\Operation\FindOneAndUpdate`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md), [`\MongoDB\Operation\Explainable`](./Explainable.md)

**See Also:**

* \MongoDB\Collection::findOneAndUpdate() - 
* http://docs.mongodb.org/manual/reference/command/findAndModify/ - 


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`RETURN_DOCUMENT_BEFORE`|public| |1|
|`RETURN_DOCUMENT_AFTER`|public| |2|

## Properties


### findAndModify



```php
private \MongoDB\Operation\FindAndModify $findAndModify
```






***

## Methods


### __construct

Constructs a findAndModify command for updating a document.

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

  This is not supported for server versions < 4.4 and will result in an
  exception at execution time if used.

* maxTimeMS (integer): The maximum amount of time to allow the query to
  run.

* projection (document): Limits the fields to return for the matching
  document.

* returnDocument (enum): Whether to return the document before or after
  the update is applied. Must be either
  FindOneAndUpdate::RETURN_DOCUMENT_BEFORE or
  FindOneAndUpdate::RETURN_DOCUMENT_AFTER. The default is
  FindOneAndUpdate::RETURN_DOCUMENT_BEFORE.

* session (MongoDB\Driver\Session): Client session.

* sort (document): Determines which document the operation modifies if
  the query selects multiple documents.

* typeMap (array): Type map for BSON deserialization.

* upsert (boolean): When true, a new document is created if no document
  matches the query. The default is false.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$update` | **array&#124;object** | Update to apply to the matched document |
| `$options` | **array** | Command options |




***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): array|object|null
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

