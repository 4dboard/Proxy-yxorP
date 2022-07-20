***

# BulkWriteResult

Result class for a bulk write operation.



* Full name: `\MongoDB\BulkWriteResult`



## Properties


### writeResult



```php
private \MongoDB\Driver\WriteResult $writeResult
```






***

### insertedIds



```php
private array $insertedIds
```






***

### isAcknowledged



```php
private bool $isAcknowledged
```






***

## Methods


### __construct



```php
public __construct(\MongoDB\Driver\WriteResult $writeResult, array $insertedIds): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$writeResult` | **\MongoDB\Driver\WriteResult** |  |
| `$insertedIds` | **array** |  |




***

### getDeletedCount

Return the number of documents that were deleted.

```php
public getDeletedCount(): int
```

This method should only be called if the write was acknowledged.








**See Also:**

* \MongoDB\BulkWriteResult::isAcknowledged() - 

***

### getInsertedCount

Return the number of documents that were inserted.

```php
public getInsertedCount(): int
```

This method should only be called if the write was acknowledged.








**See Also:**

* \MongoDB\BulkWriteResult::isAcknowledged() - 

***

### getInsertedIds

Return a map of the inserted documents' IDs.

```php
public getInsertedIds(): array
```

The index of each ID in the map corresponds to each document's position
in the bulk operation. If a document had an ID prior to inserting (i.e.
the driver did not generate an ID), the index will contain its "_id"
field value. Any driver-generated ID will be a MongoDB\BSON\ObjectId
instance.









***

### getMatchedCount

Return the number of documents that were matched by the filter.

```php
public getMatchedCount(): int
```

This method should only be called if the write was acknowledged.








**See Also:**

* \MongoDB\BulkWriteResult::isAcknowledged() - 

***

### getModifiedCount

Return the number of documents that were modified.

```php
public getModifiedCount(): int|null
```

This value is undefined (i.e. null) if the write executed as a legacy
operation instead of command.

This method should only be called if the write was acknowledged.








**See Also:**

* \MongoDB\BulkWriteResult::isAcknowledged() - 

***

### getUpsertedCount

Return the number of documents that were upserted.

```php
public getUpsertedCount(): int
```

This method should only be called if the write was acknowledged.








**See Also:**

* \MongoDB\BulkWriteResult::isAcknowledged() - 

***

### getUpsertedIds

Return a map of the upserted documents' IDs.

```php
public getUpsertedIds(): array
```

The index of each ID in the map corresponds to each document's position
in bulk operation. If a document had an ID prior to upserting (i.e. the
server did not need to generate an ID), this will contain its "_id". Any
server-generated ID will be a MongoDB\BSON\ObjectId instance.

This method should only be called if the write was acknowledged.








**See Also:**

* \MongoDB\BulkWriteResult::isAcknowledged() - 

***

### isAcknowledged

Return whether this update was acknowledged by the server.

```php
public isAcknowledged(): bool
```

If the update was not acknowledged, other fields from the WriteResult
(e.g. matchedCount) will be undefined.









***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
