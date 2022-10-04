***

# ClientTrait

Client interface for sending HTTP requests.

* Full name: `\GuzzleHttp\ClientTrait`

## Methods

### request

Create and send an HTTP request.

```php
public request(string $method, string|\Psr\Http\Message\UriInterface $uri, array $options = []): \Psr\Http\Message\ResponseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | HTTP method. |
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

### get

Create and send an HTTP GET request.

```php
public get(string|\Psr\Http\Message\UriInterface $uri, array $options = []): \Psr\Http\Message\ResponseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

### head

Create and send an HTTP HEAD request.

```php
public head(string|\Psr\Http\Message\UriInterface $uri, array $options = []): \Psr\Http\Message\ResponseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

### put

Create and send an HTTP PUT request.

```php
public put(string|\Psr\Http\Message\UriInterface $uri, array $options = []): \Psr\Http\Message\ResponseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

### post

Create and send an HTTP POST request.

```php
public post(string|\Psr\Http\Message\UriInterface $uri, array $options = []): \Psr\Http\Message\ResponseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

### patch

Create and send an HTTP PATCH request.

```php
public patch(string|\Psr\Http\Message\UriInterface $uri, array $options = []): \Psr\Http\Message\ResponseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

### delete

Create and send an HTTP DELETE request.

```php
public delete(string|\Psr\Http\Message\UriInterface $uri, array $options = []): \Psr\Http\Message\ResponseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

### requestAsync

Create and send an asynchronous HTTP request.

```php
public requestAsync(string $method, string|\Psr\Http\Message\UriInterface $uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well. Use an array to provide a URL
template and additional variables to use in the URL template expansion.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | HTTP method |
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

### getAsync

Create and send an asynchronous HTTP GET request.

```php
public getAsync(string|\Psr\Http\Message\UriInterface $uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well. Use an array to provide a URL
template and additional variables to use in the URL template expansion.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

### headAsync

Create and send an asynchronous HTTP HEAD request.

```php
public headAsync(string|\Psr\Http\Message\UriInterface $uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well. Use an array to provide a URL
template and additional variables to use in the URL template expansion.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

### putAsync

Create and send an asynchronous HTTP PUT request.

```php
public putAsync(string|\Psr\Http\Message\UriInterface $uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well. Use an array to provide a URL
template and additional variables to use in the URL template expansion.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

### postAsync

Create and send an asynchronous HTTP POST request.

```php
public postAsync(string|\Psr\Http\Message\UriInterface $uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well. Use an array to provide a URL
template and additional variables to use in the URL template expansion.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

### patchAsync

Create and send an asynchronous HTTP PATCH request.

```php
public patchAsync(string|\Psr\Http\Message\UriInterface $uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well. Use an array to provide a URL
template and additional variables to use in the URL template expansion.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

### deleteAsync

Create and send an asynchronous HTTP DELETE request.

```php
public deleteAsync(string|\Psr\Http\Message\UriInterface $uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well. Use an array to provide a URL
template and additional variables to use in the URL template expansion.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. |

***

***


