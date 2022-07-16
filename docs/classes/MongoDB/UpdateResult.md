***

# UpdateResult

Result class for an update operation.



* Full name: `\MongoDB\UpdateResult`



## Properties


### writeResult



```php
private \MongoDB\Driver\WriteResult $writeResult
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
public __construct(\MongoDB\Driver\WriteResult $writeResult): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$writeResult` | **\MongoDB\Driver\WriteResult** |  |




***

### getMatchedCount

Return the number of documents that were matched by the filter.

```php
public getMatchedCount(): int
```

This method should only be called if the write was acknowledged.








**See Also:**

* \MongoDB\UpdateResult::isAcknowledged() - 

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

* \MongoDB\UpdateResult::isAcknowledged() - 

***

### getUpsertedCount

Return the number of documents that were upserted.

```php
public getUpsertedCount(): int
```

This method should only be called if the write was acknowledged.








**See Also:**

* \MongoDB\UpdateResult::isAcknowledged() - 

***

### getUpsertedId

Return the ID of the document inserted by an upsert operation.

```php
public getUpsertedId(): mixed|null
```

If the document had an ID prior to upserting (i.e. the server did not
need to generate an ID), this will contain its "_id". Any
server-generated ID will be a MongoDB\BSON\ObjectId instance.

This value is undefined (i.e. null) if an upsert did not take place.

This method should only be called if the write was acknowledged.








**See Also:**

* \MongoDB\UpdateResult::isAcknowledged() - 

***

### isAcknowledged

Return whether this update was acknowledged by the server.

```php
public isAcknowledged(): bool
```

If the update was not acknowledged, other fields from the WriteResult
(e.g. matchedCount) will be undefined and their getter methods should not
be invoked.









***


***
> Automatically generated from source code comments on 2022-07-16 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
