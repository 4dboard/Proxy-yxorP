***

# ezcDocumentDocbookToHtmlParagraphHandler

Visit paragraphs

Visit docbook paragraphs and transform them into HTML paragraphs.

* Full name: `\ezcDocumentDocbookToHtmlParagraphHandler`
* Parent class: [`\ezcDocumentDocbookToHtmlBaseHandler`](./ezcDocumentDocbookToHtmlBaseHandler.md)

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
