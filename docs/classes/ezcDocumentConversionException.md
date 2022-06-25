***

# ezcDocumentConversionException

Exception thrown, when the RST parser could not parse asome token sequence.



* Full name: `\ezcDocumentConversionException`
* Parent class: [`\ezcDocumentException`](./ezcDocumentException.md)



## Properties


### levelMapping

Mapping of error levels to strings

```php
protected array $levelMapping
```






***

### errorString

Error string

```php
protected string $errorString
```

String describing the general type of this error




***

### parseError

Original exception message

```php
public string $parseError
```






***

## Methods


### __construct

Construct exception from errnous string and current position

```php
public __construct(int $level, string $message, string $file = null, int $line = null, int $position = null, \Exception $exception = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |
| `$message` | **string** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$position` | **int** |  |
| `$exception` | **\Exception** |  |




***


## Inherited methods


### __construct

Constructs a new ezcBaseException with $message

```php
public __construct(string $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
