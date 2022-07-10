***

# ListCollections

Operation for the listCollections command.



* Full name: `\MongoDB\Operation\ListCollections`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Database::listCollections() - 
* http://docs.mongodb.org/manual/reference/command/listCollections/ - 



## Properties


### databaseName



```php
private string $databaseName
```






***

### listCollections



```php
private \MongoDB\Command\ListCollections $listCollections
```






***

## Methods


### __construct

Constructs a listCollections command.

```php
public __construct(string $databaseName, array $options = []): mixed
```

Supported options:

* authorizedCollections (boolean): Determines which collections are
  returned based on the user privileges.

  For servers < 4.0, this option is ignored.

* filter (document): Query by which to filter collections.

* maxTimeMS (integer): The maximum amount of time to allow the query to
  run.

* session (MongoDB\Driver\Session): Client session.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$options` | **array** | Command options |




***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \MongoDB\Model\CollectionInfoIterator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |



**See Also:**

* \MongoDB\Operation\Executable::execute() - 

***


***

