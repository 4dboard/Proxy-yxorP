***

# Promise





* Full name: `\yxorP\proxy\Apromise\Promise`
* This class implements:
[`\yxorP\proxy\Apromise\PromiseInterface`](./PromiseInterface.md)



## Properties


### state



```php
private string $state
```






***

### result



```php
private $result
```






***

### cancelFn



```php
private $cancelFn
```






***

### waitFn



```php
private $waitFn
```






***

### waitList



```php
private $waitList
```






***

### handlers



```php
private array $handlers
```






***

## Methods


### __construct



```php
public __construct(callable $waitFn = null, callable $cancelFn = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$waitFn` | **callable** |  |
| `$cancelFn` | **callable** |  |




***

### otherwise



```php
public otherwise(callable $onRejected): \yxorP\proxy\Apromise\FulfilledPromise|\yxorP\proxy\Apromise\RejectedPromise|\yxorP\proxy\Apromise\Promise|\yxorP\proxy\Apromise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$onRejected` | **callable** |  |




***

### then



```php
public then(callable $onFulfilled = null, callable $onRejected = null): \yxorP\proxy\Apromise\FulfilledPromise|\yxorP\proxy\Apromise\RejectedPromise|\yxorP\proxy\Apromise\Promise|\yxorP\proxy\Apromise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$onFulfilled` | **callable** |  |
| `$onRejected` | **callable** |  |




***

### wait



```php
public wait(mixed $unwrap = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$unwrap` | **mixed** |  |




***

### waitIfPending



```php
private waitIfPending(): mixed
```











***

### invokeWaitFn



```php
private invokeWaitFn(): mixed
```











***

### reject



```php
public reject(mixed $reason): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reason` | **mixed** |  |




***

### settle



```php
private settle(mixed $state, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$state` | **mixed** |  |
| `$value` | **mixed** |  |




***

### callHandler



```php
private static callHandler(mixed $index, mixed $value, array $handler): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **mixed** |  |
| `$value` | **mixed** |  |
| `$handler` | **array** |  |




***

### getState



```php
public getState(): string
```











***

### invokeWaitList



```php
private invokeWaitList(): mixed
```











***

### cancel



```php
public cancel(): mixed
```











***

### resolve



```php
public resolve(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***


***

