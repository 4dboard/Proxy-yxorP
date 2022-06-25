***

# ezcDocumentOdtPcssStyler

PCSS based ODT styler.

This styler is based on the PCSS (simplified CSS rules) styling mechanism.
You can use the {@link} and {@link}
methods to add custom PCSS styles to it. It is used as the default in the
{@link}.

* Full name: `\ezcDocumentOdtPcssStyler`
* This class implements:
[`\ezcDocumentOdtStyler`](./ezcDocumentOdtStyler.md)



## Properties


### styleConverters

Style converter manager.

```php
private \ezcDocumentOdtPcssConverterManager $styleConverters
```






***

### styleGenerators

Set of style generators to use.

```php
private array|(\ezcDocumentOdtStyleGenerator) $styleGenerators
```






***

### styleInfo

Style sections for the current ODT document.

```php
private \ezcDocumentOdtStyleInformation $styleInfo
```






***

### styleInferencer

Style inferencer on DocBook source.

```php
private \ezcDocumentPcssStyleInferencer $styleInferencer
```






***

### stylePreProcessors

Style pre-processors.

```php
private array|(\ezcDocumentOdtPcssPreprocessor) $stylePreProcessors
```






***

### styleParser

PCSS parser.

```php
private \ezcDocumentPcssParser $styleParser
```






***

## Methods


### __construct

Creates a new ODT document styler.

```php
public __construct(): mixed
```

Creates a new styler. Note that {@link} must be
called before {@link} can be used. Otherwise an exception
is thrown.









***

### init

Initialize the styler with the given $styleInfo.

```php
public init(\DOMDocument $odtDocument): mixed
```

This method *must* be called *before* {@link} is called
at all. Otherwise an exception will be thrown.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtDocument` | **\DOMDocument** |  |




***

### applyStyles

Applies the given $style to the $odtElement.

```php
public applyStyles(\ezcDocumentLocateable $docBookElement, \DOMElement $odtElement): mixed
```

$style is an array of style information as produced by {@link}. The styling
information given in this array is applied to the $odtElement by
creating a new anonymous style in the ODT style section and applying the
corresponding attributes to reference this style.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docBookElement` | **\ezcDocumentLocateable** |  |
| `$odtElement` | **\DOMElement** |  |




***

### preProcessStyles

Pre-process styles using $stylePreProcessors.

```php
private preProcessStyles(\DOMElement $docBookElement, \DOMElement $odtElement, array $styles): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docBookElement` | **\DOMElement** |  |
| `$odtElement` | **\DOMElement** |  |
| `$styles` | **array** |  |




***

### addStylesheet

Adds the given PCSS $stylesheet definitions.

```php
public addStylesheet(string $stylesheet): mixed
```

Adds the PCSS styles given as a string in $stylesheet to the styler.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stylesheet` | **string** |  |




***

### addStylesheetFile

Adds a PCSS stylesheet from the given file.

```php
public addStylesheetFile(string $file): mixed
```

Reads the given PCSS $file and adds the contained stylesheets to the
styler.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |




***

### createStyleParser

Returns a PCSS style parser instance.

```php
private createStyleParser(): mixed
```

Initializes the $styleParser, if it has not been initialized, yet. Returns
the instance of the style parser to use.









***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
