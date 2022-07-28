***

# Uri

PSR-7 URI implementation.



* Full name: `\GuzzleHttp\Psr7\Uri`
* This class implements:
[`\Psr\Http\Message\UriInterface`](../../Psr/Http/Message/UriInterface.md), [`\JsonSerializable`](../../JsonSerializable.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`HTTP_DEFAULT_HOST`|private| |&#039;localhost&#039;|
|`DEFAULT_PORTS`|private| |[&#039;http&#039; =&gt; 80, &#039;https&#039; =&gt; 443, &#039;ftp&#039; =&gt; 21, &#039;gopher&#039; =&gt; 70, &#039;nntp&#039; =&gt; 119, &#039;news&#039; =&gt; 119, &#039;telnet&#039; =&gt; 23, &#039;tn3270&#039; =&gt; 23, &#039;imap&#039; =&gt; 143, &#039;pop&#039; =&gt; 110, &#039;ldap&#039; =&gt; 389]|
|`CHAR_UNRESERVED`|private| |&#039;a-zA-Z0-9_\\-\\.~&#039;|
|`CHAR_SUB_DELIMS`|private| |&#039;!\\$&amp;\&#039;\\(\\)\\*\\+,;=&#039;|
|`QUERY_SEPARATORS_REPLACEMENT`|private| |[&#039;=&#039; =&gt; &#039;%3D&#039;, &#039;&amp;&#039; =&gt; &#039;%26&#039;]|

## Properties


### scheme



```php
private string $scheme
```






***

### userInfo



```php
private string $userInfo
```






***

### host



```php
private string $host
```






***

### port



```php
private int|null $port
```






***

### path



```php
private string $path
```






***

### query



```php
private string $query
```






***

### fragment



```php
private string $fragment
```






***

### composedComponents



```php
private string|null $composedComponents
```






***

## Methods


### __construct



```php
public __construct(string $uri = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |




***

### parse

UTF-8 aware \parse_url() replacement.

```php
private static parse(string $url): array|false
```

The internal function produces broken output for non ASCII domain names
(IDN) when used with locales other than "C".

On the other hand, cURL understands IDN correctly only when UTF-8 locale
is configured ("C.UTF-8", "en_US.UTF-8", etc.).

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** |  |



**See Also:**

* https://bugs.php.net/bug.php?id=52923 - * https://www.php.net/manual/en/function.parse-url.php#114817 - * https://curl.haxx.se/libcurl/c/CURLOPT_URL.html#ENCODING - 

***

### __toString

Return the string representation as a URI reference.

```php
public __toString(): string
```

Depending on which components of the URI are present, the resulting
string is either a full URI or relative reference according to RFC 3986,
Section 4.1. The method concatenates the various components of the URI,
using the appropriate delimiters:

- If a scheme is present, it MUST be suffixed by ":".
- If an authority is present, it MUST be prefixed by "//".
- The path can be concatenated without delimiters. But there are two
  cases where the path has to be adjusted to make the URI reference
  valid as PHP does not allow to throw an exception in __toString():
    - If the path is rootless and an authority is present, the path MUST
      be prefixed by "/".
    - If the path is starting with more than one "/" and no authority is
      present, the starting slashes MUST be reduced to one.
- If a query is present, it MUST be prefixed by "?".
- If a fragment is present, it MUST be prefixed by "#".









***

### composeComponents

Composes a URI reference string from its various components.

```php
public static composeComponents(?string $scheme, ?string $authority, string $path, ?string $query, ?string $fragment): string
```

Usually this method does not need to be called manually but instead is used indirectly via
`Psr\Http\Message\UriInterface::__toString`.

PSR-7 UriInterface treats an empty component the same as a missing component as
getQuery(), getFragment() etc. always return a string. This explains the slight
difference to RFC 3986 Section 5.3.

Another adjustment is that the authority separator is added even when the authority is missing/empty
for the "file" scheme. This is because PHP stream functions like `file_get_contents` only work with
`file:///myfile` but not with `file:/myfile` although they are equivalent according to RFC 3986. But
`file:///` is the more common syntax for the file scheme anyway (Chrome for example redirects to
that format).

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$scheme` | **?string** |  |
| `$authority` | **?string** |  |
| `$path` | **string** |  |
| `$query` | **?string** |  |
| `$fragment` | **?string** |  |



**See Also:**

* https://tools.ietf.org/html/rfc3986#section-5.3 - 

***

### isDefaultPort

Whether the URI has the default port of the current scheme.

```php
public static isDefaultPort(\Psr\Http\Message\UriInterface $uri): bool
```

`Psr\Http\Message\UriInterface::getPort` may return null or the standard port. This method can be used
independently of the implementation.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** |  |




***

### isAbsolute

Whether the URI is absolute, i.e. it has a scheme.

```php
public static isAbsolute(\Psr\Http\Message\UriInterface $uri): bool
```

An instance of UriInterface can either be an absolute URI or a relative reference. This method returns true
if it is the former. An absolute URI has a scheme. A relative reference is used to express a URI relative
to another URI, the base URI. Relative references can be divided into several forms:
- network-path references, e.g. '//example.com/path'
- absolute-path references, e.g. '/path'
- relative-path references, e.g. 'subpath'

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** |  |



**See Also:**

* \GuzzleHttp\Psr7\Uri::isNetworkPathReference - * \GuzzleHttp\Psr7\Uri::isAbsolutePathReference - * \GuzzleHttp\Psr7\Uri::isRelativePathReference - * https://tools.ietf.org/html/rfc3986#section-4 - 

***

### isNetworkPathReference

Whether the URI is a network-path reference.

```php
public static isNetworkPathReference(\Psr\Http\Message\UriInterface $uri): bool
```

A relative reference that begins with two slash characters is termed an network-path reference.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** |  |



**See Also:**

* https://tools.ietf.org/html/rfc3986#section-4.2 - 

***

### isAbsolutePathReference

Whether the URI is a absolute-path reference.

```php
public static isAbsolutePathReference(\Psr\Http\Message\UriInterface $uri): bool
```

A relative reference that begins with a single slash character is termed an absolute-path reference.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** |  |



**See Also:**

* https://tools.ietf.org/html/rfc3986#section-4.2 - 

***

### isRelativePathReference

Whether the URI is a relative-path reference.

```php
public static isRelativePathReference(\Psr\Http\Message\UriInterface $uri): bool
```

A relative reference that does not begin with a slash character is termed a relative-path reference.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** |  |



**See Also:**

* https://tools.ietf.org/html/rfc3986#section-4.2 - 

***

### isSameDocumentReference

Whether the URI is a same-document reference.

```php
public static isSameDocumentReference(\Psr\Http\Message\UriInterface $uri, \Psr\Http\Message\UriInterface|null $base = null): bool
```

A same-document reference refers to a URI that is, aside from its fragment
component, identical to the base URI. When no base URI is given, only an empty
URI reference (apart from its fragment) is considered a same-document reference.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** | The URI to check |
| `$base` | **\Psr\Http\Message\UriInterface&#124;null** | An optional base URI to compare against |



**See Also:**

* https://tools.ietf.org/html/rfc3986#section-4.4 - 

***

### withoutQueryValue

Creates a new URI with a specific query string value removed.

```php
public static withoutQueryValue(\Psr\Http\Message\UriInterface $uri, string $key): \Psr\Http\Message\UriInterface
```

Any existing query string values that exactly match the provided key are
removed.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** | URI to use as a base. |
| `$key` | **string** | Query string key to remove. |




***

### withQueryValue

Creates a new URI with a specific query string value.

```php
public static withQueryValue(\Psr\Http\Message\UriInterface $uri, string $key, string|null $value): \Psr\Http\Message\UriInterface
```

Any existing query string values that exactly match the provided key are
removed and replaced with the given key value pair.

A value of null will set the query string key without a value, e.g. "key"
instead of "key=value".

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** | URI to use as a base. |
| `$key` | **string** | Key to set. |
| `$value` | **string&#124;null** | Value to set |




***

### withQueryValues

Creates a new URI with multiple specific query string values.

```php
public static withQueryValues(\Psr\Http\Message\UriInterface $uri, array&lt;string,string|null&gt; $keyValueArray): \Psr\Http\Message\UriInterface
```

It has the same behavior as withQueryValue() but for an associative array of key => value.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** | URI to use as a base. |
| `$keyValueArray` | **array<string,string&#124;null>** | Associative array of key and values |




***

### fromParts

Creates a URI from a hash of `parse_url` components.

```php
public static fromParts(array $parts): \Psr\Http\Message\UriInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parts` | **array** |  |



**See Also:**

* http://php.net/manual/en/function.parse-url.php - 

***

### getScheme

Retrieve the scheme component of the URI.

```php
public getScheme(): string
```

If no scheme is present, this method MUST return an empty string.

The value returned MUST be normalized to lowercase, per RFC 3986
Section 3.1.

The trailing ":" character is not part of the scheme and MUST NOT be
added.







**Return Value:**

The URI scheme.



***

### getAuthority

Retrieve the authority component of the URI.

```php
public getAuthority(): string
```

If no authority information is present, this method MUST return an empty
string.

The authority syntax of the URI is:

<pre>
[user-info@]host[:port]
</pre>

If the port component is not set or is the standard port for the current
scheme, it SHOULD NOT be included.







**Return Value:**

The URI authority, in "[user-info@]host[:port]" format.



***

### getUserInfo

Retrieve the user information component of the URI.

```php
public getUserInfo(): string
```

If no user information is present, this method MUST return an empty
string.

If a user is present in the URI, this will return that value;
additionally, if the password is also present, it will be appended to the
user value, with a colon (":") separating the values.

The trailing "@" character is not part of the user information and MUST
NOT be added.







**Return Value:**

The URI user information, in "username[:password]" format.



***

### getHost

Retrieve the host component of the URI.

```php
public getHost(): string
```

If no host is present, this method MUST return an empty string.

The value returned MUST be normalized to lowercase, per RFC 3986
Section 3.2.2.







**Return Value:**

The URI host.



***

### getPort

Retrieve the port component of the URI.

```php
public getPort(): null|int
```

If a port is present, and it is non-standard for the current scheme,
this method MUST return it as an integer. If the port is the standard port
used with the current scheme, this method SHOULD return null.

If no port is present, and no scheme is present, this method MUST return
a null value.

If no port is present, but a scheme is present, this method MAY return
the standard port for that scheme, but SHOULD return null.







**Return Value:**

The URI port.



***

### getPath

Retrieve the path component of the URI.

```php
public getPath(): string
```

The path can either be empty or absolute (starting with a slash) or
rootless (not starting with a slash). Implementations MUST support all
three syntaxes.

Normally, the empty path "" and absolute path "/" are considered equal as
defined in RFC 7230 Section 2.7.3. But this method MUST NOT automatically
do this normalization because in contexts with a trimmed base path, e.g.
the front controller, this difference becomes significant. It's the task
of the user to handle both "" and "/".

The value returned MUST be percent-encoded, but MUST NOT double-encode
any characters. To determine what characters to encode, please refer to
RFC 3986, Sections 2 and 3.3.

As an example, if the value should include a slash ("/") not intended as
delimiter between path segments, that value MUST be passed in encoded
form (e.g., "%2F") to the instance.







**Return Value:**

The URI path.



***

### getQuery

Retrieve the query string of the URI.

```php
public getQuery(): string
```

If no query string is present, this method MUST return an empty string.

The leading "?" character is not part of the query and MUST NOT be
added.

The value returned MUST be percent-encoded, but MUST NOT double-encode
any characters. To determine what characters to encode, please refer to
RFC 3986, Sections 2 and 3.4.

As an example, if a value in a key/value pair of the query string should
include an ampersand ("&") not intended as a delimiter between values,
that value MUST be passed in encoded form (e.g., "%26") to the instance.







**Return Value:**

The URI query string.



***

### getFragment

Retrieve the fragment component of the URI.

```php
public getFragment(): string
```

If no fragment is present, this method MUST return an empty string.

The leading "#" character is not part of the fragment and MUST NOT be
added.

The value returned MUST be percent-encoded, but MUST NOT double-encode
any characters. To determine what characters to encode, please refer to
RFC 3986, Sections 2 and 3.5.







**Return Value:**

The URI fragment.



***

### withScheme

Return an instance with the specified scheme.

```php
public withScheme(mixed $scheme): static
```

This method MUST retain the state of the current instance, and return
an instance that contains the specified scheme.

Implementations MUST support the schemes "http" and "https" case
insensitively, and MAY accommodate other schemes if required.

An empty scheme is equivalent to removing the scheme.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$scheme` | **mixed** | The scheme to use with the new instance. |


**Return Value:**

A new instance with the specified scheme.



***

### withUserInfo

Return an instance with the specified user information.

```php
public withUserInfo(mixed $user, mixed $password = null): static
```

This method MUST retain the state of the current instance, and return
an instance that contains the specified user information.

Password is optional, but the user information MUST include the
user; an empty string for the user is equivalent to removing user
information.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$user` | **mixed** | The user name to use for authority. |
| `$password` | **mixed** | The password associated with $user. |


**Return Value:**

A new instance with the specified user information.



***

### withHost

Return an instance with the specified host.

```php
public withHost(mixed $host): static
```

This method MUST retain the state of the current instance, and return
an instance that contains the specified host.

An empty host value is equivalent to removing the host.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **mixed** | The hostname to use with the new instance. |


**Return Value:**

A new instance with the specified host.



***

### withPort

Return an instance with the specified port.

```php
public withPort(mixed $port): static
```

This method MUST retain the state of the current instance, and return
an instance that contains the specified port.

Implementations MUST raise an exception for ports outside the
established TCP and UDP port ranges.

A null value provided for the port is equivalent to removing the port
information.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$port` | **mixed** | The port to use with the new instance; a null value<br />removes the port information. |


**Return Value:**

A new instance with the specified port.



***

### withPath

Return an instance with the specified path.

```php
public withPath(mixed $path): static
```

This method MUST retain the state of the current instance, and return
an instance that contains the specified path.

The path can either be empty or absolute (starting with a slash) or
rootless (not starting with a slash). Implementations MUST support all
three syntaxes.

If the path is intended to be domain-relative rather than path relative then
it must begin with a slash ("/"). Paths not starting with a slash ("/")
are assumed to be relative to some base path known to the application or
consumer.

Users can provide both encoded and decoded path characters.
Implementations ensure the correct encoding as outlined in getPath().






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to use with the new instance. |


**Return Value:**

A new instance with the specified path.



***

### withQuery

Return an instance with the specified query string.

```php
public withQuery(mixed $query): static
```

This method MUST retain the state of the current instance, and return
an instance that contains the specified query string.

Users can provide both encoded and decoded query characters.
Implementations ensure the correct encoding as outlined in getQuery().

An empty query string value is equivalent to removing the query string.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **mixed** | The query string to use with the new instance. |


**Return Value:**

A new instance with the specified query string.



***

### withFragment

Return an instance with the specified URI fragment.

```php
public withFragment(mixed $fragment): static
```

This method MUST retain the state of the current instance, and return
an instance that contains the specified URI fragment.

Users can provide both encoded and decoded fragment characters.
Implementations ensure the correct encoding as outlined in getFragment().

An empty fragment value is equivalent to removing the fragment.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fragment` | **mixed** | The fragment to use with the new instance. |


**Return Value:**

A new instance with the specified fragment.



***

### jsonSerialize



```php
public jsonSerialize(): string
```











***

### applyParts

Apply parse_url parts to a URI.

```php
private applyParts(array $parts): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parts` | **array** | Array of parse_url parts to apply. |




***

### filterScheme



```php
private filterScheme(mixed $scheme): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$scheme` | **mixed** |  |




***

### filterUserInfoComponent



```php
private filterUserInfoComponent(mixed $component): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$component` | **mixed** |  |




***

### filterHost



```php
private filterHost(mixed $host): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **mixed** |  |




***

### filterPort



```php
private filterPort(mixed $port): ?int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$port` | **mixed** |  |




***

### getFilteredQueryString



```php
private static getFilteredQueryString(\Psr\Http\Message\UriInterface $uri, string[] $keys): string[]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** |  |
| `$keys` | **string[]** |  |




***

### generateQueryString



```php
private static generateQueryString(string $key, ?string $value): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **?string** |  |




***

### removeDefaultPort



```php
private removeDefaultPort(): void
```











***

### filterPath

Filters the path of a URI

```php
private filterPath(mixed $path): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### filterQueryAndFragment

Filters the query string or fragment of a URI.

```php
private filterQueryAndFragment(mixed $str): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |




***

### rawurlencodeMatchZero



```php
private rawurlencodeMatchZero(array $match): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$match` | **array** |  |




***

### validateState



```php
private validateState(): void
```











***


***

