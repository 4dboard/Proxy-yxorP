***

# InsertMany

Operation for inserting multiple documents with the insert command.

* Full name: `\MongoDB\Operation\InsertMany`
* This class implements:
  [`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Collection::insertMany() -
* http://docs.mongodb.org/manual/reference/command/insert/ -

## Properties

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

### documents

```php
private object[]|array[] $documents
```

***

### options

```php
private array $options
```

***

## Methods

### __construct

Constructs an insert command.

```php
public __construct(string $databaseName, string $collectionName, array[]|object[] $documents, array $options = []): mixed
```

Supported options:

* bypassDocumentValidation (boolean): If true, allows the write to circumvent document level validation.

* ordered (boolean): If true, when an insert fails, return without performing the remaining writes. If false, when a
  write fails, continue with the remaining writes, if any. The default is true.

* session (MongoDB\Driver\Session): Client session.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$documents` | **array[]&#124;object[]** | List of documents to insert |
| `$options` | **array** | Command options |

***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \MongoDB\InsertManyResult
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |

**See Also:**

* \MongoDB\Operation\Executable::execute() -

***

### createBulkWriteOptions

Create options for constructing the bulk write.

```php
private createBulkWriteOptions(): array
```

**See Also:**

* https://www.php.net/manual/en/mongodb-driver-bulkwrite.construct.php -

***

### createExecuteOptions

Create options for executing the bulk write.

```php
private createExecuteOptions(): array
```

**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executebulkwrite.php -

***


***

