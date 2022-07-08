***

# topLevelDomainsStorage





* Full name: `\yxorP\parser\Storage\topLevelDomainsStorage`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\parser\Storage\topLevelDomainListStorageInterface`](./topLevelDomainListStorageInterface.md)
* This class is a **Final class**



## Properties


### cache



```php
private \yxorP\parser\Storage\topLevelDomainListCacheInterface $cache
```






***

### client



```php
private \yxorP\parser\Storage\topLevelDomainListClientInterface $client
```






***

## Methods


### __construct



```php
public __construct(\yxorP\parser\Storage\topLevelDomainListCacheInterface $cache, \yxorP\parser\Storage\topLevelDomainListClientInterface $client): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\yxorP\parser\Storage\topLevelDomainListCacheInterface** |  |
| `$client` | **\yxorP\parser\Storage\topLevelDomainListClientInterface** |  |




***

### get



```php
public get(string $uri): \yxorP\parser\topInterfaceLevelDomainListInterface
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

