***

# ezcDocumentDocbookToHtmlBaseHandler

Basic converter which stores a list of handlers for each node in the docbook element tree. Those handlers will be
executed for the elements, when found.

The handler can then handle the repective subtree.

Additional handlers may be added by the user to the converter class.

* Full name: `\ezcDocumentDocbookToHtmlBaseHandler`
* Parent class: [`\ezcDocumentElementVisitorHandler`](./ezcDocumentElementVisitorHandler.md)
* This class is an **Abstract class**

## Properties

### head

Reference to HTML head element

```php
private \DOMElement $head
```

***

## Methods

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

## Inherited methods

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
