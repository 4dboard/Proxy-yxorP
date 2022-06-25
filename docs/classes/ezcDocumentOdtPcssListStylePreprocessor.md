***

# ezcDocumentOdtPcssListStylePreprocessor

List style pre-processor.

Pre-processes list styles, since DocBook stores list bullet and numbering
format in an attribute. An instance of this class creates custom PCSS
properties for this information as follows:

- list-type = "bullet" / "number"
- list-bullet = bullet character to use
- list-number = number representative format

* Full name: `\ezcDocumentOdtPcssListStylePreprocessor`



## Properties


### bulletGuesser

List bullet character guesser.

```php
protected \ezcDocumentListBulletGuesser $bulletGuesser
```






***

### cssNumberMap

Mapping of CSS list-style-type values to representative numbers.

```php
protected $cssNumberMap
```






***

### docBookNumberMap

Mapping of DocBook numeration values to representative numbers.

```php
protected $docBookNumberMap
```






***

## Methods


### __construct

Creates a new list style processor.

```php
public __construct(): mixed
```











***

### process

Pre-process styles and return them.

```php
public process(\ezcDocumentOdtStyleInformation $styleInfo, \DOMElement $docBookElement, \DOMElement $odtElement, array $styles): array
```

Performs some detection of list styles in the $docBookElement and its
document and sets according PCSS properties in $styles.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleInfo` | **\ezcDocumentOdtStyleInformation** |  |
| `$docBookElement` | **\DOMElement** |  |
| `$odtElement` | **\DOMElement** |  |
| `$styles` | **array** |  |




***

### processListBullet

Detects the list bullet to be used and applies a special PCSS setting
for it.

```php
protected processListBullet(\DOMElement $docBookElement, array $styles): array
```

This method tries to detect the list bullet to be used for bullet-lists
and sets the special "list-bullet" PCSS property. The new $styles array
is returned. Note: "list-bullet" is not a standard CSS property and
therefore not supported by any other application using CSS. It is also
possible that this property name changes in future.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docBookElement` | **\DOMElement** |  |
| `$styles` | **array** |  |




***

### processListEnumeration

Detects the list numbering to use and applies a special PCSS setting for
it.

```php
protected processListEnumeration(\DOMElement $docBookElement, array $styles): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docBookElement` | **\DOMElement** |  |
| `$styles` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
