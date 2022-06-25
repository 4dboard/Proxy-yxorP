***

# Request

* Full name: `\Zend\Json\Server\Request`

## Properties

### id

Request ID

```php
protected mixed $id
```

***

### isMethodError

Flag

```php
protected bool $isMethodError
```

***

### isParseError

Flag

```php
protected bool $isParseError
```

***

### method

Requested method

```php
protected string $method
```

***

### methodRegex

Regex for method

```php
protected string $methodRegex
```

***

### params

Request parameters

```php
protected array $params
```

***

### version

JSON-RPC version of request

```php
protected string $version
```

***

## Methods

### setOptions

Set request state

```php
public setOptions(array $options): \Zend\Json\Server\Request
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***

### addParam

Add a parameter to the request

```php
public addParam(mixed $value, string $key = null): \Zend\Json\Server\Request
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$key` | **string** |  |

***

### addParams

Add many params

```php
public addParams(array $params): \Zend\Json\Server\Request
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array** |  |

***

### setParams

Overwrite params

```php
public setParams(array $params): \Zend\Json\Server\Request
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array** |  |

***

### getParam

Retrieve param by index or key

```php
public getParam(int|string $index): mixed|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **int&#124;string** |  |

**Return Value:**

Null when not found



***

### getParams

Retrieve parameters

```php
public getParams(): array
```

***

### setMethod

Set request method

```php
public setMethod(string $name): \Zend\Json\Server\Request
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getMethod

Get request method name

```php
public getMethod(): string
```

***

### isMethodError

Was a bad method provided?

```php
public isMethodError(): bool
```

***

### isParseError

Was a malformed JSON provided?

```php
public isParseError(): bool
```

***

### setId

Set request identifier

```php
public setId(mixed $name): \Zend\Json\Server\Request
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### getId

Retrieve request identifier

```php
public getId(): mixed
```

***

### setVersion

Set JSON-RPC version

```php
public setVersion(string $version): \Zend\Json\Server\Request
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **string** |  |

***

### getVersion

Retrieve JSON-RPC version

```php
public getVersion(): string
```

***

### loadJson

Set request state based on JSON

```php
public loadJson(string $json): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$json` | **string** |  |

***

### toJson

Cast request to JSON

```php
public toJson(): string
```

***

### __toString

Cast request to string (JSON)

```php
public __toString(): string
```

yxorP::get('REQUEST')
