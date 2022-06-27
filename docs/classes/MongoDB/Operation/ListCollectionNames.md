***

# ListCollectionNames

Operation for the listCollectionNames helper.

* Full name: `\MongoDB\Operation\ListCollectionNames`
* This class implements:
  [`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Database::listCollectionNames() -
* http://docs.mongodb.org/manual/reference/command/listCollections/ -

## Properties

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

* filter (document): Query by which to filter collections.

* maxTimeMS (integer): The maximum amount of time to allow the query to run.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
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
