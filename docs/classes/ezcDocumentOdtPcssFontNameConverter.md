***

# ezcDocumentOdtPcssFontNameConverter

Style converter for the special font-name style property.

* Full name: `\ezcDocumentOdtPcssFontNameConverter`
* This class implements:
  [`\ezcDocumentOdtPcssConverter`](./ezcDocumentOdtPcssConverter.md)

## Methods

### convert

Converts the special 'font-name' CSS style property.

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
