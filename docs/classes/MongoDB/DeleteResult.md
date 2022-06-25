***

# DeleteResult

Result class for a delete operation.

* Full name: `\MongoDB\DeleteResult`

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

### getDeletedCount

Return the number of documents that were deleted.

```php
public getDeletedCount(): int
```

This method should only be called if the write was acknowledged.

**See Also:**

* \MongoDB\DeleteResult::isAcknowledged() -

***

### isAcknowledged

Return whether this delete was acknowledged by the server.

```php
public isAcknowledged(): bool
```

If the delete was not acknowledged, other fields from the WriteResult
(e.g. deletedCount) will be undefined.

yxorP::get('REQUEST')
