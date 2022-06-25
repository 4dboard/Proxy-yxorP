***

# FilePathsIterator

Iterate over shell command result.



* Full name: `\Symfony\Component\Finder\Iterator\FilePathsIterator`
* Parent class: [`ArrayIterator`](../../../../ArrayIterator.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.



## Properties


### baseDir



```php
private string $baseDir
```






***

### baseDirLength



```php
private int $baseDirLength
```






***

### subPath



```php
private string $subPath
```






***

### subPathname



```php
private string $subPathname
```






***

### current



```php
private \Symfony\Component\Finder\SplFileInfo $current
```






***

## Methods


### __construct



```php
public __construct(array $paths, string $baseDir): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **array** | List of paths returned by shell command |
| `$baseDir` | **string** | Base dir for relative path building |




***

### __call



```php
public __call(string $name, array $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$arguments` | **array** |  |




***

### current

Return an instance of SplFileInfo with support for relative paths.

```php
public current(): \Symfony\Component\Finder\SplFileInfo
```









**Return Value:**

File information



***

### key



```php
public key(): string
```











***

### next



```php
public next(): mixed
```











***

### rewind



```php
public rewind(): mixed
```











***

### getSubPath



```php
public getSubPath(): string
```











***

### getSubPathname



```php
public getSubPathname(): string
```











***

### buildProperties



```php
private buildProperties(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
