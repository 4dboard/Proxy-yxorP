***

# Count

Operation for the count command.



* Full name: `\MongoDB\Operation\Count`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md), [`\MongoDB\Operation\Explainable`](./Explainable.md)

**See Also:**

* \MongoDB\Collection::count() - 
* http://docs.mongodb.org/manual/reference/command/count/ - 



## Properties


### wireVersionForCollation



```php
private static int $wireVersionForCollation
```



* This property is **static**.


***

### wireVersionForReadConcern



```php
private static int $wireVersionForReadConcern
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

Constructs a count command.

```php
public __construct(string $databaseName, string $collectionName, array|object $filter = [], array $options = []): mixed
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

Create the count command document.

```php
private createCommandDocument(): array
```











***

### createOptions

Create options for executing the command.

```php
private createOptions(): array
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executereadcommand.php - 

***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
