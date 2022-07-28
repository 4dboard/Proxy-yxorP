***

# Each





* Full name: `\GuzzleHttp\Promise\Each`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**




## Methods


### of

Given an iterator that yields promises or values, returns a promise that
is fulfilled with a null value when the iterator has been consumed or
the aggregate promise has been fulfilled or rejected.

```php
public static of(mixed $iterable, callable $onFulfilled = null, callable $onRejected = null): \GuzzleHttp\Promise\PromiseInterface
```

$onFulfilled is a function that accepts the fulfilled value, iterator
index, and the aggregate promise. The callback can invoke any necessary
side effects and choose to resolve or reject the aggregate if needed.

$onRejected is a function that accepts the rejection reason, iterator
index, and the aggregate promise. The callback can invoke any necessary
side effects and choose to resolve or reject the aggregate if needed.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **mixed** | Iterator or array to iterate over. |
| `$onFulfilled` | **callable** |  |
| `$onRejected` | **callable** |  |




***

### ofLimit

Like of, but only allows a certain number of outstanding promises at any
given time.

```php
public static ofLimit(mixed $iterable, int|callable $concurrency, callable $onFulfilled = null, callable $onRejected = null): \GuzzleHttp\Promise\PromiseInterface
```

$concurrency may be an integer or a function that accepts the number of
pending promises and returns a numeric concurrency limit value to allow
for dynamic a concurrency size.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **mixed** |  |
| `$concurrency` | **int&#124;callable** |  |
| `$onFulfilled` | **callable** |  |
| `$onRejected` | **callable** |  |




***

### ofLimitAll

Like limit, but ensures that no promise in the given $iterable argument
is rejected. If any promise is rejected, then the aggregate promise is
rejected with the encountered rejection.

```php
public static ofLimitAll(mixed $iterable, int|callable $concurrency, callable $onFulfilled = null): \GuzzleHttp\Promise\PromiseInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **mixed** |  |
| `$concurrency` | **int&#124;callable** |  |
| `$onFulfilled` | **callable** |  |




***


***

