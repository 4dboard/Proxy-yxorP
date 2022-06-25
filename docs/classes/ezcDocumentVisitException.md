***

# ezcDocumentVisitException

Exception thrown, when the RST visitor could not visit an AST node properly.

* Full name: `\ezcDocumentVisitException`
* Parent class: [`\ezcDocumentException`](./ezcDocumentException.md)

## Methods

### __construct

Construct exception from errnous string and current position

```php
public __construct(int $level, string $message, string $file, int $line, int $position): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |
| `$message` | **string** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$position` | **int** |  |

***

## Inherited methods

### __construct

Constructs a new ezcBaseException with $message

```php
public __construct(string $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |

yxorP::get('REQUEST')
