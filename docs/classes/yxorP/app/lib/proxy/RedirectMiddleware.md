***

# redirectMiddleware





* Full name: `\yxorP\app\lib\proxy\redirectMiddleware`


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
public __invoke(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### checkRedirect



```php
public checkRedirect(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array $options, \yxorP\app\lib\Psr\Http\Message\ResponseInterface $response): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\app\lib\Psr\Http\Message\ResponseInterface** |  |




***

### guardMax



```php
private guardMax(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array& $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### modifyRequest



```php
public modifyRequest(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array $options, \yxorP\app\lib\Psr\Http\Message\ResponseInterface $response): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\app\lib\Psr\Http\Message\ResponseInterface** |  |




***

### redirectUri



```php
private redirectUri(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, \yxorP\app\lib\Psr\Http\Message\ResponseInterface $response, array $protocols): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\app\lib\Psr\Http\Message\ResponseInterface** |  |
| `$protocols` | **array** |  |




***

### withTracking



```php
private withTracking(\yxorP\app\lib\proxy\Promise\promiseInterface $promise, mixed $uri, mixed $statusCode): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promise` | **\yxorP\app\lib\proxy\Promise\promiseInterface** |  |
| `$uri` | **mixed** |  |
| `$statusCode` | **mixed** |  |




***


***

