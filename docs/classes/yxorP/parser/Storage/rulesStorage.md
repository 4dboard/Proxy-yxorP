***

# rulesStorage





* Full name: `\yxorP\parser\Storage\rulesStorage`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\parser\Storage\publicSuffixListStorageInterface`](./publicSuffixListStorageInterface.md)
* This class is a **Final class**



## Properties


### cache



```php
private \yxorP\parser\Storage\publicSuffixListCacheInterface $cache
```






***

### client



```php
private \yxorP\parser\Storage\publicSuffixListClientInterface $client
```






***

## Methods


### __construct



```php
public __construct(\yxorP\parser\Storage\publicSuffixListCacheInterface $cache, \yxorP\parser\Storage\publicSuffixListClientInterface $client): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\yxorP\parser\Storage\publicSuffixListCacheInterface** |  |
| `$client` | **\yxorP\parser\Storage\publicSuffixListClientInterface** |  |




***

### get



```php
public get(string $uri): \yxorP\parser\publicSuffixListInterface
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

