***

# UriComparator

Provides methods to determine if a modified URL should be considered cross-origin.

* Full name: `\GuzzleHttp\Psr7\UriComparator`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Methods

### isCrossOrigin

Determines if a modified URL should be considered cross-origin with
respect to an original URL.

```php
public static isCrossOrigin(\Psr\Http\Message\UriInterface $original, \Psr\Http\Message\UriInterface $modified): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$original` | **\Psr\Http\Message\UriInterface** |  |
| `$modified` | **\Psr\Http\Message\UriInterface** |  |

***

### computePort

```php
private static computePort(\Psr\Http\Message\UriInterface $uri): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** |  |

***

### __construct

```php
private __construct(): mixed
```

***


***

