***

# DoctrineCache

Adapts a Doctrine cache to a CacheInterface.

* Full name: `\Symfony\Component\Validator\Mapping\Cache\DoctrineCache`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\Symfony\Component\Validator\Mapping\Cache\CacheInterface`](./CacheInterface.md)
* This class is a **Final class**

## Properties

### cache

```php
private $cache
```

***

## Methods

### __construct

```php
public __construct(\Doctrine\Common\Cache\Cache $cache): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\Doctrine\Common\Cache\Cache** |  |

***

### setCache

```php
public setCache(\Doctrine\Common\Cache\Cache $cache): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\Doctrine\Common\Cache\Cache** |  |

***

### has

Returns whether metadata for the given class exists in the cache.

```php
public has(mixed $class): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |

***

### read

Returns the metadata for the given class from the cache.

```php
public read(mixed $class): \Symfony\Component\Validator\Mapping\ClassMetadata|false
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** | Class Name |

**Return Value:**

A ClassMetadata instance or false on miss



***

### write

Stores a class metadata in the cache.

```php
public write(\Symfony\Component\Validator\Mapping\ClassMetadata $metadata): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Symfony\Component\Validator\Mapping\ClassMetadata** |  |

yxorP::get('REQUEST')
