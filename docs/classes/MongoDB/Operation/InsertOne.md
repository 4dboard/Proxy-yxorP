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


### wireVersionForDocumentLevelValidation



```php
private static int $wireVersionForDocumentLevelValidation
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

  For servers < 3.2, this option is ignored as document level validation
  is not available.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.

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

### createOptions

Create options for executing the bulk write.

```php
private createOptions(): array
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executebulkwrite.php - 

***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
