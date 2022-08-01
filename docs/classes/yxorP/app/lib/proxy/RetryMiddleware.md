***

# retryMiddleware





* Full name: `\yxorP\app\lib\proxy\retryMiddleware`



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
public static exponentialDelay(mixed $retries): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$retries` | **mixed** |  |




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

### onFulfilled



```php
private onFulfilled(\yxorP\app\lib\Psr\Http\Message\RequestInterface $req, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$req` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### doRetry



```php
private doRetry(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array $options, \yxorP\app\lib\Psr\Http\Message\ResponseInterface $response = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\app\lib\Psr\Http\Message\ResponseInterface** |  |




***

### onRejected



```php
private onRejected(\yxorP\app\lib\Psr\Http\Message\RequestInterface $req, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$req` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***


***

