***

# Distinct

Operation for the distinct command.

* Full name: `\MongoDB\Operation\Distinct`
* This class implements:
  [`\MongoDB\Operation\Executable`](./Executable.md), [`\MongoDB\Operation\Explainable`](./Explainable.md)

**See Also:**

* \MongoDB\Collection::distinct() -
* http://docs.mongodb.org/manual/reference/command/distinct/ -

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

### fieldName

```php
private string $fieldName
```

***

### filter

```php
private array|object $filter
```

***

### options

```php
private array $options
```

***

## Methods

### __construct

Constructs a distinct command.

```php
public __construct(string $databaseName, string $collectionName, string $fieldName, array|object $filter = [], array $options = []): mixed
```

Supported options:

* collation (document): Collation specification.

* maxTimeMS (integer): The maximum amount of time to allow the query to run.

* readConcern (MongoDB\Driver\ReadConcern): Read concern.

* readPreference (MongoDB\Driver\ReadPreference): Read preference.

* session (MongoDB\Driver\Session): Client session.

* typeMap (array): Type map for BSON deserialization.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$fieldName` | **string** | Field for which to return distinct values |
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$options` | **array** | Command options |

***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |

**See Also:**

* \MongoDB\Operation\Executable::execute() -

***

### getCommandDocument

Returns the command document for this operation.

```php
public getCommandDocument(\MongoDB\Driver\Server $server): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |

**See Also:**

* \MongoDB\Operation\Explainable::getCommandDocument() -

***

### createCommandDocument

Create the distinct command document.

```php
private createCommandDocument(): array
```

***

### createOptions

Create options for executing the command.

```php
private createOptions(): array
```

**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executereadcommand.php -

***


***

