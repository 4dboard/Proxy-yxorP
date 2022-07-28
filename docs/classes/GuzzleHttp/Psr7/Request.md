***

# Request

PSR-7 request implementation.



* Full name: `\GuzzleHttp\Psr7\Request`
* This class implements:
[`\Psr\Http\Message\RequestInterface`](../../Psr/Http/Message/RequestInterface.md)



## Properties


### method



```php
private string $method
```






***

### requestTarget



```php
private string|null $requestTarget
```






***

### uri



```php
private \Psr\Http\Message\UriInterface $uri
```






***

## Methods


### __construct



```php
public __construct(string $method, string|\Psr\Http\Message\UriInterface $uri, array&lt;string,string|string[]&gt; $headers = [], string|resource|\Psr\Http\Message\StreamInterface|null $body = null, string $version = &#039;1.1&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | HTTP method |
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI |
| `$headers` | **array<string,string&#124;string[]>** | Request headers |
| `$body` | **string&#124;resource&#124;\Psr\Http\Message\StreamInterface&#124;null** | Request body |
| `$version` | **string** | Protocol version |




***

### getRequestTarget

Retrieves the message's request target.

```php
public getRequestTarget(): string
```

Retrieves the message's request-target either as it will appear (for
clients), as it appeared at request (for servers), or as it was
specified for the instance (see withRequestTarget()).

In most cases, this will be the origin-form of the composed URI,
unless a value was provided to the concrete implementation (see
withRequestTarget() below).

If no URI is available, and no request-target has been specifically
provided, this method MUST return the string "/".









***

### withRequestTarget

Return an instance with the specific request-target.

```php
public withRequestTarget(mixed $requestTarget): static
```

If the request needs a non-origin-form request-target — e.g., for
specifying an absolute-form, authority-form, or asterisk-form —
this method may be used to create an instance with the specified
request-target, verbatim.

This method MUST be implemented in such a way as to retain the
immutability of the message, and MUST return an instance that has the
changed request target.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$requestTarget` | **mixed** |  |




***

### getMethod

Retrieves the HTTP method of the request.

```php
public getMethod(): string
```









**Return Value:**

Returns the request method.



***

### withMethod

Return an instance with the provided HTTP method.

```php
public withMethod(mixed $method): static
```

While HTTP method names are typically all uppercase characters, HTTP
method names are case-sensitive and thus implementations SHOULD NOT
modify the given string.

This method MUST be implemented in such a way as to retain the
immutability of the message, and MUST return an instance that has the
changed request method.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** | Case-sensitive method. |




***

### getUri

Retrieves the URI instance.

```php
public getUri(): \Psr\Http\Message\UriInterface
```

This method MUST return a UriInterface instance.







**Return Value:**

Returns a UriInterface instance
representing the URI of the request.



***

### withUri

Returns an instance with the provided URI.

```php
public withUri(\Psr\Http\Message\UriInterface $uri, mixed $preserveHost = false): static
```

This method MUST update the Host header of the returned request by
default if the URI contains a host component. If the URI does not
contain a host component, any pre-existing Host header MUST be carried
over to the returned request.

You can opt-in to preserving the original state of the Host header by
setting `$preserveHost` to `true`. When `$preserveHost` is set to
`true`, this method interacts with the Host header in the following ways:

- If the Host header is missing or empty, and the new URI contains
  a host component, this method MUST update the Host header in the returned
  request.
- If the Host header is missing or empty, and the new URI does not contain a
  host component, this method MUST NOT update the Host header in the returned
  request.
- If a Host header is present and non-empty, this method MUST NOT update
  the Host header in the returned request.

This method MUST be implemented in such a way as to retain the
immutability of the message, and MUST return an instance that has the
new UriInterface instance.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** | New request URI to use. |
| `$preserveHost` | **mixed** | Preserve the original state of the Host header. |




***

### updateHostFromUri



```php
private updateHostFromUri(): void
```











***

### assertMethod



```php
private assertMethod(mixed $method): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |




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
OWS          = *( SP / HTAB )






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

* https://tools.ietf.org/html/rfc7230#section-3.2 - field-value    = *( field-content / obs-fold )
field-content  = field-vchar [ 1*( SP / HTAB ) field-vchar ]
field-vchar    = VCHAR / obs-text
VCHAR          = %x21-7E
obs-text       = %x80-FF
obs-fold       = CRLF 1*( SP / HTAB )

***


***

