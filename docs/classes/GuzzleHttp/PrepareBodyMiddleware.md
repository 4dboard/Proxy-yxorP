***

# PrepareBodyMiddleware

Prepares requests that contain a body, adding the Content-Length,
Content-Type, and Expect headers.

* Full name: `\GuzzleHttp\PrepareBodyMiddleware`

## Properties

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
public __invoke(\Psr\Http\Message\RequestInterface $request, array $options): \GuzzleHttp\Promise\PromiseInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |

***

### addExpectHeader

Add expect header

```php
private addExpectHeader(\Psr\Http\Message\RequestInterface $request, array $options, array& $modify): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$modify` | **array** |  |

***


***

