***

# IOException

Exception class thrown when a filesystem operation failure happens.



* Full name: `\Symfony\Component\Filesystem\Exception\IOException`
* Parent class: [`RuntimeException`](../../../../RuntimeException.md)
* This class implements:
[`\Symfony\Component\Filesystem\Exception\IOExceptionInterface`](./IOExceptionInterface.md)



## Properties


### path



```php
private $path
```






***

## Methods


### __construct



```php
public __construct(mixed $message, mixed $code, \Exception $previous = null, mixed $path = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$code` | **mixed** |  |
| `$previous` | **\Exception** |  |
| `$path` | **mixed** |  |




***

### getPath

Returns the associated path for the exception.

```php
public getPath(): string
```









**Return Value:**

The path



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
