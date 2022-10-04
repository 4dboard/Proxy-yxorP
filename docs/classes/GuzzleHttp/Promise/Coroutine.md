***

# Coroutine

Creates a promise that is resolved using a generator that yields values or
promises (somewhat similar to C#'s async keyword).

When called, the Coroutine::of method will start an instance of the generator
and returns a promise that is fulfilled with its final yielded value.

Control is returned back to the generator when the yielded promise settles.
This can lead to less verbose code when doing lots of sequential async calls
with minimal processing in between.

    use GuzzleHttp\Promise;

    function createPromise($value) {
        return new Promise\FulfilledPromise($value);
    }

    $promise = Promise\Coroutine::of(function () {
        $value = (yield createPromise('a'));
        try {
            $value = (yield createPromise($value . 'b'));
        } catch (\Exception $e) {
            // The promise was rejected.
        }
        yield $value . 'c';
    });

    // Outputs "abc"
    $promise->then(function ($v) { echo $v; });

* Full name: `\GuzzleHttp\Promise\Coroutine`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\GuzzleHttp\Promise\PromiseInterface`](./PromiseInterface.md)
* This class is a **Final class**

**See Also:**

* https://github.com/petkaantonov/bluebird/blob/master/API.md#generators - inspiration



## Properties


### currentPromise



```php
private \GuzzleHttp\Promise\PromiseInterface|null $currentPromise
```






***

### generator



```php
private \Generator $generator
```






***

### result



```php
private \GuzzleHttp\Promise\Promise $result
```






***

## Methods


### __construct



```php
public __construct(callable $generatorFn): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$generatorFn` | **callable** |  |




***

### of

Create a new coroutine.

```php
public static of(callable $generatorFn): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$generatorFn` | **callable** |  |




***

### then

Appends fulfillment and rejection handlers to the promise, and returns
a new promise resolving to the return value of the called handler.

```php
public then(callable $onFulfilled = null, callable $onRejected = null): \GuzzleHttp\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$onFulfilled` | **callable** | Invoked when the promise fulfills. |
| `$onRejected` | **callable** | Invoked when the promise is rejected. |




***

### otherwise

Appends a rejection handler callback to the promise, and returns a new
promise resolving to the return value of the callback if it is called,
or to its original fulfillment value if the promise is instead
fulfilled.

```php
public otherwise(callable $onRejected): \GuzzleHttp\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$onRejected` | **callable** | Invoked when the promise is rejected. |




***

### wait

Waits until the promise completes if possible.

```php
public wait(mixed $unwrap = true): mixed
```

Pass $unwrap as true to unwrap the result of the promise, either
returning the resolved value or throwing the rejected exception.

If the promise cannot be waited on, then the promise will be rejected.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$unwrap` | **mixed** |  |




***

### getState

Get the state of the promise ("pending", "rejected", or "fulfilled").

```php
public getState(): string
```

The three states can be checked against the constants defined on
PromiseInterface: PENDING, FULFILLED, and REJECTED.









***

### resolve

Resolve the promise with the given value.

```php
public resolve(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### reject

Reject the promise with the given reason.

```php
public reject(mixed $reason): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reason` | **mixed** |  |




***

### cancel

Cancels the promise if possible.

```php
public cancel(): mixed
```











***

### nextCoroutine



```php
private nextCoroutine(mixed $yielded): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$yielded` | **mixed** |  |




***


***

