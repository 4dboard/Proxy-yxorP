***

# ezcDocumentXhtmlContentLocatorFilter

Filter, which tries to lacate the relevant content nodes in a HTML document, and ignores all layout stuff around that.

* Full name: `\ezcDocumentXhtmlContentLocatorFilter`
* Parent class: [`\ezcDocumentXhtmlBaseFilter`](./ezcDocumentXhtmlBaseFilter.md)

## Properties

### bonus

Bonus for special HTML element, so that the importance of a node is increased, if it has such child nodes.

```php
protected array $bonus
```

***

### maximumImportance

Maximum importance found in the document.

```php
protected float $maximumImportance
```

***

### mostImportantNode

Most important node in the document

```php
protected float $mostImportantNode
```

***

## Methods

### filter

Filter XHtml document

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

### calculateContentFactors

Calculate content factors

```php
protected calculateContentFactors(\DOMElement $element): float
```

Try to calculate some kind of probability for each node in the document, that the respective node is the root of the
actual document content.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |

***

## Inherited methods

### filter

Filter XHtml document

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
