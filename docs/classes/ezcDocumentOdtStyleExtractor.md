***

# ezcDocumentOdtStyleExtractor

Extracts style information from an ODT document.

An instance of this class is used to extract styles from an ODT
DOMDocument.

* Full name: `\ezcDocumentOdtStyleExtractor`



## Properties


### odt

The ODT document.

```php
protected \DOMDocument $odt
```






***

### xpath

XPath object on the ODT document.

```php
protected \DOMXPath $xpath
```






***

## Methods


### __construct

Creates a new style extractor for the given $odt document.

```php
public __construct(\DOMDocument $odt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odt` | **\DOMDocument** |  |




***

### extractStyle

Extract the style identified by $family and $name.

```php
public extractStyle(string $family, string $name = null): \DOMElement
```

Returns the DOMElement for the style identified by $family and $name. If
$name is left out, the default style for $family will be extracted.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$family` | **string** |  |
| `$name` | **string** |  |




***

### extractListStyle

Extracts the list style identified by $name.

```php
public extractListStyle(string $name): \DOMElement
```

Returns the DOMElement for the list style identified by $name.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
