***

# ListIndexes

Operation for the listIndexes command.



* Full name: `\MongoDB\Operation\ListIndexes`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Collection::listIndexes() - 
* http://docs.mongodb.org/manual/reference/command/listIndexes/ - 



## Properties


### errorCodeDatabaseNotFound



```php
private static int $errorCodeDatabaseNotFound
```



* This property is **static**.


***

### errorCodeNamespaceNotFound



```php
private static int $errorCodeNamespaceNotFound
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

### options



```php
private array $options
```






***

## Methods


### __construct

Constructs a listIndexes command.

```php
public __construct(string $databaseName, string $collectionName, array $options = []): mixed
```

Supported options:

* maxTimeMS (integer): The maximum amount of time to allow the query to
  run.

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
public execute(\MongoDB\Driver\Server $server): \MongoDB\Model\IndexInfoIterator
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

Note: read preference is intentionally omitted, as the spec requires that
the command be executed on the primary.








**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executecommand.php - 

***

### executeCommand

Returns information for all indexes for this collection using the
listIndexes command.

```php
private executeCommand(\MongoDB\Driver\Server $server): \MongoDB\Model\IndexInfoIteratorIterator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |




***


***

