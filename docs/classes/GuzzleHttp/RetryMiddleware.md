***

# RetryMiddleware

Middleware that retries requests based on the boolean result of
invoking the provided "decider" function.

* Full name: `\GuzzleHttp\RetryMiddleware`

## Properties

### nextHandler

```php
private $nextHandler
```

***

### decider

```php
private callable $decider
```

***

### delay

```php
private callable|(int) $delay
```

***

## Methods

### __construct

```php
public __construct(callable $decider, callable $nextHandler, callable $delay = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decider` | **callable** | Function that accepts the number of retries,<br />a request, [response], and [exception] and<br />returns true if the request is to be<br />retried. |
| `$nextHandler` | **callable** |  |
| `$delay` | **callable** |  |

***

### exponentialDelay

Default exponential backoff delay function.

```php
public static exponentialDelay(int $retries): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$retries` | **int** |  |

**Return Value:**

milliseconds.



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

### onFulfilled

Execute fulfilled closure

```php
private onFulfilled(\Psr\Http\Message\RequestInterface $request, array $options): callable
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |

***

### onRejected

Execute rejected closure

```php
private onRejected(\Psr\Http\Message\RequestInterface $req, array $options): callable
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$req` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |

***

### doRetry

```php
private doRetry(\Psr\Http\Message\RequestInterface $request, array $options, \Psr\Http\Message\ResponseInterface $response = null): \GuzzleHttp\Promise\PromiseInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\Psr\Http\Message\ResponseInterface** |  |

***


***

