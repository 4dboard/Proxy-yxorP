***

# DeleteOne

Operation for deleting a single document with the delete command.

* Full name: `\MongoDB\Operation\DeleteOne`
* This class implements:
  [`\MongoDB\Operation\Executable`](./Executable.md), [`\MongoDB\Operation\Explainable`](./Explainable.md)

**See Also:**

* \MongoDB\Collection::deleteOne() -
* http://docs.mongodb.org/manual/reference/command/delete/ -

## Properties

### delete

```php
private \MongoDB\Operation\Delete $delete
```

***

## Methods

### __construct

Constructs a delete command.

```php
public __construct(string $databaseName, string $collectionName, array|object $filter, array $options = []): mixed
```

Supported options:

* collation (document): Collation specification.

  This is not supported for server versions < 3.4 and will result in an exception at execution time if used.

* hint (string|document): The index to use. Specify either the index name as a string or the index key pattern as a
  document. If specified, then the query system will only consider plans using the hinted index.

  This is not supported for server versions < 4.4 and will result in an exception at execution time if used.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$filter` | **array&#124;object** | Query by which to delete documents |
| `$options` | **array** | Command options |

***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \MongoDB\DeleteResult
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |

**See Also:**

* \MongoDB\Operation\Executable::execute() -

***

### getCommandDocument

```php
public getCommandDocument(\MongoDB\Driver\Server $server): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |

yxorP::get('REQUEST')
