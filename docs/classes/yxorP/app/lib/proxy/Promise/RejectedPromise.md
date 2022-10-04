***

# rejectedPromise





* Full name: `\yxorP\lib\proxy\promise\rejectedPromise`
* This class implements:
[`\yxorP\lib\proxy\promise\promiseInterface`](./promiseInterface.md)



## Properties


### reason



```php
private $reason
```






***

## Methods


### __construct



```php
public __construct(mixed $reason): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reason` | **mixed** |  |




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

