***

# coroutine





* Full name: `\yxorP\lib\proxy\promise\coroutine`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\lib\proxy\promise\promiseInterface`](./promiseInterface.md)
* This class is a **Final class**



## Properties


### currentPromise



```php
private $currentPromise
```






***

### generator



```php
private $generator
```






***

### result



```php
private $result
```






***

## Methods


### __construct



```php
public __construct(callable $generatorFn): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$generatorFn` | **callable** |  |




***

### then



```php
public then(callable $onFulfilled = null, callable $onRejected = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$onFulfilled` | **callable** |  |
| `$onRejected` | **callable** |  |




***

### otherwise



```php
public otherwise(callable $onRejected): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
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

### getState



```php
public getState(): mixed
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

### reject



```php
public reject(mixed $reason): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reason` | **mixed** |  |




***

### cancel



```php
public cancel(): mixed
```











***

### _handleSuccess



```php
public _handleSuccess(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### _handleFailure



```php
public _handleFailure(mixed $reason): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reason` | **mixed** |  |




***

### nextCoroutine



```php
private nextCoroutine(mixed $yielded): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$yielded` | **mixed** |  |




***


***

