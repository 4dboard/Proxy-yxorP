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

* Full name: `\yxorP\lib\proxy\Psr7\ServerRequest`
* Parent class: [`\yxorP\lib\proxy\Psr7\Request`](./Request.md)
* This class implements:
[`\yxorP\inc\Psr\Http\Message\ServerRequestInterface`](../../../inc/Psr/Http/Message/ServerRequestInterface.md)



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
private null|array|object $parsedBody
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
public __construct(string $method, string|\yxorP\inc\Psr\Http\Message\UriInterface $uri, array $headers = [], string|null|resource|\yxorP\inc\Psr\Http\Message\StreamInterface $body = null, string $version = &#039;1.1&#039;, array $serverParams = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | HTTP method |
| `$uri` | **string&#124;\yxorP\inc\Psr\Http\Message\UriInterface** | URI |
| `$headers` | **array** | Request headers |
| `$body` | **string&#124;null&#124;resource&#124;\yxorP\inc\Psr\Http\Message\StreamInterface** | Request body |
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
| `$files` | **array** | A array which respect $_FILES structure |




***

### fromGlobals

Return a ServerRequest populated with superglobals:
$_GET
$_POST
$_COOKIE
$_FILES
$_SERVER

```php
public static fromGlobals(): \yxorP\inc\Psr\Http\Message\ServerRequestInterface
```



* This method is **static**.







***

### getUriFromGlobals

Get a Uri populated with values from $_SERVER.

```php
public static getUriFromGlobals(): \yxorP\inc\Psr\Http\Message\UriInterface
```



* This method is **static**.







***

### createUploadedFileFromSpec

Create and return an UploadedFile instance from a $_FILES specification.

```php
private static createUploadedFileFromSpec(array $value): array|\yxorP\inc\Psr\Http\Message\UploadedFileInterface
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
private static normalizeNestedFileSpec(array $files = []): \yxorP\inc\Psr\Http\Message\UploadedFileInterface[]
```

Loops through all nested files and returns a normalized array of
UploadedFileInterface instances.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **array** |  |




***

### extractHostAndPortFromAuthority



```php
private static extractHostAndPortFromAuthority(mixed $authority): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$authority` | **mixed** |  |




***

### getServerParams

Retrieve server parameters.

```php
public getServerParams(): array
```











***

### getUploadedFiles

Retrieve normalized file upload data.

```php
public getUploadedFiles(): array
```









**Return Value:**

An array tree of UploadedFileInterface instances; an empty
array MUST be returned if no data is present.



***

### withUploadedFiles

Create a new instance with the specified uploaded files.

```php
public withUploadedFiles(array $uploadedFiles): static
```








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











***

### withCookieParams

Return an instance with the specified cookies.

```php
public withCookieParams(array $cookies): static
```








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











***

### withQueryParams

Return an instance with the specified query string arguments.

```php
public withQueryParams(array $query): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **array** | Array of query string arguments, typically from<br />$_GET. |




***

### getParsedBody

Retrieve any parameters provided in the request body.

```php
public getParsedBody(): null|array|object
```









**Return Value:**

The deserialized body parameters, if any.
These will typically be an array or object.



***

### withParsedBody

Return an instance with the specified body parameters.

```php
public withParsedBody(mixed $data): static
```








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








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attribute` | **mixed** |  |




***


## Inherited methods


### __construct



```php
public __construct(string $method, string|\yxorP\inc\Psr\Http\Message\UriInterface $uri, array $headers = [], string|null|resource|\yxorP\inc\Psr\Http\Message\StreamInterface $body = null, string $version = &#039;1.1&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | HTTP method |
| `$uri` | **string&#124;\yxorP\inc\Psr\Http\Message\UriInterface** | URI |
| `$headers` | **array** | Request headers |
| `$body` | **string&#124;null&#124;resource&#124;\yxorP\inc\Psr\Http\Message\StreamInterface** | Request body |
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

### updateHostFromUri



```php
private updateHostFromUri(): mixed
```











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

### getHeader



```php
public getHeader(mixed $header): mixed
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

Trims whitespace from the header values.

```php
private trimHeaderValues(string[] $values): string[]
```

Spaces and tabs ought to be excluded by parsers when extracting the field value from a header field.

header-field = field-name ":" OWS field-value OWS
OWS          = *( SP / HTAB )






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **string[]** | Header values |


**Return Value:**

Trimmed header values


**See Also:**

* https://tools.ietf.org/html/rfc7230#section-3.2.4 - 

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


***

