***

# Database





* Full name: `\MongoDB\Database`



## Properties


### defaultTypeMap



```php
private static array $defaultTypeMap
```



* This property is **static**.


***

### wireVersionForReadConcern



```php
private static int $wireVersionForReadConcern
```



* This property is **static**.


***

### wireVersionForWritableCommandWriteConcern



```php
private static int $wireVersionForWritableCommandWriteConcern
```



* This property is **static**.


***

### wireVersionForReadConcernWithWriteStage



```php
private static int $wireVersionForReadConcernWithWriteStage
```



* This property is **static**.


***

### databaseName



```php
private string $databaseName
```






***

### manager



```php
private \MongoDB\Driver\Manager $manager
```






***

### readConcern



```php
private \MongoDB\Driver\ReadConcern $readConcern
```






***

### readPreference



```php
private \MongoDB\Driver\ReadPreference $readPreference
```






***

### typeMap



```php
private array $typeMap
```






***

### writeConcern



```php
private \MongoDB\Driver\WriteConcern $writeConcern
```






***

## Methods


### __construct

Constructs new Database instance.

```php
public __construct(\MongoDB\Driver\Manager $manager, string $databaseName, array $options = []): mixed
```

This class provides methods for database-specific operations and serves
as a gateway for accessing collections.

Supported options:

 * readConcern (MongoDB\Driver\ReadConcern): The default read concern to
   use for database operations and selected collections. Defaults to the
   Manager's read concern.

 * readPreference (MongoDB\Driver\ReadPreference): The default read
   preference to use for database operations and selected collections.
   Defaults to the Manager's read preference.

 * typeMap (array): Default type map for cursors and BSON documents.

 * writeConcern (MongoDB\Driver\WriteConcern): The default write concern
   to use for database operations and selected collections. Defaults to
   the Manager's write concern.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$manager` | **\MongoDB\Driver\Manager** | Manager instance from the driver |
| `$databaseName` | **string** | Database name |
| `$options` | **array** | Database options |




***

### __debugInfo

Return internal properties for debugging purposes.

```php
public __debugInfo(): array
```










**See Also:**

* http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.debuginfo - 

***

### __get

Select a collection within this database.

```php
public __get(string $collectionName): \MongoDB\Collection
```

Note: collections whose names contain special characters (e.g. ".") may
be selected with complex syntax (e.g. $database->{"system.profile"}) or
{@link}.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collectionName` | **string** | Name of the collection to select |



**See Also:**

* http://php.net/oop5.overloading#object.get - * http://php.net/types.string#language.types.string.parsing.complex - 

***

### __toString

Return the database name.

```php
public __toString(): string
```











***

### aggregate

Runs an aggregation framework pipeline on the database for pipeline
stages that do not require an underlying collection, such as $currentOp
and $listLocalSessions. Requires MongoDB >= 3.6

```php
public aggregate(array $pipeline, array $options = []): \Traversable
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pipeline` | **array** | List of pipeline operations |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\Aggregate::__construct() - for supported options

***

### command

Execute a command on this database.

```php
public command(array|object $command, array $options = []): \MongoDB\Driver\Cursor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **array&#124;object** | Command document |
| `$options` | **array** | Options for command execution |



**See Also:**

* \MongoDB\Operation\DatabaseCommand::__construct() - for supported options

***

### createCollection

Create a new collection explicitly.

```php
public createCollection(string $collectionName, array $options = []): array|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collectionName` | **string** |  |
| `$options` | **array** |  |


**Return Value:**

Command result document


**See Also:**

* \MongoDB\Operation\CreateCollection::__construct() - for supported options

***

### drop

Drop this database.

```php
public drop(array $options = []): array|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Additional options |


**Return Value:**

Command result document


**See Also:**

* \MongoDB\Operation\DropDatabase::__construct() - for supported options

***

### dropCollection

Drop a collection within this database.

```php
public dropCollection(string $collectionName, array $options = []): array|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collectionName` | **string** | Collection name |
| `$options` | **array** | Additional options |


**Return Value:**

Command result document


**See Also:**

* \MongoDB\Operation\DropCollection::__construct() - for supported options

***

### getDatabaseName

Returns the database name.

```php
public getDatabaseName(): string
```











***

### getManager

Return the Manager.

```php
public getManager(): \MongoDB\Driver\Manager
```











***

### getReadConcern

Return the read concern for this database.

```php
public getReadConcern(): \MongoDB\Driver\ReadConcern
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-readconcern.isdefault.php - 

***

### getReadPreference

Return the read preference for this database.

```php
public getReadPreference(): \MongoDB\Driver\ReadPreference
```











***

### getTypeMap

Return the type map for this database.

```php
public getTypeMap(): array
```











***

### getWriteConcern

Return the write concern for this database.

```php
public getWriteConcern(): \MongoDB\Driver\WriteConcern
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-writeconcern.isdefault.php - 

***

### listCollectionNames

Returns the names of all collections in this database

```php
public listCollectionNames(array $options = []): \Iterator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |



**See Also:**

* \MongoDB\Operation\ListCollectionNames::__construct() - for supported options

***

### listCollections

Returns information for all collections in this database.

```php
public listCollections(array $options = []): \MongoDB\Model\CollectionInfoIterator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |



**See Also:**

* \MongoDB\Operation\ListCollections::__construct() - for supported options

***

### modifyCollection

Modifies a collection or view.

```php
public modifyCollection(string $collectionName, array $collectionOptions, array $options = []): array|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collectionName` | **string** | Collection or view to modify |
| `$collectionOptions` | **array** | Collection or view options to assign |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\ModifyCollection::__construct() - for supported options

***

### selectCollection

Select a collection within this database.

```php
public selectCollection(string $collectionName, array $options = []): \MongoDB\Collection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collectionName` | **string** | Name of the collection to select |
| `$options` | **array** | Collection constructor options |



**See Also:**

* \MongoDB\Collection::__construct() - for supported options

***

### selectGridFSBucket

Select a GridFS bucket within this database.

```php
public selectGridFSBucket(array $options = []): \MongoDB\GridFS\Bucket
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Bucket constructor options |



**See Also:**

* \MongoDB\GridFS\Bucket::__construct() - for supported options

***

### watch

Create a change stream for watching changes to the database.

```php
public watch(array $pipeline = [], array $options = []): \MongoDB\ChangeStream
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pipeline` | **array** | List of pipeline operations |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\Watch::__construct() - for supported options

***

### withOptions

Get a clone of this database with different options.

```php
public withOptions(array $options = []): \MongoDB\Database
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Database constructor options |



**See Also:**

* \MongoDB\Database::__construct() - for supported options

***


***
> Automatically generated from source code comments on 2022-07-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
