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

This method receives a $targetProperty DOMElement and converts the given
style with $styleName and $styleValue to attributes on this
$targetProperty.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$targetProperty` | **\DOMElement** |  |
| `$styleName` | **string** |  |
| `$styleValue` | **\ezcDocumentPcssStyleValue** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
