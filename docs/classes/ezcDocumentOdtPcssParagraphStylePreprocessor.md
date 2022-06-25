***

# ezcDocumentOdtPcssParagraphStylePreprocessor

Paragraph style pre-processor.

Pre-processes paragraph styles. If there is a <beginpage/> element right before the processed paragraph the custom "
break-before" PCSS property is set to "page", which will result in a corresponding ODT style attribute.

* Full name: `\ezcDocumentOdtPcssParagraphStylePreprocessor`

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

### isOnNewPage

Returns if the given $docBookElement is to be rendered on a new page.

```php
protected isOnNewPage(\DOMElement $docBookElement): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docBookElement` | **\DOMElement** |  |

yxorP::get('REQUEST')
