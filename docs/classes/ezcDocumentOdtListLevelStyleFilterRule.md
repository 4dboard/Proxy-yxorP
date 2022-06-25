***

# ezcDocumentOdtListLevelStyleFilterRule

Style filter rule to distinguish list types.

ODT does not distinguish between numbered and itemized lists on an XML
element level, but through styling information. This rule implements
detection of numbered lists.

* Full name: `\ezcDocumentOdtListLevelStyleFilterRule`
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

Detects numbered lists from ODT style information.

```php
public filter(\DOMElement $odtElement, \ezcDocumentOdtStyleInferencer $styleInferencer): mixed
```

This method detects the type of list in $odtElement by its list-level
style and sets the attributes for $odtElement accordingly to have it
converted properly to DocBook.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |
| `$styleInferencer` | **\ezcDocumentOdtStyleInferencer** |  |




***

### setNumberListProperties

Sets properties of numbered lists based on $listLevelProps.

```php
protected setNumberListProperties(\DOMElement $numList, \ezcDocumentOdtListLevelStyleNumber $listLevelProps): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numList` | **\DOMElement** |  |
| `$listLevelProps` | **\ezcDocumentOdtListLevelStyleNumber** |  |




***

### setItemListProperties

Sets properties of itemized lists based on $listLevelProps.

```php
protected setItemListProperties(\DOMElement $itemList, \ezcDocumentOdtListLevelStyleBullet $listLevelProps): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$itemList` | **\DOMElement** |  |
| `$listLevelProps` | **\ezcDocumentOdtListLevelStyleBullet** |  |




***

### getListLevel

Determines the list level of $odtElement.

```php
protected getListLevel(\DOMElement $odtElement): int
```

Note that leveling starts with 1!






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
