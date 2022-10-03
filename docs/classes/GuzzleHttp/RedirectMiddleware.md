***

# RedirectMiddleware

Request redirect middleware.

Apply this middleware like other middleware using
{@see}.

* Full name: `\GuzzleHttp\RedirectMiddleware`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`HISTORY_HEADER`|public| |&#039;X-Guzzle-Redirect-History&#039;|
|`STATUS_HISTORY_HEADER`|public| |&#039;X-Guzzle-Redirect-Status-History&#039;|

## Properties


### defaultSettings



```php
public static array $defaultSettings
```



* This property is **static**.


***

### nextHandler



```php
private $nextHandler
```






***

## Methods


### __construct



```php
public __construct(callable $nextHandler): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nextHandler` | **callable** |  |




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

### checkRedirect



```php
public checkRedirect(\Psr\Http\Message\RequestInterface $request, array $options, \Psr\Http\Message\ResponseInterface $response): \Psr\Http\Message\ResponseInterface|\GuzzleHttp\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\Psr\Http\Message\ResponseInterface** |  |




***

### withTracking

Enable tracking on promise.

```php
private withTracking(\GuzzleHttp\Promise\PromiseInterface $promise, string $uri, int $statusCode): \GuzzleHttp\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promise` | **\GuzzleHttp\Promise\PromiseInterface** |  |
| `$uri` | **string** |  |
| `$statusCode` | **int** |  |




***

### guardMax

Check for too many redirects.

```php
private guardMax(\Psr\Http\Message\RequestInterface $request, \Psr\Http\Message\ResponseInterface $response, array& $options): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\Psr\Http\Message\ResponseInterface** |  |
| `$options` | **array** |  |




***

### modifyRequest



```php
public modifyRequest(\Psr\Http\Message\RequestInterface $request, array $options, \Psr\Http\Message\ResponseInterface $response): \Psr\Http\Message\RequestInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\Psr\Http\Message\ResponseInterface** |  |




***

### redirectUri

Set the appropriate URL on the request based on the location header.

```php
private static redirectUri(\Psr\Http\Message\RequestInterface $request, \Psr\Http\Message\ResponseInterface $response, array $protocols): \Psr\Http\Message\UriInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\Psr\Http\Message\ResponseInterface** |  |
| `$protocols` | **array** |  |




***


***

