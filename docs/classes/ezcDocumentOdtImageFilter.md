***

# ezcDocumentOdtImageFilter

Filter which extracts images from FODT (flat ODT) documents and stores them in the desired directory.

* Full name: `\ezcDocumentOdtImageFilter`
* Parent class: [`\ezcDocumentOdtBaseFilter`](./ezcDocumentOdtBaseFilter.md)

## Properties

### options

ODT document options.

```php
protected \ezcDocumentOdtOptions $options
```

***

## Methods

### __construct

Creates the filter object.

```php
public __construct(\ezcDocumentOdtOptions $options): void
```

Creates the filter object. Makes use of $imageDirectory, defined in the $options.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentOdtOptions** |  |

***

### filter

Filter ODT document.

```php
public filter(\DOMDocument $document): \DOMDocument
```

Filter for the document, which may modify / restructure a document and assign semantic information bits to the elements
in the tree.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |

***

### extractBinary

Extracts the binary content from $binary into a file.

```php
protected extractBinary(\DOMElement $binary): mixed
```

Extracts the binary image content from $binary to a file in the image directory ({@link}). The file name is created
using {@link} and set as an XLink HREF on the parent <draw:image/> element, as it would typically be in an ODT.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$binary` | **\DOMElement** |  |

***

## Inherited methods

### filter

Filter ODT document

```php
public filter(\DOMDocument $document): \DOMDocument
```

Filter for the document, which may modify / restructure a document and assign semantic information bits to the elements
in the tree.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |

yxorP::get('REQUEST')
