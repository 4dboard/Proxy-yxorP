***

# ezcDocumentOdtStyleParser

Parses ODT styles.

An instance of this class is used parse style information from an DOMElement of a ODT document.

* Full name: `\ezcDocumentOdtStyleParser`

## Properties

### listClassMap

Maps list-leve style XML elements to classes.

```php
protected static $listClassMap
```

* This property is **static**.

***

### listAttributeMap

Maps XML attributes to object attributes.

```php
protected static array $listAttributeMap
```

* This property is **static**.

***

## Methods

### parseStyle

Parses the given $odtStyle.

```php
public parseStyle(\DOMElement $odtStyle, string $family, string $name = null): \ezcDocumentOdtStyle
```

Parses the given $odtStyle and returns a style of $family with $name.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtStyle` | **\DOMElement** |  |
| `$family` | **string** |  |
| `$name` | **string** |  |

***

### parseListStyle

Parses the given $odtListStyle.

```php
public parseListStyle(\DOMElement $odtListStyle, string $name): \ezcDocumentOdtListStyle
```

Parses the given $odtListStyle and returns a list style with $name.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtListStyle` | **\DOMElement** |  |
| `$name` | **string** |  |

***

### parseListLevel

Parses a list level style.

```php
protected parseListLevel(\DOMElement $listLevelElement): \ezcDocumentOdtListLevelStyle
```

Parses the given $listLevelElement and returns a corresponding list-level style object.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$listLevelElement` | **\DOMElement** |  |

***

### parseProperties

Parses the given property.

```php
protected parseProperties(\DOMElement $propElement): \ezcDocumentOdtFormattingProperties
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$propElement` | **\DOMElement** |  |

yxorP::get('REQUEST')
