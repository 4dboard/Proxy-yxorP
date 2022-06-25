***

# Twig_Cache_Filesystem

Implements a cache on the filesystem.

* Full name: `\Twig_Cache_Filesystem`
* Parent class: [`\Twig\Cache\FilesystemCache`](./Twig/Cache/FilesystemCache.md)

## Inherited methods

### __construct

```php
public __construct(string $directory, int $options): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **string** | The root cache directory |
| `$options` | **int** | A set of options |

***

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
