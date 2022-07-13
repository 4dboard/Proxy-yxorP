***

# SyntaxError

* Full name: `\ColinODell\Json5\SyntaxError`
* Parent class: [`\JsonException`](../../JsonException.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### lineNumber

```php
private int $lineNumber
```

***

### column

```php
private int $column
```

***

## Methods

### __construct

SyntaxError constructor.

```php
public __construct(string $message, int $linenumber, int $columnNumber, \Throwable|null $previous = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$linenumber` | **int** |  |
| `$columnNumber` | **int** |  |
| `$previous` | **\Throwable&#124;null** |  |

***

### getLineNumber

```php
public getLineNumber(): int
```

***

### getColumn

```php
public getColumn(): int
```

***


***

