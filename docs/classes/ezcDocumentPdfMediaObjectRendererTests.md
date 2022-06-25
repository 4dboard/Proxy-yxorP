***

# ezcDocumentPdfMediaObjectRendererTests

Test suite for class.



* Full name: `\ezcDocumentPdfMediaObjectRendererTests`
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

## Methods


### suite



```php
public static suite(): mixed
```



* This method is **static**.







***

### testRenderMainSinglePage



```php
public testRenderMainSinglePage(): mixed
```











***

### testRenderInMultipleColumns



```php
public testRenderInMultipleColumns(): mixed
```











***

### testRenderLargeImage



```php
public testRenderLargeImage(): mixed
```











***

### testRenderHighImage



```php
public testRenderHighImage(): mixed
```











***

### testRenderWrappedLargeImageAndWrappedText



```php
public testRenderWrappedLargeImageAndWrappedText(): mixed
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
