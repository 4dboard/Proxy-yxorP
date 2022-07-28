***

# RedirectMiddleware

Request redirect middleware.

Apply this middleware like other middleware using
{@see}.

* Full name: `\yxorP\lib\proxy\RedirectMiddleware`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`HISTORY_HEADER`|public| |&#039;X-Proxy-Redirect-History&#039;|
|`STATUS_HISTORY_HEADER`|public| |&#039;X-Proxy-Redirect-Status-History&#039;|

## Properties


### defaultSettings



```php
public static $defaultSettings
```



* This property is **static**.


***

### nextHandler



```php
private callable $nextHandler
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
| `$nextHandler` | **callable** | Next handler to invoke. |




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

### checkRedirect



```php
public checkRedirect(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options, \yxorP\inc\Psr\Http\Message\ResponseInterface $response): \yxorP\inc\Psr\Http\Message\ResponseInterface|\yxorP\lib\proxy\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** |  |




***

### guardMax

Check for too many redirects

```php
private guardMax(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array& $options): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### modifyRequest



```php
public modifyRequest(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options, \yxorP\inc\Psr\Http\Message\ResponseInterface $response): \yxorP\inc\Psr\Http\Message\RequestInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** |  |




***

### redirectUri

Set the appropriate URL on the request based on the location header

```php
private redirectUri(\yxorP\inc\Psr\Http\Message\RequestInterface $request, \yxorP\inc\Psr\Http\Message\ResponseInterface $response, array $protocols): \yxorP\inc\Psr\Http\Message\UriInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** |  |
| `$protocols` | **array** |  |




***

### withTracking

Enable tracking on promise.

```php
private withTracking(\yxorP\lib\proxy\Promise\PromiseInterface $promise, mixed $uri, mixed $statusCode): \yxorP\lib\proxy\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promise` | **\yxorP\lib\proxy\Promise\PromiseInterface** |  |
| `$uri` | **mixed** |  |
| `$statusCode` | **mixed** |  |




***


***

