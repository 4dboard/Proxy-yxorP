***

# ezcDocumentPdfMainRendererTests

Test suite for class.

* Full name: `\ezcDocumentPdfMainRendererTests`
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

### testRenderUnknownElements

```php
public testRenderUnknownElements(): mixed
```

***

### testRenderUnknownElementsSilence

```php
public testRenderUnknownElementsSilence(): mixed
```

***

### testRenderMainSinglePage

```php
public testRenderMainSinglePage(): mixed
```

***

### testRenderMainSinglePageNotNamespaced

```php
public testRenderMainSinglePageNotNamespaced(): mixed
```

***

### testRenderMainMulticolumnLayout

```php
public testRenderMainMulticolumnLayout(): mixed
```

***

### testRenderLongTextParagraphConflict

```php
public testRenderLongTextParagraphConflict(): mixed
```

***

### testRenderLongTextWithInternalLinks

```php
public testRenderLongTextWithInternalLinks(): mixed
```

***

### testRenderUnavailableCustomFont

```php
public testRenderUnavailableCustomFont(): mixed
```

***

### testRenderCustomFont

```php
public testRenderCustomFont(): mixed
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

Assert that the given PDF document content is simlar to the PDF document referenced by its test case name.

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

Test the rendering of a given full document with an additional set of user configured styles.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |
| `$fileName` | **string** |  |
| `$styles` | **array** |  |

yxorP::get('REQUEST')
