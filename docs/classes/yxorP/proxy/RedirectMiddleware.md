***

# RedirectMiddleware





* Full name: `\yxorP\proxy\RedirectMiddleware`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`HISTORY_HEADER`|public| |&#039;X-Proxy-Redirect-History&#039;|
|`STATUS_HISTORY_HEADER`|public| |&#039;X-Proxy-Redirect-Status-History&#039;|

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
public __invoke(\yxorP\psr\Http\Message\RequestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### checkRedirect



```php
public checkRedirect(\yxorP\psr\Http\Message\RequestInterface $request, array $options, \yxorP\psr\Http\Message\ResponseInterface $response): \yxorP\proxy\Apromise\PromiseInterface|\yxorP\psr\Http\Message\ResponseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\psr\Http\Message\ResponseInterface** |  |




***

### guardMax



```php
private guardMax(\yxorP\psr\Http\Message\RequestInterface $request, array& $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### modifyRequest



```php
public modifyRequest(\yxorP\psr\Http\Message\RequestInterface $request, array $options, \yxorP\psr\Http\Message\ResponseInterface $response): \yxorP\psr\Http\Message\RequestInterface|\yxorP\proxy\Psr7\ServerRequest|\yxorP\proxy\Psr7\Request
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\psr\Http\Message\ResponseInterface** |  |




***

### redirectUri



```php
private redirectUri(\yxorP\psr\Http\Message\RequestInterface $request, \yxorP\psr\Http\Message\ResponseInterface $response, array $protocols): \Psr\Http\Message\UriInterface|\yxorP\proxy\Psr7\Uri
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\psr\Http\Message\ResponseInterface** |  |
| `$protocols` | **array** |  |




***

### withTracking



```php
private withTracking(\yxorP\proxy\Apromise\PromiseInterface $promise, mixed $uri, mixed $statusCode): \yxorP\proxy\Apromise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promise` | **\yxorP\proxy\Apromise\PromiseInterface** |  |
| `$uri` | **mixed** |  |
| `$statusCode` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
