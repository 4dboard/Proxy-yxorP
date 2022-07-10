***

# FindOneAndDelete

Operation for deleting a document with the findAndModify command.



* Full name: `\MongoDB\Operation\FindOneAndDelete`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md), [`\MongoDB\Operation\Explainable`](./Explainable.md)

**See Also:**

* \MongoDB\Collection::findOneAndDelete() - 
* http://docs.mongodb.org/manual/reference/command/findAndModify/ - 



## Properties


### findAndModify



```php
private \MongoDB\Operation\FindAndModify $findAndModify
```






***

## Methods


### __construct

Constructs a findAndModify command for deleting a document.

```php
public __construct(string $databaseName, string $collectionName, array|object $filter, array $options = []): mixed
```

Supported options:

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

* session (MongoDB\Driver\Session): Client session.

* sort (document): Determines which document the operation modifies if
  the query selects multiple documents.

* typeMap (array): Type map for BSON deserialization.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.






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
> Automatically generated from source code comments on 2022-07-10 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
