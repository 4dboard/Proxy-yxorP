***

# FileCache





* Full name: `\Metadata\Cache\FileCache`
* This class implements:
[`\Metadata\Cache\CacheInterface`](./CacheInterface.md)



## Properties


### dir



```php
private $dir
```






***

## Methods


### __construct



```php
public __construct(mixed $dir): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **mixed** |  |




***

### loadClassMetadataFromCache

Loads a class metadata instance from the cache

```php
public loadClassMetadataFromCache(\ReflectionClass $class): \Metadata\ClassMetadata
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |




***

### putClassMetadataInCache

Puts a class metadata instance into the cache

```php
public putClassMetadataInCache(\Metadata\ClassMetadata $metadata): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Metadata\ClassMetadata** |  |




***

### renameFile

Renames a file with fallback for windows

```php
private renameFile(string $source, string $target): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** |  |
| `$target` | **string** |  |




***

### evictClassMetadataFromCache

Evicts the class metadata for the given class from the cache.

```php
public evictClassMetadataFromCache(\ReflectionClass $class): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
