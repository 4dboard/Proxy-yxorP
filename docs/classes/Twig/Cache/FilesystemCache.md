***

# FilesystemCache

Implements a cache on the filesystem.

* Full name: `\Twig\Cache\FilesystemCache`
* This class implements:
  [`\Twig\Cache\CacheInterface`](./CacheInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`FORCE_BYTECODE_INVALIDATION`|public| |1|

## Properties

### directory

```php
private $directory
```

***

### options

```php
private $options
```

***

## Methods

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
