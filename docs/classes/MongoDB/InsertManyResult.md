***

# InsertManyResult

Result class for a multi-document insert operation.



* Full name: `\MongoDB\InsertManyResult`



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

### getInsertedCount

Return the number of documents that were inserted.

```php
public getInsertedCount(): int
```

This method should only be called if the write was acknowledged.








**See Also:**

* \MongoDB\InsertManyResult::isAcknowledged() - 

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

### isAcknowledged

Return whether this insert result was acknowledged by the server.

```php
public isAcknowledged(): bool
```

If the insert was not acknowledged, other fields from the WriteResult
(e.g. insertedCount) will be undefined.









***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
