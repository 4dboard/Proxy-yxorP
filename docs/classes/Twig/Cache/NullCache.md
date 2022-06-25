***

# NullCache

Implements a no-cache strategy.

* Full name: `\Twig\Cache\NullCache`
* This class implements:
  [`\Twig\Cache\CacheInterface`](./CacheInterface.md)

## Methods

### generateKey

Generates a cache key for the given template class name.

```php
public generateKey(mixed $name, mixed $className): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The template name |
| `$className` | **mixed** | The template class name |

***

### write

Writes the compiled template to cache.

```php
public write(mixed $key, mixed $content): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** | The cache key |
| `$content` | **mixed** | The template representation as a PHP class |

***

### load

Loads a template from the cache.

```php
public load(mixed $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** | The cache key |

***

### getTimestamp

Returns the modification timestamp of a key.

```php
public getTimestamp(mixed $key): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** | The cache key |

yxorP::get('REQUEST')
