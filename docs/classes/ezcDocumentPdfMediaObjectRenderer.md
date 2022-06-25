***

# ezcDocumentPdfMediaObjectRenderer

Media object renderer.

Renders a media object, an image, at the current text rendering position.
The image is automatically scaled down to the available dimensions.

Explicit width and height definitions for the image are not yet taken into
account. The image won't be scaled down explicitely, but it is left to the
driver to handle the ccaling, so that also high resolution images could be
embedded.

Also renders an optional image title, if set as a caption in the docbook
source.

* Full name: `\ezcDocumentPdfMediaObjectRenderer`
* Parent class: [`\ezcDocumentPdfRenderer`](./ezcDocumentPdfRenderer.md)




## Methods


### renderNode

Render a media object.

```php
public renderNode(\ezcDocumentPdfPage $page, \ezcDocumentPdfHyphenator $hyphenator, \ezcDocumentPdfTokenizer $tokenizer, \ezcDocumentLocateableDomElement $media, \ezcDocumentPdfMainRenderer $mainRenderer): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |
| `$hyphenator` | **\ezcDocumentPdfHyphenator** |  |
| `$tokenizer` | **\ezcDocumentPdfTokenizer** |  |
| `$media` | **\ezcDocumentLocateableDomElement** |  |
| `$mainRenderer` | **\ezcDocumentPdfMainRenderer** |  |




***

### getMediaBoxWidth

Calculate width of media box.

```php
public getMediaBoxWidth(array $styles, \ezcDocumentPdfPage $page, \ezcDocumentPdfImage $image): \ezcDocumentPcssMeasure
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styles` | **array** |  |
| `$page` | **\ezcDocumentPdfPage** |  |
| `$image` | **\ezcDocumentPdfImage** |  |




***

### scaleImage

Calculate scale of image.

```php
protected scaleImage(array $styles, \ezcDocumentPdfImage $image, \ezcDocumentPdfPage $page, \flaot $width): array
```

Calculates the output size of the image, depending on the available
space and the image dimensions.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styles` | **array** |  |
| `$image` | **\ezcDocumentPdfImage** |  |
| `$page` | **\ezcDocumentPdfPage** |  |
| `$width` | **\flaot** |  |




***


## Inherited methods


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
