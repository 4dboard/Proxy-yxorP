***

# RetryMiddleware

Middleware that retries requests based on the boolean result of
invoking the provided "decider" function.



* Full name: `\yxorP\lib\proxy\RetryMiddleware`



## Properties


### nextHandler



```php
private callable $nextHandler
```






***

### decider



```php
private callable $decider
```






***

### delay



```php
private callable $delay
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
| `$nextHandler` | **callable** | Next handler to invoke. |
| `$delay` | **callable** | Function that accepts the number of retries<br />and [response] and returns the number of<br />milliseconds to delay. |




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
public __invoke(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options): \yxorP\lib\proxy\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### onFulfilled

Execute fulfilled closure

```php
private onFulfilled(\yxorP\inc\Psr\Http\Message\RequestInterface $req, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$req` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### doRetry



```php
private doRetry(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options, \yxorP\inc\Psr\Http\Message\ResponseInterface $response = null): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** |  |




***

### onRejected

Execute rejected closure

```php
private onRejected(\yxorP\inc\Psr\Http\Message\RequestInterface $req, array $options): callable
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$req` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***


***

