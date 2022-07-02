***

# DatabaseCommand

Operation for executing a database command.



* Full name: `\MongoDB\Operation\DatabaseCommand`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Database::command() - 



## Properties


### databaseName



```php
private string $databaseName
```






***

### command



```php
private array|\MongoDB\Driver\Command|object $command
```






***

### options



```php
private array $options
```






***

## Methods


### __construct

Constructs a command.

```php
public __construct(string $databaseName, array|object $command, array $options = []): mixed
```

Supported options:

* readPreference (MongoDB\Driver\ReadPreference): The read preference to
  use when executing the command. This may be used when issuing the
  command to a replica set or mongos node to ensure that the driver sets
  the wire protocol accordingly or adds the read preference to the
  command document, respectively.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.

* typeMap (array): Type map for BSON deserialization. This will be
  applied to the returned Cursor (it is not sent to the server).






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$command` | **array&#124;object** | Command document |
| `$options` | **array** | Options for command execution |




***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \MongoDB\Driver\Cursor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |



**See Also:**

* \MongoDB\Operation\Executable::execute() - 

***

### createOptions

Create options for executing the command.

```php
private createOptions(): array
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executecommand.php - 

***


***
> yxorP Documentation
