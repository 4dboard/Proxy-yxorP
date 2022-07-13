***

# InsertOne

Operation for inserting a single document with the insert command.



* Full name: `\MongoDB\Operation\InsertOne`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Collection::insertOne() - 
* http://docs.mongodb.org/manual/reference/command/insert/ - 



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

### document



```php
private array|object $document
```






***

### options



```php
private array $options
```






***

## Methods


### __construct

Constructs an insert command.

```php
public __construct(string $databaseName, string $collectionName, array|object $document, array $options = []): mixed
```

Supported options:

* bypassDocumentValidation (boolean): If true, allows the write to
  circumvent document level validation.

* session (MongoDB\Driver\Session): Client session.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$document` | **array&#124;object** | Document to insert |
| `$options` | **array** | Command options |




***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \MongoDB\InsertOneResult
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |



**See Also:**

* \MongoDB\Operation\Executable::execute() - 

***

### createBulkWriteOptions

Create options for constructing the bulk write.

```php
private createBulkWriteOptions(): array
```










**See Also:**

* https://www.php.net/manual/en/mongodb-driver-bulkwrite.construct.php - 

***

### createExecuteOptions

Create options for executing the bulk write.

```php
private createExecuteOptions(): array
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executebulkwrite.php - 

***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
