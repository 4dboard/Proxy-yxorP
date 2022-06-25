***

# ezcDocumentElementVisitorHandler

Abstract base handler class for conversions done by converters extending from ezcDocumentDocbookElementVisitorConverter.

* Full name: `\ezcDocumentElementVisitorHandler`
* This class is an **Abstract class**

## Methods

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
