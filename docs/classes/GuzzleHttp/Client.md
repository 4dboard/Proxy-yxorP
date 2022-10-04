***

# Client

* Full name: `\GuzzleHttp\Client`
* This class implements:
  [`\GuzzleHttp\ClientInterface`](./ClientInterface.md)
  , [`\Psr\Http\Client\ClientInterface`](../Psr/Http/Client/ClientInterface.md)

## Properties

### config

```php
private array $config
```

***

## Methods

### __construct

Clients accept an array of constructor parameters.

```php
public __construct(array $config = []): mixed
```

Here's an example of creating a client using a base_uri and an array of
default request options to apply to each request:

    $client = new Client([
        'base_uri'        => 'http://www.foo.com/1.0/',
        'timeout'         => 0,
        'allow_redirects' => false,
        'proxy'           => '192.168.16.1:10'
    ]);

Client configuration settings include the following options:

- handler: (callable) Function that transfers HTTP requests over the
  wire. The function is called with a Psr7\Http\Message\RequestInterface
  and array of transfer options, and must return a
  GuzzleHttp\Promise\PromiseInterface that is fulfilled with a
  Psr7\Http\Message\ResponseInterface on success.
  If no handler is provided, a default handler will be created
  that enables all of the request options below by attaching all of the
  default middleware to the handler.
- base_uri: (string|UriInterface) Base URI of the client that is merged
  into relative URIs. Can be a string or instance of UriInterface.
- **: any request option

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** | Client configuration settings. |

**See Also:**

* \GuzzleHttp\RequestOptions - for a list of available request options.

***

### __call

```php
public __call(string $method, array $args): \GuzzleHttp\Promise\PromiseInterface|\Psr\Http\Message\ResponseInterface
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$args` | **array** |  |

***

### sendAsync

Asynchronously send an HTTP request.

```php
public sendAsync(\Psr\Http\Message\RequestInterface $request, array $options = []): \GuzzleHttp\Promise\PromiseInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** | Request to send |
| `$options` | **array** | Request options to apply to the given<br />request and to the transfer. See \GuzzleHttp\RequestOptions. |

***

### send

Send an HTTP request.

```php
public send(\Psr\Http\Message\RequestInterface $request, array $options = []): \Psr\Http\Message\ResponseInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** | Request to send |
| `$options` | **array** | Request options to apply to the given<br />request and to the transfer. See \GuzzleHttp\RequestOptions. |

***

### sendRequest

The HttpClient PSR (PSR-18) specify this method.

```php
public sendRequest(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\ResponseInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |

***

### requestAsync

Create and send an asynchronous HTTP request.

```php
public requestAsync(string $method, string|\Psr\Http\Message\UriInterface $uri = &#039;&#039;, array $options = []): \GuzzleHttp\Promise\PromiseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well. Use an array to provide a URL
template and additional variables to use in the URL template expansion.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | HTTP method |
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. See \GuzzleHttp\RequestOptions. |

***

### request

Create and send an HTTP request.

```php
public request(string $method, string|\Psr\Http\Message\UriInterface $uri = &#039;&#039;, array $options = []): \Psr\Http\Message\ResponseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | HTTP method. |
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. See \GuzzleHttp\RequestOptions. |

***

### getConfig

Get a client configuration option.

```php
public getConfig(string|null $option = null): mixed
```

These options include default request options of the client, a "handler"
(if utilized by the concrete client), and a "base_uri" if utilized by
the concrete client.

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string&#124;null** | The config option to retrieve. |

***

### buildUri

```php
private buildUri(\Psr\Http\Message\UriInterface $uri, array $config): \Psr\Http\Message\UriInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** |  |
| `$config` | **array** |  |

***

### configureDefaults

Configures the default options for a client.

```php
private configureDefaults(array $config): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |

***

### prepareDefaults

Merges default options into the array.

```php
private prepareDefaults(array $options): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Options to modify by reference |

***

### transfer

Transfers the given request and applies request options.

```php
private transfer(\Psr\Http\Message\RequestInterface $request, array $options): \GuzzleHttp\Promise\PromiseInterface
```

The URI of the request is not modified and the request options are used
as-is without merging in default options.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** | See \GuzzleHttp\RequestOptions. |

***

### applyOptions

Applies the array of request options to a request.

```php
private applyOptions(\Psr\Http\Message\RequestInterface $request, array& $options): \Psr\Http\Message\RequestInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |

***

### invalidBody

Return an InvalidArgumentException with pre-set message.

```php
private invalidBody(): \GuzzleHttp\Exception\InvalidArgumentException
```

***

## Inherited methods

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

