***

# ezcDocumentDocbookToHtmlSectionHandler

Visit docbook sections

Updates the docbook sections, which give us information about the depth in the document, and may also be reference
targets.

Also visits title elements, which are commonly the first element in sections and define section titles, which are
converted to HTML header elements of the respective level of indentation

* Full name: `\ezcDocumentDocbookToHtmlSectionHandler`
* Parent class: [`\ezcDocumentDocbookToHtmlBaseHandler`](./ezcDocumentDocbookToHtmlBaseHandler.md)

## Properties

### level

Current level of indentation in the docbook document.

```php
protected int $level
```

***

## Methods

### handle

Handle a node

```php
public handle(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```

Handle / transform a given node, and return the result of the conversion.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |
| `$root` | **mixed** |  |

***

## Inherited methods

### getHead

Get head of HTML document

```php
protected getHead(\DOMElement $element): \DOMElement
```

Get the root node of the HTML document head

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |

***

### handle

Handle a node.

```php
public handle(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```

Handle / transform a given node, and return the result of the conversion.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |
| `$root` | **mixed** |  |

yxorP::get('REQUEST')
