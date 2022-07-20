***

# InsertOneResult

Result class for a single-document insert operation.



* Full name: `\MongoDB\InsertOneResult`



## Properties


### writeResult



```php
private \MongoDB\Driver\WriteResult $writeResult
```






***

### insertedId



```php
private mixed $insertedId
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
public __construct(\MongoDB\Driver\WriteResult $writeResult, mixed $insertedId): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$writeResult` | **\MongoDB\Driver\WriteResult** |  |
| `$insertedId` | **mixed** |  |




***

### getInsertedCount

Return the number of documents that were inserted.

```php
public getInsertedCount(): int
```

This method should only be called if the write was acknowledged.








**See Also:**

* \MongoDB\InsertOneResult::isAcknowledged() - 

***

### getInsertedId

Return the inserted document's ID.

```php
public getInsertedId(): mixed
```

If the document had an ID prior to inserting (i.e. the driver did not
need to generate an ID), this will contain its "_id". Any
driver-generated ID will be a MongoDB\BSON\ObjectId instance.









***

### isAcknowledged

Return whether this insert was acknowledged by the server.

```php
public isAcknowledged(): bool
```

If the insert was not acknowledged, other fields from the WriteResult
(e.g. insertedCount) will be undefined.

If the insert was not acknowledged, other fields from the WriteResult
(e.g. insertedCount) will be undefined and their getter methods should
not be invoked.









***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
