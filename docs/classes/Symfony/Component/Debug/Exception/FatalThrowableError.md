***

# FatalThrowableError

Fatal Throwable Error.

* Full name: `\Symfony\Component\Debug\Exception\FatalThrowableError`
* Parent class: [`\Symfony\Component\Debug\Exception\FatalErrorException`](./FatalErrorException.md)

## Methods

### __construct

```php
public __construct(\Throwable $e): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\Throwable** |  |

***

## Inherited methods

### __construct

```php
public __construct(mixed $message, mixed $code, mixed $severity, mixed $filename, mixed $lineno, mixed $traceOffset = null, mixed $traceArgs = true, array $trace = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$code` | **mixed** |  |
| `$severity` | **mixed** |  |
| `$filename` | **mixed** |  |
| `$lineno` | **mixed** |  |
| `$traceOffset` | **mixed** |  |
| `$traceArgs` | **mixed** |  |
| `$trace` | **array** |  |

***

### setTrace

```php
protected setTrace(mixed $trace): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$trace` | **mixed** |  |

yxorP::get('REQUEST')
