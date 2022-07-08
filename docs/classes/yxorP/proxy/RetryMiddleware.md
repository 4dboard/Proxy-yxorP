***

# RetryMiddleware





* Full name: `\yxorP\proxy\RetryMiddleware`



## Properties


### nextHandler



```php
private $nextHandler
```






***

### decider



```php
private $decider
```






***

### delay



```php
private $delay
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
| `$decider` | **callable** |  |
| `$nextHandler` | **callable** |  |
| `$delay` | **callable** |  |




***

### exponentialDelay



```php
public static exponentialDelay(mixed $retries): float|int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$retries` | **mixed** |  |




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

### onFulfilled



```php
private onFulfilled(\yxorP\psr\Http\Message\RequestInterface $req, array $options): \Closure
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$req` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### doRetry



```php
private doRetry(\yxorP\psr\Http\Message\RequestInterface $request, array $options, \yxorP\psr\Http\Message\ResponseInterface $response = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\psr\Http\Message\ResponseInterface** |  |




***

### onRejected



```php
private onRejected(\yxorP\psr\Http\Message\RequestInterface $req, array $options): \Closure
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$req` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
