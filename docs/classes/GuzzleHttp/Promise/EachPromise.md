***

# EachPromise

Represents a promise that iterates over many promises and invokes
side-effect functions in the process.



* Full name: `\GuzzleHttp\Promise\EachPromise`
* This class implements:
[`\GuzzleHttp\Promise\PromisorInterface`](./PromisorInterface.md)



## Properties


### pending



```php
private $pending
```






***

### nextPendingIndex



```php
private $nextPendingIndex
```






***

### iterable



```php
private \Iterator|null $iterable
```






***

### concurrency



```php
private callable|int|null $concurrency
```






***

### onFulfilled



```php
private callable|null $onFulfilled
```






***

### onRejected



```php
private callable|null $onRejected
```






***

### aggregate



```php
private \GuzzleHttp\Promise\Promise|null $aggregate
```






***

### mutex



```php
private bool|null $mutex
```






***

## Methods


### __construct

Configuration hash can include the following key value pairs:

```php
public __construct(mixed $iterable, array $config = []): mixed
```

- fulfilled: (callable) Invoked when a promise fulfills. The function
  is invoked with three arguments: the fulfillment value, the index
  position from the iterable list of the promise, and the aggregate
  promise that manages all of the promises. The aggregate promise may
  be resolved from within the callback to short-circuit the promise.
- rejected: (callable) Invoked when a promise is rejected. The
  function is invoked with three arguments: the rejection reason, the
  index position from the iterable list of the promise, and the
  aggregate promise that manages all of the promises. The aggregate
  promise may be resolved from within the callback to short-circuit
  the promise.
- concurrency: (integer) Pass this configuration option to limit the
  allowed number of outstanding concurrently executing promises,
  creating a capped pool of promises. There is no limit by default.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **mixed** | Promises or values to iterate. |
| `$config` | **array** | Configuration options |




***

### promise

Returns a promise.

```php
public promise(): \GuzzleHttp\Promise\PromiseInterface
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

### advanceIterator



```php
private advanceIterator(): mixed
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

### checkIfFinished



```php
private checkIfFinished(): mixed
```











***


***

