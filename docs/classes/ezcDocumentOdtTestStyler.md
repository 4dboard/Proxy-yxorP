***

# ezcDocumentOdtTestStyler





* Full name: `\ezcDocumentOdtTestStyler`
* This class implements:
[`\ezcDocumentOdtStyler`](./ezcDocumentOdtStyler.md)



## Properties


### odtDocument



```php
public $odtDocument
```






***

### seenElements



```php
public $seenElements
```






***

## Methods


### init

Initialize the styler with the given $odtDocument.

```php
public init(\DOMDocument $odtDocument): mixed
```

This method *must* be called *before* {@link} is called
at all. Otherwise an exception will be thrown. This method is called by
the {@link} whenever a new ODT document
is to be converted.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtDocument` | **\DOMDocument** |  |




***

### applyStyles

Applies the style information associated with $docBookElement to
$odtElement.

```php
public applyStyles(\ezcDocumentLocateable $docBookElement, \DOMElement $odtElement): mixed
```

This method must apply the style information associated with the given
$docBookElement to the $odtElement given.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docBookElement` | **\ezcDocumentLocateable** |  |
| `$odtElement` | **\DOMElement** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
