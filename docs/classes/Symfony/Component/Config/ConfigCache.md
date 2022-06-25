***

# ConfigCache

ConfigCache caches arbitrary content in files on disk.

When in debug mode, those metadata resources that implement
\Symfony\Component\Config\Resource\SelfCheckingResourceInterface will be used to check cache freshness.

During a transition period, also instances of \Symfony\Component\Config\Resource\ResourceInterface will be checked by
means of the isFresh() method. This behaviour is deprecated since 2.8 and will be removed in 3.0.

* Full name: `\Symfony\Component\Config\ConfigCache`
* Parent class: [`\Symfony\Component\Config\ResourceCheckerConfigCache`](./ResourceCheckerConfigCache.md)

## Properties

### debug

```php
private $debug
```

***

## Methods

### __construct

```php
public __construct(string $file, bool $debug): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | The absolute cache path |
| `$debug` | **bool** | Whether debugging is enabled or not |

***

### __toString

Gets the cache file path.

```php
public __toString(): string
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Return Value:**

The cache file path



***

### isFresh

Checks if the cache is still fresh.

```php
public isFresh(): bool
```

This implementation always returns true when debug is off and the cache file exists.

**Return Value:**

true if the cache is fresh, false otherwise



***

## Inherited methods

### __construct

```php
public __construct(string $file, \Symfony\Component\Config\ResourceCheckerInterface[] $resourceCheckers = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | The absolute cache path |
| `$resourceCheckers` | **
\Symfony\Component\Config\ResourceCheckerInterface[]** | The ResourceCheckers to use for the freshness check |

***

### getPath

Gets the cache file path.

```php
public getPath(): string
```

**Return Value:**

The cache file path



***

### isFresh

Checks if the cache is still fresh.

```php
public isFresh(): bool
```

This implementation will make a decision solely based on the ResourceCheckers passed in the constructor.

The first ResourceChecker that supports a given resource is considered authoritative. Resources with no matching
ResourceChecker will silently be ignored and considered fresh.

**Return Value:**

true if the cache is fresh, false otherwise



***

### write

Writes cache.

```php
public write(string $content, \Symfony\Component\Config\Resource\ResourceInterface[] $metadata = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** | The content to write in the cache |
| `$metadata` | **\Symfony\Component\Config\Resource\ResourceInterface[]** | An array of metadata |

***

### getMetaFile

Gets the meta file path.

```php
private getMetaFile(): string
```

**Return Value:**

The meta file path yxorP::get('REQUEST')
