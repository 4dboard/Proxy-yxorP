***

# ezcDocumentDocbookToOdtMappingHandler

Simple mapping handler

Performs a simple 1 to 1 mapping between DocBook elements and ODT elements.

* Full name: `\ezcDocumentDocbookToOdtMappingHandler`
* Parent class: [`\ezcDocumentDocbookToOdtBaseHandler`](./ezcDocumentDocbookToOdtBaseHandler.md)

## Properties

### mapping

Mapping of element names.

```php
protected $mapping
```

Mapping from DocBook to ODT elements. The local name of a DocBook element is used as the key to look up a corresponding
element in ODT. Since ODT utilizes multiple namespaces, an array of namespace and local name for the target element is
returned.




***

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
