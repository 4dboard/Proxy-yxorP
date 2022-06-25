***

# ezcDocumentOdtStyleFilter

Filter mechanism based on ODT style information.

This filter consists of filte rules, which inference semantics for ODT elements based on their attached style
information.

* Full name: `\ezcDocumentOdtStyleFilter`
* Parent class: [`\ezcDocumentOdtBaseFilter`](./ezcDocumentOdtBaseFilter.md)

## Properties

### rules

Style filter rules.

```php
protected array|(\ezcDocumentOdtStyleFilterRule) $rules
```

***

### styleInferencer

Style inferencer.

```php
protected \ezcDocumentOdtStyleInferencer $styleInferencer
```

***

## Methods

### __construct

Creates a new style filter.

```php
public __construct(): mixed
```

***

### filter

Filter ODT document.

```php
public filter(\DOMDocument $dom): \DOMDocument
```

Filter for the document, which may modify / restructure a document and assign semantic information bits to the elements
in the tree.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dom` | **\DOMDocument** |  |

***

### filterNode

Filter node

```php
protected filterNode(\DOMElement $element): void
```

Depending on the element name, it parents and maybe element attributes semantic information is assigned to nodes.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |

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
