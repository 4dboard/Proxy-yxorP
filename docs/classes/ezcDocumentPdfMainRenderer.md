***

# ezcDocumentPdfMainRenderer

Main PDF renderer class, dispatching to sub renderer, maintaining page
contexts and transactions.

The basic principles behind the used stacked backtracking rendering
algorithm are explained below.

The basics
==========

The rendering size of a single block (paragraph, image) cannot be guessed
properly beforehand, because the dimensions depend on the associated styles
and the driver which needs to render the styles. Because of different fonts
the size of a single simple string may notably vary. The renderer do not
know about font properties, but only the drivers do.

Because of that the renderers (like the paragraph renderer) can only
request the used dimensions for each word, or word part from the current
driver and try to fit that word into the currently available space.

Some general constraints, like the handling of orphans and widows, require
the renderer to backtrack. If a orphans constraint could not be fulfilled
with the first rendering try, the renderer needs to decide to render less
lines on the prior page and therefore needs to revert all local rendering
steps and retry the rendering with the additional knowledge.

For widow constraints this may mean, that a full paragraph is moved to the
next page, which could mean, that the title before that paragraph might
also be relocated to the following page, which would mean to revert
multiple renderers and elements. To make this possible the renderer wraps
the driver in a transactional driver wrapper.

The transactional driver wrapper
--------------------------------

Like the last paragraph explained it might be necessary to revert (large)
amounts of rendering operations. Once the rendering operations (like
drawWord) hit the driver they are immediately serialized into the
respective output format (PDF), and could not be reverted anymore.

So an additional layer has been implemented in the class
ezcDocumentPdfTransactionalDriverWrapper, which implements the same
interface as all the other drivers, as well as some additional methods to
handle "transactions".

A renderer, like the paragraph renderer, may start a transaction, receives
an ID identifying the started transaction, and may then start its rendering
operations. If the rendering reached a dead end, it may revert everything
using the initially given transaction ID. The revert will affect all
operations since the original call to startTransaction(), even if other
sub-renderers also started transactions in the meantime.

The logged calls to the driver are passed up to the real driver once save()
is called explicitly for the given transaction ID, or the main renderer
attempts to write the PDF into a file.

Depending on the type of the call the driver wrapper logs and / or passes
the call directly up to the actual driver.

Calls which are logged only:
 - Everything performing actual rendering, like drawLine(), drawWord(), ...

Calls which are logged and passed:
 - Everything setting the current style configuration, which might also be
   relevant for font width estimation, especially: setStyle()

Calls which are not logged, but passed:
 - Everything, which only requests properties, but does not change the
   driver state, like getTextWidth()

The stacked renderers
---------------------

The main renderer, which is defined in this class, is responsible for
managing the pages, the available horizontal space on the current page and
calling the sub renderers for the distinct parts in the Docbook document.

For each part there is a specialized renderer, which is only responsible
for rendering such a part, like a list renderer, a list item renderer or a
paragraph renderer. The main renderer traverses the Docbook document and calls
the appropriate renderer. You may register additional renderers with the
main renderer, for your custom elements, or overwrite the defined default
renderers.

The main renderer also handles special page elements, like headers and
footers for each page.

The sub renderers ask the main renderer for new space, if they exceeded the
available space in the current column / on the current page. This is
implemented in the method getNextRenderingPosition(). This method might
request a new page from the driver.

The sub renderer may as well call other sub renderer, for stacked element
definitions or may request rendering for all those elements by the main
renderer calling back to the process() method.

The table sub renderer
----------------------

The table renderer is a special sub renderer, since the common space
estimation does not apply here. Tables are structured into cells and the
elements contained in one cell may only use the space defined by the cell.
The table renderer therefore mimics (and extends) the main renderer. So
when the contents of one cell are rendered the sub renderers for the cell
contents (paragraphs, lists, ...) receive an instance of the table renderer
as their "new" main renderer. The table renderer overwrites the methods
like process() and getNextRenderingPosition(), so the sub renderers render
their stuff at the correct positions in the cell.

The table renderer itself again dispatches to its main renderer, when, for
example, allocating new pages. In case of a stacked table, the main
renderer of a table renderer may again be a table renderer, which then
dispatches to the original main renderer.

Style inheritance
-----------------

The definition of styles works just like CSS with HTML. Each element
inherits the styles from its parent element, which are then overwritten by
the defined styles in the (P)CSS file.

The inferring of the styles for a given element is implemented in the
ezcDocumentPcssStyleInferencer class. An instance of this class containing
the currently defined styles is available during the whole rendering
process and will provide the styles for any element, which is passed to the
object.

Hyphenation
-----------

Hyphenation is a critical task for proper text rendering. A custom
hyphenator may be defined and passed to the renderer. Each text renderer
will the ask the hyphenator to split words, if the whole word does not fit
into one line any more. It would be sensible to implement a hyphenator
based on some available dictionary files.

Tokenizer
---------

For some languages it might be necessary to implement a different text
tokenizer, which does not just split words at whitespaces. To accomplish
that you may implement and pass a custom tokenizer, which is the
responsible for splitting texts.

Some renderers, like the literal box renderer, may already use custom
tokenizers, to implement special rendering tasks.

* Full name: `\ezcDocumentPdfMainRenderer`
* Parent class: [`\ezcDocumentPdfRenderer`](./ezcDocumentPdfRenderer.md)
* This class implements:
[`\ezcDocumentErrorReporting`](./ezcDocumentErrorReporting.md)



## Properties


### hyphenator

Hyphenator used to split up words

```php
protected \ezcDocumentPdfHyphenator $hyphenator
```






***

### tokenizer

Tokenizer used to split up strings into words

```php
protected \ezcDocumentPdfTokenizer $tokenizer
```






***

### document

Document to render

```php
protected \ezcDocumentDocbook $document
```






***

### titleTransaction

Last transactions started before rendering a new title. This is used to
determine, if a title is positioned as a single item in a column or on a
page and switch it to the next page in this case.

```php
protected mixed $titleTransaction
```






***

### restart

Indicator to restart rendering with an earlier item on the same level in
the DOM document tree.

```php
protected mixed $restart
```






***

### errors

Errors occured during the conversion process

```php
protected array $errors
```






***

### handlerMapping

Maps document elements to handler functions

```php
protected array $handlerMapping
```

Maps each document element of the associated namespace to its handler
method in the current class.




***

### parts

Additional PDF parts.

```php
protected array $parts
```






***

### errorReporting

Error reporting level

```php
protected int $errorReporting
```






***

### options

PDF renderer options

```php
protected \ezcDocumentPdfOptions $options
```






***

## Methods


### __construct

Construct renderer from driver to use

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
