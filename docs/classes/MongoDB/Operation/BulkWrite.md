***

# BulkWrite

Operation for executing multiple write operations.

* Full name: `\MongoDB\Operation\BulkWrite`
* This class implements:
  [`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Collection::bulkWrite() -

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DELETE_MANY`|public| |&#039;deleteMany&#039;|
|`DELETE_ONE`|public| |&#039;deleteOne&#039;|
|`INSERT_ONE`|public| |&#039;insertOne&#039;|
|`REPLACE_ONE`|public| |&#039;replaceOne&#039;|
|`UPDATE_MANY`|public| |&#039;updateMany&#039;|
|`UPDATE_ONE`|public| |&#039;updateOne&#039;|

## Properties

### wireVersionForArrayFilters

```php
private static int $wireVersionForArrayFilters
```

* This property is **static**.

***

### wireVersionForCollation

```php
private static int $wireVersionForCollation
```

* This property is **static**.

***

### wireVersionForDocumentLevelValidation

```php
private static int $wireVersionForDocumentLevelValidation
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

### operations

```php
private array[] $operations
```

***

### options

```php
private array $options
```

***

### isArrayFiltersUsed

```php
private bool $isArrayFiltersUsed
```

***

### isCollationUsed

```php
private bool $isCollationUsed
```

***

## Methods

### __construct

Constructs a bulk write operation.

```php
public __construct(string $databaseName, string $collectionName, array[] $operations, array $options = []): mixed
```

Example array structure for all supported operation types:

[
[ 'deleteMany' => [ $filter, $options ] ],
[ 'deleteOne' => [ $filter, $options ] ],
[ 'insertOne' => [ $document ] ],
[ 'replaceOne' => [ $filter, $replacement, $options ] ],
[ 'updateMany' => [ $filter, $update, $options ] ],
[ 'updateOne' => [ $filter, $update, $options ] ],
]

Arguments correspond to the respective Operation classes; however, the writeConcern option is specified for the
top-level bulk write operation instead of each individual operation.

Supported options for deleteMany and deleteOne operations:

* collation (document): Collation specification.

  This is not supported for server versions < 3.4 and will result in an exception at execution time if used.

Supported options for replaceOne, updateMany, and updateOne operations:

* collation (document): Collation specification.

  This is not supported for server versions < 3.4 and will result in an exception at execution time if used.

* upsert (boolean): When true, a new document is created if no document matches the query. The default is false.

Supported options for updateMany and updateOne operations:

* arrayFilters (document array): A set of filters specifying to which array elements an update should apply.

  This is not supported for server versions < 3.6 and will result in an exception at execution time if used.

Supported options for the bulk write operation:

* bypassDocumentValidation (boolean): If true, allows the write to circumvent document level validation. The default is
  false.

  For servers < 3.2, this option is ignored as document level validation is not available.

* ordered (boolean): If true, when an insert fails, return without performing the remaining writes. If false, when a
  write fails, continue with the remaining writes, if any. The default is true.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$operations` | **array[]** | List of write operations |
| `$options` | **array** | Command options |

***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \MongoDB\BulkWriteResult
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |

**See Also:**

* \MongoDB\Operation\Executable::execute() -

***

### createOptions

Create options for executing the bulk write.

```php
private createOptions(): array
```

**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executebulkwrite.php -

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
