***

# ezcDocumentOdtPcssColorConverter

Style converter for color style properties.

* Full name: `\ezcDocumentOdtPcssColorConverter`
* This class implements:
  [`\ezcDocumentOdtPcssConverter`](./ezcDocumentOdtPcssConverter.md)

## Methods

### convert

Converts color properties.

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
