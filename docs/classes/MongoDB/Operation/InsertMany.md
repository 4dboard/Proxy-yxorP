***

# InsertMany

Operation for inserting multiple documents with the insert command.



* Full name: `\MongoDB\Operation\InsertMany`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Collection::insertMany() - 
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

### documents



```php
private object[]|array[] $documents
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
public __construct(string $databaseName, string $collectionName, array[]|object[] $documents, array $options = []): mixed
```

Supported options:

* bypassDocumentValidation (boolean): If true, allows the write to
  circumvent document level validation.

  For servers < 3.2, this option is ignored as document level validation
  is not available.

* ordered (boolean): If true, when an insert fails, return without
  performing the remaining writes. If false, when a write fails,
  continue with the remaining writes, if any. The default is true.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$documents` | **array[]&#124;object[]** | List of documents to insert |
| `$options` | **array** | Command options |




***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \MongoDB\InsertManyResult
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

