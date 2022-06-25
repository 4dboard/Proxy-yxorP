***

# ezcDocumentPdfTextBlockRenderer

Text block renderer

Renders a text into a text block.

* Full name: `\ezcDocumentPdfTextBlockRenderer`
* Parent class: [`\ezcDocumentPdfTextBoxRenderer`](./ezcDocumentPdfTextBoxRenderer.md)

## Methods

### estimateHeight

Estimate height

```php
public estimateHeight(float $width, \ezcDocumentPdfHyphenator $hyphenator, \ezcDocumentPdfTokenizer $tokenizer, \ezcDocumentLocateableDomElement $text): float
```

Estimate required height to render the given text node.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$width` | **float** |  |
| `$hyphenator` | **\ezcDocumentPdfHyphenator** |  |
| `$tokenizer` | **\ezcDocumentPdfTokenizer** |  |
| `$text` | **\ezcDocumentLocateableDomElement** |  |

***

### renderBlock

Render a single text block into the given area

```php
public renderBlock(\ezcDocumentPdfBoundingBox $space, \ezcDocumentPdfHyphenator $hyphenator, \ezcDocumentPdfTokenizer $tokenizer, \ezcDocumentLocateableDomElement $text): void
```

All markup inside of the given string is considered inline markup (in CSS terms). Inline markup should be given as
common docbook inline markup, like <emphasis>.

Returns a boolean indicator whether the rendering of the full text in the available space succeeded or not.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$space` | **\ezcDocumentPdfBoundingBox** |  |
| `$hyphenator` | **\ezcDocumentPdfHyphenator** |  |
| `$tokenizer` | **\ezcDocumentPdfTokenizer** |  |
| `$text` | **\ezcDocumentLocateableDomElement** |  |

***

## Inherited methods

### renderNode

Render a block level element.

```php
public renderNode(\ezcDocumentPdfPage $page, \ezcDocumentPdfHyphenator $hyphenator, \ezcDocumentPdfTokenizer $tokenizer, \ezcDocumentLocateableDomElement $block, \ezcDocumentPdfMainRenderer $mainRenderer): bool
```

Renders a block level element by applzing margin and padding and recursing to all nested elements.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |
| `$hyphenator` | **\ezcDocumentPdfHyphenator** |  |
| `$tokenizer` | **\ezcDocumentPdfTokenizer** |  |
| `$block` | **\ezcDocumentLocateableDomElement** |  |
| `$mainRenderer` | **\ezcDocumentPdfMainRenderer** |  |

***

### renderTextBox

Render text box

```php
protected renderTextBox(array $lines, \ezcDocumentPdfBoundingBox $space, array $styles): bool
```

Render a single text box, specified by the given lines array, containing tokens and their styles, the available space
and the styles array for the currently rendered element.

Returns false, if the box size was not sufficant for the given text, and the covered vertical area otherwise.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lines` | **array** |  |
| `$space` | **\ezcDocumentPdfBoundingBox** |  |
| `$styles` | **array** |  |

***

### strrev

Reverses a string

```php
protected strrev(string $string): string
```

Similar to PHPs strrev() function, but also works for UTF-8 strings.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### renderLine

Render a single line and return the used height

```php
protected renderLine(float $position, int $number, array $line, \ezcDocumentPdfBoundingBox $space, array $styles): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$position` | **float** |  |
| `$number` | **int** |  |
| `$line` | **array** |  |
| `$space` | **\ezcDocumentPdfBoundingBox** |  |
| `$styles` | **array** |  |

***

### handleLinks

Handle links

```php
protected handleLinks(array $token, float $x, float $y, float $width, float $height): void
```

Handle embedded link markup for current token and perform the appropriate calls to the driver.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **array** |  |
| `$x` | **float** |  |
| `$y` | **float** |  |
| `$width` | **float** |  |
| `$height` | **float** |  |

***

### renderTextDecoration

Render text decoration

```php
protected renderTextDecoration(array $styles, float $x, float $y, float $width, float $height): void
```

Render text decoration, like by a assigned text-decoration setting, or background-colors, and similar.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styles` | **array** |  |
| `$x` | **float** |  |
| `$y` | **float** |  |
| `$width` | **float** |  |
| `$height` | **float** |  |

***

### tokenize

Tokenize the input string

```php
protected tokenize(\ezcDocumentLocateableDomElement $element, \ezcDocumentPdfTokenizer $tokenizer, bool $recursed = false): array
```

For proper word wrapping in the paragraph the strng needs to be tokenized, while each token has to maintain its stack of
assigned formats.

This method should return an array of tokens, also maintaining the included whitespace characters, each associated with
its markup elements.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |
| `$tokenizer` | **\ezcDocumentPdfTokenizer** |  |
| `$recursed` | **bool** |  |

***

### forceSplit

Force split a word.

```php
protected forceSplit(string $word, float $available): array
```

Force the splitting of a word, which did not fit in a line alone and could not be splitted using the hyphenator. We just
search for the maximum word part length which fits the available space.

Could be improved to use a binary search on the word length, but this shouldn't happen too often anyways.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$word` | **string** |  |
| `$available` | **float** |  |

***

### fitTokensInLines

Try to match tokens into lines

```php
protected fitTokensInLines(array $tokens, \ezcDocumentPdfHyphenator $hyphenator, float $available): array
```

Try to match tokens into lines of the given width. Returns an array with words for each line. The words might already be
split up by the hyphenator.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |
| `$hyphenator` | **\ezcDocumentPdfHyphenator** |  |
| `$available` | **float** |  |

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

Render box background for the given bounding box with the given styles.

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

Render box border for the given bounding box with the given styles.

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

Returns false, if not enough space is available on current page, and a bounding box otherwise.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |
| `$styles` | **array** |  |
| `$width` | **float** |  |

yxorP::get('REQUEST')
