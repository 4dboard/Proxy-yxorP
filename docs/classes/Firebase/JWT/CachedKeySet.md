***

# CachedKeySet

* Full name: `\Firebase\JWT\CachedKeySet`
* This class implements:
  [`\ArrayAccess`](../../ArrayAccess.md)

## Properties

### jwksUri

```php
private string $jwksUri
```

***

### httpClient

```php
private \Psr\Http\Client\ClientInterface $httpClient
```

***

### httpFactory

```php
private \Psr\Http\Message\RequestFactoryInterface $httpFactory
```

***

### cache

```php
private \Psr\Cache\CacheItemPoolInterface $cache
```

***

### expiresAfter

```php
private ?int $expiresAfter
```

***

### cacheItem

```php
private ?\Psr\Cache\CacheItemInterface $cacheItem
```

***

### keySet

```php
private array&lt;string,\Firebase\JWT\Key&gt; $keySet
```

***

### cacheKey

```php
private string $cacheKey
```

***

### cacheKeyPrefix

```php
private string $cacheKeyPrefix
```

***

### maxKeyLength

```php
private int $maxKeyLength
```

***

### rateLimit

```php
private bool $rateLimit
```

***

### rateLimitCacheKey

```php
private string $rateLimitCacheKey
```

***

### maxCallsPerMinute

```php
private int $maxCallsPerMinute
```

***

### defaultAlg

```php
private string|null $defaultAlg
```

***

## Methods

### __construct

```php
public __construct(string $jwksUri, \Psr\Http\Client\ClientInterface $httpClient, \Psr\Http\Message\RequestFactoryInterface $httpFactory, \Psr\Cache\CacheItemPoolInterface $cache, int $expiresAfter = null, bool $rateLimit = false, string $defaultAlg = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$jwksUri` | **string** |  |
| `$httpClient` | **\Psr\Http\Client\ClientInterface** |  |
| `$httpFactory` | **\Psr\Http\Message\RequestFactoryInterface** |  |
| `$cache` | **\Psr\Cache\CacheItemPoolInterface** |  |
| `$expiresAfter` | **int** |  |
| `$rateLimit` | **bool** |  |
| `$defaultAlg` | **string** |  |

***

### offsetGet

```php
public offsetGet(string $keyId): \Firebase\JWT\Key
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyId` | **string** |  |

***

### offsetExists

```php
public offsetExists(string $keyId): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyId` | **string** |  |

***

### offsetSet

```php
public offsetSet(string $offset, \Firebase\JWT\Key $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **string** |  |
| `$value` | **\Firebase\JWT\Key** |  |

***

### offsetUnset

```php
public offsetUnset(string $offset): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **string** |  |

***

### keyIdExists

```php
private keyIdExists(string $keyId): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyId` | **string** |  |

***

### rateLimitExceeded

```php
private rateLimitExceeded(): bool
```

***

### getCacheItem

```php
private getCacheItem(): \Psr\Cache\CacheItemInterface
```

***

### setCacheKeys

```php
private setCacheKeys(): void
```

***


***

