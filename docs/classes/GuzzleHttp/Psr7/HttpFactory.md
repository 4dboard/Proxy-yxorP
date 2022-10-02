***

# HttpFactory

Implements all of the PSR-17 interfaces.

Note: in consuming code it is recommended to require the implemented interfaces
and inject the instance of this class multiple times.

* Full name: `\GuzzleHttp\Psr7\HttpFactory`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\Psr\Http\Message\RequestFactoryInterface`](../../Psr/Http/Message/RequestFactoryInterface.md)
  , [`\Psr\Http\Message\ResponseFactoryInterface`](../../Psr/Http/Message/ResponseFactoryInterface.md)
  , [`\Psr\Http\Message\ServerRequestFactoryInterface`](../../Psr/Http/Message/ServerRequestFactoryInterface.md)
  , [`\Psr\Http\Message\StreamFactoryInterface`](../../Psr/Http/Message/StreamFactoryInterface.md)
  , [`\Psr\Http\Message\UploadedFileFactoryInterface`](../../Psr/Http/Message/UploadedFileFactoryInterface.md)
  , [`\Psr\Http\Message\UriFactoryInterface`](../../Psr/Http/Message/UriFactoryInterface.md)
* This class is a **Final class**

## Methods

### createUploadedFile

Create a new uploaded file.

```php
public createUploadedFile(\Psr\Http\Message\StreamInterface $stream, int $size = null, int $error = UPLOAD_ERR_OK, string $clientFilename = null, string $clientMediaType = null): \Psr\Http\Message\UploadedFileInterface
```

If a size is not provided it will be determined by checking the size of
the file.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** | Underlying stream representing the<br />uploaded file content. |
| `$size` | **int** | in bytes |
| `$error` | **int** | PHP file upload error |
| `$clientFilename` | **string** | Filename as provided by the client, if any. |
| `$clientMediaType` | **string** | Media type as provided by the client, if any. |

***

### createStream

Create a new stream from a string.

```php
public createStream(string $content = &#039;&#039;): \Psr\Http\Message\StreamInterface
```

The stream SHOULD be created with a temporary resource.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** | String content with which to populate the stream. |

***

### createStreamFromFile

Create a stream from an existing file.

```php
public createStreamFromFile(string $file, string $mode = &#039;r&#039;): \Psr\Http\Message\StreamInterface
```

The file MUST be opened using the given mode, which may be any mode
supported by the `fopen` function.

The `$filename` MAY be any string supported by `fopen()`.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |
| `$mode` | **string** | Mode with which to open the underlying filename/stream. |

***

### createStreamFromResource

Create a new stream from an existing resource.

```php
public createStreamFromResource(mixed $resource): \Psr\Http\Message\StreamInterface
```

The stream MUST be readable and may be writable.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | PHP resource to use as basis of stream. |

***

### createServerRequest

Create a new server request.

```php
public createServerRequest(string $method, mixed $uri, array $serverParams = []): \Psr\Http\Message\ServerRequestInterface
```

Note that server-params are taken precisely as given - no parsing/processing
of the given values is performed, and, in particular, no attempt is made to
determine the HTTP method or URI, which must be provided explicitly.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | The HTTP method associated with the request. |
| `$uri` | **mixed** | The URI associated with the request. If<br />the value is a string, the factory MUST create a UriInterface<br />instance based on it. |
| `$serverParams` | **array** | Array of SAPI parameters with which to seed<br />the generated request instance. |

***

### createResponse

Create a new response.

```php
public createResponse(int $code = 200, string $reasonPhrase = &#039;&#039;): \Psr\Http\Message\ResponseInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **int** | HTTP status code; defaults to 200 |
| `$reasonPhrase` | **string** | Reason phrase to associate with status code<br />in generated response; if none is provided implementations MAY use<br />the defaults as suggested in the HTTP specification. |

***

### createRequest

Create a new request.

```php
public createRequest(string $method, mixed $uri): \Psr\Http\Message\RequestInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | The HTTP method associated with the request. |
| `$uri` | **mixed** | The URI associated with the request. If<br />the value is a string, the factory MUST create a UriInterface<br />instance based on it. |

***

### createUri

Create a new URI.

```php
public createUri(string $uri = &#039;&#039;): \Psr\Http\Message\UriInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |

***


***

