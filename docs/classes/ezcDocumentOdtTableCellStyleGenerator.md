***

# ezcDocumentOdtTableCellStyleGenerator

Class to generate styles for table-cell elements.

* Full name: `\ezcDocumentOdtTableCellStyleGenerator`
* Parent class: [`\ezcDocumentOdtStyleGenerator`](./ezcDocumentOdtStyleGenerator.md)

## Properties

### tableCellPropertyGenerator

TableCell property generator.

```php
protected \ezcDocumentOdtStyleTableCellPropertyGenerator $tableCellPropertyGenerator
```

***

### paragraphPropertyGenerator

Paragraph property generator.

```php
protected \ezcDocumentOdtStyleParagraphPropertyGenerator $paragraphPropertyGenerator
```

***

## Methods

### __construct

Creates a new style genertaor.

```php
public __construct(\ezcDocumentOdtPcssConverterManager $styleConverters): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleConverters` | **\ezcDocumentOdtPcssConverterManager** |  |

***

### handles

Returns if the given $odtElement is handled by this generator.

```php
public handles(\DOMElement $odtElement): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |

***

### createStyle

Creates the styles with $styleAttributes for the given $odtElement.

```php
public createStyle(\ezcDocumentOdtStyleInformation $styleInfo, \DOMElement $odtElement, array $styleAttributes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleInfo` | **\ezcDocumentOdtStyleInformation** |  |
| `$odtElement` | **\DOMElement** |  |
| `$styleAttributes` | **array** |  |

***

## Inherited methods

### __construct

Creates a new style genertaor.

```php
public __construct(\ezcDocumentOdtPcssConverterManager $styleConverters): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleConverters` | **\ezcDocumentOdtPcssConverterManager** |  |

***

### handles

Returns if a style generator handles style generation for $odtElement.

```php
public handles(\DOMElement $odtElement): bool
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |

***

### createStyle

Creates the necessary styles to apply $styleAttributes to $odtElement.

```php
public createStyle(\ezcDocumentOdtStyleInformation $styleInfo, \DOMElement $odtElement, array $styleAttributes): mixed
```

This method should create the necessary styles to apply $styleAttributes to the given $odtElement. In addition, it must
set the correct attributes on $odtElement to source this style.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleInfo` | **\ezcDocumentOdtStyleInformation** |  |
| `$odtElement` | **\DOMElement** |  |
| `$styleAttributes` | **array** |  |

***

### getUniqueStyleName

Returns a unique style name with the given $prefix.

```php
protected getUniqueStyleName(string $prefix = &#039;style&#039;): string
```

Note that generated name is only unique within this style generator, which is no problem, if only a single style
generator takes care for a certain style family.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |

yxorP::get('REQUEST')
