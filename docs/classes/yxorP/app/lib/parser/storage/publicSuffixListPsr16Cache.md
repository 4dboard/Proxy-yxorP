***

# publicSuffixListPsr16Cache





* Full name: `\yxorP\app\lib\parser\storage\publicSuffixListPsr16Cache`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\app\lib\parser\storage\publicSuffixListCacheInterface`](./publicSuffixListCacheInterface.md)
* This class is a **Final class**



## Properties


### cache



```php
private \yxorP\psr\SimpleCache\CacheInterface $cache
```






***

### cachePrefix



```php
private string $cachePrefix
```






***

### cacheTtl



```php
private ?\DateInterval $cacheTtl
```






***

## Methods


### __construct



```php
public __construct(\yxorP\psr\SimpleCache\CacheInterface $cache, string $cachePrefix = &#039;&#039;, mixed $cacheTtl = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\yxorP\psr\SimpleCache\CacheInterface** |  |
| `$cachePrefix` | **string** |  |
| `$cacheTtl` | **mixed** |  |




***

### fetch



```php
public fetch(string $uri): ?\yxorP\app\lib\parser\publicSuffixListInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |




***

### cacheKey



```php
private cacheKey(string $str): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |




***

### remember



```php
public remember(string $uri, \yxorP\app\lib\parser\publicSuffixListInterface $publicSuffixList): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |
| `$publicSuffixList` | **\yxorP\app\lib\parser\publicSuffixListInterface** |  |




***

### forget



```php
public forget(string $uri): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
