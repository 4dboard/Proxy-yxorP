***

# ExpectedResult





* Full name: `\MongoDB\Tests\UnifiedSpecTests\ExpectedResult`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### constraint



```php
private \MongoDB\Tests\UnifiedSpecTests\Constraint\Matches $constraint
```






***

### entityMap



```php
private \MongoDB\Tests\UnifiedSpecTests\EntityMap $entityMap
```






***

### yieldingEntityId

ID of the entity yielding the result. This is mainly used to associate
entities with a root client for collation of observed events.

```php
private ?string $yieldingEntityId
```






***

## Methods


### __construct



```php
public __construct(\stdClass $o, \MongoDB\Tests\UnifiedSpecTests\EntityMap $entityMap, ?string $yieldingEntityId = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$o` | **\stdClass** |  |
| `$entityMap` | **\MongoDB\Tests\UnifiedSpecTests\EntityMap** |  |
| `$yieldingEntityId` | **?string** |  |




***

### assert



```php
public assert(mixed $actual, ?string $saveResultAsEntity = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$actual` | **mixed** |  |
| `$saveResultAsEntity` | **?string** |  |




***

### prepare



```php
private static prepare(mixed $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### prepareWriteResult



```php
private static prepareWriteResult(mixed $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***


***

