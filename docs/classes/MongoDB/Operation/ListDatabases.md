***

# ListDatabases

Operation for the ListDatabases command.



* Full name: `\MongoDB\Operation\ListDatabases`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Client::listDatabases() - 
* http://docs.mongodb.org/manual/reference/command/ListDatabases/ - 



## Properties


### listDatabases



```php
private \MongoDB\Command\ListDatabases $listDatabases
```






***

## Methods


### __construct

Constructs a listDatabases command.

```php
public __construct(array $options = []): mixed
```

Supported options:

* authorizedDatabases (boolean): Determines which databases are returned
  based on the user privileges.

  For servers < 4.0.5, this option is ignored.

* filter (document): Query by which to filter databases.

* maxTimeMS (integer): The maximum amount of time to allow the query to
  run.

* session (MongoDB\Driver\Session): Client session.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Command options |




***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \MongoDB\Model\DatabaseInfoIterator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |



**See Also:**

* \MongoDB\Operation\Executable::execute() - 

***


***

