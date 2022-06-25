***

# ProjectDescriptorMapper

Maps a projectDescriptor to and from a cache instance.



* Full name: `\phpDocumentor\Descriptor\Cache\ProjectDescriptorMapper`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`FILE_PREFIX`|public| |&#039;file_&#039;|
|`KEY_SETTINGS`|public| |&#039;settings&#039;|

## Properties


### cache



```php
protected \Zend\Cache\Storage\StorageInterface|\Zend\Cache\Storage\IterableInterface $cache
```






***

## Methods


### __construct

Initializes this mapper with the given cache instance.

```php
public __construct(\Zend\Cache\Storage\StorageInterface $cache): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\Zend\Cache\Storage\StorageInterface** |  |




***

### getCache

Returns the Cache instance for this Mapper.

```php
public getCache(): \Zend\Cache\Storage\IterableInterface|\Zend\Cache\Storage\StorageInterface
```











***

### populate

Returns the Project Descriptor from the cache.

```php
public populate(\phpDocumentor\Descriptor\ProjectDescriptor $projectDescriptor): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$projectDescriptor` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |




***

### igBinaryCompatibleCacheClear

Clears the cache if a serialization exception was thrown

```php
protected igBinaryCompatibleCacheClear(string $key, \Exception $e): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$e` | **\Exception** |  |




***

### save

Stores a Project Descriptor in the Cache.

```php
public save(\phpDocumentor\Descriptor\ProjectDescriptor $projectDescriptor): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$projectDescriptor` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |




***

### garbageCollect

Removes all files in cache that do not occur in the given FileSet Collection.

```php
public garbageCollect(\phpDocumentor\Fileset\Collection $collection): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **\phpDocumentor\Fileset\Collection** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
