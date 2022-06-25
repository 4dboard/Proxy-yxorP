***

# Collection





* Full name: `\MongoDB\Collection`



## Properties


### defaultTypeMap



```php
private static array $defaultTypeMap
```



* This property is **static**.


***

### wireVersionForFindAndModifyWriteConcern



```php
private static int $wireVersionForFindAndModifyWriteConcern
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

### collectionName



```php
private string $collectionName
```






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

Constructs new Collection instance.

```php
public __construct(\MongoDB\Driver\Manager $manager, string $databaseName, string $collectionName, array $options = []): mixed
```

This class provides methods for collection-specific operations, such as
CRUD (i.e. create, read, update, and delete) and index management.

Supported options:

 * readConcern (MongoDB\Driver\ReadConcern): The default read concern to
   use for collection operations. Defaults to the Manager's read concern.

 * readPreference (MongoDB\Driver\ReadPreference): The default read
   preference to use for collection operations. Defaults to the Manager's
   read preference.

 * typeMap (array): Default type map for cursors and BSON documents.

 * writeConcern (MongoDB\Driver\WriteConcern): The default write concern
   to use for collection operations. Defaults to the Manager's write
   concern.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$manager` | **\MongoDB\Driver\Manager** | Manager instance from the driver |
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$options` | **array** | Collection options |




***

### __debugInfo

Return internal properties for debugging purposes.

```php
public __debugInfo(): array
```










**See Also:**

* http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.debuginfo - 

***

### __toString

Return the collection namespace (e.g. "db.collection").

```php
public __toString(): string
```










**See Also:**

* https://docs.mongodb.org/manual/faq/developers/#faq-dev-namespace - 

***

### aggregate

Executes an aggregation framework pipeline on the collection.

```php
public aggregate(array $pipeline, array $options = []): \Traversable
```

Note: this method's return value depends on the MongoDB server version
and the "useCursor" option. If "useCursor" is true, a Cursor will be
returned; otherwise, an ArrayIterator is returned, which wraps the
"result" array from the command response document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pipeline` | **array** | List of pipeline operations |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\Aggregate::__construct() - for supported options

***

### bulkWrite

Executes multiple write operations.

```php
public bulkWrite(array[] $operations, array $options = []): \MongoDB\BulkWriteResult
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operations` | **array[]** | List of write operations |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\BulkWrite::__construct() - for supported options

***

### count

Gets the number of documents matching the filter.

```php
public count(array|object $filter = [], array $options = []): int
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\Count::__construct() - for supported options

***

### countDocuments

Gets the number of documents matching the filter.

```php
public countDocuments(array|object $filter = [], array $options = []): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\CountDocuments::__construct() - for supported options

***

### createIndex

Create a single index for the collection.

```php
public createIndex(array|object $key, array $options = []): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **array&#124;object** | Document containing fields mapped to values,<br />which denote order or an index type |
| `$options` | **array** | Index and command options |


**Return Value:**

The name of the created index


**See Also:**

* \MongoDB\Collection::createIndexes() - * \MongoDB\Operation\CreateIndexes::__construct() - for supported command options

***

### createIndexes

Create one or more indexes for the collection.

```php
public createIndexes(array[] $indexes, array $options = []): string[]
```

Each element in the $indexes array must have a "key" document, which
contains fields mapped to an order or type. Other options may follow.
For example:

    $indexes = [
        // Create a unique index on the "username" field
        [ 'key' => [ 'username' => 1 ], 'unique' => true ],
        // Create a 2dsphere index on the "loc" field with a custom name
        [ 'key' => [ 'loc' => '2dsphere' ], 'name' => 'geo' ],
    ];

If the "name" option is unspecified, a name will be generated from the
"key" document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$indexes` | **array[]** | List of index specifications |
| `$options` | **array** | Command options |


**Return Value:**

The names of the created indexes


**See Also:**

* http://docs.mongodb.org/manual/reference/command/createIndexes/ - * http://docs.mongodb.org/manual/reference/method/db.collection.createIndex/ - * \MongoDB\Operation\CreateIndexes::__construct() - for supported command options

***

### deleteMany

Deletes all documents matching the filter.

```php
public deleteMany(array|object $filter, array $options = []): \MongoDB\DeleteResult
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to delete documents |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\DeleteMany::__construct() - for supported options* http://docs.mongodb.org/manual/reference/command/delete/ - 

***

### deleteOne

Deletes at most one document matching the filter.

```php
public deleteOne(array|object $filter, array $options = []): \MongoDB\DeleteResult
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to delete documents |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\DeleteOne::__construct() - for supported options* http://docs.mongodb.org/manual/reference/command/delete/ - 

***

### distinct

Finds the distinct values for a specified field across the collection.

```php
public distinct(string $fieldName, array|object $filter = [], array $options = []): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fieldName` | **string** | Field for which to return distinct values |
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\Distinct::__construct() - for supported options

***

### drop

Drop this collection.

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

* \MongoDB\Operation\DropCollection::__construct() - for supported options

***

### dropIndex

Drop a single index in the collection.

```php
public dropIndex(string|\MongoDB\Model\IndexInfo $indexName, array $options = []): array|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$indexName` | **string&#124;\MongoDB\Model\IndexInfo** | Index name or model object |
| `$options` | **array** | Additional options |


**Return Value:**

Command result document


**See Also:**

* \MongoDB\Operation\DropIndexes::__construct() - for supported options

***

### dropIndexes

Drop all indexes in the collection.

```php
public dropIndexes(array $options = []): array|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Additional options |


**Return Value:**

Command result document


**See Also:**

* \MongoDB\Operation\DropIndexes::__construct() - for supported options

***

### estimatedDocumentCount

Gets an estimated number of documents in the collection using the collection metadata.

```php
public estimatedDocumentCount(array $options = []): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\EstimatedDocumentCount::__construct() - for supported options

***

### explain

Explains explainable commands.

```php
public explain(\MongoDB\Operation\Explainable $explainable, array $options = []): array|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$explainable` | **\MongoDB\Operation\Explainable** | Command on which to run explain |
| `$options` | **array** | Additional options |



**See Also:**

* \MongoDB\Operation\Explain::__construct() - for supported options* http://docs.mongodb.org/manual/reference/command/explain/ - 

***

### find

Finds documents matching the query.

```php
public find(array|object $filter = [], array $options = []): \MongoDB\Driver\Cursor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$options` | **array** | Additional options |



**See Also:**

* \MongoDB\Operation\Find::__construct() - for supported options* http://docs.mongodb.org/manual/core/read-operations-introduction/ - 

***

### findOne

Finds a single document matching the query.

```php
public findOne(array|object $filter = [], array $options = []): array|object|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$options` | **array** | Additional options |



**See Also:**

* \MongoDB\Operation\FindOne::__construct() - for supported options* http://docs.mongodb.org/manual/core/read-operations-introduction/ - 

***

### findOneAndDelete

Finds a single document and deletes it, returning the original.

```php
public findOneAndDelete(array|object $filter, array $options = []): array|object|null
```

The document to return may be null if no document matched the filter.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\FindOneAndDelete::__construct() - for supported options* http://docs.mongodb.org/manual/reference/command/findAndModify/ - 

***

### findOneAndReplace

Finds a single document and replaces it, returning either the original or
the replaced document.

```php
public findOneAndReplace(array|object $filter, array|object $replacement, array $options = []): array|object|null
```

The document to return may be null if no document matched the filter. By
default, the original document is returned. Specify
FindOneAndReplace::RETURN_DOCUMENT_AFTER for the "returnDocument" option
to return the updated document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$replacement` | **array&#124;object** | Replacement document |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\FindOneAndReplace::__construct() - for supported options* http://docs.mongodb.org/manual/reference/command/findAndModify/ - 

***

### findOneAndUpdate

Finds a single document and updates it, returning either the original or
the updated document.

```php
public findOneAndUpdate(array|object $filter, array|object $update, array $options = []): array|object|null
```

The document to return may be null if no document matched the filter. By
default, the original document is returned. Specify
FindOneAndUpdate::RETURN_DOCUMENT_AFTER for the "returnDocument" option
to return the updated document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$update` | **array&#124;object** | Update to apply to the matched document |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\FindOneAndReplace::__construct() - for supported options* http://docs.mongodb.org/manual/reference/command/findAndModify/ - 

***

### getCollectionName

Return the collection name.

```php
public getCollectionName(): string
```











***

### getDatabaseName

Return the database name.

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

### getNamespace

Return the collection namespace.

```php
public getNamespace(): string
```










**See Also:**

* https://docs.mongodb.org/manual/reference/glossary/#term-namespace - 

***

### getReadConcern

Return the read concern for this collection.

```php
public getReadConcern(): \MongoDB\Driver\ReadConcern
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-readconcern.isdefault.php - 

***

### getReadPreference

Return the read preference for this collection.

```php
public getReadPreference(): \MongoDB\Driver\ReadPreference
```











***

### getTypeMap

Return the type map for this collection.

```php
public getTypeMap(): array
```











***

### getWriteConcern

Return the write concern for this collection.

```php
public getWriteConcern(): \MongoDB\Driver\WriteConcern
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-writeconcern.isdefault.php - 

***

### insertMany

Inserts multiple documents.

```php
public insertMany(array[]|object[] $documents, array $options = []): \MongoDB\InsertManyResult
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$documents` | **array[]&#124;object[]** | The documents to insert |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\InsertMany::__construct() - for supported options* http://docs.mongodb.org/manual/reference/command/insert/ - 

***

### insertOne

Inserts one document.

```php
public insertOne(array|object $document, array $options = []): \MongoDB\InsertOneResult
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **array&#124;object** | The document to insert |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\InsertOne::__construct() - for supported options* http://docs.mongodb.org/manual/reference/command/insert/ - 

***

### listIndexes

Returns information for all indexes for the collection.

```php
public listIndexes(array $options = []): \MongoDB\Model\IndexInfoIterator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |



**See Also:**

* \MongoDB\Operation\ListIndexes::__construct() - for supported options

***

### mapReduce

Executes a map-reduce aggregation on the collection.

```php
public mapReduce(\MongoDB\BSON\JavascriptInterface $map, \MongoDB\BSON\JavascriptInterface $reduce, string|array|object $out, array $options = []): \MongoDB\MapReduceResult
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$map` | **\MongoDB\BSON\JavascriptInterface** | Map function |
| `$reduce` | **\MongoDB\BSON\JavascriptInterface** | Reduce function |
| `$out` | **string&#124;array&#124;object** | Output specification |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\MapReduce::__construct() - for supported options* http://docs.mongodb.org/manual/reference/command/mapReduce/ - 

***

### replaceOne

Replaces at most one document matching the filter.

```php
public replaceOne(array|object $filter, array|object $replacement, array $options = []): \MongoDB\UpdateResult
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$replacement` | **array&#124;object** | Replacement document |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\ReplaceOne::__construct() - for supported options* http://docs.mongodb.org/manual/reference/command/update/ - 

***

### updateMany

Updates all documents matching the filter.

```php
public updateMany(array|object $filter, array|object $update, array $options = []): \MongoDB\UpdateResult
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$update` | **array&#124;object** | Update to apply to the matched documents |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\UpdateMany::__construct() - for supported options* http://docs.mongodb.org/manual/reference/command/update/ - 

***

### updateOne

Updates at most one document matching the filter.

```php
public updateOne(array|object $filter, array|object $update, array $options = []): \MongoDB\UpdateResult
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$update` | **array&#124;object** | Update to apply to the matched document |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\UpdateOne::__construct() - for supported options* http://docs.mongodb.org/manual/reference/command/update/ - 

***

### watch

Create a change stream for watching changes to the collection.

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

Get a clone of this collection with different options.

```php
public withOptions(array $options = []): \MongoDB\Collection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Collection constructor options |



**See Also:**

* \MongoDB\Collection::__construct() - for supported options

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
