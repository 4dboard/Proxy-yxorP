***

# ServerRequest

Server-side HTTP request

Extends the Request definition to add methods for accessing incoming data,
specifically server parameters, cookies, matched path parameters, query
string arguments, body parameters, and upload file information.

"Attributes" are discovered via decomposing the request (and usually
specifically the URI path), and typically will be injected by the application.

Requests are considered immutable; all methods that might change state are
implemented such that they retain the internal state of the current
message and return a new instance that contains the changed state.

* Full name: `\GuzzleHttp\Psr7\ServerRequest`
* Parent class: [`\GuzzleHttp\Psr7\Request`](./Request.md)
* This class implements:
[`\Psr\Http\Message\ServerRequestInterface`](../../Psr/Http/Message/ServerRequestInterface.md)



## Properties


### attributes



```php
private array $attributes
```






***

### cookieParams



```php
private array $cookieParams
```






***

### parsedBody



```php
private array|object|null $parsedBody
```






***

### queryParams



```php
private array $queryParams
```






***

### serverParams



```php
private array $serverParams
```






***

### uploadedFiles



```php
private array $uploadedFiles
```






***

## Methods


### __construct



```php
public __construct(string $method, string|\Psr\Http\Message\UriInterface $uri, array&lt;string,string|string[]&gt; $headers = [], string|resource|\Psr\Http\Message\StreamInterface|null $body = null, string $version = &#039;1.1&#039;, array $serverParams = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | HTTP method |
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI |
| `$headers` | **array<string,string&#124;string[]>** | Request headers |
| `$body` | **string&#124;resource&#124;\Psr\Http\Message\StreamInterface&#124;null** | Request body |
| `$version` | **string** | Protocol version |
| `$serverParams` | **array** | Typically the $_SERVER superglobal |




***

### normalizeFiles

Return an UploadedFile instance array.

```php
public static normalizeFiles(array $files): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **array** | An array which respect $_FILES structure |




***

### createUploadedFileFromSpec

Create and return an UploadedFile instance from a $_FILES specification.

```php
private static createUploadedFileFromSpec(array $value): \Psr\Http\Message\UploadedFileInterface|\Psr\Http\Message\UploadedFileInterface[]
```

If the specification represents an array of values, this method will
delegate to normalizeNestedFileSpec() and return that return value.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **array** | $_FILES struct |




***

### normalizeNestedFileSpec

Normalize an array of file specifications.

```php
private static normalizeNestedFileSpec(array $files = []): \Psr\Http\Message\UploadedFileInterface[]
```

Loops through all nested files and returns a normalized array of
UploadedFileInterface instances.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **array** |  |




***

### fromGlobals

Return a ServerRequest populated with superglobals:
$_GET
$_POST
$_COOKIE
$_FILES
$_SERVER

```php
public static fromGlobals(): \Psr\Http\Message\ServerRequestInterface
```



* This method is **static**.







***

### extractHostAndPortFromAuthority



```php
private static extractHostAndPortFromAuthority(string $authority): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$authority` | **string** |  |




***

### getUriFromGlobals

Get a Uri populated with values from $_SERVER.

```php
public static getUriFromGlobals(): \Psr\Http\Message\UriInterface
```



* This method is **static**.







***

### getServerParams

Retrieve server parameters.

```php
public getServerParams(): array
```

Retrieves data related to the incoming request environment,
typically derived from PHP's $_SERVER superglobal. The data IS NOT
REQUIRED to originate from $_SERVER.









***

### getUploadedFiles

Retrieve normalized file upload data.

```php
public getUploadedFiles(): array
```

This method returns upload metadata in a normalized tree, with each leaf
an instance of Psr\Http\Message\UploadedFileInterface.

These values MAY be prepared from $_FILES or the message body during
instantiation, or MAY be injected via withUploadedFiles().







**Return Value:**

An array tree of UploadedFileInterface instances; an empty
array MUST be returned if no data is present.



***

### withUploadedFiles

Create a new instance with the specified uploaded files.

```php
public withUploadedFiles(array $uploadedFiles): static
```

This method MUST be implemented in such a way as to retain the
immutability of the message, and MUST return an instance that has the
updated body parameters.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uploadedFiles` | **array** | An array tree of UploadedFileInterface instances. |




***

### getCookieParams

Retrieve cookies.

```php
public getCookieParams(): array
```

Retrieves cookies sent by the client to the server.

The data MUST be compatible with the structure of the $_COOKIE
superglobal.









***

### withCookieParams

Return an instance with the specified cookies.

```php
public withCookieParams(array $cookies): static
```

The data IS NOT REQUIRED to come from the $_COOKIE superglobal, but MUST
be compatible with the structure of $_COOKIE. Typically, this data will
be injected at instantiation.

This method MUST NOT update the related Cookie header of the request
instance, nor related values in the server params.

This method MUST be implemented in such a way as to retain the
immutability of the message, and MUST return an instance that has the
updated cookie values.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookies` | **array** | Array of key/value pairs representing cookies. |




***

### getQueryParams

Retrieve query string arguments.

```php
public getQueryParams(): array
```

Retrieves the deserialized query string arguments, if any.

Note: the query params might not be in sync with the URI or server
params. If you need to ensure you are only getting the original
values, you may need to parse the query string from `getUri()->getQuery()`
or from the `QUERY_STRING` server param.









***

### withQueryParams

Return an instance with the specified query string arguments.

```php
public withQueryParams(array $query): static
```

These values SHOULD remain immutable over the course of the incoming
request. They MAY be injected during instantiation, such as from PHP's
$_GET superglobal, or MAY be derived from some other value such as the
URI. In cases where the arguments are parsed from the URI, the data
MUST be compatible with what PHP's parse_str() would return for
purposes of how duplicate query parameters are handled, and how nested
sets are handled.

Setting query string arguments MUST NOT change the URI stored by the
request, nor the values in the server params.

This method MUST be implemented in such a way as to retain the
immutability of the message, and MUST return an instance that has the
updated query string arguments.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **array** | Array of query string arguments, typically from<br />$_GET. |




***

### getParsedBody

Retrieve any parameters provided in the request body.

```php
public getParsedBody(): array|object|null
```











***

### withParsedBody

Return an instance with the specified body parameters.

```php
public withParsedBody(mixed $data): static
```

These MAY be injected during instantiation.

If the request Content-Type is either application/x-www-form-urlencoded
or multipart/form-data, and the request method is POST, use this method
ONLY to inject the contents of $_POST.

The data IS NOT REQUIRED to come from $_POST, but MUST be the results of
deserializing the request body content. Deserialization/parsing returns
structured data, and, as such, this method ONLY accepts arrays or objects,
or a null value if nothing was available to parse.

As an example, if content negotiation determines that the request data
is a JSON payload, this method could be used to create a request
instance with the deserialized parameters.

This method MUST be implemented in such a way as to retain the
immutability of the message, and MUST return an instance that has the
updated body parameters.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** | The deserialized body data. This will<br />typically be in an array or object. |




***

### getAttributes

Retrieve attributes derived from the request.

```php
public getAttributes(): array
```

The request "attributes" may be used to allow injection of any
parameters derived from the request: e.g., the results of path
match operations; the results of decrypting cookies; the results of
deserializing non-form-encoded message bodies; etc. Attributes
will be application and request specific, and CAN be mutable.







**Return Value:**

Attributes derived from the request.



***

### getAttribute

Retrieve a single derived request attribute.

```php
public getAttribute(mixed $attribute, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attribute` | **mixed** |  |
| `$default` | **mixed** | Default value to return if the attribute does not exist. |




***

### withAttribute

Return an instance with the specified derived request attribute.

```php
public withAttribute(mixed $attribute, mixed $value): static
```

This method allows setting a single derived request attribute as
described in getAttributes().

This method MUST be implemented in such a way as to retain the
immutability of the message, and MUST return an instance that has the
updated attribute.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attribute` | **mixed** |  |
| `$value` | **mixed** | The value of the attribute. |




***

### withoutAttribute

Return an instance that removes the specified derived request attribute.

```php
public withoutAttribute(mixed $attribute): static
```

This method allows removing a single derived request attribute as
described in getAttributes().

This method MUST be implemented in such a way as to retain the
immutability of the message, and MUST return an instance that removes
the attribute.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attribute` | **mixed** |  |




***


## Inherited methods


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

