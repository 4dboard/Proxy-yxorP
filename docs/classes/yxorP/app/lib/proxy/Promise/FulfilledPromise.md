***

# fulfilledPromise





* Full name: `\yxorP\app\lib\proxy\promise\fulfilledPromise`
* This class implements:
[`\yxorP\app\lib\proxy\promise\promiseInterface`](./promiseInterface.md)



## Properties


### value



```php
private $value
```






***

## Methods


### __construct



```php
public __construct(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




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

### wait



```php
public wait(mixed $unwrap = true, mixed $defaultDelivery = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$unwrap` | **mixed** |  |
| `$defaultDelivery` | **mixed** |  |




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


***

