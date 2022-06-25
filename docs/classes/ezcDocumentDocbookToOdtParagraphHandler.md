***

# ezcDocumentDocbookToOdtParagraphHandler

Visit paragraphs.

Visit docbook <para/> and transform them into ODT <text:p/>.

* Full name: `\ezcDocumentDocbookToOdtParagraphHandler`
* Parent class: [`\ezcDocumentDocbookToOdtBaseHandler`](./ezcDocumentDocbookToOdtBaseHandler.md)

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

### __construct

Creates a new handler which utilizes the given $styler.

```php
public __construct(\ezcDocumentOdtStyler $styler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styler` | **\ezcDocumentOdtStyler** |  |

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
