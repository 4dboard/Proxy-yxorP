***

# rulesStorage





* Full name: `\yxorP\lib\parser\storage\rulesStorage`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\lib\parser\storage\publicSuffixListStorageInterface`](./publicSuffixListStorageInterface.md)
* This class is a **Final class**



## Properties


### cache



```php
private \yxorP\lib\parser\storage\publicSuffixListCacheInterface $cache
```






***

### client



```php
private \yxorP\lib\parser\storage\publicSuffixListClientInterface $client
```






***

## Methods


### __construct



```php
public __construct(\yxorP\lib\parser\storage\publicSuffixListCacheInterface $cache, \yxorP\lib\parser\storage\publicSuffixListClientInterface $client): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\yxorP\lib\parser\storage\publicSuffixListCacheInterface** |  |
| `$client` | **\yxorP\lib\parser\storage\publicSuffixListClientInterface** |  |




***

### get



```php
public get(string $uri): \yxorP\lib\parser\publicSuffixListInterface
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

