***

# rulesStorage





* Full name: `\yxorP\app\lib\parser\storage\rulesStorage`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\app\lib\parser\storage\publicSuffixListStorageInterface`](./publicSuffixListStorageInterface.md)
* This class is a **Final class**



## Properties


### cache



```php
private \yxorP\app\lib\parser\storage\publicSuffixListCacheInterface $cache
```






***

### client



```php
private \yxorP\app\lib\parser\storage\publicSuffixListClientInterface $client
```






***

## Methods


### __construct



```php
public __construct(\yxorP\app\lib\parser\storage\publicSuffixListCacheInterface $cache, \yxorP\app\lib\parser\storage\publicSuffixListClientInterface $client): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\yxorP\app\lib\parser\storage\publicSuffixListCacheInterface** |  |
| `$client` | **\yxorP\app\lib\parser\storage\publicSuffixListClientInterface** |  |




***

### get



```php
public get(string $uri): \yxorP\app\lib\parser\publicSuffixListInterface
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

