***

# UriNormalizer

Provides methods to normalize and compare URIs.

* Full name: `\GuzzleHttp\Psr7\UriNormalizer`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

**See Also:**

* https://tools.ietf.org/html/rfc3986#section-6 -

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`PRESERVING_NORMALIZATIONS`|public| |self::CAPITALIZE_PERCENT_ENCODING | self::DECODE_UNRESERVED_CHARACTERS | self::CONVERT_EMPTY_PATH | self::REMOVE_DEFAULT_HOST | self::REMOVE_DEFAULT_PORT | self::REMOVE_DOT_SEGMENTS|
|`CAPITALIZE_PERCENT_ENCODING`|public| |1|
|`DECODE_UNRESERVED_CHARACTERS`|public| |2|
|`CONVERT_EMPTY_PATH`|public| |4|
|`REMOVE_DEFAULT_HOST`|public| |8|
|`REMOVE_DEFAULT_PORT`|public| |16|
|`REMOVE_DOT_SEGMENTS`|public| |32|
|`REMOVE_DUPLICATE_SLASHES`|public| |64|
|`SORT_QUERY_PARAMETERS`|public| |128|

## Methods

### normalize

Returns a normalized URI.

```php
public static normalize(\Psr\Http\Message\UriInterface $uri, int $flags = self::PRESERVING_NORMALIZATIONS): \Psr\Http\Message\UriInterface
```

The scheme and host component are already normalized to lowercase per PSR-7 UriInterface.
This methods adds additional normalizations that can be configured with the $flags parameter.

PSR-7 UriInterface cannot distinguish between an empty component and a missing component as
getQuery(), getFragment() etc. always return a string. This means the URIs "/?#" and "/" are
treated equivalent which is not necessarily true according to RFC 3986. But that difference
is highly uncommon in reality. So this potential normalization is implied in PSR-7 as well.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** | The URI to normalize |
| `$flags` | **int** | A bitmask of normalizations to apply, see constants |

**See Also:**

* https://tools.ietf.org/html/rfc3986#section-6.2 -

***

### isEquivalent

Whether two URIs can be considered equivalent.

```php
public static isEquivalent(\Psr\Http\Message\UriInterface $uri1, \Psr\Http\Message\UriInterface $uri2, int $normalizations = self::PRESERVING_NORMALIZATIONS): bool
```

Both URIs are normalized automatically before comparison with the given $normalizations bitmask. The method also
accepts relative URI references and returns true when they are equivalent. This of course assumes they will be
resolved against the same base URI. If this is not the case, determination of equivalence or difference of
relative references does not mean anything.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri1` | **\Psr\Http\Message\UriInterface** | An URI to compare |
| `$uri2` | **\Psr\Http\Message\UriInterface** | An URI to compare |
| `$normalizations` | **int** | A bitmask of normalizations to apply, see constants |

**See Also:**

* https://tools.ietf.org/html/rfc3986#section-6.1 -

***

### capitalizePercentEncoding

```php
private static capitalizePercentEncoding(\Psr\Http\Message\UriInterface $uri): \Psr\Http\Message\UriInterface
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** |  |

***

### decodeUnreservedCharacters

```php
private static decodeUnreservedCharacters(\Psr\Http\Message\UriInterface $uri): \Psr\Http\Message\UriInterface
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

