***

# ContextErrorException

Error Exception with Variable Context.

* Full name: `\Symfony\Component\Debug\Exception\ContextErrorException`
* Parent class: [`ErrorException`](../../../../ErrorException.md)

## Properties

### context

```php
private $context
```

***

## Methods

### __construct

```php
public __construct(mixed $message, mixed $code, mixed $severity, mixed $filename, mixed $lineno, mixed $context = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$code` | **mixed** |  |
| `$severity` | **mixed** |  |
| `$filename` | **mixed** |  |
| `$lineno` | **mixed** |  |
| `$context` | **mixed** |  |

***

### getContext

```php
public getContext(): array
```

**Return Value:**

Array of variables that existed when the exception occurred yxorP::get('REQUEST')
