***

# ezcDocumentPdfTableRenderer

Renders a table.

Tries to render a table into the available space, and aborts if
not possible.

A more detailed explanation of the main renderer stacking used for tbale
rendering and the page level transaction ahndling can be found in the class
level docblock of the ezcDocumentPdfMainRenderer class.

* Full name: `\ezcDocumentPdfTableRenderer`
* Parent class: [`\ezcDocumentPdfMainRenderer`](./ezcDocumentPdfMainRenderer.md)



## Properties


### mainRenderer

Reference to the main renderer.

```php
protected \ezcDocumentPdfMainRenderer $mainRenderer
```






***

### cellWidth

Width of current cell.

```php
protected \flaot $cellWidth
```






***

### covered

Areas covored while rendering a single cell, so that the cell contents
do not get in the way of other cells contents.

```php
protected array $covered
```






***

### tableBox

Box of the whole table.

```php
protected array $tableBox
```






***

### cellBoxes

Boxes for all currently drawn cells so their border can be renderer once
the row baseline is known.

```php
protected array $cellBoxes
```






***

### lastPageForCell

The last page the current cell rendered contents on.

```php
protected \ezcDocumentPdfPage $lastPageForCell
```






***

### additionalBorders

Additional borders to render.

```php
protected array $additionalBorders
```

A list of borders to render, detected on page wrapps. Delayed to not be
reverted by reverted transactions in sub renderers.




***

## Methods


### __construct

Construct renderer from driver to use.

```php
public __construct(\ezcDocumentPdfDriver $driver, \ezcDocumentPcssStyleInferencer $styles, \ezcDocumentPdfOptions $options = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\ezcDocumentPdfDriver** |  |
| `$styles` | **\ezcDocumentPcssStyleInferencer** |  |
| `$options` | **\ezcDocumentPdfOptions** |  |




***

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

### calculateTextWidth

Calculate text width.

```php
public calculateTextWidth(\ezcDocumentPdfPage $page, \ezcDocumentLocateableDomElement $text): float
```

Calculate the available horizontal space for texts depending on the
page layout settings.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |
| `$text` | **\ezcDocumentLocateableDomElement** |  |




***

### getNextRenderingPosition

Get next rendering position.

```php
public getNextRenderingPosition(float $move, float $width): \ezcDocumentPdfPage
```

If the current space has been exceeded this method calculates
a new rendering position, optionally creates a new page for
this, or switches to the next column. The new rendering;
position is set on the returned page object.

As the parameter you need to pass the required width for the object to
place on the page.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$move` | **float** |  |
| `$width` | **float** |  |




***

### renderCell

Render a single table cell.

```php
protected renderCell(\ezcDocumentPdfPage $page, \ezcDocumentPdfHyphenator $hyphenator, \ezcDocumentPdfTokenizer $tokenizer, \ezcDocumentLocateableDomElement $cell, array $styles, \ezcDocumentPdfBoundingBox $space, float $start, float $width): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |
| `$hyphenator` | **\ezcDocumentPdfHyphenator** |  |
| `$tokenizer` | **\ezcDocumentPdfTokenizer** |  |
| `$cell` | **\ezcDocumentLocateableDomElement** |  |
| `$styles` | **array** |  |
| `$space` | **\ezcDocumentPdfBoundingBox** |  |
| `$start` | **float** |  |
| `$width` | **float** |  |




***

### renderTopBorder

Render top border.

```php
protected renderTopBorder(array $styles, \ezcDocumentPdfBoundingBox $space): mixed
```

Render the top border of the given space






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styles` | **array** |  |
| `$space` | **\ezcDocumentPdfBoundingBox** |  |




***

### setCellCovered

Set cell box covered.

```php
protected setCellCovered(\ezcDocumentPdfPage $page, \ezcDocumentPdfBoundingBox $space, array $styles): mixed
```

Mark rendered space as convered on the page.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |
| `$space` | **\ezcDocumentPdfBoundingBox** |  |
| `$styles` | **array** |  |




***

### processTable

Process to render the table into its boundings.

```php
protected processTable(\ezcDocumentPdfPage $page, \ezcDocumentPdfHyphenator $hyphenator, \ezcDocumentPdfTokenizer $tokenizer, \ezcDocumentLocateableDomElement $block, \ezcDocumentPdfMainRenderer $mainRenderer): mixed
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

### triggerError

Trigger visitor error

```php
public triggerError(int $level, string $message, string $file = null, int $line = null, int $position = null): void
```

Emit a vistitor error, and convert it to an exception depending on the
error reporting settings.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |
| `$message` | **string** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$position` | **int** |  |




***

### getErrors

Return list of errors occured during visiting the document.

```php
public getErrors(): array
```

May be an empty array, if on errors occured, or a list of
ezcDocumentVisitException objects.









***

### locateFile

Tries to locate a file

```php
public locateFile(string $file): string
```

Tries to locate a file, referenced in a docbook document. If available
the document path is used a base for relative paths.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |




***

### registerPdfPart

Register an additional PDF part

```php
public registerPdfPart(\ezcDocumentPdfPart $part): void
```

Register additional parts, like footnotes, headers or title pages.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$part` | **\ezcDocumentPdfPart** |  |




***

### render

Render given document

```php
public render(\ezcDocumentDocbook $document, \ezcDocumentPdfHyphenator $hyphenator = null, \ezcDocumentPdfTokenizer $tokenizer = null): string
```

Returns the rendered PDF as string






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\ezcDocumentDocbook** |  |
| `$hyphenator` | **\ezcDocumentPdfHyphenator** |  |
| `$tokenizer` | **\ezcDocumentPdfTokenizer** |  |




***

### registerFonts

Register fonts in driver

```php
protected registerFonts(): void
```

Register the font classes specified in the styles with the driver, so
the driver can use the fonts during the rendering.









***

### checkSkipPrerequisites

Check column or page skip prerequisite

```php
public checkSkipPrerequisites(float $move, float $width): bool
```

If no content has been rendered any more in the current column, this
method should be called to check prerequisite for the skip, which is
especially important for already rendered items, which impose
assumptions on following contents.

One example for this are titles, which should always be followed by at
least some content in the same column.

Returns false, if prerequisite are not fulfileld and rendering should be
aborted.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$move` | **float** |  |
| `$width` | **float** |  |




***

### calculateTextWidth

Calculate text width

```php
public calculateTextWidth(\ezcDocumentPdfPage $page, \ezcDocumentLocateableDomElement $text): float
```

Calculate the available horizontal space for texts depending on the
page layout settings.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |
| `$text` | **\ezcDocumentLocateableDomElement** |  |




***

### getNextRenderingPosition

Get next rendering position

```php
public getNextRenderingPosition(float $move, float $width): \ezcDocumentPdfPage
```

If the current space has been exceeded this method calculates
a new rendering position, optionally creates a new page for
this, or switches to the next column. The new rendering
position is set on the returned page object.

As the parameter you need to pass the required width for the object to
place on the page.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$move` | **float** |  |
| `$width` | **float** |  |




***

### processNode

Process a single element with the registered renderers.

```php
public processNode(\DOMElement $element, int $number): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |
| `$number` | **int** |  |




***

### process

Recurse into DOMDocument tree and call appropriate element handlers

```php
public process(\DOMNode $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMNode** |  |




***

### ignore

Ignore elements, which should not be rendered

```php
private ignore(\ezcDocumentLocateableDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |




***

### initializeDocument

Initialize document according to detected root node

```php
private initializeDocument(\ezcDocumentLocateableDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |




***

### appendMetaData

Append document metadata

```php
private appendMetaData(\ezcDocumentLocateableDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |




***

### renderBlock

Handle calls to block element renderer

```php
private renderBlock(\ezcDocumentLocateableDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |




***

### renderBlockquote

Handle calls to block element renderer

```php
private renderBlockquote(\ezcDocumentLocateableDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |




***

### renderTable

Handle calls to table element renderer

```php
private renderTable(\ezcDocumentLocateableDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |




***

### renderList

Handle calls to List element renderer

```php
private renderList(\ezcDocumentLocateableDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |




***

### renderListItem

Handle calls to list item element renderer

```php
private renderListItem(\ezcDocumentLocateableDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |




***

### renderParagraph

Handle calls to paragraph renderer

```php
private renderParagraph(\ezcDocumentLocateableDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |




***

### renderTitle

Handle calls to title renderer

```php
private renderTitle(\ezcDocumentLocateableDomElement $element, int $position): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |
| `$position` | **int** |  |




***

### renderMediaObject

Handle calls to media object renderer

```php
private renderMediaObject(\ezcDocumentLocateableDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |




***

### renderLiteralLayout

Handle calls to paragraph renderer

```php
private renderLiteralLayout(\ezcDocumentLocateableDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |




***

### handleAnchors

Handle all anchors inside the current element

```php
private handleAnchors(\ezcDocumentLocateableDomElement $element): void
```

Finds all anchors somewhere in the current element and adds reference
targets for them.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |




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
