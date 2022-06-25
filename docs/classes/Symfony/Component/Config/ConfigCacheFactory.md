***

# ConfigCacheFactory

Basic implementation of ConfigCacheFactoryInterface that
creates an instance of the default ConfigCache.

This factory and/or cache <em>do not</em> support cache validation
by means of ResourceChecker instances (that is, service-based).

* Full name: `\Symfony\Component\Config\ConfigCacheFactory`
* This class implements:
[`\Symfony\Component\Config\ConfigCacheFactoryInterface`](./ConfigCacheFactoryInterface.md)



## Properties


### debug



```php
private $debug
```






***

## Methods


### __construct



```php
public __construct(bool $debug): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$debug` | **bool** | The debug flag to pass to ConfigCache |




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
