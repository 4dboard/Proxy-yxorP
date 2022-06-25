***

# ezcDocumentParser

A base class for document parsers

* Full name: `\ezcDocumentParser`
* This class implements:
  [`\ezcDocumentErrorReporting`](./ezcDocumentErrorReporting.md)
* This class is an **Abstract class**

## Properties

### options

XML document base options.

```php
protected \ezcDocumentParserOptions $options
```

***

### properties

Additional parser properties.

```php
protected array $properties
```

***

## Methods

### __construct

Construct new document

```php
public __construct(\ezcDocumentParserOptions $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentParserOptions** |  |

***

### triggerError

Trigger parser error

```php
public triggerError(int $level, string $message, string $file = null, int $line = null, int $position = null): void
```

Emit a parser error and handle it dependiing on the current error reporting settings.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |
| `$message` | **string** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$position` | **int** |  |

***

### getErrors

Return list of errors occured during visiting the document.

```php
public getErrors(): array
```

May be an empty array, if on errors occured, or a list of ezcDocumentVisitException objects.

yxorP::get('REQUEST')
