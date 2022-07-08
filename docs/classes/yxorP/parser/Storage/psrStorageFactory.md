***

# psrStorageFactory





* Full name: `\yxorP\parser\Storage\psrStorageFactory`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\parser\resourceUriInterface`](../resourceUriInterface.md), [`\yxorP\parser\Storage\publicSuffixListStorageFactoryInterface`](./publicSuffixListStorageFactoryInterface.md), [`\yxorP\parser\Storage\topLevelDomainListStorageFactoryInterface`](./topLevelDomainListStorageFactoryInterface.md)
* This class is a **Final class**



## Properties


### cache



```php
private \yxorP\psr\SimpleCache\CacheInterface $cache
```






***

### client



```php
private \yxorP\psr\Http\Client\ClientInterface $client
```






***

### requestFactory



```php
private \yxorP\psr\Http\Message\RequestFactoryInterface $requestFactory
```






***

## Methods


### __construct



```php
public __construct(\yxorP\psr\SimpleCache\CacheInterface $cache, \yxorP\psr\Http\Client\ClientInterface $client, \yxorP\psr\Http\Message\RequestFactoryInterface $requestFactory): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\yxorP\psr\SimpleCache\CacheInterface** |  |
| `$client` | **\yxorP\psr\Http\Client\ClientInterface** |  |
| `$requestFactory` | **\yxorP\psr\Http\Message\RequestFactoryInterface** |  |




***

### createPublicSuffixListStorage



```php
public createPublicSuffixListStorage(string $cachePrefix = &#039;&#039;, mixed $cacheTtl = null): \yxorP\parser\Storage\publicSuffixListStorageInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cachePrefix` | **string** |  |
| `$cacheTtl` | **mixed** |  |




***

### createTopLevelDomainListStorage



```php
public createTopLevelDomainListStorage(string $cachePrefix = &#039;&#039;, mixed $cacheTtl = null): \yxorP\parser\Storage\topLevelDomainListStorageInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cachePrefix` | **string** |  |
| `$cacheTtl` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
