***

# ezcDocumentOdtPcssFontSizeConverter

Style converter for font-size style properties.

* Full name: `\ezcDocumentOdtPcssFontSizeConverter`
* This class implements:
  [`\ezcDocumentOdtPcssConverter`](./ezcDocumentOdtPcssConverter.md)

## Methods

### convert

Converts the 'font-size' CSS style.

```php
public convert(\DOMElement $targetProperty, string $styleName, \ezcDocumentPcssStyleValue $styleValue): mixed
```

This method receives a $targetProperty DOMElement and converts the given style with $styleName and $styleValue to
attributes on this $targetProperty.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$targetProperty` | **\DOMElement** |  |
| `$styleName` | **string** |  |
| `$styleValue` | **\ezcDocumentPcssStyleValue** |  |

yxorP::get('REQUEST')
