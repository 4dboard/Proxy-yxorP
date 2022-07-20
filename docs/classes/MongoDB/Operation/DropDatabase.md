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


### wireVersionForWriteConcern



```php
private static int $wireVersionForWriteConcern
```



* This property is **static**.


***

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

  Sessions are not supported for server versions < 3.6.

* typeMap (array): Type map for BSON deserialization. This will be used
  for the returned command result document.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.

  This is not supported for server versions < 3.4 and will result in an
  exception at execution time if used.






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
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
