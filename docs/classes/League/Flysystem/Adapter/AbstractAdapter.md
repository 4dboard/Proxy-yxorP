***

# AbstractAdapter





* Full name: `\League\Flysystem\Adapter\AbstractAdapter`
* This class implements:
[`\League\Flysystem\AdapterInterface`](../AdapterInterface.md)
* This class is an **Abstract class**



## Properties


### pathPrefix



```php
protected string|null $pathPrefix
```






***

### pathSeparator



```php
protected string $pathSeparator
```






***

## Methods


### setPathPrefix

Set the path prefix.

```php
public setPathPrefix(string $prefix): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |




***

### getPathPrefix

Get the path prefix.

```php
public getPathPrefix(): string|null
```









**Return Value:**

path prefix or null if pathPrefix is empty



***

### applyPathPrefix

Prefix a path.

```php
public applyPathPrefix(string $path): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |


**Return Value:**

prefixed path



***

### removePathPrefix

Remove a path prefix.

```php
public removePathPrefix(string $path): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |


**Return Value:**

path without the prefix



***


***
> Automatically generated from source code comments on 2022-07-27 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
