***

# ezcDocumentOdtPcssFontStylePreprocessor

Font style pre-processor.

Extracts the font-family PCSS property and registers the font in the font-face-decls section of the ODT. Generates the
custom font-name PCSS property to be set in the actual style section.

* Full name: `\ezcDocumentOdtPcssFontStylePreprocessor`

## Methods

### process

Pre-process styles and return them.

```php
public process(\ezcDocumentOdtStyleInformation $styleInfo, \DOMElement $docBookElement, \DOMElement $odtElement, array $styles): array
```

Performs some detection of list styles in the $docBookElement and its document and sets according PCSS properties in
$styles.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleInfo` | **\ezcDocumentOdtStyleInformation** |  |
| `$docBookElement` | **\DOMElement** |  |
| `$odtElement` | **\DOMElement** |  |
| `$styles` | **array** |  |

***

### registerFont

Checks if the font is already registered or creates a new declaration.

```php
protected registerFont(\DOMElement $fontFaceDecls, string $fontFamily): string
```

Checks if the given $fontFamily is already registered in $fontFaceDecls. If it is, it's generic font-name is returned.
Otherwise a new font face declaration is created and the chosen font-name is returned.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fontFaceDecls` | **\DOMElement** |  |
| `$fontFamily` | **string** |  |

***

### createNewFontDecl

Creates a new font declaration and returns the font-name.

```php
protected createNewFontDecl(\DOMElement $fontFaceDecls, string $fontFamily): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fontFaceDecls` | **\DOMElement** |  |
| `$fontFamily` | **string** |  |

yxorP::get('REQUEST')
