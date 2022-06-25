***

# ezcDocumentXhtmlTablesFilter

Filter, which tries to filter out tables, which do not have typical table contents. Eg. are used for layout instead of
content markup.

The filter checks the number of cells which contain mostly text and when the factor drops below a configured threshold
the table is removed from the content tree.

* Full name: `\ezcDocumentXhtmlTablesFilter`
* Parent class: [`\ezcDocumentXhtmlBaseFilter`](./ezcDocumentXhtmlBaseFilter.md)

## Properties

### threshold

Percent of cells which are required to contain textual content.

```php
protected float $threshold
```

***

## Methods

### __construct

Construct tables filter

```php
public __construct(float $threshold = 0.8): void
```

Construct the tables filter with the percentage values of cells with textual contents requierd for each table not to be
deleted. It defaults to .8 (80%).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$threshold` | **float** |  |

***

### filter

Filter XHtml document

```php
public filter(\DOMDocument $document): \DOMDocument
```

Filter for the document, which may modify / restructure a document and assign semantic information bits to the elements
in the tree.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |

***

### cellHasContent

Check if table has proper content

```php
protected cellHasContent(\DOMElement $cell): bool
```

Retrun true, if the cell has proper textual content.

Extensions of this method may check for patterns in the table contents for better detection of the table semantics.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cell` | **\DOMElement** |  |

***

## Inherited methods

### filter

Filter XHtml document

```php
public filter(\DOMDocument $document): \DOMDocument
```

Filter for the document, which may modify / restructure a document and assign semantic information bits to the elements
in the tree.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |

yxorP::get('REQUEST')
