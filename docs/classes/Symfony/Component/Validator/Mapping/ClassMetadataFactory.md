***

# ClassMetadataFactory

Alias of {@link LazyLoadingMetadataFactory}.

* Full name: `\Symfony\Component\Validator\Mapping\ClassMetadataFactory`
* Parent
  class: [`\Symfony\Component\Validator\Mapping\Factory\LazyLoadingMetadataFactory`](./Factory/LazyLoadingMetadataFactory.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Inherited methods

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
