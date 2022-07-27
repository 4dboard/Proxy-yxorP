***

# ModifyCollection

Operation for the collMod command.



* Full name: `\MongoDB\Operation\ModifyCollection`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Database::modifyCollection() - 
* http://docs.mongodb.org/manual/reference/command/collMod/ - 



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

### collectionOptions



```php
private array $collectionOptions
```






***

### options



```php
private array $options
```






***

## Methods


### __construct

Constructs a collMod command.

```php
public __construct(string $databaseName, string $collectionName, array $collectionOptions, array $options = []): mixed
```

Supported options:

* session (MongoDB\Driver\Session): Client session.

* typeMap (array): Type map for BSON deserialization. This will only be
  used for the returned command result document.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection or view to modify |
| `$collectionOptions` | **array** | Collection or view options to assign |
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

