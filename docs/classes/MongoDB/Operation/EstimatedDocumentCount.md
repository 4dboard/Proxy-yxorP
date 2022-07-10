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

### errorCodeCollectionNotFound



```php
private static int $errorCodeCollectionNotFound
```



* This property is **static**.


***

### wireVersionForCollStats



```php
private static int $wireVersionForCollStats
```



* This property is **static**.


***

## Methods


### __construct

Constructs a command to get the estimated number of documents in a
collection.

```php
public __construct(string $databaseName, string $collectionName, array $options = []): mixed
```

Supported options:

* maxTimeMS (integer): The maximum amount of time to allow the query to
  run.

* readConcern (MongoDB\Driver\ReadConcern): Read concern.

* readPreference (MongoDB\Driver\ReadPreference): Read preference.

* session (MongoDB\Driver\Session): Client session.






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

### createAggregate



```php
private createAggregate(): \MongoDB\Operation\Aggregate
```











***

### createCommand



```php
private createCommand(\MongoDB\Driver\Server $server): \MongoDB\Operation\Aggregate|\MongoDB\Operation\Count
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
> Automatically generated from source code comments on 2022-07-10 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
