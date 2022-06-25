***

# PsrCacheAdapter

* Full name: `\Metadata\Cache\PsrCacheAdapter`
* This class implements:
  [`\Metadata\Cache\CacheInterface`](./CacheInterface.md)

## Properties

### prefix

```php
private $prefix
```

***

### pool

```php
private $pool
```

***

### lastItem

```php
private $lastItem
```

***

## Methods

### __construct

```php
public __construct(mixed $prefix, \Psr\Cache\CacheItemPoolInterface $pool): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **mixed** |  |
| `$pool` | **\Psr\Cache\CacheItemPoolInterface** |  |

***

### loadClassMetadataFromCache

Loads a class metadata instance from the cache

```php
public loadClassMetadataFromCache(\ReflectionClass $class): \Metadata\ClassMetadata
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |

***

### putClassMetadataInCache

Puts a class metadata instance into the cache

```php
public putClassMetadataInCache(\Metadata\ClassMetadata $metadata): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Metadata\ClassMetadata** |  |

***

### evictClassMetadataFromCache

Evicts the class metadata for the given class from the cache.

```php
public evictClassMetadataFromCache(\ReflectionClass $class): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |

yxorP::get('REQUEST')
