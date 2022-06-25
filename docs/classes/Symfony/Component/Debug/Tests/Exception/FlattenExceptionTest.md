***

# FlattenExceptionTest





* Full name: `\Symfony\Component\Debug\Tests\Exception\FlattenExceptionTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../../../PHPUnit_Framework_TestCase.md)




## Methods


### testStatusCode



```php
public testStatusCode(): mixed
```











***

### testHeadersForHttpException



```php
public testHeadersForHttpException(): mixed
```











***

### testFlattenHttpException



```php
public testFlattenHttpException(\Exception $exception, mixed $statusCode): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\Exception** |  |
| `$statusCode` | **mixed** |  |




***

### testPrevious



```php
public testPrevious(\Exception $exception, mixed $statusCode): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\Exception** |  |
| `$statusCode` | **mixed** |  |




***

### testPreviousError



```php
public testPreviousError(): mixed
```











***

### testLine



```php
public testLine(\Exception $exception): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\Exception** |  |




***

### testFile



```php
public testFile(\Exception $exception): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\Exception** |  |




***

### testToArray



```php
public testToArray(\Exception $exception, mixed $statusCode): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\Exception** |  |
| `$statusCode` | **mixed** |  |




***

### flattenDataProvider



```php
public flattenDataProvider(): mixed
```











***

### testRecursionInArguments



```php
public testRecursionInArguments(): mixed
```











***

### testTooBigArray



```php
public testTooBigArray(): mixed
```











***

### createException



```php
private createException(mixed $foo): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$foo` | **mixed** |  |




***

### testSetTraceIncompleteClass



```php
public testSetTraceIncompleteClass(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
