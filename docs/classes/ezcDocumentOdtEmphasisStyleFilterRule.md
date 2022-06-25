***

# ezcDocumentOdtEmphasisStyleFilterRule

Style filter rule to detect <emphasis/> elements.

This style filter rule checks <text:span/> elements in ODT for bold
font-weight. Such elements are considered to be translated to <emphasis/>
elements in DocBook.

* Full name: `\ezcDocumentOdtEmphasisStyleFilterRule`
* This class implements:
[`\ezcDocumentOdtStyleFilterRule`](./ezcDocumentOdtStyleFilterRule.md)




## Methods


### handles

Returns if the given $odtElement is handled by the rule.

```php
public handles(\DOMElement $odtElement): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |




***

### filter

Detects emphasis elements by their style.

```php
public filter(\DOMElement $odtElement, \ezcDocumentOdtStyleInferencer $styleInferencer): mixed
```

This method checks the style of the given $odtElement for bold
font-weight ("bold" or value >= 700). If this is detected, the type of
the element is set to be <emphasis/>.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |
| `$styleInferencer` | **\ezcDocumentOdtStyleInferencer** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
