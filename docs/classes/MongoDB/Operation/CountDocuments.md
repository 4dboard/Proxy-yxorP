***

# CountDocuments

Operation for obtaining an exact count of documents in a collection



* Full name: `\MongoDB\Operation\CountDocuments`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Collection::countDocuments() - 
* https://github.com/mongodb/specifications/blob/master/source/crud/crud.rst#countdocuments - 



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

### aggregateOptions



```php
private array $aggregateOptions
```






***

### countOptions



```php
private array $countOptions
```






***

### aggregate



```php
private \MongoDB\Operation\Aggregate $aggregate
```






***

## Methods


### __construct

Constructs an aggregate command for counting documents

```php
public __construct(string $databaseName, string $collectionName, array|object $filter, array $options = []): mixed
```

Supported options:

* collation (document): Collation specification.

  This is not supported for server versions < 3.4 and will result in an
  exception at execution time if used.

* hint (string|document): The index to use. Specify either the index
  name as a string or the index key pattern as a document. If specified,
  then the query system will only consider plans using the hinted index.

* limit (integer): The maximum number of documents to count.

* maxTimeMS (integer): The maximum amount of time to allow the query to
  run.

* readConcern (MongoDB\Driver\ReadConcern): Read concern.

  This is not supported for server versions < 3.2 and will result in an
  exception at execution time if used.

* readPreference (MongoDB\Driver\ReadPreference): Read preference.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.

* skip (integer): The number of documents to skip before returning the
  documents.






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
public execute(\MongoDB\Driver\Server $server): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |



**See Also:**

* \MongoDB\Operation\Executable::execute() - 

***

### createAggregate



```php
private createAggregate(): \MongoDB\Operation\Aggregate
```











***


***
> Automatically generated from source code comments on 2022-07-02 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
