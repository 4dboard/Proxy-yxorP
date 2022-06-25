***

# ezcBaseDoubleClassRepositoryPrefixException

ezcBaseDoubleClassRepositoryPrefixException is thrown whenever you try to
register a class repository with a prefix that has already been added
before.



* Full name: `\ezcBaseDoubleClassRepositoryPrefixException`
* Parent class: [`\ezcBaseException`](./ezcBaseException.md)




## Methods


### __construct

Constructs a new ezcBaseDoubleClassRepositoryPrefixException for the
$prefix that points to $basePath with autoload directory
$autoloadDirPath.

```php
public __construct(string $prefix, string $basePath, string $autoloadDirPath): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |
| `$basePath` | **string** |  |
| `$autoloadDirPath` | **string** |  |




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
