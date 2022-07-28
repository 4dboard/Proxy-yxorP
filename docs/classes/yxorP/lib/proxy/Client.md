***

# Client





* Full name: `\yxorP\lib\proxy\Client`
* This class implements:
[`\yxorP\lib\proxy\ClientInterface`](./ClientInterface.md)



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
  yxorP\lib\proxy\Promise\PromiseInterface that is fulfilled with a
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

* \yxorP\lib\proxy\RequestOptions - for a list of available request options.

***

### __call



```php
public __call(string $method, array $args): \yxorP\lib\proxy\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$args` | **array** |  |




***

### requestAsync

Create and send an asynchronous HTTP request.

```php
public requestAsync(string $method, string|\yxorP\inc\Psr\Http\Message\UriInterface $uri = &#039;&#039;, array $options = []): \yxorP\lib\proxy\Promise\PromiseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well. Use an array to provide a URL
template and additional variables to use in the URL template expansion.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | HTTP method |
| `$uri` | **string&#124;\yxorP\inc\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. See \yxorP\lib\proxy\RequestOptions. |




***

### request

Create and send an HTTP request.

```php
public request(string $method, string|\yxorP\inc\Psr\Http\Message\UriInterface $uri = &#039;&#039;, array $options = []): \yxorP\inc\Psr\Http\Message\ResponseInterface
```

Use an absolute path to override the base path of the client, or a
relative path to append to the base path of the client. The URL can
contain the query string as well.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | HTTP method. |
| `$uri` | **string&#124;\yxorP\inc\Psr\Http\Message\UriInterface** | URI object or string. |
| `$options` | **array** | Request options to apply. See \yxorP\lib\proxy\RequestOptions. |




***

### send

Send an HTTP request.

```php
public send(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options = []): \yxorP\inc\Psr\Http\Message\ResponseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** | Request to send |
| `$options` | **array** | Request options to apply to the given<br />request and to the transfer. See \yxorP\lib\proxy\RequestOptions. |




***

### sendAsync

Asynchronously send an HTTP request.

```php
public sendAsync(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options = []): \yxorP\lib\proxy\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** | Request to send |
| `$options` | **array** | Request options to apply to the given<br />request and to the transfer. See \yxorP\lib\proxy\RequestOptions. |




***

### getConfig

Get a client configuration option.

```php
public getConfig(string|null $option = null): mixed
```

These options include default request options of the client, a "handler"
(if utilized by the concrete client), and a "base_uri" if utilized by
the concrete client.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string&#124;null** | The config option to retrieve. |




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

### buildUri



```php
private buildUri(string|null $uri, array $config): \yxorP\inc\Psr\Http\Message\UriInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;null** |  |
| `$config` | **array** |  |




***

### invalidBody

Throw Exception with pre-set message.

```php
private invalidBody(): void
```











***

### transfer

Transfers the given request and applies request options.

```php
private transfer(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options): \yxorP\lib\proxy\Promise\PromiseInterface
```

The URI of the request is not modified and the request options are used
as-is without merging in default options.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** | See \yxorP\lib\proxy\RequestOptions. |




***

### applyOptions

Applies the array of request options to a request.

```php
private applyOptions(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array& $options): \yxorP\inc\Psr\Http\Message\RequestInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***


***

