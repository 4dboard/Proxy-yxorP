***

# BlackHole





* Full name: `\Zend\Cache\Storage\Adapter\BlackHole`
* This class implements:
[`\Zend\Cache\Storage\StorageInterface`](../StorageInterface.md), [`\Zend\Cache\Storage\AvailableSpaceCapableInterface`](../AvailableSpaceCapableInterface.md), [`\Zend\Cache\Storage\ClearByNamespaceInterface`](../ClearByNamespaceInterface.md), [`\Zend\Cache\Storage\ClearByPrefixInterface`](../ClearByPrefixInterface.md), [`\Zend\Cache\Storage\ClearExpiredInterface`](../ClearExpiredInterface.md), [`\Zend\Cache\Storage\FlushableInterface`](../FlushableInterface.md), [`\Zend\Cache\Storage\IterableInterface`](../IterableInterface.md), [`\Zend\Cache\Storage\OptimizableInterface`](../OptimizableInterface.md), [`\Zend\Cache\Storage\TaggableInterface`](../TaggableInterface.md), [`\Zend\Cache\Storage\TotalSpaceCapableInterface`](../TotalSpaceCapableInterface.md)



## Properties


### capabilities

Capabilities of this adapter

```php
protected null|\Zend\Cache\Storage\Capabilities $capabilities
```






***

### capabilityMarker

Marker to change capabilities

```php
protected null|object $capabilityMarker
```






***

### options

options

```php
protected null|\Zend\Cache\Storage\Adapter\AdapterOptions $options
```






***

## Methods


### __construct

Constructor

```php
public __construct(null|array|\Traversable|\Zend\Cache\Storage\Adapter\AdapterOptions $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **null&#124;array&#124;\Traversable&#124;\Zend\Cache\Storage\Adapter\AdapterOptions** |  |




***

### setOptions

Set options.

```php
public setOptions(array|\Traversable|\Zend\Cache\Storage\Adapter\AdapterOptions $options): \Zend\Cache\Storage\StorageInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Cache\Storage\Adapter\AdapterOptions** |  |


**Return Value:**

Fluent interface



***

### getOptions

Get options

```php
public getOptions(): \Zend\Cache\Storage\Adapter\AdapterOptions
```











***

### getItem

Get an item.

```php
public getItem(string $key, bool& $success = null, mixed& $casToken = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$success` | **bool** |  |
| `$casToken` | **mixed** |  |


**Return Value:**

Data on success, null on failure



***

### getItems

Get multiple items.

```php
public getItems(array $keys): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keys` | **array** |  |


**Return Value:**

Associative array of keys and values



***

### hasItem

Test if an item exists.

```php
public hasItem(string $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### hasItems

Test multiple items.

```php
public hasItems(array $keys): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keys` | **array** |  |


**Return Value:**

Array of found keys



***

### getMetadata

Get metadata of an item.

```php
public getMetadata(string $key): array|bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |


**Return Value:**

Metadata on success, false on failure



***

### getMetadatas

Get multiple metadata

```php
public getMetadatas(array $keys): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keys` | **array** |  |


**Return Value:**

Associative array of keys and metadata



***

### setItem

Store an item.

```php
public setItem(string $key, mixed $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |




***

### setItems

Store multiple items.

```php
public setItems(array $keyValuePairs): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyValuePairs` | **array** |  |


**Return Value:**

Array of not stored keys



***

### addItem

Add an item.

```php
public addItem(string $key, mixed $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |




***

### addItems

Add multiple items.

```php
public addItems(array $keyValuePairs): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyValuePairs` | **array** |  |


**Return Value:**

Array of not stored keys



***

### replaceItem

Replace an existing item.

```php
public replaceItem(string $key, mixed $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |




***

### replaceItems

Replace multiple existing items.

```php
public replaceItems(array $keyValuePairs): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyValuePairs` | **array** |  |


**Return Value:**

Array of not stored keys



***

### checkAndSetItem

Set an item only if token matches

```php
public checkAndSetItem(mixed $token, string $key, mixed $value): bool
```

It uses the token received from getItem() to check if the item has
changed before overwriting it.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **mixed** |  |
| `$key` | **string** |  |
| `$value` | **mixed** |  |




***

### touchItem

Reset lifetime of an item

```php
public touchItem(string $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### touchItems

Reset lifetime of multiple items.

```php
public touchItems(array $keys): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keys` | **array** |  |


**Return Value:**

Array of not updated keys



***

### removeItem

Remove an item.

```php
public removeItem(string $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### removeItems

Remove multiple items.

```php
public removeItems(array $keys): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keys` | **array** |  |


**Return Value:**

Array of not removed keys



***

### incrementItem

Increment an item.

```php
public incrementItem(string $key, int $value): int|bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **int** |  |


**Return Value:**

The new value on success, false on failure



***

### incrementItems

Increment multiple items.

```php
public incrementItems(array $keyValuePairs): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyValuePairs` | **array** |  |


**Return Value:**

Associative array of keys and new values



***

### decrementItem

Decrement an item.

```php
public decrementItem(string $key, int $value): int|bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **int** |  |


**Return Value:**

The new value on success, false on failure



***

### decrementItems

Decrement multiple items.

```php
public decrementItems(array $keyValuePairs): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyValuePairs` | **array** |  |


**Return Value:**

Associative array of keys and new values



***

### getCapabilities

Capabilities of this storage

```php
public getCapabilities(): \Zend\Cache\Storage\Capabilities
```











***

### getAvailableSpace

Get available space in bytes

```php
public getAvailableSpace(): int|float
```











***

### clearByNamespace

Remove items of given namespace

```php
public clearByNamespace(string $namespace): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |




***

### clearByPrefix

Remove items matching given prefix

```php
public clearByPrefix(string $prefix): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |




***

### clearExpired

Remove expired items

```php
public clearExpired(): bool
```











***

### flush

Flush the whole storage

```php
public flush(): bool
```











***

### getIterator

Get the storage iterator

```php
public getIterator(): \Zend\Cache\Storage\Adapter\KeyListIterator
```











***

### optimize

Optimize the storage

```php
public optimize(): bool
```











***

### setTags

Set tags to an item by given key.

```php
public setTags(string $key, string[] $tags): bool
```

An empty array will remove all tags.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$tags` | **string[]** |  |




***

### getTags

Get tags of an item by given key

```php
public getTags(string $key): string[]|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### clearByTags

Remove items matching given tags.

```php
public clearByTags(string[] $tags, bool $disjunction = false): bool
```

If $disjunction only one of the given tags must match
else all given tags must match.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tags` | **string[]** |  |
| `$disjunction` | **bool** |  |




***

### getTotalSpace

Get total space in bytes

```php
public getTotalSpace(): int|float
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
