***

# Apc

* Full name: `\Zend\Cache\Storage\Adapter\Apc`
* Parent class: [`\Zend\Cache\Storage\Adapter\AbstractAdapter`](./AbstractAdapter.md)
* This class implements:
  [`\Zend\Cache\Storage\AvailableSpaceCapableInterface`](../AvailableSpaceCapableInterface.md)
  , [`\Zend\Cache\Storage\ClearByNamespaceInterface`](../ClearByNamespaceInterface.md)
  , [`\Zend\Cache\Storage\ClearByPrefixInterface`](../ClearByPrefixInterface.md)
  , [`\Zend\Cache\Storage\FlushableInterface`](../FlushableInterface.md)
  , [`\Zend\Cache\Storage\IterableInterface`](../IterableInterface.md)
  , [`\Zend\Cache\Storage\TotalSpaceCapableInterface`](../TotalSpaceCapableInterface.md)

## Properties

### totalSpace

Buffered total space in bytes

```php
protected null|int|float $totalSpace
```

***

## Methods

### __construct

Constructor

```php
public __construct(null|array|\Traversable|\Zend\Cache\Storage\Adapter\ApcOptions $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **null&#124;array&#124;\Traversable&#124;\Zend\Cache\Storage\Adapter\ApcOptions** |  |

***

### setOptions

Set options.

```php
public setOptions(array|\Traversable|\Zend\Cache\Storage\Adapter\ApcOptions $options): \Zend\Cache\Storage\Adapter\Apc
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Cache\Storage\Adapter\ApcOptions** |  |

**See Also:**

* \Zend\Cache\Storage\Adapter\getOptions() -

***

### getOptions

Get options.

```php
public getOptions(): \Zend\Cache\Storage\Adapter\ApcOptions
```

**See Also:**

* \Zend\Cache\Storage\Adapter\setOptions() -

***

### getTotalSpace

Get total space in bytes

```php
public getTotalSpace(): int|float
```

***

### getAvailableSpace

Get available space in bytes

```php
public getAvailableSpace(): int|float
```

***

### getIterator

Get the storage iterator

```php
public getIterator(): \Zend\Cache\Storage\Adapter\ApcIterator
```

***

### flush

Flush the whole storage

```php
public flush(): bool
```

***

### clearByNamespace

Remove items by given namespace

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

### internalGetItem

Internal method to get an item.

```php
protected internalGetItem(string& $normalizedKey, bool& $success = null, mixed& $casToken = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |
| `$success` | **bool** |  |
| `$casToken` | **mixed** |  |

**Return Value:**

Data on success, null on failure



***

### internalGetItems

Internal method to get multiple items.

```php
protected internalGetItems(array& $normalizedKeys): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeys` | **array** |  |

**Return Value:**

Associative array of keys and values



***

### internalHasItem

Internal method to test if an item exists.

```php
protected internalHasItem(string& $normalizedKey): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |

***

### internalHasItems

Internal method to test multiple items.

```php
protected internalHasItems(array& $normalizedKeys): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeys` | **array** |  |

**Return Value:**

Array of found keys



***

### internalGetMetadata

Get metadata of an item.

```php
protected internalGetMetadata(string& $normalizedKey): array|bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |

**Return Value:**

Metadata on success, false on failure



***

### internalGetMetadatas

Get metadata of multiple items

```php
protected internalGetMetadatas(array& $normalizedKeys): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeys` | **array** |  |

**Return Value:**

Associative array of keys and metadata



***

### internalSetItem

Internal method to store an item.

```php
protected internalSetItem(string& $normalizedKey, mixed& $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |
| `$value` | **mixed** |  |

***

### internalSetItems

Internal method to store multiple items.

```php
protected internalSetItems(array& $normalizedKeyValuePairs): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeyValuePairs` | **array** |  |

**Return Value:**

Array of not stored keys



***

### internalAddItem

Add an item.

```php
protected internalAddItem(string& $normalizedKey, mixed& $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |
| `$value` | **mixed** |  |

***

### internalAddItems

Internal method to add multiple items.

```php
protected internalAddItems(array& $normalizedKeyValuePairs): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeyValuePairs` | **array** |  |

**Return Value:**

Array of not stored keys



***

### internalReplaceItem

Internal method to replace an existing item.

```php
protected internalReplaceItem(string& $normalizedKey, mixed& $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |
| `$value` | **mixed** |  |

***

### internalRemoveItem

Internal method to remove an item.

```php
protected internalRemoveItem(string& $normalizedKey): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |

***

### internalRemoveItems

Internal method to remove multiple items.

```php
protected internalRemoveItems(array& $normalizedKeys): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeys` | **array** |  |

**Return Value:**

Array of not removed keys



***

### internalIncrementItem

Internal method to increment an item.

```php
protected internalIncrementItem(string& $normalizedKey, int& $value): int|bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |
| `$value` | **int** |  |

**Return Value:**

The new value on success, false on failure



***

### internalDecrementItem

Internal method to decrement an item.

```php
protected internalDecrementItem(string& $normalizedKey, int& $value): int|bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |
| `$value` | **int** |  |

**Return Value:**

The new value on success, false on failure



***

### internalGetCapabilities

Internal method to get capabilities of this adapter

```php
protected internalGetCapabilities(): \Zend\Cache\Storage\Capabilities
```

***

### normalizeMetadata

Normalize metadata to work with APC

```php
protected normalizeMetadata(array& $metadata): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **array** |  |

***

### internalCheckAndSetItem

Internal method to set an item only if token matches

```php
protected internalCheckAndSetItem(mixed& $token, string& $normalizedKey, mixed& $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **mixed** |  |
| `$normalizedKey` | **string** |  |
| `$value` | **mixed** |  |

**See Also:**

* \Zend\Cache\Storage\Adapter\getItem() - * \Zend\Cache\Storage\Adapter\setItem() -

***

## Inherited methods

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

### __destruct

Destructor

```php
public __destruct(): void
```

detach all registered plugins to free event handles of event manager









***

### setOptions

Set options.

```php
public setOptions(array|\Traversable|\Zend\Cache\Storage\Adapter\AdapterOptions $options): \Zend\Cache\Storage\Adapter\AbstractAdapter
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Cache\Storage\Adapter\AdapterOptions** |  |

**See Also:**

* \Zend\Cache\Storage\Adapter\getOptions() -

***

### getOptions

Get options.

```php
public getOptions(): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**See Also:**

* \Zend\Cache\Storage\Adapter\setOptions() -

***

### setCaching

Enable/Disable caching.

```php
public setCaching(bool $flag): \Zend\Cache\Storage\Adapter\AbstractAdapter
```

Alias of setWritable and setReadable.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** |  |

**See Also:**

* \Zend\Cache\Storage\Adapter\setWritable() - * \Zend\Cache\Storage\Adapter\setReadable() -

***

### getCaching

Get caching enabled.

```php
public getCaching(): bool
```

Alias of getWritable and getReadable.

**See Also:**

* \Zend\Cache\Storage\Adapter\getWritable() - * \Zend\Cache\Storage\Adapter\getReadable() -

***

### getEventManager

Get the event manager

```php
public getEventManager(): \Zend\EventManager\EventManagerInterface
```

***

### triggerPre

Trigger a pre event and return the event response collection

```php
protected triggerPre(string $eventName, \ArrayObject $args): \Zend\EventManager\ResponseCollection
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **string** |  |
| `$args` | **\ArrayObject** |  |

**Return Value:**

All handler return values



***

### triggerPost

Triggers the PostEvent and return the result value.

```php
protected triggerPost(string $eventName, \ArrayObject $args, mixed& $result): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **string** |  |
| `$args` | **\ArrayObject** |  |
| `$result` | **mixed** |  |

***

### triggerException

Trigger an exception event

```php
protected triggerException(string $eventName, \ArrayObject $args, mixed& $result, \Exception $exception): mixed
```

If the ExceptionEvent has the flag "throwException" enabled throw the exception after trigger else return the result.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **string** |  |
| `$args` | **\ArrayObject** |  |
| `$result` | **mixed** |  |
| `$exception` | **\Exception** |  |

***

### hasPlugin

Check if a plugin is registered

```php
public hasPlugin(\Zend\Cache\Storage\Plugin\PluginInterface $plugin): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plugin` | **\Zend\Cache\Storage\Plugin\PluginInterface** |  |

***

### addPlugin

Register a plugin

```php
public addPlugin(\Zend\Cache\Storage\Plugin\PluginInterface $plugin, int $priority = 1): \Zend\Cache\Storage\Adapter\AbstractAdapter
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plugin` | **\Zend\Cache\Storage\Plugin\PluginInterface** |  |
| `$priority` | **int** |  |

**Return Value:**

Fluent interface



***

### removePlugin

Unregister an already registered plugin

```php
public removePlugin(\Zend\Cache\Storage\Plugin\PluginInterface $plugin): \Zend\Cache\Storage\Adapter\AbstractAdapter
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plugin` | **\Zend\Cache\Storage\Plugin\PluginInterface** |  |

**Return Value:**

Fluent interface



***

### getPluginRegistry

Return registry of plugins

```php
public getPluginRegistry(): \SplObjectStorage
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

### internalGetItem

Internal method to get an item.

```php
protected internalGetItem(string& $normalizedKey, bool& $success = null, mixed& $casToken = null): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |
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

### internalGetItems

Internal method to get multiple items.

```php
protected internalGetItems(array& $normalizedKeys): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeys` | **array** |  |

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

### internalHasItem

Internal method to test if an item exists.

```php
protected internalHasItem(string& $normalizedKey): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |

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

### internalHasItems

Internal method to test multiple items.

```php
protected internalHasItems(array& $normalizedKeys): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeys` | **array** |  |

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

### internalGetMetadata

Internal method to get metadata of an item.

```php
protected internalGetMetadata(string& $normalizedKey): array|bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |

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

### internalGetMetadatas

Internal method to get multiple metadata

```php
protected internalGetMetadatas(array& $normalizedKeys): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeys` | **array** |  |

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

### internalSetItem

Internal method to store an item.

```php
protected internalSetItem(string& $normalizedKey, mixed& $value): bool
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |
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

### internalSetItems

Internal method to store multiple items.

```php
protected internalSetItems(array& $normalizedKeyValuePairs): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeyValuePairs` | **array** |  |

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

### internalAddItem

Internal method to add an item.

```php
protected internalAddItem(string& $normalizedKey, mixed& $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |
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

### internalAddItems

Internal method to add multiple items.

```php
protected internalAddItems(array& $normalizedKeyValuePairs): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeyValuePairs` | **array** |  |

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

### internalReplaceItem

Internal method to replace an existing item.

```php
protected internalReplaceItem(string& $normalizedKey, mixed& $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |
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

### internalReplaceItems

Internal method to replace multiple existing items.

```php
protected internalReplaceItems(array& $normalizedKeyValuePairs): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeyValuePairs` | **array** |  |

**Return Value:**

Array of not stored keys



***

### checkAndSetItem

Set an item only if token matches

```php
public checkAndSetItem(mixed $token, string $key, mixed $value): bool
```

It uses the token received from getItem() to check if the item has changed before overwriting it.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **mixed** |  |
| `$key` | **string** |  |
| `$value` | **mixed** |  |

**See Also:**

* \Zend\Cache\Storage\Adapter\getItem() - * \Zend\Cache\Storage\Adapter\setItem() -

***

### internalCheckAndSetItem

Internal method to set an item only if token matches

```php
protected internalCheckAndSetItem(mixed& $token, string& $normalizedKey, mixed& $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **mixed** |  |
| `$normalizedKey` | **string** |  |
| `$value` | **mixed** |  |

**See Also:**

* \Zend\Cache\Storage\Adapter\getItem() - * \Zend\Cache\Storage\Adapter\setItem() -

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

### internalTouchItem

Internal method to reset lifetime of an item

```php
protected internalTouchItem(string& $normalizedKey): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |

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

### internalTouchItems

Internal method to reset lifetime of multiple items.

```php
protected internalTouchItems(array& $normalizedKeys): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeys` | **array** |  |

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

### internalRemoveItem

Internal method to remove an item.

```php
protected internalRemoveItem(string& $normalizedKey): bool
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |

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

### internalRemoveItems

Internal method to remove multiple items.

```php
protected internalRemoveItems(array& $normalizedKeys): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeys` | **array** |  |

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

### internalIncrementItem

Internal method to increment an item.

```php
protected internalIncrementItem(string& $normalizedKey, int& $value): int|bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |
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

### internalIncrementItems

Internal method to increment multiple items.

```php
protected internalIncrementItems(array& $normalizedKeyValuePairs): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeyValuePairs` | **array** |  |

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

### internalDecrementItem

Internal method to decrement an item.

```php
protected internalDecrementItem(string& $normalizedKey, int& $value): int|bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKey` | **string** |  |
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

### internalDecrementItems

Internal method to decrement multiple items.

```php
protected internalDecrementItems(array& $normalizedKeyValuePairs): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedKeyValuePairs` | **array** |  |

**Return Value:**

Associative array of keys and new values



***

### getCapabilities

Get capabilities of this adapter

```php
public getCapabilities(): \Zend\Cache\Storage\Capabilities
```

***

### internalGetCapabilities

Internal method to get capabilities of this adapter

```php
protected internalGetCapabilities(): \Zend\Cache\Storage\Capabilities
```

***

### normalizeKey

Validates and normalizes a key

```php
protected normalizeKey(string& $key): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

***

### normalizeKeys

Validates and normalizes multiple keys

```php
protected normalizeKeys(array& $keys): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keys` | **array** |  |

***

### normalizeKeyValuePairs

Validates and normalizes an array of key-value pairs

```php
protected normalizeKeyValuePairs(array& $keyValuePairs): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyValuePairs` | **array** |  |

yxorP::get('REQUEST')
