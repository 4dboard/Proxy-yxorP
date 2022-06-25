***

# ezcDocumentXsltConverter

Base class for conversions between XML documents using XSLT.

* Full name: `\ezcDocumentXsltConverter`
* Parent class: [`\ezcDocumentConverter`](./ezcDocumentConverter.md)
* This class is an **Abstract class**

## Properties

### xsltProcessor

XSLT processor created from the defined XSLT file.

```php
protected \XSLTProcessor $xsltProcessor
```

***

## Methods

### __construct

Construct converter

```php
public __construct(\ezcDocumentXsltConverterOptions $options = null): void
```

Construct converter from XSLT file, which is used for the actual conversion.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentXsltConverterOptions** |  |

***

### convert

Convert documents between two formats

```php
public convert(\ezcDocumentXmlBase $doc): \ezcDocumentXmlBase
```

Convert documents of the given type to the requested type.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$doc` | **\ezcDocumentXmlBase** |  |

***

### buildDocument

Build document

```php
protected buildDocument(\DOMDocument $document): \ezcDocumentXmlBase
```

Build document of appropriate type from the DOMDocument, created by the XSLT transformation.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |

***

## Inherited methods

### __construct

Construct new document

```php
public __construct(\ezcDocumentConverterOptions $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentConverterOptions** |  |

***

### convert

Convert documents between two formats

```php
public convert(\ezcDocument $doc): \ezcDocument
```

Convert documents of the given type to the requested type.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$doc` | **\ezcDocument** |  |

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
