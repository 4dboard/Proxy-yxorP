***

# Server

* Full name: `\Zend\Json\Server\Server`
* Parent class: [`AbstractServer`](../../Server/AbstractServer.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERSION_1`|public| |&#039;1.0&#039;|
|`VERSION_2`|public| |&#039;2.0&#039;|

## Properties

### returnResponse

Flag: whether or not to auto-emit the response

```php
protected bool $returnResponse
```

***

### overwriteExistingMethods

Inherited from Zend\Server\AbstractServer

```php
protected bool $overwriteExistingMethods
```

***

### request

Request object

```php
protected \Zend\Json\Server\Request $request
```

***

### response

Response object

```php
protected \Zend\Json\Server\Response $response
```

***

### serviceMap

SMD object

```php
protected \Zend\Json\Server\Smd $serviceMap
```

***

### smdMethods

SMD class accessors

```php
protected array $smdMethods
```

***

## Methods

### addFunction

Attach a function or callback to the server

```php
public addFunction(string|array|callable $function, string $namespace = &#039;&#039;): \Zend\Json\Server\Server
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **string&#124;array&#124;callable** | Valid PHP callback |
| `$namespace` | **string** | Ignored |

***

### setClass

Register a class with the server

```php
public setClass(string $class, string $namespace = &#039;&#039;, mixed $argv = null): \Zend\Json\Server\Server
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |
| `$namespace` | **string** | Ignored |
| `$argv` | **mixed** | Ignored |

***

### fault

Indicate fault response

```php
public fault(string $fault = null, int $code = 404, mixed $data = null): \Zend\Json\Server\Error
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fault` | **string** |  |
| `$code` | **int** |  |
| `$data` | **mixed** |  |

***

### handle

Handle request

```php
public handle(\Zend\Json\Server\Request $request = false): null|\Zend\Json\Server\Response
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Zend\Json\Server\Request** |  |

***

### loadFunctions

Load function definitions

```php
public loadFunctions(array|\Zend\Server\Definition $definition): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **array&#124;\Zend\Server\Definition** |  |

***

### setPersistence

```php
public setPersistence(mixed $mode): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **mixed** |  |

***

### setRequest

Set request object

```php
public setRequest(\Zend\Json\Server\Request $request): \Zend\Json\Server\Server
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Zend\Json\Server\Request** |  |

***

### getRequest

Get JSON-RPC request object

```php
public getRequest(): \Zend\Json\Server\Request
```

***

### setResponse

Set response object

```php
public setResponse(\Zend\Json\Server\Response $response): \Zend\Json\Server\Server
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **\Zend\Json\Server\Response** |  |

***

### getResponse

Get response object

```php
public getResponse(): \Zend\Json\Server\Response
```

***

### setReturnResponse

Set return response flag

```php
public setReturnResponse(bool $flag = true): \Zend\Json\Server\Server
```

If true, {@link} will return the response instead of automatically sending it back to the requesting client.

The response is always available via {@link}.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** |  |

***

### getReturnResponse

Retrieve return response flag

```php
public getReturnResponse(): bool
```

***

### __call

Overload to accessors of SMD object

```php
public __call(string $method, array $args): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$args` | **array** |  |

***

### getServiceMap

Retrieve SMD object

```php
public getServiceMap(): \Zend\Json\Server\Smd
```

***

### _addMethodServiceMap

Add service method to service map

```php
protected _addMethodServiceMap(\Zend\Server\Method\Definition $method): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **\Zend\Server\Method\Definition** |  |

***

### _fixType

Translate PHP type to JSON type

```php
protected _fixType(string $type): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |

***

### _getDefaultParams

Get default params from signature

```php
protected _getDefaultParams(array $args, array $params): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** |  |
| `$params` | **array** |  |

***

### isAssociative

check whether array is associative or not

```php
private isAssociative(array $array): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |

***

### _getParams

Get method param type

```php
protected _getParams(\Zend\Server\Method\Definition $method): string|array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **\Zend\Server\Method\Definition** |  |

***

### _getReadyResponse

Set response state

```php
protected _getReadyResponse(): \Zend\Json\Server\Response
```

***

### _getReturnType

Get method return type

```php
protected _getReturnType(\Zend\Server\Method\Definition $method): string|array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **\Zend\Server\Method\Definition** |  |

***

### _getSmdMethods

Retrieve list of allowed SMD methods for proxying

```php
protected _getSmdMethods(): array
```

***

### _handle

Internal method for handling request

```php
protected _handle(): void
```

yxorP::get('REQUEST')
