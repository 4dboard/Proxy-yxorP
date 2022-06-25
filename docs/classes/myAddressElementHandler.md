***

# myAddressElementHandler

Basic converter which stores a list of handlers for each node in the docbook element tree. Those handlers will be
executed for the elements, when found.

The handler can then handle the repective subtree.

Additional handlers may be added by the user to the converter class.

* Full name: `\myAddressElementHandler`
* Parent class: [`\ezcDocumentDocbookToRstBaseHandler`](./ezcDocumentDocbookToRstBaseHandler.md)

## Methods

### handle

```php
public handle(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```

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
