***

# ezcDocumentDocbookToHtmlDefinitionListEntryHandler

Visit definition list entries

Definition list entries are encapsulated in docbook, while the HTML variant only consists of a list of terms and their
description. This method transforms the elements accordingly.

* Full name: `\ezcDocumentDocbookToHtmlDefinitionListEntryHandler`
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
