***

# EstimatedDocumentCount

Operation for obtaining an estimated count of documents in a collection



* Full name: `\MongoDB\Operation\EstimatedDocumentCount`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md), [`\MongoDB\Operation\Explainable`](./Explainable.md)

**See Also:**

* \MongoDB\Collection::estimatedDocumentCount() - 
* http://docs.mongodb.org/manual/reference/command/count/ - 



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

### options



```php
private array $options
```






***

### count



```php
private \MongoDB\Operation\Count $count
```






***

## Methods


### __construct

Constructs a count command.

```php
public __construct(string $databaseName, string $collectionName, array $options = []): mixed
```

Supported options:

* maxTimeMS (integer): The maximum amount of time to allow the query to
  run.

* readConcern (MongoDB\Driver\ReadConcern): Read concern.

  This is not supported for server versions < 3.2 and will result in an
  exception at execution time if used.

* readPreference (MongoDB\Driver\ReadPreference): Read preference.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
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

### createCount



```php
private createCount(): \MongoDB\Operation\Count
```











***


***
> Automatically generated from source code comments on 2022-07-24 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
