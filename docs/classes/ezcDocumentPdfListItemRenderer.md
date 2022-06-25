***

# ezcDocumentPdfListItemRenderer

Renders a list item.

Tries to render a list item into the available space, and aborts if
not possible.

* Full name: `\ezcDocumentPdfListItemRenderer`
* Parent class: [`\ezcDocumentPdfBlockRenderer`](./ezcDocumentPdfBlockRenderer.md)



## Properties


### generator

Item generator used for this list.

```php
protected \ezcDocumentListItemGenerator $generator
```






***

### item

Item number of current item in list.

```php
protected int $item
```






***

## Methods


### __construct

Construct from item number.

```php
public __construct(\ezcDocumentPdfDriver $driver, \ezcDocumentPcssStyleInferencer $styles, \ezcDocumentListItemGenerator $generator, int $item): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\ezcDocumentPdfDriver** |  |
| `$styles` | **\ezcDocumentPcssStyleInferencer** |  |
| `$generator` | **\ezcDocumentListItemGenerator** |  |
| `$item` | **int** |  |




***

### process

Process to render block contents

```php
protected process(\ezcDocumentPdfPage $page, \ezcDocumentPdfHyphenator $hyphenator, \ezcDocumentPdfTokenizer $tokenizer, \ezcDocumentLocateableDomElement $block, \ezcDocumentPdfMainRenderer $mainRenderer): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |
| `$hyphenator` | **\ezcDocumentPdfHyphenator** |  |
| `$tokenizer` | **\ezcDocumentPdfTokenizer** |  |
| `$block` | **\ezcDocumentLocateableDomElement** |  |
| `$mainRenderer` | **\ezcDocumentPdfMainRenderer** |  |




***


## Inherited methods


### renderNode

Render a block level element.

```php
public renderNode(\ezcDocumentPdfPage $page, \ezcDocumentPdfHyphenator $hyphenator, \ezcDocumentPdfTokenizer $tokenizer, \ezcDocumentLocateableDomElement $block, \ezcDocumentPdfMainRenderer $mainRenderer): bool
```

Renders a block level element by applzing margin and padding and
recursing to all nested elements.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |
| `$hyphenator` | **\ezcDocumentPdfHyphenator** |  |
| `$tokenizer` | **\ezcDocumentPdfTokenizer** |  |
| `$block` | **\ezcDocumentLocateableDomElement** |  |
| `$mainRenderer` | **\ezcDocumentPdfMainRenderer** |  |




***

### process

Process to render block contents.

```php
protected process(\ezcDocumentPdfPage $page, \ezcDocumentPdfHyphenator $hyphenator, \ezcDocumentPdfTokenizer $tokenizer, \ezcDocumentLocateableDomElement $block, \ezcDocumentPdfMainRenderer $mainRenderer): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |
| `$hyphenator` | **\ezcDocumentPdfHyphenator** |  |
| `$tokenizer` | **\ezcDocumentPdfTokenizer** |  |
| `$block` | **\ezcDocumentLocateableDomElement** |  |
| `$mainRenderer` | **\ezcDocumentPdfMainRenderer** |  |




***

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
