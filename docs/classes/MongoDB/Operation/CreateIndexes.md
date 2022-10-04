***

# CreateIndexes

Operation for the createIndexes command.



* Full name: `\MongoDB\Operation\CreateIndexes`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Collection::createIndex() - 
* \MongoDB\Collection::createIndexes() - 
* http://docs.mongodb.org/manual/reference/command/createIndexes/ - 



## Properties


### wireVersionForCommitQuorum



```php
private static int $wireVersionForCommitQuorum
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

### indexes



```php
private array $indexes
```






***

### options



```php
private array $options
```






***

## Methods


### __construct

Constructs a createIndexes command.

```php
public __construct(string $databaseName, string $collectionName, array[] $indexes, array $options = []): mixed
```

Supported options:

* commitQuorum (integer|string): Specifies how many data-bearing members
  of a replica set, including the primary, must complete the index
  builds successfully before the primary marks the indexes as ready.

* maxTimeMS (integer): The maximum amount of time to allow the query to
  run.

* session (MongoDB\Driver\Session): Client session.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$indexes` | **array[]** | List of index specifications |
| `$options` | **array** | Command options |




***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |


**Return Value:**

The names of the created indexes


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

### executeCommand

Create one or more indexes for the collection using the createIndexes
command.

```php
private executeCommand(\MongoDB\Driver\Server $server): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |




***


***

