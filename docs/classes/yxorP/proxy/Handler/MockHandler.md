***

# MockHandler





* Full name: `\yxorP\proxy\Handler\MockHandler`
* This class implements:
[`\Countable`](../../../Countable.md)



## Properties


### queue



```php
private array $queue
```






***

### lastRequest



```php
private $lastRequest
```






***

### lastOptions



```php
private $lastOptions
```






***

### onFulfilled



```php
private $onFulfilled
```






***

### onRejected



```php
private $onRejected
```






***

## Methods


### __construct



```php
public __construct(array $queue = null, callable $onFulfilled = null, callable $onRejected = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$queue` | **array** |  |
| `$onFulfilled` | **callable** |  |
| `$onRejected` | **callable** |  |




***

### createWithMiddleware



```php
public static createWithMiddleware(array $queue = null, callable $onFulfilled = null, callable $onRejected = null): \yxorP\proxy\HandlerStack
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$queue` | **array** |  |
| `$onFulfilled` | **callable** |  |
| `$onRejected` | **callable** |  |




***

### __invoke



```php
public __invoke(\yxorP\psr\Http\Message\RequestInterface $request, array $options): \yxorP\proxy\Apromise\RejectedPromise|\yxorP\proxy\Apromise\FulfilledPromise|\yxorP\proxy\Apromise\Promise|\yxorP\proxy\Apromise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### invokeStats



```php
private invokeStats(\yxorP\psr\Http\Message\RequestInterface $request, array $options, \yxorP\psr\Http\Message\ResponseInterface $response = null, mixed $reason = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\psr\Http\Message\ResponseInterface** |  |
| `$reason` | **mixed** |  |




***

### append



```php
public append(): mixed
```











***

### getLastRequest



```php
public getLastRequest(): mixed
```











***

### getLastOptions



```php
public getLastOptions(): mixed
```











***

### count



```php
public count(): int
```











***

### reset



```php
public reset(): mixed
```











***


***

