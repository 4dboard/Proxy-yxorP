***

# TaskQueue

A task queue that executes tasks in a FIFO order.

This task queue class is used to settle promises asynchronously and
maintains a constant stack size. You can use the task queue asynchronously
by calling the `run()` function of the global task queue in an event loop.

    GuzzleHttp\Promise\Utils::queue()->run();

* Full name: `\GuzzleHttp\Promise\TaskQueue`
* This class implements:
[`\GuzzleHttp\Promise\TaskQueueInterface`](./TaskQueueInterface.md)



## Properties


### enableShutdown



```php
private $enableShutdown
```






***

### queue



```php
private $queue
```






***

## Methods


### __construct



```php
public __construct(mixed $withShutdown = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$withShutdown` | **mixed** |  |




***

### isEmpty

Returns true if the queue is empty.

```php
public isEmpty(): bool
```











***

### add

Adds a task to the queue that will be executed the next time run is
called.

```php
public add(callable $task): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$task` | **callable** |  |




***

### run

Execute all of the pending task in the queue.

```php
public run(): mixed
```











***

### disableShutdown

The task queue will be run and exhausted by default when the process
exits IFF the exit is not the result of a PHP E_ERROR error.

```php
public disableShutdown(): mixed
```

You can disable running the automatic shutdown of the queue by calling
this function. If you disable the task queue shutdown process, then you
MUST either run the task queue (as a result of running your event loop
or manually using the run() method) or wait on each outstanding promise.

Note: This shutdown will occur before any destructors are triggered.









***


***

