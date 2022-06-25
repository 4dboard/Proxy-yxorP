***

# Error

Struct to record a validation error.

* Full name: `\phpDocumentor\Descriptor\Validator\Error`

## Properties

### severity

```php
protected string $severity
```

***

### code

```php
protected string $code
```

***

### line

```php
protected int $line
```

***

### context

```php
protected array $context
```

***

## Methods

### __construct

```php
public __construct(string $severity, string $code, int $line, array $context = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$severity` | **string** |  |
| `$code` | **string** |  |
| `$line` | **int** |  |
| `$context` | **array** |  |

***

### getCode

```php
public getCode(): string
```

**Return Value:**

$code



***

### getLine

```php
public getLine(): int
```

**Return Value:**

$line



***

### getSeverity

```php
public getSeverity(): string
```

**Return Value:**

$severity



***

### getContext

```php
public getContext(): array
```

**Return Value:**

$context yxorP::get('REQUEST')
