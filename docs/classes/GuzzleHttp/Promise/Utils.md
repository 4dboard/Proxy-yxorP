***

# Utils

* Full name: `\GuzzleHttp\Promise\Utils`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Methods

### queue

Get the global task queue used for promise resolution.

```php
public static queue(\GuzzleHttp\Promise\TaskQueueInterface $assign = null): \GuzzleHttp\Promise\TaskQueueInterface
```

This task queue MUST be run in an event loop in order for promises to be
settled asynchronously. It will be automatically run when synchronously
waiting on a promise.

<code>
while ($eventLoop->isRunning()) {
    GuzzleHttp\Promise\Utils::queue()->run();
}
</code>

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$assign` | **\GuzzleHttp\Promise\TaskQueueInterface** | Optionally specify a new queue instance. |

***

### task

Adds a function to run in the task queue when it is next `run()` and
returns a promise that is fulfilled or rejected with the result.

```php
public static task(callable $task): \GuzzleHttp\Promise\PromiseInterface
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$task` | **callable** | Task function to run. |

***

### inspect

Synchronously waits on a promise to resolve and returns an inspection
state array.

```php
public static inspect(\GuzzleHttp\Promise\PromiseInterface $promise): array
```

Returns a state associative array containing a "state" key mapping to a
valid promise state. If the state of the promise is "fulfilled", the
array will contain a "value" key mapping to the fulfilled value of the
promise. If the promise is rejected, the array will contain a "reason"
key mapping to the rejection reason of the promise.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promise` | **\GuzzleHttp\Promise\PromiseInterface** | Promise or value. |

***

### inspectAll

Waits on all of the provided promises, but does not unwrap rejected
promises as thrown exception.

```php
public static inspectAll(\GuzzleHttp\Promise\PromiseInterface[] $promises): array
```

Returns an array of inspection state arrays.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promises` | **\GuzzleHttp\Promise\PromiseInterface[]** | Traversable of promises to wait upon. |

**See Also:**

* \GuzzleHttp\Promise\inspect - for the inspection state array format.

***

### unwrap

Waits on all of the provided promises and returns the fulfilled values.

```php
public static unwrap(iterable&lt;\GuzzleHttp\Promise\PromiseInterface&gt; $promises): array
```

Returns an array that contains the value of each promise (in the same
order the promises were provided). An exception is thrown if any of the
promises are rejected.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promises` | **iterable<\GuzzleHttp\Promise\PromiseInterface>** | Iterable of PromiseInterface objects to wait on. |

***

### all

Given an array of promises, return a promise that is fulfilled when all
the items in the array are fulfilled.

```php
public static all(mixed $promises, bool $recursive = false): \GuzzleHttp\Promise\PromiseInterface
```

The promise's fulfillment value is an array with fulfillment values at
respective positions to the original array. If any promise in the array
rejects, the returned promise is rejected with the rejection reason.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promises` | **mixed** | Promises or values. |
| `$recursive` | **bool** | If true, resolves new promises that might have been added to the stack during its own resolution. |

***

### some

Initiate a competitive race between multiple promises or values (values
will become immediately fulfilled promises).

```php
public static some(int $count, mixed $promises): \GuzzleHttp\Promise\PromiseInterface
```

When count amount of promises have been fulfilled, the returned promise
is fulfilled with an array that contains the fulfillment values of the
winners in order of resolution.

This promise is rejected with a {@see} if the number
of fulfilled promises is less than the desired $count.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **int** | Total number of promises. |
| `$promises` | **mixed** | Promises or values. |

***

### any

Like some(), with 1 as count. However, if the promise fulfills, the
fulfillment value is not an array of 1 but the value directly.

```php
public static any(mixed $promises): \GuzzleHttp\Promise\PromiseInterface
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promises` | **mixed** | Promises or values. |

***

### settle

Returns a promise that is fulfilled when all of the provided promises have
been fulfilled or rejected.

```php
public static settle(mixed $promises): \GuzzleHttp\Promise\PromiseInterface
```

The returned promise is fulfilled with an array of inspection state arrays.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promises` | **mixed** | Promises or values. |

**See Also:**

* \GuzzleHttp\Promise\inspect - for the inspection state array format.

***


***

