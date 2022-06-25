***

# ezcDocumentPdfDefaultTableColumnWidthCalculator

Table column width calculator

Default implementation for a table column width calculator, which is responsible to estimate / guess / calculate
sensible column width for a docbook table definition.

Introspects the contents of a table and guesses based on included media and number of words in a cell what a reasonable
column width might be.

Since this implementation is mostly based on the count and length of words in one column, it might return unreasonably
small column sizes for single columns. This might lead to columns, where not even a single characters fits in, which may
cause problems while rendering.

* Full name: `\ezcDocumentPdfDefaultTableColumnWidthCalculator`
* Parent class: [`\ezcDocumentPdfTableColumnWidthCalculator`](./ezcDocumentPdfTableColumnWidthCalculator.md)

## Methods

### estimateWidths

Estimate column widths

```php
public estimateWidths(\DOMElement $table): array
```

Should return an array with the column widths given as float numbers between 0 and 1, which all add together to 1.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **\DOMElement** |  |

***

## Inherited methods

### estimateWidths

Estimate column widths

```php
public estimateWidths(\DOMElement $table): array
```

Should return an array with the column widths given as float numbers between 0 and 1, which all add together to 1.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **\DOMElement** |  |

yxorP::get('REQUEST')
