***

# aRequestException

* Full name: `\yxorP\app\lib\proxy\exception\aRequestException`
* Parent class: [`\yxorP\app\lib\proxy\exception\transferException`](./transferException.md)

## Properties

### request

```php
private $request
```

***

### response

```php
private $response
```

***

### handlerContext

```php
private $handlerContext
```

***

## Methods

### __construct

```php
public __construct(mixed $message, \yxorP\app\lib\psr\http\message\requestInterface $request, \yxorP\app\lib\psr\http\message\responseInterface $response = null, \Exception $previous = null, array $handlerContext = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$request` | **\yxorP\app\lib\psr\http\message\requestInterface** |  |
| `$response` | **\yxorP\app\lib\psr\http\message\responseInterface** |  |
| `$previous` | **\Exception** |  |
| `$handlerContext` | **array** |  |

***

### wrapException

```php
public static wrapException(\yxorP\app\lib\psr\http\message\requestInterface $request, \Exception $e): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\psr\http\message\requestInterface** |  |
| `$e` | **\Exception** |  |

***

### create

```php
public static create(\yxorP\app\lib\psr\http\message\requestInterface $request, \yxorP\app\lib\psr\http\message\responseInterface $response = null, \Exception $previous = null, array $ctx = []): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\psr\http\message\requestInterface** |  |
| `$response` | **\yxorP\app\lib\psr\http\message\responseInterface** |  |
| `$previous` | **\Exception** |  |
| `$ctx` | **array** |  |

***

### obfuscateUri

```php
private static obfuscateUri(\yxorP\app\lib\psr\http\message\uriInterface $uri): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\yxorP\app\lib\psr\http\message\uriInterface** |  |

***

### getResponseBodySummary

```php
public static getResponseBodySummary(\yxorP\app\lib\psr\http\message\responseInterface $response): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **\yxorP\app\lib\psr\http\message\responseInterface** |  |

***

### getRequest

```php
public getRequest(): mixed
```

***

### getResponse

```php
public getResponse(): mixed
```

***

### hasResponse

```php
public hasResponse(): mixed
```

***

### getHandlerContext

```php
public getHandlerContext(): mixed
```

***


***

