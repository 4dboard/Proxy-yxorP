***

# SetCookie

Set-Cookie object

* Full name: `\GuzzleHttp\Cookie\SetCookie`

## Properties

### defaults

```php
private static array $defaults
```

* This property is **static**.

***

### data

```php
private array $data
```

***

## Methods

### fromString

Create a new SetCookie object from a string.

```php
public static fromString(string $cookie): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **string** | Set-Cookie header string |

***

### __construct

```php
public __construct(array $data = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** | Array of cookie data provided by a Cookie parser |

***

### __toString

```php
public __toString(): mixed
```

***

### toArray

```php
public toArray(): array
```

***

### getName

Get the cookie name.

```php
public getName(): string
```

***

### setName

Set the cookie name.

```php
public setName(string $name): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Cookie name |

***

### getValue

Get the cookie value.

```php
public getValue(): string|null
```

***

### setValue

Set the cookie value.

```php
public setValue(string $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | Cookie value |

***

### getDomain

Get the domain.

```php
public getDomain(): string|null
```

***

### setDomain

Set the domain of the cookie.

```php
public setDomain(string|null $domain): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string&#124;null** |  |

***

### getPath

Get the path.

```php
public getPath(): string
```

***

### setPath

Set the path of the cookie.

```php
public setPath(string $path): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Path of the cookie |

***

### getMaxAge

Maximum lifetime of the cookie in seconds.

```php
public getMaxAge(): int|null
```

***

### setMaxAge

Set the max-age of the cookie.

```php
public setMaxAge(int|null $maxAge): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxAge` | **int&#124;null** | Max age of the cookie in seconds |

***

### getExpires

The UNIX timestamp when the cookie Expires.

```php
public getExpires(): string|int|null
```

***

### setExpires

Set the unix timestamp for which the cookie will expire.

```php
public setExpires(int|string|null $timestamp): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timestamp` | **int&#124;string&#124;null** | Unix timestamp or any English textual datetime description. |

***

### getSecure

Get whether or not this is a secure cookie.

```php
public getSecure(): bool
```

***

### setSecure

Set whether or not the cookie is secure.

```php
public setSecure(bool $secure): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secure` | **bool** | Set to true or false if secure |

***

### getDiscard

Get whether or not this is a session cookie.

```php
public getDiscard(): bool|null
```

***

### setDiscard

Set whether or not this is a session cookie.

```php
public setDiscard(bool $discard): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$discard` | **bool** | Set to true or false if this is a session cookie |

***

### getHttpOnly

Get whether or not this is an HTTP only cookie.

```php
public getHttpOnly(): bool
```

***

### setHttpOnly

Set whether or not this is an HTTP only cookie.

```php
public setHttpOnly(bool $httpOnly): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$httpOnly` | **bool** | Set to true or false if this is HTTP only |

***

### matchesPath

Check if the cookie matches a path value.

```php
public matchesPath(string $requestPath): bool
```

A request-path path-matches a given cookie-path if at least one of
the following conditions holds:

- The cookie-path and the request-path are identical.
- The cookie-path is a prefix of the request-path, and the last
  character of the cookie-path is %x2F ("/").
- The cookie-path is a prefix of the request-path, and the first
  character of the request-path that is not included in the cookie-
  path is a %x2F ("/") character.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$requestPath` | **string** | Path to check against |

***

### matchesDomain

Check if the cookie matches a domain value.

```php
public matchesDomain(string $domain): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** | Domain to check against |

***

### isExpired

Check if the cookie is expired.

```php
public isExpired(): bool
```

***

### validate

Check if the cookie is valid according to RFC 6265.

```php
public validate(): bool|string
```

**Return Value:**

Returns true if valid or an error message if invalid



***


***

