***

# ezcDocumentDocbookToHtmlSpecialParagraphHandler

Visit special paragraphs

Transform the paragraphs with special annotations like <note> and
<caution> to paragraphs inside the HTML document with a class representing the meaning of the docbook elements. The
mapping which is used inside this method is used throughout the document comoponent and compatible with the RTS mapping.

* Full name: `\ezcDocumentDocbookToHtmlSpecialParagraphHandler`
* Parent class: [`\ezcDocumentDocbookToHtmlBaseHandler`](./ezcDocumentDocbookToHtmlBaseHandler.md)

## Properties

### types

Handled paragraph names / types

```php
protected array $types
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
