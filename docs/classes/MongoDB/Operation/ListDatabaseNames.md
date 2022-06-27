***

# ListDatabaseNames

Operation for the ListDatabases command, returning only database names.

* Full name: `\MongoDB\Operation\ListDatabaseNames`
* This class implements:
  [`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Client::listDatabaseNames() -
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

* authorizedDatabases (boolean): Determines which databases are returned based on the user privileges.

  For servers < 4.0.5, this option is ignored.

* filter (document): Query by which to filter databases.

  For servers < 3.6, this option is ignored.

* maxTimeMS (integer): The maximum amount of time to allow the query to run.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Command options |

***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \Iterator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |

**See Also:**

* \MongoDB\Operation\Executable::execute() -

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
