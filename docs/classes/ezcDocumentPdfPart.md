***

# ezcDocumentPdfPart

Abstract base class for additional PDF parts

Parts can be new elements in a PDF page, which can hook into the rendering of the PDF page, like footers or headers.

This abstract part abse class offers a list of hooks which will be called, if an instance of this class is registered in
the renderer, these hooks are:

- hookPageCreation
- hookPageRendering
- hookDocumentCreation
- hookDocumentRendering

All these hooks do nothing by default, and should be overwritten to accomplish the desired functionality.

* Full name: `\ezcDocumentPdfPart`
* This class is an **Abstract class**

## Properties

### renderer

Reference to main renderer

```php
protected \ezcDocumentPdfMainRenderer $renderer
```

***

### driver

Reference to driver

```php
protected \ezcDocumentPdfDriver $driver
```

***

### styles

Reference to style inferencer

```php
protected \ezcDocumentPcssStyleInferencer $styles
```

***

## Methods

### registerContext

Registration function called by the renderer.

```php
public registerContext(\ezcDocumentPdfMainRenderer $renderer, \ezcDocumentPdfDriver $driver, \ezcDocumentPcssStyleInferencer $styles): void
```

Function called by the renderer, to set its properties, which pass the relevant state objects to the part.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$renderer` | **\ezcDocumentPdfMainRenderer** |  |
| `$driver` | **\ezcDocumentPdfDriver** |  |
| `$styles` | **\ezcDocumentPcssStyleInferencer** |  |

***

### hookPageCreation

Hook on page creation

```php
public hookPageCreation(\ezcDocumentPdfPage $page): void
```

Hook called on page creation, so that certain areas might be reserved or it already may render stuff on the frshly
created page.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |

***

### hookPageRendering

Hook on page rendering

```php
public hookPageRendering(\ezcDocumentPdfPage $page): void
```

Hook called on page rendering, which means, that a page is complete, by all knowledge of the main renderer.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |

***

### hookDocumentCreation

Hook on document creation

```php
public hookDocumentCreation(\ezcDocumentLocateableDomElement $element): void
```

Hook called when a new document is created.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |

***

### hookDocumentRendering

Hook on document rendering

```php
public hookDocumentRendering(): void
```

Hook called once a document is completely rendered.

yxorP::get('REQUEST')
