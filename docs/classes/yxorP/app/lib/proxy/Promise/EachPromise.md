***

# eachPromise





* Full name: `\yxorP\app\lib\proxy\Promise\eachPromise`
* This class implements:
[`\yxorP\app\lib\proxy\Promise\promisorInterface`](./promisorInterface.md)



## Properties


### pending



```php
private $pending
```






***

### iterable



```php
private $iterable
```






***

### concurrency



```php
private $concurrency
```






***

### onFulfilled



```php
private $onFulfilled
```






***

### onRejected



```php
private $onRejected
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
public promise(): mixed
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
private addPending(): mixed
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
private advanceIterator(): mixed
```











***

### checkIfFinished



```php
private checkIfFinished(): mixed
```











***


***

