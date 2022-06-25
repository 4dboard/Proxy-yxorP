***

# ezcDocumentPdfRenderer

Abstract renderer base class

Implements some basic rendering methods, which are required by all
renderers. Should be extended to render elements in Docbook documents, which
are not yet handled.

To use a new ccustom renderer one needs to register it in the main renderer,
which by default is implemented in the class ezcDocumentPdfMainRenderer.

* Full name: `\ezcDocumentPdfRenderer`
* This class is an **Abstract class**



## Properties


### driver

Used driver implementation

```php
protected \ezcDocumentPdfDriver $driver
```






***

### styles

Used PDF style inferencer for evaluating current styling

```php
protected \ezcDocumentPcssStyleInferencer $styles
```






***

## Methods


### __construct

Construct renderer from driver to use

```php
public __construct(\ezcDocumentPdfDriver $driver, \ezcDocumentPcssStyleInferencer $styles): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\ezcDocumentPdfDriver** |  |
| `$styles` | **\ezcDocumentPcssStyleInferencer** |  |




***

### renderBoxBackground

Render box background

```php
protected renderBoxBackground(\ezcDocumentPdfBoundingBox $space, array $styles): void
```

Render box background for the given bounding box with the given
styles.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$space` | **\ezcDocumentPdfBoundingBox** |  |
| `$styles` | **array** |  |




***

### renderBoxBorder

Render box border

```php
protected renderBoxBorder(\ezcDocumentPdfBoundingBox $space, array $styles, bool $renderTop = true, bool $renderBottom = true): void
```

Render box border for the given bounding box with the given
styles.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$space` | **\ezcDocumentPdfBoundingBox** |  |
| `$styles` | **array** |  |
| `$renderTop` | **bool** |  |
| `$renderBottom` | **bool** |  |




***

### setBoxCovered

Set box covered

```php
protected setBoxCovered(\ezcDocumentPdfPage $page, \ezcDocumentPdfBoundingBox $space, array $styles): void
```

Mark rendered space as convered on the page.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |
| `$space` | **\ezcDocumentPdfBoundingBox** |  |
| `$styles` | **array** |  |




***

### evaluateAvailableBoundingBox

Evaluate available bounding box

```php
protected evaluateAvailableBoundingBox(\ezcDocumentPdfPage $page, array $styles, float $width): mixed
```

Returns false, if not enough space is available on current
page, and a bounding box otherwise.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |
| `$styles` | **array** |  |
| `$width` | **float** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
