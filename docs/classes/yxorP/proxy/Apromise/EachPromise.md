***

# EachPromise





* Full name: `\yxorP\proxy\Apromise\EachPromise`
* This class implements:
[`\yxorP\proxy\Apromise\PromisorInterface`](./PromisorInterface.md)



## Properties


### pending



```php
private array $pending
```






***

### iterable



```php
private \ArrayIterator|\Iterator $iterable
```






***

### concurrency



```php
private mixed $concurrency
```






***

### onFulfilled



```php
private mixed $onFulfilled
```






***

### onRejected



```php
private mixed $onRejected
```






***

### aggregate



```php
private $aggregate
```






***

### mutex



```php
private $mutex
```






***

## Methods


### __construct



```php
public __construct(mixed $iterable, array $config = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **mixed** |  |
| `$config` | **array** |  |




***

### promise



```php
public promise(): \yxorP\proxy\Apromise\Promise|\yxorP\proxy\Apromise\PromiseInterface
```











***

### createPromise



```php
private createPromise(): mixed
```











***

### refillPending



```php
private refillPending(): mixed
```











***

### addPending



```php
private addPending(): bool
```











***

### step



```php
private step(mixed $idx): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$idx` | **mixed** |  |




***

### advanceIterator



```php
private advanceIterator(): bool
```











***

### checkIfFinished



```php
private checkIfFinished(): bool
```











***


***

