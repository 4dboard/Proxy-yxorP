***

# Request





* Full name: `\yxorP\lib\proxy\Psr7\Request`
* This class implements:
[`\yxorP\inc\Psr\Http\Message\RequestInterface`](../../../inc/Psr/Http/Message/RequestInterface.md)



## Properties


### method



```php
private $method
```






***

### requestTarget



```php
private $requestTarget
```






***

### uri



```php
private $uri
```






***

## Methods


### __construct



```php
public __construct(mixed $method, mixed $uri, array $headers = [], mixed $body = null, mixed $version = &#039;1.1&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$uri` | **mixed** |  |
| `$headers` | **array** |  |
| `$body` | **mixed** |  |
| `$version` | **mixed** |  |




***

### assertMethod



```php
private assertMethod(mixed $method): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |




***

### updateHostFromUri



```php
private updateHostFromUri(): mixed
```











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
public getUri(): \yxorP\inc\Psr\Http\Message\UriInterface
```

This method MUST return a UriInterface instance.







**Return Value:**

Returns a UriInterface instance
representing the URI of the request.



***

### withUri

Returns an instance with the provided URI.

```php
public withUri(\yxorP\inc\Psr\Http\Message\UriInterface $uri, mixed $preserveHost = false): static
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
| `$uri` | **\yxorP\inc\Psr\Http\Message\UriInterface** | New request URI to use. |
| `$preserveHost` | **mixed** | Preserve the original state of the Host header. |




***


## Inherited methods


### getProtocolVersion



```php
public getProtocolVersion(): mixed
```











***

### withProtocolVersion



```php
public withProtocolVersion(mixed $version): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **mixed** |  |




***

### getHeaders



```php
public getHeaders(): mixed
```











***

### hasHeader



```php
public hasHeader(mixed $header): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |




***

### getHeaderLine



```php
public getHeaderLine(mixed $header): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |




***

### getHeader



```php
public getHeader(mixed $header): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |




***

### withHeader



```php
public withHeader(mixed $header, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |
| `$value` | **mixed** |  |




***

### assertHeader



```php
private assertHeader(mixed $header): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |




***

### normalizeHeaderValue



```php
private normalizeHeaderValue(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### trimHeaderValues



```php
private trimHeaderValues(array $values): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |




***

### withAddedHeader



```php
public withAddedHeader(mixed $header, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |
| `$value` | **mixed** |  |




***

### withoutHeader



```php
public withoutHeader(mixed $header): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |




***

### getBody



```php
public getBody(): mixed
```











***

### withBody



```php
public withBody(\yxorP\inc\Psr\Http\Message\StreamInterface $body): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$body` | **\yxorP\inc\Psr\Http\Message\StreamInterface** |  |




***

### setHeaders



```php
private setHeaders(array $headers): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** |  |




***


***

