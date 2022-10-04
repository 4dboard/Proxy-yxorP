***

# redirectMiddleware

* Full name: `\yxorP\app\lib\proxy\redirectMiddleware`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`HISTORY_HEADER`|public| |&#039;X-Proxy-Redirect-History&#039;|
|`STATUS_HISTORY_HEADER`|public| |&#039;X-Proxy-Redirect-Status-History&#039;|

## Properties

### defaultSettings

```php
public static $defaultSettings
```

* This property is **static**.

***

### nextHandler

```php
private $nextHandler
```

***

## Methods

### __construct

```php
public __construct(callable $nextHandler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nextHandler` | **callable** |  |

***

### __invoke

```php
public __invoke(\yxorP\app\lib\psr\http\message\requestInterface $request, array $options): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |

***

### checkRedirect

```php
public checkRedirect(\yxorP\app\lib\psr\http\message\requestInterface $request, array $options, \yxorP\app\lib\psr\http\message\responseInterface $response): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\app\lib\psr\http\message\responseInterface** |  |

***

### modifyRequest

```php
public modifyRequest(\yxorP\app\lib\psr\http\message\requestInterface $request, array $options, \yxorP\app\lib\psr\http\message\responseInterface $response): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |
| `$response` | **\yxorP\app\lib\psr\http\message\responseInterface** |  |

***

### guardMax

```php
private guardMax(\yxorP\app\lib\psr\http\message\requestInterface $request, array& $options): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |

***

### redirectUri

```php
private redirectUri(\yxorP\app\lib\psr\http\message\requestInterface $request, \yxorP\app\lib\psr\http\message\responseInterface $response, array $protocols): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\psr\http\message\requestInterface** |  |
| `$response` | **\yxorP\app\lib\psr\http\message\responseInterface** |  |
| `$protocols` | **array** |  |

***

### withTracking

```php
private withTracking(\yxorP\app\lib\proxy\promise\promiseInterface $promise, mixed $uri, mixed $statusCode): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promise` | **\yxorP\app\lib\proxy\promise\promiseInterface** |  |
| `$uri` | **mixed** |  |
| `$statusCode` | **mixed** |  |

***


***

