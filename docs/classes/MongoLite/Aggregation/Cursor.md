***

# Cursor





* Full name: `\MongoLite\Aggregation\Cursor`
* This class implements:
[`\Iterator`](../../Iterator.md)



## Properties


### position



```php
protected bool|int $position
```






***

### data



```php
protected array $data
```






***

### pipeline



```php
protected array $pipeline
```






***

### collection



```php
protected \MongoLite\Collection $collection
```






***

## Methods


### __construct



```php
public __construct(\MongoLite\Collection $collection, array $pipeline): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **\MongoLite\Collection** |  |
| `$pipeline` | **array** |  |




***

### toArray

Get documents matching criteria

```php
public toArray(): array
```











***

### getData

Get documents matching criteria

```php
protected getData(): array
```











***

### make_cmp



```php
protected make_cmp(array $sortValues): \Closure
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sortValues` | **array** |  |




***

### rewind

Iterator implementation

```php
public rewind(): void
```











***

### current



```php
public current(): array
```











***

### key



```php
public key(): int
```











***

### next



```php
public next(): void
```











***

### valid



```php
public valid(): bool
```











***


***

