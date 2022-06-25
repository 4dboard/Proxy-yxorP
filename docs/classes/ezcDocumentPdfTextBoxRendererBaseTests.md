***

# ezcDocumentPdfTextBoxRendererBaseTests

Test suite for class.



* Full name: `\ezcDocumentPdfTextBoxRendererBaseTests`
* Parent class: [`\ezcDocumentPdfTestCase`](./ezcDocumentPdfTestCase.md)



## Properties


### document



```php
protected $document
```






***

### xpath



```php
protected $xpath
```






***

### styles



```php
protected $styles
```






***

### page



```php
protected $page
```






***

### renderer

Renderer used for the tests

```php
protected string $renderer
```






***

## Methods


### suite



```php
public static suite(): mixed
```



* This method is **static**.







***

### setUp



```php
public setUp(): void
```











***

### testRenderParagraphWithoutMarkup



```php
public testRenderParagraphWithoutMarkup(): mixed
```











***

### testRenderJustifiedParagraphWithoutMarkup



```php
public testRenderJustifiedParagraphWithoutMarkup(): mixed
```











***

### testRenderCenteredParagraphWithoutMarkup



```php
public testRenderCenteredParagraphWithoutMarkup(): mixed
```











***

### testRenderRightAlignedParagraphWithoutMarkup



```php
public testRenderRightAlignedParagraphWithoutMarkup(): mixed
```











***

### testRenderParagraphWithBoldMarkup



```php
public testRenderParagraphWithBoldMarkup(): mixed
```











***

### testRenderJustifiedParagraphWithHyphenator



```php
public testRenderJustifiedParagraphWithHyphenator(): mixed
```











***

### testRenderParagraphWithDifferentTextSizes



```php
public testRenderParagraphWithDifferentTextSizes(): mixed
```











***

### testRenderParagraphMarkupSpaces



```php
public testRenderParagraphMarkupSpaces(): mixed
```











***

### testRenderParagraphReduceRedundantSpace



```php
public testRenderParagraphReduceRedundantSpace(): mixed
```











***

### testRenderParagraphLineHeight



```php
public testRenderParagraphLineHeight(): mixed
```











***

### testRenderParagraphWithReallyLongWord



```php
public testRenderParagraphWithReallyLongWord(): mixed
```











***

### testRenderParagraphWithoutPoints



```php
public testRenderParagraphWithoutPoints(): mixed
```











***

### testRenderParagraphWithPadding



```php
public testRenderParagraphWithPadding(): mixed
```











***

### testRenderParagraphWithMargin



```php
public testRenderParagraphWithMargin(): mixed
```











***

### testRenderParagraphWithPaddingMarginAndBackground



```php
public testRenderParagraphWithPaddingMarginAndBackground(): mixed
```











***

### testRenderParagraphWithPaddingMarginAndBorder



```php
public testRenderParagraphWithPaddingMarginAndBorder(): mixed
```











***


## Inherited methods


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
