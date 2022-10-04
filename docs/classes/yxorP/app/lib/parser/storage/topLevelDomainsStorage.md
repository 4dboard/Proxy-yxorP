***

# topLevelDomainsStorage





* Full name: `\yxorP\lib\parser\storage\topLevelDomainsStorage`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\lib\parser\storage\topLevelDomainListStorageInterface`](./topLevelDomainListStorageInterface.md)
* This class is a **Final class**



## Properties


### cache



```php
private \yxorP\lib\parser\storage\topLevelDomainListCacheInterface $cache
```






***

### client



```php
private \yxorP\lib\parser\storage\topLevelDomainListClientInterface $client
```






***

## Methods


### __construct



```php
public __construct(\yxorP\lib\parser\storage\topLevelDomainListCacheInterface $cache, \yxorP\lib\parser\storage\topLevelDomainListClientInterface $client): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\yxorP\lib\parser\storage\topLevelDomainListCacheInterface** |  |
| `$client` | **\yxorP\lib\parser\storage\topLevelDomainListClientInterface** |  |




***

### get



```php
public get(string $uri): \yxorP\lib\parser\topLevelDomainListInterface
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

