***

# ezcDocumentPdfDriverSvgTests

Test suite for class.



* Full name: `\ezcDocumentPdfDriverSvgTests`
* Parent class: [`\ezcDocumentPdfDriverTests`](./ezcDocumentPdfDriverTests.md)



## Properties


### extension

Extension of generated files

```php
protected string $extension
```






***

### expectedWidths

Expected font widths for calculateWordWidth tests

```php
protected array $expectedWidths
```






***

## Methods


### suite



```php
public static suite(): mixed
```



* This method is **static**.







***

### getDriver

Get driver to test

```php
protected getDriver(): \ezcDocumentPdfDriver
```











***


## Inherited methods


### getDriver

Get driver to test

```php
protected getDriver(): \ezcDocumentPdfDriver
```




* This method is **abstract**.






***

### testEstimateDefaultWordWidthWithoutPageCreation



```php
public testEstimateDefaultWordWidthWithoutPageCreation(): mixed
```











***

### testEstimateDefaultWordWidth



```php
public testEstimateDefaultWordWidth(): mixed
```











***

### testEstimateWordWidthDifferentSize



```php
public testEstimateWordWidthDifferentSize(): mixed
```











***

### testEstimateWordWidthDifferentSizeAndUnit



```php
public testEstimateWordWidthDifferentSizeAndUnit(): mixed
```











***

### testEstimateBoldWordWidth



```php
public testEstimateBoldWordWidth(): mixed
```











***

### testEstimateMonospaceWordWidth



```php
public testEstimateMonospaceWordWidth(): mixed
```











***

### testFontStyleFallback



```php
public testFontStyleFallback(): mixed
```











***

### testUtf8FontWidth



```php
public testUtf8FontWidth(): mixed
```











***

### testCustomFontWidthEstimation



```php
public testCustomFontWidthEstimation(): mixed
```











***

### testRenderHelloWorld



```php
public testRenderHelloWorld(): mixed
```











***

### testRenderHelloWorldSmallFont



```php
public testRenderHelloWorldSmallFont(): mixed
```











***

### testRenderSwitchingFontStates



```php
public testRenderSwitchingFontStates(): mixed
```











***

### testRenderUtf8Text



```php
public testRenderUtf8Text(): mixed
```











***

### testRenderPngImage



```php
public testRenderPngImage(): mixed
```











***

### testRenderResizedJpegImage



```php
public testRenderResizedJpegImage(): mixed
```











***

### testRenderColoredText



```php
public testRenderColoredText(): mixed
```











***

### testRenderPolygon



```php
public testRenderPolygon(): mixed
```











***

### testRenderPolylineClosed



```php
public testRenderPolylineClosed(): mixed
```











***

### testRenderPolylineOpen



```php
public testRenderPolylineOpen(): mixed
```











***

### testRenderLayeredPolygons



```php
public testRenderLayeredPolygons(): mixed
```











***

### testAddExternalLink



```php
public testAddExternalLink(): mixed
```











***

### testAddInternalLinkWithoutTarget



```php
public testAddInternalLinkWithoutTarget(): mixed
```











***

### testAddInternalLinkAndTarget



```php
public testAddInternalLinkAndTarget(): mixed
```











***

### testAddInternalLinkAndTargetOnNextPage



```php
public testAddInternalLinkAndTargetOnNextPage(): mixed
```











***

### testRenderUnknownFont



```php
public testRenderUnknownFont(): mixed
```











***

### testRenderPlainTTFFont



```php
public testRenderPlainTTFFont(): mixed
```











***

### testRenderUnregisteredBoldTTFFont



```php
public testRenderUnregisteredBoldTTFFont(): mixed
```











***

### testRenderRegisteredBoldTTFFont



```php
public testRenderRegisteredBoldTTFFont(): mixed
```











***

### testRenderMultipleAlternativeFonts



```php
public testRenderMultipleAlternativeFonts(): mixed
```











***

### testSetDocumentMetaDataTitle



```php
public testSetDocumentMetaDataTitle(): mixed
```











***

### testSetDocumentMetaDataAuthor



```php
public testSetDocumentMetaDataAuthor(): mixed
```











***

### testSetDocumentMetaDataSubject



```php
public testSetDocumentMetaDataSubject(): mixed
```











***

### testSetDocumentMetaDataCreated



```php
public testSetDocumentMetaDataCreated(): mixed
```











***

### testSetDocumentMetaDataModified



```php
public testSetDocumentMetaDataModified(): mixed
```











***

### testGenerateCompressedPdf



```php
public testGenerateCompressedPdf(): mixed
```











***

### testGeneratePdfWithOwnerPassword



```php
public testGeneratePdfWithOwnerPassword(): mixed
```











***

### testGenerateEncryptedPdf



```php
public testGenerateEncryptedPdf(): mixed
```











***

### testGenerateEncryptedProtectedPdf



```php
public testGenerateEncryptedProtectedPdf(): mixed
```











***

### setUp



```php
protected setUp(): void
```











***

### tearDown



```php
protected tearDown(): void
```











***

### assertPdfDocumentsSimilar

Assert that the given PDF document content is simlar to the
PDF document referenced by its test case name.

```php
protected assertPdfDocumentsSimilar(string $content, string $name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$name` | **string** |  |




***

### renderFullDocument

Test rendering of a full document

```php
protected renderFullDocument(string $file, string $fileName, array $styles = array()): void
```

Test the rendering of a given full document with an
additional set of user configured styles.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |
| `$fileName` | **string** |  |
| `$styles` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
