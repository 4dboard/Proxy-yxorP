***

# ezcDocumentOdtStyleInferencer

An instance of this class inferences a style for an ODT element.

An instance of this class parses the styles of an ODT document defined for a certain element and returns an object
representation of this style.

* Full name: `\ezcDocumentOdtStyleInferencer`

## Properties

### odtDocument

ODT DOMDocument.

```php
protected \DOMDocument $odtDocument
```

***

### styleExtractor

Style extractor.

```php
protected \ezcDocumentOdtStyleExtractor $styleExtractor
```

***

### styleParser

Style parser.

```php
protected \ezcDocumentOdtStyleParser $styleParser
```

***

### styleFamilyMap

Maps ODT DOMElements to style families.

```php
protected $styleFamilyMap
```

***

### styleNameAttributeMap

Maps ODT namespaces to style name attributes

```php
protected $styleNameAttributeMap
```

***

## Methods

### __construct

Create a new style inferencer for the given document.

```php
public __construct(\DOMDocument $odtDocument): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtDocument` | **\DOMDocument** |  |

***

### getStyle

Returns the style for the given $odtElement.

```php
public getStyle(\DOMElement $odtElement): \ezcDocumentOdtStyle
```

Inferences the complete styling information for the given $odtElement.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |

***

### getListStyle

Returns the list-style for the given $odtElement.

```php
public getListStyle(\DOMElement $odtElement): \ezcDocumentOdtListStyle|null
```

$odtElement must be a <list /> element, otherwise null is returned since other elements do not have a list style
attached.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |

***

### getStyleFamily

Extracts the style family from $odtElement.

```php
protected getStyleFamily(\DOMElement $odtElement): string
```

Detects the style family the style for $odtElement resides in.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |

***

### getStyleName

Extracts the style name from the given $odtElement.

```php
protected getStyleName(\DOMElement $odtElement): string|null
```

Tries to determine the correct attribute for the style name from the given $odtElement. If a style name is specified, it
is returned. Otherwise null is returned to indicate that the default style must be used.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |

***

### getListStyleName

Returns the list style name of the given $odtElement.

```php
protected getListStyleName(\DOMElement $odtElement): string
```

Recursively searches for the style name of the given list element. The style name is only present at the top most list (
for nested lists).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |

yxorP::get('REQUEST')
