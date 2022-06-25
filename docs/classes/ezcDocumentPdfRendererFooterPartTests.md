***

# ezcDocumentPdfRendererFooterPartTests

Test suite for class.

* Full name: `\ezcDocumentPdfRendererFooterPartTests`
* Parent class: [`\ezcDocumentPdfTestCase`](./ezcDocumentPdfTestCase.md)

## Properties

### renderer

```php
protected $renderer
```

***

### docbook

```php
protected $docbook
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

### testRenderDefaultFooter

```php
public testRenderDefaultFooter(): mixed
```

***

### testRenderHeader

```php
public testRenderHeader(): mixed
```

***

### testRenderHeaderAndFooter

```php
public testRenderHeaderAndFooter(): mixed
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
