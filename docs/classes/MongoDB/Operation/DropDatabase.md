***

# DropDatabase

Operation for the dropDatabase command.



* Full name: `\MongoDB\Operation\DropDatabase`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Client::dropDatabase() - 
* \MongoDB\Database::drop() - 
* http://docs.mongodb.org/manual/reference/command/dropDatabase/ - 



## Properties


### databaseName



```php
private string $databaseName
```






***

### options



```php
private array $options
```






***

## Methods


### __construct

Constructs a dropDatabase command.

```php
public __construct(string $databaseName, array $options = []): mixed
```

Supported options:

* session (MongoDB\Driver\Session): Client session.

* typeMap (array): Type map for BSON deserialization. This will be used
  for the returned command result document.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
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

