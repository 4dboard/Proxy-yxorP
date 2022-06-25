***

# ezcDocumentPdfSvgDriver

SVG renderer for PDF driver, useful for manual introspection and test comparisions.

ONLY FOR TESTING - especially, since the text width estimation does not work properly without using SVG glyph support.
The generated XML files are therefore only used for easy comparision of the general rendering results.

* Full name: `\ezcDocumentPdfSvgDriver`
* Parent class: [`\ezcDocumentPdfDriver`](./ezcDocumentPdfDriver.md)

## Properties

### document

Svg Document instance

```php
protected \DOMDocument $document
```

***

### svg

Node of SVG root element

```php
protected \DOMElement $svg
```

***

### pages

Root node for page elements

```php
protected \DOMElement $pages
```

***

### metadata

Root node for metadata

```php
protected \DOMElement $metadata
```

***

### currentpage

Root node of current page

```php
protected \DOMElement $currentpage
```

***

### offset

Current inner document offset

```php
protected float $offset
```

***

### nextOffset

Next inner document offset after page creation

```php
protected float $nextOffset
```

***

### fonts

Array with fonts, and their equivalents for bold and italic markup. This array will be extended when loading new fonts,
but contains the builtin fonts by default.

```php
protected array $fonts
```

The fourth value for each font is bold + oblique, the index is the bitwise and combination of the repective
combinations. Each font MUST have at least a value for FONT_PLAIN assigned.




***

### currentFont

Name and style of default font / currently used font

```php
protected array $currentFont
```

***

## Methods

### __construct

Construct driver

```php
public __construct(): void
```

Creates a new document instance maintaining all document context.









***

### createPage

Create a new page

```php
public createPage(float $width, float $height): void
```

Create a new page in the PDF document with the given width and height.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$width` | **float** |  |
| `$height` | **float** |  |

***

### setTextFormatting

Set text formatting option

```php
public setTextFormatting(string $type, mixed $value): void
```

Set a text formatting option. The names of the options are the same used in the PCSS files and need to be translated by
the driver to the proper backend calls.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |
| `$value` | **mixed** |  |

***

### calculateWordWidth

Calculate the rendered width of the current word

```php
public calculateWordWidth(string $word): float
```

Calculate the width of the passed word, using the currently set text formatting options.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$word` | **string** |  |

***

### getCurrentLineHeight

Get current line height

```php
public getCurrentLineHeight(): float
```

Return the current line height in millimeter based on the current font and text rendering settings.









***

### drawWord

Draw word at given position

```php
public drawWord(float $x, float $y, string $word): void
```

Draw the given word at the given position using the currently set text formatting options.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **float** |  |
| `$y` | **float** |  |
| `$word` | **string** |  |

***

### drawImage

Draw image

```php
public drawImage(string $file, string $type, float $x, float $y, float $width, float $height): void
```

Draw image at the defined position. The first parameter is the
(absolute) path to the image file, and the second defines the type of the image. If the driver cannot handle this
aprticular image type, it should throw an exception.

The further parameters define the location where the image should be rendered and the dimensions of the image in the
rendered output. The dimensions do not neccesarily match the real image dimensions, and might require some kind of
scaling inside the driver depending on the used backend.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |
| `$type` | **string** |  |
| `$x` | **float** |  |
| `$y` | **float** |  |
| `$width` | **float** |  |
| `$height` | **float** |  |

***

### getPointString

Get SVG path string

```php
protected getPointString(array $points, bool $close = true): string
```

Transform the points array into a SVG path string.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$points` | **array** |  |
| `$close` | **bool** |  |

***

### drawPolygon

Draw a fileld polygon

```php
public drawPolygon(array $points, array $color): void
```

Draw any filled polygon, filled using the defined color. The color should be passed as an array with the keys "red", "
green", "blue" and optionally "alpha". Each key should have a value between 0 and 1 associated.

The polygon itself is specified as an array of two-tuples, specifying the x and y coordinate of the point.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$points` | **array** |  |
| `$color` | **array** |  |

***

### drawPolyline

Draw a polyline

```php
public drawPolyline(array $points, array $color, float $width, bool $close = true): void
```

Draw any non-filled polygon, filled using the defined color. The color should be passed as an array with the keys "red"
, "green", "blue" and optionally "alpha". Each key should have a value between 0 and 1 associated.

The polyline itself is specified as an array of two-tuples, specifying the x and y coordinate of the point.

The thrid parameter defines the width of the border and the last parameter may optionally be set to false to not close
the polygon (draw another line from the last point to the first one).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$points` | **array** |  |
| `$color` | **array** |  |
| `$width` | **float** |  |
| `$close` | **bool** |  |

***

### addExternalLink

Add an external link

```php
public addExternalLink(float $x, float $y, float $width, float $height, string $url): void
```

Add an external link to the rectangle specified by its top-left position, width and height. The last parameter is the
actual URL to link to.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **float** |  |
| `$y` | **float** |  |
| `$width` | **float** |  |
| `$height` | **float** |  |
| `$url` | **string** |  |

***

### addInternalLink

Add an internal link

```php
public addInternalLink(float $x, float $y, float $width, float $height, string $target): void
```

Add an internal link to the rectangle specified by its top-left position, width and height. The last parameter is the
target identifier to link to.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **float** |  |
| `$y` | **float** |  |
| `$width` | **float** |  |
| `$height` | **float** |  |
| `$target` | **string** |  |

***

### addInternalLinkTarget

Add an internal link target

```php
public addInternalLinkTarget(string $id): void
```

Add an internal link to the current page. The last parameter is the target identifier.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### registerFont

Register a font

```php
public registerFont(string $name, int $type, array $pathes): void
```

Registers a font, which can be used by its name later in the driver. The given type is either self::FONT_PLAIN or a
bitwise combination of self::FONT_BOLD and self::FONT_OBLIQUE.

The third paramater specifies an array of pathes with references to font definition files. Multiple pathes may be
specified to provide the same font using different types, because not all drivers may process all font types.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$type` | **int** |  |
| `$pathes` | **array** |  |

***

### setMetaData

Set metadata

```php
public setMetaData(string $key, string $value): void
```

Set document meta data. The meta data types are identified by a list of keys, common to PDF, like: title, author,
subject, created, modified.

The values are passed like embedded in the docbook document and might need to be reformatted.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **string** |  |

***

### save

Generate and return PDF

```php
public save(): string
```

Return the generated binary PDF content as a string.









***

## Inherited methods

### __construct

Construct driver

```php
public __construct(): void
```

Creates a new PDF driver.









***

### setOptions

Set compression

```php
public setOptions(\ezcDocumentPdfOptions $options): void
```

Set whether the generated PDF should be compressed or not.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentPdfOptions** |  |

***

### createPage

Create a new page

```php
public createPage(float $width, float $height): void
```

Create a new page in the PDF document with the given width and height.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$width` | **float** |  |
| `$height` | **float** |  |

***

### setTextFormatting

Set text formatting option

```php
public setTextFormatting(string $type, mixed $value): void
```

Set a text formatting option. The names of the options are the same used in the PCSS files and need to be translated by
the driver to the proper backend calls.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |
| `$value` | **mixed** |  |

***

### calculateWordWidth

Calculate the rendered width of the current word

```php
public calculateWordWidth(string $word): float
```

Calculate the width of the passed word, using the currently set text formatting options.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$word` | **string** |  |

***

### getCurrentLineHeight

Get current line height

```php
public getCurrentLineHeight(): float
```

Return the current line height in millimeter based on the current font and text rendering settings.

* This method is **abstract**.

***

### drawWord

Draw word at given position

```php
public drawWord(float $x, float $y, string $word): void
```

Draw the given word at the given position using the currently set text formatting options.

The coordinate specifies the left bottom edge of the words bounding box.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **float** |  |
| `$y` | **float** |  |
| `$word` | **string** |  |

***

### drawImage

Draw image

```php
public drawImage(string $file, string $type, float $x, float $y, float $width, float $height): void
```

Draw image at the defined position. The first parameter is the
(absolute) path to the image file, and the second defines the type of the image. If the driver cannot handle this
aprticular image type, it should throw an exception.

The further parameters define the location where the image should be rendered and the dimensions of the image in the
rendered output. The dimensions do not neccesarily match the real image dimensions, and might require some kind of
scaling inside the driver depending on the used backend.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |
| `$type` | **string** |  |
| `$x` | **float** |  |
| `$y` | **float** |  |
| `$width` | **float** |  |
| `$height` | **float** |  |

***

### drawPolygon

Draw a fileld polygon

```php
public drawPolygon(array $points, array $color): void
```

Draw any filled polygon, filled using the defined color. The color should be passed as an array with the keys "red", "
green", "blue" and optionally "alpha". Each key should have a value between 0 and 1 associated.

The polygon itself is specified as an array of two-tuples, specifying the x and y coordinate of the point.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$points` | **array** |  |
| `$color` | **array** |  |

***

### drawPolyline

Draw a polyline

```php
public drawPolyline(array $points, array $color, float $width, bool $close = true): void
```

Draw any non-filled polygon, filled using the defined color. The color should be passed as an array with the keys "red"
, "green", "blue" and optionally "alpha". Each key should have a value between 0 and 1 associated.

The polyline itself is specified as an array of two-tuples, specifying the x and y coordinate of the point.

The thrid parameter defines the width of the border and the last parameter may optionally be set to false to not close
the polygon (draw another line from the last point to the first one).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$points` | **array** |  |
| `$color` | **array** |  |
| `$width` | **float** |  |
| `$close` | **bool** |  |

***

### addExternalLink

Add an external link

```php
public addExternalLink(float $x, float $y, float $width, float $height, string $url): void
```

Add an external link to the rectangle specified by its top-left position, width and height. The last parameter is the
actual URL to link to.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **float** |  |
| `$y` | **float** |  |
| `$width` | **float** |  |
| `$height` | **float** |  |
| `$url` | **string** |  |

***

### addInternalLink

Add an internal link

```php
public addInternalLink(float $x, float $y, float $width, float $height, string $target): void
```

Add an internal link to the rectangle specified by its top-left position, width and height. The last parameter is the
target identifier to link to.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **float** |  |
| `$y` | **float** |  |
| `$width` | **float** |  |
| `$height` | **float** |  |
| `$target` | **string** |  |

***

### addInternalLinkTarget

Add an internal link target

```php
public addInternalLinkTarget(string $id): void
```

Add an internal link to the current page. The last parameter is the target identifier.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### registerFont

Register a font

```php
public registerFont(string $name, int $type, array $pathes): void
```

Registers a font, which can be used by its name later in the driver. The given type is either self::FONT_PLAIN or a
bitwise combination of self::FONT_BOLD and self::FONT_OBLIQUE.

The third paramater specifies an array of pathes with references to font definition files. Multiple pathes may be
specified to provide the same font using different types, because not all drivers may process all font types.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$type` | **int** |  |
| `$pathes` | **array** |  |

***

### setMetaData

Set metadata

```php
public setMetaData(string $key, string $value): void
```

Set document meta data. The meta data types are identified by a list of keys, common to PDF, like: title, author,
subject, created, modified.

The values are passed like embedded in the docbook document and might need to be reformatted.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **string** |  |

***

### save

Generate and return PDF

```php
public save(): string
```

Return the generated binary PDF content as a string.

* This method is **abstract**.

yxorP::get('REQUEST')
