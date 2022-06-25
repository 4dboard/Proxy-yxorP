***

# DoctrineCacheAdapter





* Full name: `\Metadata\Cache\DoctrineCacheAdapter`
* This class implements:
[`\Metadata\Cache\CacheInterface`](./CacheInterface.md)



## Properties


### prefix



```php
private $prefix
```






***

### cache



```php
private \Doctrine\Common\Cache\Cache $cache
```






***

## Methods


### __construct



```php
public __construct(string $prefix, \Doctrine\Common\Cache\Cache $cache): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |
| `$cache` | **\Doctrine\Common\Cache\Cache** |  |




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
