***

# LazyLoadingMetadataFactory

Creates new {@link ClassMetadataInterface} instances.

Whenever {@link} is called for the first time with a given class name or object of that class, a new metadata instance
is created and returned. On subsequent requests for the same class, the same metadata instance will be returned.

You can optionally pass a {@link} instance to the constructor. Whenever a new metadata instance is created, it is passed
to the loader, which can configure the metadata based on configuration loaded from the filesystem or a database. If you
want to use multiple loaders, wrap them in a {@link}.

You can also optionally pass a {@link} instance to the constructor. This cache will be used for persisting the generated
metadata between multiple PHP requests.

* Full name: `\Symfony\Component\Validator\Mapping\Factory\LazyLoadingMetadataFactory`
* This class implements:
  [`\Symfony\Component\Validator\Mapping\Factory\MetadataFactoryInterface`](./MetadataFactoryInterface.md)

## Properties

### loader

```php
protected $loader
```

***

### cache

```php
protected $cache
```

***

### loadedClasses

The loaded metadata, indexed by class name.

```php
protected \Symfony\Component\Validator\Mapping\ClassMetadata[] $loadedClasses
```

***

## Methods

### __construct

Creates a new metadata factory.

```php
public __construct(\Symfony\Component\Validator\Mapping\Loader\LoaderInterface|null $loader = null, \Symfony\Component\Validator\Mapping\Cache\CacheInterface|null $cache = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loader` | **
\Symfony\Component\Validator\Mapping\Loader\LoaderInterface&#124;null** | The loader for configuring new metadata |
| `$cache` | **
\Symfony\Component\Validator\Mapping\Cache\CacheInterface&#124;null** | The cache for persisting metadata<br />between multiple PHP requests |

***

### getMetadataFor

{@inheritdoc}

```php
public getMetadataFor(mixed $value): mixed
```

If the method was called with the same class name (or an object of that class) before, the same metadata instance is
returned.

If the factory was configured with a cache, this method will first look for an existing metadata instance in the cache.
If an existing instance is found, it will be returned without further ado.

Otherwise, a new metadata instance is created. If the factory was configured with a loader, the metadata is passed to
the {@link} method for further configuration. At last, the new object is returned.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### mergeConstraints

```php
private mergeConstraints(\Symfony\Component\Validator\Mapping\ClassMetadata $metadata): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Symfony\Component\Validator\Mapping\ClassMetadata** |  |

***

### hasMetadataFor

{@inheritdoc}

```php
public hasMetadataFor(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

yxorP::get('REQUEST')
