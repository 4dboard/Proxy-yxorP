***

# FileLocator





* Full name: `\Metadata\Driver\FileLocator`
* This class implements:
[`\Metadata\Driver\AdvancedFileLocatorInterface`](./AdvancedFileLocatorInterface.md)



## Properties


### dirs



```php
private $dirs
```






***

## Methods


### __construct



```php
public __construct(array $dirs): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirs` | **array** |  |




***

### getDirs



```php
public getDirs(): mixed
```











***

### findFileForClass



```php
public findFileForClass(\ReflectionClass $class, string $extension): string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |
| `$extension` | **string** |  |




***

### findAllClasses

Finds all possible metadata files.

```php
public findAllClasses(mixed $extension): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extension` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
