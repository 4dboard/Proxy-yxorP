***

# ReplaceOne

Operation for replacing a single document with the update command.



* Full name: `\MongoDB\Operation\ReplaceOne`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Collection::replaceOne() - 
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
public __construct(string $databaseName, string $collectionName, array|object $filter, array|object $replacement, array $options = []): mixed
```

Supported options:

* bypassDocumentValidation (boolean): If true, allows the write to
  circumvent document level validation.

  For servers < 3.2, this option is ignored as document level validation
  is not available.

* collation (document): Collation specification.

  This is not supported for server versions < 3.4 and will result in an
  exception at execution time if used.

* hint (string|document): The index to use. Specify either the index
  name as a string or the index key pattern as a document. If specified,
  then the query system will only consider plans using the hinted index.

  This is not supported for server versions < 4.2 and will result in an
  exception at execution time if used.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.

* upsert (boolean): When true, a new document is created if no document
  matches the query. The default is false.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$replacement` | **array&#124;object** | Replacement document |
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


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
