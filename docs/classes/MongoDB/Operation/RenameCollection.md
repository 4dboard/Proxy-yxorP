***

# RenameCollection

Operation for the renameCollection command.



* Full name: `\MongoDB\Operation\RenameCollection`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Collection::rename() - 
* \MongoDB\Database::renameCollection() - 
* https://docs.mongodb.org/manual/reference/command/renameCollection/ - 



## Properties


### fromNamespace



```php
private string $fromNamespace
```






***

### toNamespace



```php
private string $toNamespace
```






***

### options



```php
private array $options
```






***

## Methods


### __construct

Constructs a renameCollection command.

```php
public __construct(string $fromDatabaseName, string $fromCollectionName, string $toDatabaseName, string $toCollectionName, array $options = []): mixed
```

Supported options:

* session (MongoDB\Driver\Session): Client session.

* typeMap (array): Type map for BSON deserialization. This will be used
  for the returned command result document.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.

* dropTarget (boolean): If true, MongoDB will drop the target before
  renaming the collection.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fromDatabaseName` | **string** | Database name |
| `$fromCollectionName` | **string** | Collection name |
| `$toDatabaseName` | **string** | New database name |
| `$toCollectionName` | **string** | New collection name |
| `$options` | **array** | Command options |




***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): array|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |


**Return Value:**

Command result document


**See Also:**

* \MongoDB\Operation\Executable::execute() - 

***

### createOptions

Create options for executing the command.

```php
private createOptions(): array
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executewritecommand.php - 

***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
