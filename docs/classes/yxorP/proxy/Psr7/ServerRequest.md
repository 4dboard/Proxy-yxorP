***

# ServerRequest





* Full name: `\yxorP\proxy\Psr7\ServerRequest`
* Parent class: [`\yxorP\proxy\Psr7\Request`](./Request.md)
* This class implements:
[`\yxorP\psr\Http\Message\ServerRequestInterface`](../../psr/Http/Message/ServerRequestInterface.md)



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
private array|null|object $parsedBody
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
public __construct(mixed $method, mixed $uri, array $headers = [], mixed $body = null, mixed $version = &#039;1.1&#039;, array $serverParams = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$uri` | **mixed** |  |
| `$headers` | **array** |  |
| `$body` | **mixed** |  |
| `$version` | **mixed** |  |
| `$serverParams` | **array** |  |




***

### fromGlobals



```php
public static fromGlobals(): \yxorP\proxy\Psr7\ServerRequest
```



* This method is **static**.







***

### getUriFromGlobals



```php
public static getUriFromGlobals(): \yxorP\proxy\Psr7\Uri
```



* This method is **static**.







***

### extractHostAndPortFromAuthority



```php
private static extractHostAndPortFromAuthority(mixed $authority): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$authority` | **mixed** |  |




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

### normalizeFiles



```php
public static normalizeFiles(array $files): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **array** |  |




***

### createUploadedFileFromSpec



```php
private static createUploadedFileFromSpec(array $value): \yxorP\proxy\Psr7\UploadedFile|array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **array** |  |




***

### normalizeNestedFileSpec



```php
private static normalizeNestedFileSpec(array $files = []): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **array** |  |




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

### withParsedBody

Return an instance with the specified body parameters.

```php
public withParsedBody(object|array|null $data): static
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
| `$data` | **object&#124;array&#124;null** | The deserialized body data. This will<br />typically be in an array or object. |




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

### getCookieParams

Retrieve cookies.

```php
public getCookieParams(): array
```

Retrieves cookies sent by the client to the server.

The data MUST be compatible with the structure of the $_COOKIE
superglobal.









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

### getParsedBody

Retrieve any parameters provided in the request body.

```php
public getParsedBody(): mixed
```

If the request Content-Type is either application/x-www-form-urlencoded
or multipart/form-data, and the request method is POST, this method MUST
return the contents of $_POST.

Otherwise, this method may return any results of deserializing
the request body content; as parsing returns structured content, the
potential types MUST be arrays or objects only. A null value indicates
the absence of body content.







**Return Value:**

The deserialized body parameters, if any.
These will typically be an array or object.



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
public getAttribute(string $name, mixed $default = null): mixed
```

Retrieves a single derived request attribute as described in
getAttributes(). If the attribute has not been previously set, returns
the default value as provided.

This method obviates the need for a hasAttribute() method, as it allows
specifying a default value to return if the attribute is not found.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The attribute name. |
| `$default` | **mixed** | Default value to return if the attribute does not exist. |




***

### withAttribute

Return an instance with the specified derived request attribute.

```php
public withAttribute(string $name, mixed $value): static
```

This method allows setting a single derived request attribute as
described in getAttributes().

This method MUST be implemented in such a way as to retain the
immutability of the message, and MUST return an instance that has the
updated attribute.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The attribute name. |
| `$value` | **mixed** | The value of the attribute. |




***

### withoutAttribute

Return an instance that removes the specified derived request attribute.

```php
public withoutAttribute(string $name): static
```

This method allows removing a single derived request attribute as
described in getAttributes().

This method MUST be implemented in such a way as to retain the
immutability of the message, and MUST return an instance that removes
the attribute.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The attribute name. |




***


## Inherited methods


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
public withMethod(string $method): static
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
| `$method` | **string** | Case-sensitive method. |




***

### getUri

Retrieves the URI instance.

```php
public getUri(): \yxorP\psr\Http\Message\UriInterface
```

This method MUST return a UriInterface instance.







**Return Value:**

Returns a UriInterface instance
representing the URI of the request.



***

### withUri

Returns an instance with the provided URI.

```php
public withUri(\yxorP\psr\Http\Message\UriInterface $uri, bool $preserveHost = false): static
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
| `$uri` | **\yxorP\psr\Http\Message\UriInterface** | New request URI to use. |
| `$preserveHost` | **bool** | Preserve the original state of the Host header. |




***

### getProtocolVersion



```php
public getProtocolVersion(): string
```











***

### withProtocolVersion



```php
public withProtocolVersion(string $version): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **string** |  |




***

### getHeaders



```php
public getHeaders(): array
```











***

### hasHeader



```php
public hasHeader(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getHeaderLine



```php
public getHeaderLine(string $name): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getHeader



```php
public getHeader(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### withHeader



```php
public withHeader(string $name, array|string $value): \Request|\Response
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **array&#124;string** |  |




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
private normalizeHeaderValue(mixed $value): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### trimHeaderValues



```php
private trimHeaderValues(array $values): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |




***

### withAddedHeader



```php
public withAddedHeader(string $name, array|string $value): \Request|\Response
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **array&#124;string** |  |




***

### withoutHeader



```php
public withoutHeader(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getBody



```php
public getBody(): mixed
```











***

### withBody



```php
public withBody(\yxorP\psr\Http\Message\StreamInterface $body): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$body` | **\yxorP\psr\Http\Message\StreamInterface** |  |




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
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
