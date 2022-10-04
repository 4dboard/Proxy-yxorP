***

# Response

PSR-7 response implementation.

* Full name: `\GuzzleHttp\Psr7\Response`
* This class implements:
  [`\Psr\Http\Message\ResponseInterface`](../../Psr/Http/Message/ResponseInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`PHRASES`|private| |[100 =&gt; &#039;Continue&#039;, 101 =&gt; &#039;Switching Protocols&#039;, 102 =&gt; &#039;Processing&#039;, 200 =&gt; &#039;OK&#039;, 201 =&gt; &#039;Created&#039;, 202 =&gt; &#039;Accepted&#039;, 203 =&gt; &#039;Non-Authoritative Information&#039;, 204 =&gt; &#039;No Content&#039;, 205 =&gt; &#039;Reset Content&#039;, 206 =&gt; &#039;Partial Content&#039;, 207 =&gt; &#039;Multi-status&#039;, 208 =&gt; &#039;Already Reported&#039;, 300 =&gt; &#039;Multiple Choices&#039;, 301 =&gt; &#039;Moved Permanently&#039;, 302 =&gt; &#039;Found&#039;, 303 =&gt; &#039;See Other&#039;, 304 =&gt; &#039;Not Modified&#039;, 305 =&gt; &#039;Use Proxy&#039;, 306 =&gt; &#039;Switch Proxy&#039;, 307 =&gt; &#039;Temporary Redirect&#039;, 308 =&gt; &#039;Permanent Redirect&#039;, 400 =&gt; &#039;Bad Request&#039;, 401 =&gt; &#039;Unauthorized&#039;, 402 =&gt; &#039;Payment Required&#039;, 403 =&gt; &#039;Forbidden&#039;, 404 =&gt; &#039;Not Found&#039;, 405 =&gt; &#039;Method Not Allowed&#039;, 406 =&gt; &#039;Not Acceptable&#039;, 407 =&gt; &#039;Proxy Authentication Required&#039;, 408 =&gt; &#039;Request Time-out&#039;, 409 =&gt; &#039;Conflict&#039;, 410 =&gt; &#039;Gone&#039;, 411 =&gt; &#039;Length Required&#039;, 412 =&gt; &#039;Precondition Failed&#039;, 413 =&gt; &#039;Request Entity Too Large&#039;, 414 =&gt; &#039;Request-URI Too Large&#039;, 415 =&gt; &#039;Unsupported Media Type&#039;, 416 =&gt; &#039;Requested range not satisfiable&#039;, 417 =&gt; &#039;Expectation Failed&#039;, 418 =&gt; &#039;I\&#039;m a teapot&#039;, 422 =&gt; &#039;Unprocessable Entity&#039;, 423 =&gt; &#039;Locked&#039;, 424 =&gt; &#039;Failed Dependency&#039;, 425 =&gt; &#039;Unordered Collection&#039;, 426 =&gt; &#039;Upgrade Required&#039;, 428 =&gt; &#039;Precondition Required&#039;, 429 =&gt; &#039;Too Many Requests&#039;, 431 =&gt; &#039;Request Header Fields Too Large&#039;, 451 =&gt; &#039;Unavailable For Legal Reasons&#039;, 500 =&gt; &#039;Internal Server Error&#039;, 501 =&gt; &#039;Not Implemented&#039;, 502 =&gt; &#039;Bad Gateway&#039;, 503 =&gt; &#039;Service Unavailable&#039;, 504 =&gt; &#039;Gateway Time-out&#039;, 505 =&gt; &#039;HTTP Version not supported&#039;, 506 =&gt; &#039;Variant Also Negotiates&#039;, 507 =&gt; &#039;Insufficient Storage&#039;, 508 =&gt; &#039;Loop Detected&#039;, 510 =&gt; &#039;Not Extended&#039;, 511 =&gt; &#039;Network Authentication Required&#039;]|

## Properties

### reasonPhrase

```php
private string $reasonPhrase
```

***

### statusCode

```php
private int $statusCode
```

***

## Methods

### __construct

```php
public __construct(int $status = 200, array&lt;string,string|string[]&gt; $headers = [], string|resource|\Psr\Http\Message\StreamInterface|null $body = null, string $version = &#039;1.1&#039;, string|null $reason = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **int** | Status code |
| `$headers` | **array<string,string&#124;string[]>** | Response headers |
| `$body` | **string&#124;resource&#124;\Psr\Http\Message\StreamInterface&#124;null** | Response body |
| `$version` | **string** | Protocol version |
| `$reason` | **string&#124;null** | Reason phrase (when empty a default will be used based on the status code) |

***

### getStatusCode

Gets the response status code.

```php
public getStatusCode(): int
```

The status code is a 3-digit integer result code of the server's attempt
to understand and satisfy the request.

**Return Value:**

Status code.



***

### getReasonPhrase

Gets the response reason phrase associated with the status code.

```php
public getReasonPhrase(): string
```

Because a reason phrase is not a required element in a response
status line, the reason phrase value MAY be null. Implementations MAY
choose to return the default RFC 7231 recommended reason phrase (or those
listed in the IANA HTTP Status Code Registry) for the response's
status code.

**Return Value:**

Reason phrase; must return an empty string if none present.



***

### withStatus

Return an instance with the specified status code and, optionally, reason phrase.

```php
public withStatus(mixed $code, mixed $reasonPhrase = &#039;&#039;): static
```

If no reason phrase is specified, implementations MAY choose to default
to the RFC 7231 or IANA recommended reason phrase for the response's
status code.

This method MUST be implemented in such a way as to retain the
immutability of the message, and MUST return an instance that has the
updated status and reason phrase.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** | The 3-digit integer result code to set. |
| `$reasonPhrase` | **mixed** | The reason phrase to use with the<br />provided status code; if none is provided, implementations MAY<br />use the defaults as suggested in the HTTP specification. |

***

### assertStatusCodeIsInteger

```php
private assertStatusCodeIsInteger(mixed $statusCode): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$statusCode` | **mixed** |  |

***

### assertStatusCodeRange

```php
private assertStatusCodeRange(int $statusCode): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$statusCode` | **int** |  |

***

## Inherited methods

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

