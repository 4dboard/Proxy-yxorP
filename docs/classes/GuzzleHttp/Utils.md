***

# Utils

* Full name: `\GuzzleHttp\Utils`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Methods

### describeType

Debug function used to describe the provided value type and class.

```php
public static describeType(mixed $input): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |

**Return Value:**

Returns a string containing the type of the variable and
if a class is provided, the class name.



***

### headersFromLines

Parses an array of header lines into an associative array of headers.

```php
public static headersFromLines(iterable $lines): array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lines` | **iterable** | Header lines array of strings in the following<br />format: &quot;Name: Value&quot; |

***

### debugResource

Returns a debug stream based on the provided variable.

```php
public static debugResource(mixed $value = null): resource
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | Optional value |

***

### chooseHandler

Chooses and creates a default handler to use based on the environment.

```php
public static chooseHandler(): callable
```

The returned handler is not wrapped by any default middlewares.

* This method is **static**.

***

### defaultUserAgent

Get the default User-Agent string to use with Guzzle.

```php
public static defaultUserAgent(): string
```

* This method is **static**.

***

### defaultCaBundle

Returns the default cacert bundle for the current system.

```php
public static defaultCaBundle(): string
```

First, the openssl.cafile and curl.cainfo php.ini settings are checked.
If those settings are not configured, then the common locations for
bundles found on Red Hat, CentOS, Fedora, Ubuntu, Debian, FreeBSD, OS X
and Windows are checked. If any of these file locations are found on
disk, they will be utilized.

Note: the result of this function is cached for subsequent calls.

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### normalizeHeaderKeys

Creates an associative array of lowercase header names to the actual
header casing.

```php
public static normalizeHeaderKeys(array $headers): array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** |  |

***

### isHostInNoProxy

Returns true if the provided host matches any of the no proxy areas.

```php
public static isHostInNoProxy(string $host, string[] $noProxyArray): bool
```

This method will strip a port from the host if it is present. Each pattern
can be matched with an exact match (e.g., "foo.com" == "foo.com") or a
partial match: (e.g., "foo.com" == "baz.foo.com" and ".foo.com" ==
"baz.foo.com", but ".foo.com" != "foo.com").

Areas are matched in the following cases:

1. "*" (without quotes) always matches any hosts.
2. An exact match.
3. The area starts with "." and the area is the last part of the host. e.g.
   '.mit.edu' will match any host that ends with '.mit.edu'.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **string** | Host to check against the patterns. |
| `$noProxyArray` | **string[]** | An array of host patterns. |

***

### jsonDecode

Wrapper for json_decode that throws when an error occurs.

```php
public static jsonDecode(string $json, bool $assoc = false, int $depth = 512, int $options): object|array|string|int|float|bool|null
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$json` | **string** | JSON data to parse |
| `$assoc` | **bool** | When true, returned objects will be converted<br />into associative arrays. |
| `$depth` | **int** | User specified recursion depth. |
| `$options` | **int** | Bitmask of JSON decode options. |

**See Also:**

* https://www.php.net/manual/en/function.json-decode.php -

***

### jsonEncode

Wrapper for JSON encoding that throws when an error occurs.

```php
public static jsonEncode(mixed $value, int $options, int $depth = 512): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value being encoded |
| `$options` | **int** | JSON encode option bitmask |
| `$depth` | **int** | Set the maximum depth. Must be greater than zero. |

**See Also:**

* https://www.php.net/manual/en/function.json-encode.php -

***

### idnToAsci

```php
private static idnToAsci(string $domain, int $options, ?array& $info = []): string|false
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** |  |
| `$options` | **int** |  |
| `$info` | **?array** |  |

***


***

