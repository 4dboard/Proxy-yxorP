***

# MockHandler

Handler that returns responses or throw exceptions from a queue.



* Full name: `\yxorP\lib\proxy\Handler\MockHandler`
* This class implements:
[`\Countable`](../../../../Countable.md)



## Properties


### queue



```php
private $queue
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

The passed in value must be an array of
{@see Psr7\Http\Message\ResponseInterface} objects, Exceptions,
callables, or Promises.

```php
public __construct(array $queue = null, callable $onFulfilled = null, callable $onRejected = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$queue` | **array** |  |
| `$onFulfilled` | **callable** | Callback to invoke when the return value is fulfilled. |
| `$onRejected` | **callable** | Callback to invoke when the return value is rejected. |




***

### createWithMiddleware

Creates a new MockHandler that uses the default handler stack list of
middlewares.

```php
public static createWithMiddleware(array $queue = null, callable $onFulfilled = null, callable $onRejected = null): \yxorP\lib\proxy\HandlerStack
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$queue` | **array** | Array of responses, callables, or exceptions. |
| `$onFulfilled` | **callable** | Callback to invoke when the return value is fulfilled. |
| `$onRejected` | **callable** | Callback to invoke when the return value is rejected. |




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

### invokeStats



```php
private invokeStats(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options, \yxorP\inc\Psr\Http\Message\ResponseInterface $response = null, mixed $reason = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** |  |
| `$reason` | **mixed** |  |




***

### append

Adds one or more variadic requests, exceptions, callables, or promises
to the queue.

```php
public append(): mixed
```











***

### getLastRequest

Get the last received request.

```php
public getLastRequest(): \yxorP\inc\Psr\Http\Message\RequestInterface
```











***

### getLastOptions

Get the last received request options.

```php
public getLastOptions(): array
```











***

### count

Returns the number of remaining items in the queue.

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

