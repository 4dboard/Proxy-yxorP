***

# ezcDocumentDocbookToEzXmlLiteralLayoutHandler

Visit literallayout elements

Literallayout elements are used for code blocks in docbook, where normally some fixed width font is used, but also for
poems or simliarly formatted texts. In HTML those are represented by entirely different structures. Code blocks will be
transformed into 'pre' elements, while poem like texts will be handled by a 'p' element, in which each line is seperated
by 'br' elements.

* Full name: `\ezcDocumentDocbookToEzXmlLiteralLayoutHandler`
* Parent class: [`\ezcDocumentElementVisitorHandler`](./ezcDocumentElementVisitorHandler.md)

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
