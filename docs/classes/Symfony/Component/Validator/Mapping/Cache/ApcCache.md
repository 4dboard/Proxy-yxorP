***

# ApcCache





* Full name: `\Symfony\Component\Validator\Mapping\Cache\ApcCache`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
[`\Symfony\Component\Validator\Mapping\Cache\CacheInterface`](./CacheInterface.md)



## Properties


### prefix



```php
private $prefix
```






***

## Methods


### __construct



```php
public __construct(mixed $prefix): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **mixed** |  |




***

### has

Returns whether metadata for the given class exists in the cache.

```php
public has(mixed $class): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |




***

### read

Returns the metadata for the given class from the cache.

```php
public read(mixed $class): \Symfony\Component\Validator\Mapping\ClassMetadata|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** | Class Name |


**Return Value:**

A ClassMetadata instance or false on miss



***

### write

Stores a class metadata in the cache.

```php
public write(\Symfony\Component\Validator\Mapping\ClassMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Symfony\Component\Validator\Mapping\ClassMetadata** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
