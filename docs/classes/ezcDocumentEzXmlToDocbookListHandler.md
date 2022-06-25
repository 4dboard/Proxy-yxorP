***

# ezcDocumentEzXmlToDocbookListHandler

Visit eZXml lists.

Lists are children of paragraphs in eZXml, but are part of the section nodes in docbook. The containing paragraph needs
to be split up and the list node moved to the top level node.

* Full name: `\ezcDocumentEzXmlToDocbookListHandler`
* Parent class: [`\ezcDocumentElementVisitorHandler`](./ezcDocumentElementVisitorHandler.md)

## Methods

### handle

Handle a node.

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
