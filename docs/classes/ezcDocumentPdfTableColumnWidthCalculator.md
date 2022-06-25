***

# ezcDocumentPdfTableColumnWidthCalculator

Table column width calculator

Base class for a table column width calculator, which is responsible to estimate / guess / calculate sensible column
width for a docbook table definitions.

* Full name: `\ezcDocumentPdfTableColumnWidthCalculator`
* This class is an **Abstract class**

## Methods

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
