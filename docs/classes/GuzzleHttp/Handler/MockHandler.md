***

# MockHandler

Handler that returns responses or throw exceptions from a queue.

* Full name: `\GuzzleHttp\Handler\MockHandler`
* This class implements:
  [`\Countable`](../../Countable.md)

## Properties

### queue

```php
private array $queue
```

***

### lastRequest

```php
private \Psr\Http\Message\RequestInterface|null $lastRequest
```

***

### lastOptions

```php
private array $lastOptions
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

## Methods

### createWithMiddleware

Creates a new MockHandler that uses the default handler stack list of
middlewares.

```php
public static createWithMiddleware(array|null $queue = null, callable|null $onFulfilled = null, callable|null $onRejected = null): \GuzzleHttp\HandlerStack
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$queue` | **array&#124;null** | Array of responses, callables, or exceptions. |
| `$onFulfilled` | **callable&#124;null** | Callback to invoke when the return value is fulfilled. |
| `$onRejected` | **callable&#124;null** | Callback to invoke when the return value is rejected. |

***

### __construct

The passed in value must be an array of
{@see \Psr\Http\Message\ResponseInterface} objects, Exceptions,
callables, or Promises.

```php
public __construct(array&lt;int,mixed&gt;|null $queue = null, callable|null $onFulfilled = null, callable|null $onRejected = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$queue` | **array<int,mixed>&#124;null** | The parameters to be passed to the append function, as an indexed array. |
| `$onFulfilled` | **callable&#124;null** | Callback to invoke when the return value is fulfilled. |
| `$onRejected` | **callable&#124;null** | Callback to invoke when the return value is rejected. |

***

### __invoke

```php
public __invoke(\Psr\Http\Message\RequestInterface $request, array $options): \GuzzleHttp\Promise\PromiseInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |

***

### append

Adds one or more variadic requests, exceptions, callables, or promises
to the queue.

```php
public append(mixed $values): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **mixed** |  |

***

### getLastRequest

Get the last received request.

```php
public getLastRequest(): ?\Psr\Http\Message\RequestInterface
```

***

### getLastOptions

Get the last received request options.

```php
public getLastOptions(): array
```

***

### count

Returns the number of remaining items in the queue.

```php
public count(): int
```

***

### reset

```php
public reset(): void
```

***

### invokeStats

```php
private invokeStats(\Psr\Http\Message\RequestInterface $request, array $options, \Psr\Http\Message\ResponseInterface $response = null, mixed $reason = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\Psr\Http\Message\ResponseInterface** |  |
| `$reason` | **mixed** | Promise or reason. |

***


***

