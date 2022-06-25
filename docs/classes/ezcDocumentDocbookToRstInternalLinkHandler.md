***

# ezcDocumentDocbookToRstInternalLinkHandler

Visit internal links.

Internal links are transformed into local links in HTML, where the name of the target is prefixed with a number sign.

* Full name: `\ezcDocumentDocbookToRstInternalLinkHandler`
* Parent class: [`\ezcDocumentDocbookToRstBaseHandler`](./ezcDocumentDocbookToRstBaseHandler.md)

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

### renderDirective

Render a directive

```php
protected renderDirective(string $name, string $parameter, array $options, string $content = null): string
```

Render a directive with the given paramters.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$parameter` | **string** |  |
| `$options` | **array** |  |
| `$content` | **string** |  |

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
