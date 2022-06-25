***

# ezcDocumentPdfRendererTextDecorationsTests

Test suite for class.



* Full name: `\ezcDocumentPdfRendererTextDecorationsTests`
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

### oldErrorReporting

Old error reporting level restored after the test

```php
protected int $oldErrorReporting
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

### tearDown



```php
public tearDown(): void
```











***

### getDrivers

Return an array of drivers to test with.

```php
public static getDrivers(): void
```



* This method is **static**.







***

### checkTestEnv

Ensure the test environment is properly set up for the currently
selected driver.

```php
protected checkTestEnv(\ezcDocumentPdfDriver $driver): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\ezcDocumentPdfDriver** |  |




***

### renderPdf



```php
protected renderPdf(\ezcDocumentPdfDriver $driver, mixed $paragraph = 2): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\ezcDocumentPdfDriver** |  |
| `$paragraph` | **mixed** |  |




***

### testRenderParagraphWithoutMarkup



```php
public testRenderParagraphWithoutMarkup(\ezcDocumentPdfDriver $driver): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\ezcDocumentPdfDriver** |  |




***

### testRenderParagraphColoredEmphasis



```php
public testRenderParagraphColoredEmphasis(\ezcDocumentPdfDriver $driver): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\ezcDocumentPdfDriver** |  |




***

### testRenderParagraphBackgroundColor



```php
public testRenderParagraphBackgroundColor(\ezcDocumentPdfDriver $driver): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\ezcDocumentPdfDriver** |  |




***

### testRenderParagraphLineThrough



```php
public testRenderParagraphLineThrough(\ezcDocumentPdfDriver $driver): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\ezcDocumentPdfDriver** |  |




***

### testRenderParagraphOverline



```php
public testRenderParagraphOverline(\ezcDocumentPdfDriver $driver): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\ezcDocumentPdfDriver** |  |




***

### testRenderParagraphUnderline



```php
public testRenderParagraphUnderline(\ezcDocumentPdfDriver $driver): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\ezcDocumentPdfDriver** |  |




***

### testRenderParagraphAllDecorations



```php
public testRenderParagraphAllDecorations(\ezcDocumentPdfDriver $driver): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\ezcDocumentPdfDriver** |  |




***

### testRenderExternalLinks



```php
public testRenderExternalLinks(\ezcDocumentPdfDriver $driver): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\ezcDocumentPdfDriver** |  |




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
