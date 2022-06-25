***

# ClassNotFoundFatalErrorHandler

ErrorHandler for classes that do not exist.



* Full name: `\Symfony\Component\Debug\FatalErrorHandler\ClassNotFoundFatalErrorHandler`
* This class implements:
[`\Symfony\Component\Debug\FatalErrorHandler\FatalErrorHandlerInterface`](./FatalErrorHandlerInterface.md)




## Methods


### handleError

Attempts to convert an error into an exception.

```php
public handleError(array $error, \Symfony\Component\Debug\Exception\FatalErrorException $exception): \Symfony\Component\Debug\Exception\FatalErrorException|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **array** | An array as returned by error_get_last() |
| `$exception` | **\Symfony\Component\Debug\Exception\FatalErrorException** | A FatalErrorException instance |


**Return Value:**

A FatalErrorException instance if the class is able to convert the error, null otherwise



***

### getClassCandidates

Tries to guess the full namespace for a given class name.

```php
private getClassCandidates(string $class): array
```

By default, it looks for PSR-0 and PSR-4 classes registered via a Symfony or a Composer
autoloader (that should cover all common cases).






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | A class name (without its namespace) |


**Return Value:**

An array of possible fully qualified class names



***

### findClassInPath



```php
private findClassInPath(string $path, string $class, string $prefix): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$class` | **string** |  |
| `$prefix` | **string** |  |




***

### convertFileToClass



```php
private convertFileToClass(string $path, string $file, string $prefix): string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$file` | **string** |  |
| `$prefix` | **string** |  |




***

### classExists



```php
private classExists(string $class): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
