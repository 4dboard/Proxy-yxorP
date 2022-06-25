***

# Error





* Full name: `\Zend\Json\Server\Error`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ERROR_PARSE`|public| |-32700|
|`ERROR_INVALID_REQUEST`|public| |-32600|
|`ERROR_INVALID_METHOD`|public| |-32601|
|`ERROR_INVALID_PARAMS`|public| |-32602|
|`ERROR_INTERNAL`|public| |-32603|
|`ERROR_OTHER`|public| |-32000|

## Properties


### code

Current code

```php
protected int $code
```






***

### data

Error data

```php
protected mixed $data
```






***

### message

Error message

```php
protected string $message
```






***

## Methods


### __construct

Constructor

```php
public __construct(string $message = null, int $code = self::ERROR_OTHER, mixed $data = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$code` | **int** |  |
| `$data` | **mixed** |  |




***

### setCode

Set error code.

```php
public setCode(int $code): \Zend\Json\Server\Error
```

If the error code is 0, it will be set to -32000 (ERROR_OTHER).






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **int** |  |




***

### getCode

Get error code

```php
public getCode(): int|null
```











***

### setMessage

Set error message

```php
public setMessage(string $message): \Zend\Json\Server\Error
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |




***

### getMessage

Get error message

```php
public getMessage(): string
```











***

### setData

Set error data

```php
public setData(mixed $data): \Zend\Json\Server\Error
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### getData

Get error data

```php
public getData(): mixed
```











***

### toArray

Cast error to array

```php
public toArray(): array
```











***

### toJson

Cast error to JSON

```php
public toJson(): string
```











***

### __toString

Cast to string (JSON)

```php
public __toString(): string
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
