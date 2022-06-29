***

# MapReduce

Operation for the mapReduce command.

* Full name: `\MongoDB\Operation\MapReduce`
* This class implements:
  [`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Collection::mapReduce() -
* https://docs.mongodb.com/manual/reference/command/mapReduce/ -

## Properties

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

### wireVersionForReadConcern

```php
private static int $wireVersionForReadConcern
```

* This property is **static**.

***

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

### map

```php
private \MongoDB\BSON\JavascriptInterface $map
```

***

### reduce

```php
private \MongoDB\BSON\JavascriptInterface $reduce
```

***

### out

```php
private array|object|string $out
```

***

### options

```php
private array $options
```

***

## Methods

### __construct

Constructs a mapReduce command.

```php
public __construct(string $databaseName, string $collectionName, \MongoDB\BSON\JavascriptInterface $map, \MongoDB\BSON\JavascriptInterface $reduce, string|array|object $out, array $options = []): mixed
```

Required arguments:

* map (MongoDB\BSON\Javascript): A JavaScript function that associates or "maps" a value with a key and emits the key
  and value pair.

  Passing a Javascript instance with a scope is deprecated. Put all scope variables in the "scope" option of the
  MapReduce operation.

* reduce (MongoDB\BSON\Javascript): A JavaScript function that "reduces"
  to a single object all the values associated with a particular key.

  Passing a Javascript instance with a scope is deprecated. Put all scope variables in the "scope" option of the
  MapReduce operation.

* out (string|document): Specifies where to output the result of the map-reduce operation. You can either output to a
  collection or return the result inline. On a primary member of a replica set you can output either to a collection or
  inline, but on a secondary, only inline output is possible.

Supported options:

* bypassDocumentValidation (boolean): If true, allows the write to circumvent document level validation. This only
  applies when results are output to a collection.

  For servers < 3.2, this option is ignored as document level validation is not available.

* collation (document): Collation specification.

  This is not supported for server versions < 3.4 and will result in an exception at execution time if used.

* finalize (MongoDB\BSON\JavascriptInterface): Follows the reduce method and modifies the output.

  Passing a Javascript instance with a scope is deprecated. Put all scope variables in the "scope" option of the
  MapReduce operation.

* jsMode (boolean): Specifies whether to convert intermediate data into BSON format between the execution of the map and
  reduce functions.

* limit (integer): Specifies a maximum number of documents for the input into the map function.

* maxTimeMS (integer): The maximum amount of time to allow the query to run.

* query (document): Specifies the selection criteria using query operators for determining the documents input to the
  map function.

* readConcern (MongoDB\Driver\ReadConcern): Read concern. This is not supported when results are returned inline.

  This is not supported for server versions < 3.2 and will result in an exception at execution time if used.

* readPreference (MongoDB\Driver\ReadPreference): Read preference.

  This option is ignored if results are output to a collection.

* scope (document): Specifies global variables that are accessible in the map, reduce and finalize functions.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.

* sort (document): Sorts the input documents. This option is useful for optimization. For example, specify the sort key
  to be the same as the emit key so that there are fewer reduce operations. The sort key must be in an existing index
  for this collection.

* typeMap (array): Type map for BSON deserialization. This will be applied to the returned Cursor (it is not sent to the
  server).

* verbose (boolean): Specifies whether to include the timing information in the result information.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern. This only applies when results are output to a collection.

  This is not supported for server versions < 3.4 and will result in an exception at execution time if used.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$map` | **\MongoDB\BSON\JavascriptInterface** | Map function |
| `$reduce` | **\MongoDB\BSON\JavascriptInterface** | Reduce function |
| `$out` | **string&#124;array&#124;object** | Output specification |
| `$options` | **array** | Command options |

***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): \MongoDB\MapReduceResult
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |

**See Also:**

* \MongoDB\Operation\Executable::execute() -

***

### checkOutDeprecations

```php
private checkOutDeprecations(string|array|object $out): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$out` | **string&#124;array&#124;object** |  |

***

### createCommand

Create the mapReduce command.

```php
private createCommand(\MongoDB\Driver\Server $server): \MongoDB\Driver\Command
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |

***

### createGetIteratorCallable

Creates a callable for MapReduceResult::getIterator().

```php
private createGetIteratorCallable(\stdClass $result, \MongoDB\Driver\Server $server): callable
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **\stdClass** |  |
| `$server` | **\MongoDB\Driver\Server** |  |

***

### createOptions

Create options for executing the command.

```php
private createOptions(bool $hasOutputCollection): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hasOutputCollection` | **bool** |  |

**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executereadcommand.php -
  * http://php.net/manual/en/mongodb-driver-server.executereadwritecommand.php -

***


***

