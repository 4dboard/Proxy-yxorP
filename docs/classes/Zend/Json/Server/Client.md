***

# Client

* Full name: `\Zend\Json\Server\Client`
* This class implements:
  [`\Zend\Server\Client`](../../Server/Client.md)

## Properties

### serverAddress

Full address of the JSON-RPC service.

```php
protected string $serverAddress
```

***

### httpClient

HTTP Client to use for requests.

```php
protected \Zend\Http\Client $httpClient
```

***

### lastRequest

Request of the last method call.

```php
protected \Zend\Json\Server\Request $lastRequest
```

***

### lastResponse

Response received from the last method call.

```php
protected \Zend\Json\Server\Response $lastResponse
```

***

### id

Request ID counter.

```php
protected int $id
```

***

## Methods

### __construct

Create a new JSON-RPC client to a remote server.

```php
public __construct(string $server, \Zend\Http\Client $httpClient = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **string** | Full address of the JSON-RPC service. |
| `$httpClient` | **\Zend\Http\Client** | HTTP Client to use for requests. |

***

### setHttpClient

Sets the HTTP client object to use for connecting the JSON-RPC server.

```php
public setHttpClient(\Zend\Http\Client $httpClient): \Zend\Json\Server\Client
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$httpClient` | **\Zend\Http\Client** | New HTTP client to use. |

**Return Value:**

Self instance.



***

### getHttpClient

Gets the HTTP client object.

```php
public getHttpClient(): \Zend\Http\Client
```

**Return Value:**

HTTP client.



***

### getLastRequest

The request of the last method call.

```php
public getLastRequest(): \Zend\Json\Server\Request
```

**Return Value:**

Request instance.



***

### getLastResponse

The response received from the last method call.

```php
public getLastResponse(): \Zend\Json\Server\Response
```

**Return Value:**

Response instance.



***

### doRequest

Perform a JSON-RPC request and return a response.

```php
public doRequest(\Zend\Json\Server\Request $request): \Zend\Json\Server\Response
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Zend\Json\Server\Request** | Request. |

**Return Value:**

Response.



***

### call

Send a JSON-RPC request to the service (for a specific method).

```php
public call(string $method, array $params = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Name of the method we want to call. |
| `$params` | **array** | Array of parameters for the method. |

**Return Value:**

Method call results.



***

### createRequest

Create request object.

```php
protected createRequest(string $method, array $params): \Zend\Json\Server\Request
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Method to call. |
| `$params` | **array** | List of arguments. |

**Return Value:**

Created request. yxorP::get('REQUEST')
