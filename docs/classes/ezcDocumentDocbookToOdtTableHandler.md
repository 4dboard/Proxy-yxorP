***

# ezcDocumentDocbookToOdtTableHandler

Visit tables.

Visit docbook <table/> and child elements and transform them into ODT <table:table/>
and corresponding child elements.

* Full name: `\ezcDocumentDocbookToOdtTableHandler`
* Parent class: [`\ezcDocumentDocbookToOdtBaseHandler`](./ezcDocumentDocbookToOdtBaseHandler.md)

## Properties

### methodMap

Maps table element to handling methods in this class.

```php
protected $methodMap
```

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

### handleTable

Handles the table base element.

```php
protected handleTable(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |
| `$root` | **mixed** |  |

***

### createCellDefinition

Creates the ODT cell defintions.

```php
protected createCellDefinition(\DOMElement $docBookTable, \DOMElement $odtTable): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docBookTable` | **\DOMElement** |  |
| `$odtTable` | **\DOMElement** |  |

***

### handleCaption

Handles table captions.

```php
protected handleCaption(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |
| `$root` | **mixed** |  |

***

### handleThead

Handles table headers.

```php
protected handleThead(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |
| `$root` | **mixed** |  |

***

### handleTbody

Handles table bodies.

```php
protected handleTbody(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```

Simply ignores the tag, since ODT does not have table body marked up.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |
| `$root` | **mixed** |  |

***

### handleTr

Handles table rows.

```php
protected handleTr(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |
| `$root` | **mixed** |  |

***

### handleTd

Handles table cells.

```php
protected handleTd(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```

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
