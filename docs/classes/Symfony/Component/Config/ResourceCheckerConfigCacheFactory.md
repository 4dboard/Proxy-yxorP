***

# ResourceCheckerConfigCacheFactory

A ConfigCacheFactory implementation that validates the
cache with an arbitrary set of ResourceCheckers.



* Full name: `\Symfony\Component\Config\ResourceCheckerConfigCacheFactory`
* This class implements:
[`\Symfony\Component\Config\ConfigCacheFactoryInterface`](./ConfigCacheFactoryInterface.md)



## Properties


### resourceCheckers



```php
private \Symfony\Component\Config\ResourceCheckerInterface[] $resourceCheckers
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\Config\ResourceCheckerInterface[] $resourceCheckers = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceCheckers` | **\Symfony\Component\Config\ResourceCheckerInterface[]** |  |




***

### cache

Creates a cache instance and (re-)initializes it if necessary.

```php
public cache(mixed $file, mixed $callback): \Symfony\Component\Config\ConfigCacheInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** | The absolute cache file path |
| `$callback` | **mixed** |  |


**Return Value:**

The cache instance



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
