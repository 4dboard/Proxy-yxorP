***

# redirectMiddleware





* Full name: `\yxorP\lib\proxy\redirectMiddleware`


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
public __invoke(\yxorP\lib\psr\http\message\requestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |




***

### checkRedirect



```php
public checkRedirect(\yxorP\lib\psr\http\message\requestInterface $request, array $options, \yxorP\lib\psr\http\message\responseInterface $response): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\lib\psr\http\message\responseInterface** |  |




***

### modifyRequest



```php
public modifyRequest(\yxorP\lib\psr\http\message\requestInterface $request, array $options, \yxorP\lib\psr\http\message\responseInterface $response): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\lib\psr\http\message\responseInterface** |  |




***

### guardMax



```php
private guardMax(\yxorP\lib\psr\http\message\requestInterface $request, array& $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |




***

### redirectUri



```php
private redirectUri(\yxorP\lib\psr\http\message\requestInterface $request, \yxorP\lib\psr\http\message\responseInterface $response, array $protocols): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$response` | **\yxorP\lib\psr\http\message\responseInterface** |  |
| `$protocols` | **array** |  |




***

### withTracking



```php
private withTracking(\yxorP\lib\proxy\promise\promiseInterface $promise, mixed $uri, mixed $statusCode): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promise` | **\yxorP\lib\proxy\promise\promiseInterface** |  |
| `$uri` | **mixed** |  |
| `$statusCode` | **mixed** |  |




***


***

