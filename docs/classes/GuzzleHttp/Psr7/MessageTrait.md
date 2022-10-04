***

# MessageTrait

Trait implementing functionality common to requests and responses.

* Full name: `\GuzzleHttp\Psr7\MessageTrait`

## Properties

### headers

```php
private array&lt;string,string[]&gt; $headers
```

***

### headerNames

```php
private array&lt;string,string&gt; $headerNames
```

***

### protocol

```php
private string $protocol
```

***

### stream

```php
private \Psr\Http\Message\StreamInterface|null $stream
```

***

## Methods

### getProtocolVersion

```php
public getProtocolVersion(): string
```

***

### withProtocolVersion

```php
public withProtocolVersion(mixed $version): \Psr\Http\Message\MessageInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **mixed** |  |

***

### getHeaders

```php
public getHeaders(): array
```

***

### hasHeader

```php
public hasHeader(mixed $header): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |

***

### getHeader

```php
public getHeader(mixed $header): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |

***

### getHeaderLine

```php
public getHeaderLine(mixed $header): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |

***

### withHeader

```php
public withHeader(mixed $header, mixed $value): \Psr\Http\Message\MessageInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |
| `$value` | **mixed** |  |

***

### withAddedHeader

```php
public withAddedHeader(mixed $header, mixed $value): \Psr\Http\Message\MessageInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |
| `$value` | **mixed** |  |

***

### withoutHeader

```php
public withoutHeader(mixed $header): \Psr\Http\Message\MessageInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |

***

### getBody

```php
public getBody(): \Psr\Http\Message\StreamInterface
```

***

### withBody

```php
public withBody(\Psr\Http\Message\StreamInterface $body): \Psr\Http\Message\MessageInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$body` | **\Psr\Http\Message\StreamInterface** |  |

***

### setHeaders

```php
private setHeaders(array&lt;string|int,string|string[]&gt; $headers): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array<string&#124;int,string&#124;string[]>** |  |

***

### normalizeHeaderValue

```php
private normalizeHeaderValue(mixed $value): string[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### trimAndValidateHeaderValues

Trims whitespace from the header values.

```php
private trimAndValidateHeaderValues(array $values): string[]
```

Spaces and tabs ought to be excluded by parsers when extracting the field value from a header field.

header-field = field-name ":" OWS field-value OWS
OWS = *( SP / HTAB )

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** | Header values |

**Return Value:**

Trimmed header values

**See Also:**

* https://tools.ietf.org/html/rfc7230#section-3.2.4 -

***

### assertHeader

```php
private assertHeader(mixed $header): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |

**See Also:**

* https://tools.ietf.org/html/rfc7230#section-3.2 -

***

### assertValue

```php
private assertValue(string $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

**See Also:**

* https://tools.ietf.org/html/rfc7230#section-3.2 - field-value = *( field-content / obs-fold )
  field-content = field-vchar [ 1*( SP / HTAB ) field-vchar ]
  field-vchar = VCHAR / obs-text
  VCHAR = %x21-7E
  obs-text = %x80-FF
  obs-fold = CRLF 1*( SP / HTAB )

***

***


