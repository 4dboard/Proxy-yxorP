***

# ezcDocumentDocbookToEzXmlFootnoteHandler

Visit footnotes

Footnotes in docbook are emebdded at the position, the reference should occur. We store the contents, to be rendered at
the end of the HTML document, and only render a number referencing the actual footnote at the position of the footnote
in the docbook document.

* Full name: `\ezcDocumentDocbookToEzXmlFootnoteHandler`
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
