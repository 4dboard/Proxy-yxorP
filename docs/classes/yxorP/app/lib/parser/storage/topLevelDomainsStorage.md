***

# topLevelDomainsStorage





* Full name: `\yxorP\app\lib\parser\storage\topLevelDomainsStorage`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\app\lib\parser\storage\topLevelDomainListStorageInterface`](./topLevelDomainListStorageInterface.md)
* This class is a **Final class**



## Properties


### cache



```php
private \yxorP\app\lib\parser\storage\topLevelDomainListCacheInterface $cache
```






***

### client



```php
private \yxorP\app\lib\parser\storage\topLevelDomainListClientInterface $client
```






***

## Methods


### __construct



```php
public __construct(\yxorP\app\lib\parser\storage\topLevelDomainListCacheInterface $cache, \yxorP\app\lib\parser\storage\topLevelDomainListClientInterface $client): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\yxorP\app\lib\parser\storage\topLevelDomainListCacheInterface** |  |
| `$client` | **\yxorP\app\lib\parser\storage\topLevelDomainListClientInterface** |  |




***

### get



```php
public get(string $uri): \yxorP\app\lib\parser\topLevelDomainListInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |




***

### delete



```php
public delete(string $uri): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-07-16 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
