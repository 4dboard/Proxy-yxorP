***

# ezcDocumentDocbookToWikiTableHandler

Visit tables.

The RST table rendering algorithm tries losely to fit a table in the provided document dimensions. This may not always
work for over long words, or if the table cells contain literal blocks which can not be wrapped.

For this the algorithm estiamtes the available width per column, equally distributes this available width over all
columns (which might be far from optimal), and extends the total table width if some cell content exceeds the column
width.

The initial table cell estiation happens inside the function estimateColumnWidths() which you might want to extend to
fit your needs better.

* Full name: `\ezcDocumentDocbookToWikiTableHandler`
* Parent class: [`\ezcDocumentDocbookToWikiBaseHandler`](./ezcDocumentDocbookToWikiBaseHandler.md)

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
