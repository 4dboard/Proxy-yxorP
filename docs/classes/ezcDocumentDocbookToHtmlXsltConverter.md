***

# ezcDocumentDocbookToHtmlXsltConverter

Converter for Docbook documents to XHtml using an available XSLT.

By default the converter will try to download and use the XSLT provided at
http://docbook.sourceforge.net/release/xsl/current/html/docbook.xsl. You may want to download and use the files locally.

* Full name: `\ezcDocumentDocbookToHtmlXsltConverter`
* Parent class: [`\ezcDocumentXsltConverter`](./ezcDocumentXsltConverter.md)

## Methods

### __construct

Construct new document converter.

```php
public __construct(\ezcDocumentDocbookToHtmlXsltConverterOptions $options = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentDocbookToHtmlXsltConverterOptions** |  |

***

### buildDocument

Build document

```php
protected buildDocument(\DOMDocument $document): \ezcDocumentXmlBase
```

Build document of appropriate type from the DOMDocument, created by the XSLT transformation.

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
