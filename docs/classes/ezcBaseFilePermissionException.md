***

# ezcBaseFilePermissionException

ezcBaseFilePermissionException is thrown whenever a permission problem with
a file, directory or stream occurred.



* Full name: `\ezcBaseFilePermissionException`
* Parent class: [`\ezcBaseFileException`](./ezcBaseFileException.md)




## Methods


### __construct

Constructs a new ezcPropertyPermissionException for the property $name.

```php
public __construct(string $path, int $mode, string $message = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The name of the file. |
| `$mode` | **int** | The mode of the property that is allowed<br />(ezcBaseFileException::READ, ezcBaseFileException::WRITE,<br />ezcBaseFileException::EXECUTE,<br />ezcBaseFileException::CHANGE or<br />ezcBaseFileException::REMOVE). |
| `$message` | **string** | A string with extra information. |




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
