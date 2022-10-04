***

# mockHandler





* Full name: `\yxorP\lib\proxy\handler\mockHandler`
* This class implements:
[`\Countable`](../../../../../Countable.md)



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
public static createWithMiddleware(array $queue = null, callable $onFulfilled = null, callable $onRejected = null): mixed
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
public __invoke(\yxorP\lib\psr\http\message\requestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |




***

### invokeStats



```php
private invokeStats(\yxorP\lib\psr\http\message\requestInterface $request, array $options, \yxorP\lib\psr\http\message\responseInterface $response = null, mixed $reason = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\lib\psr\http\message\responseInterface** |  |
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
public count(): mixed
```











***

### reset



```php
public reset(): mixed
```











***


***

