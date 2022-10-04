***

# RedirectMiddleware





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
public __invoke(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### checkRedirect



```php
public checkRedirect(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options, \yxorP\inc\Psr\Http\Message\ResponseInterface $response): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** |  |




***

### guardMax



```php
private guardMax(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array& $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### modifyRequest



```php
public modifyRequest(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options, \yxorP\inc\Psr\Http\Message\ResponseInterface $response): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** |  |




***

### redirectUri



```php
private redirectUri(\yxorP\inc\Psr\Http\Message\RequestInterface $request, \yxorP\inc\Psr\Http\Message\ResponseInterface $response, array $protocols): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** |  |
| `$protocols` | **array** |  |




***

### withTracking



```php
private withTracking(\yxorP\lib\proxy\Promise\PromiseInterface $promise, mixed $uri, mixed $statusCode): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promise` | **\yxorP\lib\proxy\Promise\PromiseInterface** |  |
| `$uri` | **mixed** |  |
| `$statusCode` | **mixed** |  |




***


***

