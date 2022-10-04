***

# FulfilledPromise

A promise that has been fulfilled.

Thenning off of this promise will invoke the onFulfilled callback
immediately and ignore other callbacks.

* Full name: `\GuzzleHttp\Promise\FulfilledPromise`
* This class implements:
[`\GuzzleHttp\Promise\PromiseInterface`](./PromiseInterface.md)



## Properties


### value



```php
private $value
```






***

## Methods


### __construct



```php
public __construct(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




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
public wait(mixed $unwrap = true, mixed $defaultDelivery = null): mixed
```

Pass $unwrap as true to unwrap the result of the promise, either
returning the resolved value or throwing the rejected exception.

If the promise cannot be waited on, then the promise will be rejected.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$unwrap` | **mixed** |  |
| `$defaultDelivery` | **mixed** |  |




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


***

