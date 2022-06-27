***

# DropIndexes

Operation for the dropIndexes command.

* Full name: `\MongoDB\Operation\DropIndexes`
* This class implements:
  [`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Collection::dropIndexes() -
* http://docs.mongodb.org/manual/reference/command/dropIndexes/ -

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

### collectionName

```php
private string $collectionName
```

***

### indexName

```php
private string $indexName
```

***

### options

```php
private array $options
```

***

## Methods

### __construct

Constructs a dropIndexes command.

```php
public __construct(string $databaseName, string $collectionName, string $indexName, array $options = []): mixed
```

Supported options:

* maxTimeMS (integer): The maximum amount of time to allow the query to run.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.

* typeMap (array): Type map for BSON deserialization. This will be used for the returned command result document.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.

  This is not supported for server versions < 3.4 and will result in an exception at execution time if used.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$indexName` | **string** | Index name (use &quot;*&quot; to drop all indexes) |
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

### createCommand

Create the dropIndexes command.

```php
private createCommand(): \MongoDB\Driver\Command
```

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
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
