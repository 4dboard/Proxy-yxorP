***

# ResourceCheckerConfigCache

ResourceCheckerConfigCache uses instances of ResourceCheckerInterface
to check whether cached data is still fresh.



* Full name: `\Symfony\Component\Config\ResourceCheckerConfigCache`
* This class implements:
[`\Symfony\Component\Config\ConfigCacheInterface`](./ConfigCacheInterface.md)



## Properties


### file



```php
private string $file
```






***

### resourceCheckers



```php
private \Symfony\Component\Config\ResourceCheckerInterface[] $resourceCheckers
```






***

## Methods


### __construct



```php
public __construct(string $file, \Symfony\Component\Config\ResourceCheckerInterface[] $resourceCheckers = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | The absolute cache path |
| `$resourceCheckers` | **\Symfony\Component\Config\ResourceCheckerInterface[]** | The ResourceCheckers to use for the freshness check |




***

### getPath

Gets the cache file path.

```php
public getPath(): string
```









**Return Value:**

The cache file path



***

### isFresh

Checks if the cache is still fresh.

```php
public isFresh(): bool
```

This implementation will make a decision solely based on the ResourceCheckers
passed in the constructor.

The first ResourceChecker that supports a given resource is considered authoritative.
Resources with no matching ResourceChecker will silently be ignored and considered fresh.







**Return Value:**

true if the cache is fresh, false otherwise



***

### write

Writes cache.

```php
public write(string $content, \Symfony\Component\Config\Resource\ResourceInterface[] $metadata = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** | The content to write in the cache |
| `$metadata` | **\Symfony\Component\Config\Resource\ResourceInterface[]** | An array of metadata |




***

### getMetaFile

Gets the meta file path.

```php
private getMetaFile(): string
```









**Return Value:**

The meta file path



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
