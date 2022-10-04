***

# FileCookieJar

Persists non-session cookies using a JSON formatted file

* Full name: `\GuzzleHttp\Cookie\FileCookieJar`
* Parent class: [`\GuzzleHttp\Cookie\CookieJar`](./CookieJar.md)

## Properties

### filename

```php
private string $filename
```

***

### storeSessionCookies

```php
private bool $storeSessionCookies
```

***

## Methods

### __construct

Create a new FileCookieJar object

```php
public __construct(string $cookieFile, bool $storeSessionCookies = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookieFile` | **string** | File to store the cookie data |
| `$storeSessionCookies` | **bool** | Set to true to store session cookies<br />in the cookie jar. |

***

### __destruct

Saves the file when shutting down

```php
public __destruct(): mixed
```

***

### save

Saves the cookies to a file.

```php
public save(string $filename): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | File to save |

***

### load

Load cookies from a JSON formatted file.

```php
public load(string $filename): void
```

Old cookies are kept unless overwritten by newly loaded ones.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | Cookie file to load. |

***

## Inherited methods

### __construct

```php
public __construct(bool $strictMode = false, array $cookieArray = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strictMode` | **bool** | Set to true to throw exceptions when invalid<br />cookies are added to the cookie jar. |
| `$cookieArray` | **array** | Array of SetCookie objects or a hash of<br />arrays that can be used with the SetCookie<br />constructor |

***

### fromArray

Create a new Cookie jar from an associative array and domain.

```php
public static fromArray(array $cookies, string $domain): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookies` | **array** | Cookies to create the jar from |
| `$domain` | **string** | Domain to set the cookies to |

***

### shouldPersist

Evaluate if this cookie should be persisted to storage
that survives between requests.

```php
public static shouldPersist(\GuzzleHttp\Cookie\SetCookie $cookie, bool $allowSessionCookies = false): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **\GuzzleHttp\Cookie\SetCookie** | Being evaluated. |
| `$allowSessionCookies` | **bool** | If we should persist session cookies |

***

### getCookieByName

Finds and returns the cookie based on the name

```php
public getCookieByName(string $name): \GuzzleHttp\Cookie\SetCookie|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | cookie name to search for |

**Return Value:**

cookie that was found or null if not found



***

### toArray

Converts the cookie jar to an array.

```php
public toArray(): array
```

***

### clear

Remove cookies currently held in the cookie jar.

```php
public clear(?string $domain = null, ?string $path = null, ?string $name = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **?string** | Clears cookies matching a domain |
| `$path` | **?string** | Clears cookies matching a domain and path |
| `$name` | **?string** | Clears cookies matching a domain, path, and name |

***

### clearSessionCookies

Discard all sessions cookies.

```php
public clearSessionCookies(): void
```

***

### setCookie

Sets a cookie in the cookie jar.

```php
public setCookie(\GuzzleHttp\Cookie\SetCookie $cookie): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **\GuzzleHttp\Cookie\SetCookie** | Cookie to set. |

**Return Value:**

Returns true on success or false on failure



***

### count

```php
public count(): int
```

***

### getIterator

```php
public getIterator(): \ArrayIterator&lt;int,\GuzzleHttp\Cookie\SetCookie&gt;
```

***

### extractCookies

Extract cookies from an HTTP response and store them in the CookieJar.

```php
public extractCookies(\Psr\Http\Message\RequestInterface $request, \Psr\Http\Message\ResponseInterface $response): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** | Request that was sent |
| `$response` | **\Psr\Http\Message\ResponseInterface** | Response that was received |

***

### getCookiePathFromRequest

Computes cookie path following RFC 6265 section 5.1.4

```php
private getCookiePathFromRequest(\Psr\Http\Message\RequestInterface $request): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |

**See Also:**

* https://tools.ietf.org/html/rfc6265#section-5.1.4 -

***

### withCookieHeader

Create a request with added cookie headers.

```php
public withCookieHeader(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\RequestInterface
```

If no matching cookies are found in the cookie jar, then no Cookie
header is added to the request and the same request is returned.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** | Request object to modify. |

**Return Value:**

returns the modified request.



***

### removeCookieIfEmpty

If a cookie already exists and the server asks to set it again with a
null value, the cookie must be deleted.

```php
private removeCookieIfEmpty(\GuzzleHttp\Cookie\SetCookie $cookie): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **\GuzzleHttp\Cookie\SetCookie** |  |

***


***

