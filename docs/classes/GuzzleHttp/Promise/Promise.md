***

# Promise

Promises/A+ implementation that avoids recursion when possible.

* Full name: `\GuzzleHttp\Promise\Promise`
* This class implements:
  [`\GuzzleHttp\Promise\PromiseInterface`](./PromiseInterface.md)

**See Also:**

* https://promisesaplus.com/ -

## Properties

### state

```php
private $state
```

***

### result

```php
private $result
```

***

### cancelFn

```php
private $cancelFn
```

***

### waitFn

```php
private $waitFn
```

***

### waitList

```php
private $waitList
```

***

### handlers

```php
private $handlers
```

***

## Methods

### __construct

```php
public __construct(callable $waitFn = null, callable $cancelFn = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$waitFn` | **callable** | Fn that when invoked resolves the promise. |
| `$cancelFn` | **callable** | Fn that when invoked cancels the promise. |

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

### cancel

Cancels the promise if possible.

```php
public cancel(): mixed
```

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

### settle

```php
private settle(mixed $state, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$state` | **mixed** |  |
| `$value` | **mixed** |  |

***

### callHandler

Call a stack of handlers using a specific callback index and value.

```php
private static callHandler(int $index, mixed $value, array $handler): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **int** | 1 (resolve) or 2 (reject). |
| `$value` | **mixed** | Value to pass to the callback. |
| `$handler` | **array** | Array of handler data (promise and callbacks). |

***

### waitIfPending

```php
private waitIfPending(): mixed
```

***

### invokeWaitFn

```php
private invokeWaitFn(): mixed
```

***

### invokeWaitList

```php
private invokeWaitList(): mixed
```

***


***

