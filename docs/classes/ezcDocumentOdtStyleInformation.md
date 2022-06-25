***

# ezcDocumentOdtStyleInformation

Struct class to cover style elements from an ODT document.

* Full name: `\ezcDocumentOdtStyleInformation`
* Parent class: [`\ezcBaseStruct`](./ezcBaseStruct.md)

## Properties

### styleSection

Style section of the target ODT.

```php
public \DOMElement $styleSection
```

***

### automaticStyleSection

Automatic style section of the target ODT.

```php
public mixed $automaticStyleSection
```

***

### fontFaceDecls

Font face declaration section of the target ODT.

```php
public \DOMElement $fontFaceDecls
```

***

## Methods

### __construct

Creates a new ODT style information struct.

```php
public __construct(\DOMElement $styleSection, \DOMElement $automaticStyleSection, \DOMElement $fontFaceDecls): mixed
```

The $styleSection and $fontFaceDecls must be from the target ODT DOMDocument.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleSection` | **\DOMElement** |  |
| `$automaticStyleSection` | **\DOMElement** |  |
| `$fontFaceDecls` | **\DOMElement** |  |

yxorP::get('REQUEST')
