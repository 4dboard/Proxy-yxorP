***

# MemcacheOptions

These are options specific to the Memcache adapter

* Full name: `\Zend\Cache\Storage\Adapter\MemcacheOptions`
* Parent class: [`\Zend\Cache\Storage\Adapter\AdapterOptions`](./AdapterOptions.md)

## Properties

### namespaceSeparator

The namespace separator

```php
protected string $namespaceSeparator
```

***

### resourceManager

The memcache resource manager

```php
protected null|\Zend\Cache\Storage\Adapter\MemcacheResourceManager $resourceManager
```

***

### resourceId

The resource id of the resource manager

```php
protected string $resourceId
```

***

### compression

Enable compression when data is written

```php
protected bool $compression
```

***

## Methods

### setNamespace

Set namespace.

```php
public setNamespace(mixed $namespace): \Zend\Cache\Storage\Adapter\AdapterOptions
```

It can't be longer than 128 characters.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **mixed** |  |

**See Also:**

* \Zend\Cache\Storage\Adapter\AdapterOptions::setNamespace() - * \Zend\Cache\Storage\Adapter\MemcacheOptions::
  setPrefixKey() -

***

### setNamespaceSeparator

Set namespace separator

```php
public setNamespaceSeparator(string $namespaceSeparator): \Zend\Cache\Storage\Adapter\MemcacheOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespaceSeparator` | **string** |  |

***

### getNamespaceSeparator

Get namespace separator

```php
public getNamespaceSeparator(): string
```

***

### setResourceManager

Set the memcache resource manager to use

```php
public setResourceManager(null|\Zend\Cache\Storage\Adapter\MemcacheResourceManager $resourceManager = null): \Zend\Cache\Storage\Adapter\MemcacheOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceManager` | **null&#124;\Zend\Cache\Storage\Adapter\MemcacheResourceManager** |  |

***

### getResourceManager

Get the memcache resource manager

```php
public getResourceManager(): \Zend\Cache\Storage\Adapter\MemcacheResourceManager
```

***

### getResourceId

Get the memcache resource id

```php
public getResourceId(): string
```

***

### setResourceId

Set the memcache resource id

```php
public setResourceId(string $resourceId): \Zend\Cache\Storage\Adapter\MemcacheOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **string** |  |

***

### getCompression

Is compressed writes turned on?

```php
public getCompression(): bool
```

***

### setCompression

Set whether compressed writes are turned on or not

```php
public setCompression(bool $compression): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compression` | **bool** |  |

***

### setServers

Sets a list of memcache servers to add on initialize

```php
public setServers(string|array $servers): \Zend\Cache\Storage\Adapter\MemcacheOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$servers` | **string&#124;array** | list of servers |

***

### getServers

Get Servers

```php
public getServers(): array
```

***

### setAutoCompressThreshold

Set compress threshold

```php
public setAutoCompressThreshold(int|string|array|\ArrayAccess|null $threshold): \Zend\Cache\Storage\Adapter\MemcacheOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$threshold` | **int&#124;string&#124;array&#124;\ArrayAccess&#124;null** |  |

***

### getAutoCompressThreshold

Get compress threshold

```php
public getAutoCompressThreshold(): int|null
```

***

### setAutoCompressMinSavings

Set compress min savings option

```php
public setAutoCompressMinSavings(float|string|null $minSavings): \Zend\Cache\Storage\Adapter\MemcacheOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$minSavings` | **float&#124;string&#124;null** |  |

***

### getAutoCompressMinSavings

Get compress min savings

```php
public getAutoCompressMinSavings(): \Zend\Cache\Exception\RuntimeException
```

***

### setServerDefaults

Set default server values

```php
public setServerDefaults(array $serverDefaults): \Zend\Cache\Storage\Adapter\MemcacheOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serverDefaults` | **array** |  |

***

### getServerDefaults

Get default server values

```php
public getServerDefaults(): array
```

***

### setFailureCallback

Set callback for server connection failures

```php
public setFailureCallback(callable $callback): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** |  |

***

### getFailureCallback

Get callback for server connection failures

```php
public getFailureCallback(): callable
```

***

## Inherited methods

### setAdapter

Adapter using this instance

```php
public setAdapter(\Zend\Cache\Storage\StorageInterface|null $adapter = null): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **\Zend\Cache\Storage\StorageInterface&#124;null** |  |

***

### setKeyPattern

Set key pattern

```php
public setKeyPattern(null|string $keyPattern): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyPattern` | **null&#124;string** |  |

***

### getKeyPattern

Get key pattern

```php
public getKeyPattern(): string
```

***

### setNamespace

Set namespace.

```php
public setNamespace(string $namespace): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |

***

### getNamespace

Get namespace

```php
public getNamespace(): string
```

***

### setReadable

Enable/Disable reading data from cache.

```php
public setReadable(bool $readable): \Zend\Cache\Storage\Adapter\AbstractAdapter
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$readable` | **bool** |  |

***

### getReadable

If reading data from cache enabled.

```php
public getReadable(): bool
```

***

### setTtl

Set time to live.

```php
public setTtl(int|float $ttl): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ttl` | **int&#124;float** |  |

***

### getTtl

Get time to live.

```php
public getTtl(): float
```

***

### setWritable

Enable/Disable writing data to cache.

```php
public setWritable(bool $writable): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$writable` | **bool** |  |

***

### getWritable

If writing data to cache enabled.

```php
public getWritable(): bool
```

***

### triggerOptionEvent

Triggers an option event if this options instance has a connection to an adapter implements EventsCapableInterface.

```php
protected triggerOptionEvent(string $optionName, mixed $optionValue): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$optionName` | **string** |  |
| `$optionValue` | **mixed** |  |

***

### normalizeTtl

Validates and normalize a TTL.

```php
protected normalizeTtl(int|float& $ttl): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ttl` | **int&#124;float** |  |

***

### __construct

Constructor

```php
public __construct(array|\Traversable|null $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;null** |  |

***

### setFromArray

Set one or more configuration properties

```php
public setFromArray(array|\Traversable|\Zend\Stdlib\AbstractOptions $options): \Zend\Stdlib\AbstractOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Stdlib\AbstractOptions** |  |

**Return Value:**

Provides fluent interface



***

### toArray

Cast to array

```php
public toArray(): array
```

***

### __set

Set a configuration property

```php
public __set(string $key, mixed $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__set() -

***

### __get

Get a configuration property

```php
public __get(string $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__get() -

***

### __isset

Test if a configuration property is null

```php
public __isset(string $key): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__isset() -

***

### __unset

Set a configuration property to NULL

```php
public __unset(string $key): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__unset() -

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
