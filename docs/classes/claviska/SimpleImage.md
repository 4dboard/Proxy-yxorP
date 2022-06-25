***

# SimpleImage

A PHP class that makes working with images as simple as possible.



* Full name: `\claviska\SimpleImage`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ERR_FILE_NOT_FOUND`|public| |1|
|`ERR_FONT_FILE`|public| |2|
|`ERR_FREETYPE_NOT_ENABLED`|public| |3|
|`ERR_GD_NOT_ENABLED`|public| |4|
|`ERR_INVALID_COLOR`|public| |5|
|`ERR_INVALID_DATA_URI`|public| |6|
|`ERR_INVALID_IMAGE`|public| |7|
|`ERR_LIB_NOT_LOADED`|public| |8|
|`ERR_UNSUPPORTED_FORMAT`|public| |9|
|`ERR_WEBP_NOT_ENABLED`|public| |10|
|`ERR_WRITE`|public| |11|

## Properties


### image



```php
protected $image
```






***

### mimeType



```php
protected $mimeType
```






***

### exif



```php
protected $exif
```






***

## Methods


### __construct

Creates a new SimpleImage object.

```php
public __construct(string $image = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$image` | **string** | An image file or a data URI to load. |




***

### __destruct

Destroys the image resource.

```php
public __destruct(): mixed
```











***

### fromDataUri

Loads an image from a data URI.

```php
public fromDataUri(string $uri): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** | A data URI. |




***

### fromFile

Loads an image from a file.

```php
public fromFile(string $file): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | The image file to load. |




***

### fromNew

Creates a new image.

```php
public fromNew(int $width, int $height, string|array $color = &#039;transparent&#039;): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$width` | **int** | The width of the image. |
| `$height` | **int** | The height of the image. |
| `$color` | **string&#124;array** | Optional fill color for the new image (default &#039;transparent&#039;). |




***

### fromString

Creates a new image from a string.

```php
public fromString(string $string): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The raw image data as a string. |




***

### generate

Generates an image.

```php
protected generate(string $mimeType = null, int $quality = 100): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mimeType` | **string** | The image format to output as a mime type (defaults to the original mime type). |
| `$quality` | **int** | Image quality as a percentage (default 100). |


**Return Value:**

Returns an array containing the image data and mime type ['data' => '', 'mimeType' => ''].



***

### toDataUri

Generates a data URI.

```php
public toDataUri(string $mimeType = null, int $quality = 100): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mimeType` | **string** | The image format to output as a mime type (defaults to the original mime type). |
| `$quality` | **int** | Image quality as a percentage (default 100). |


**Return Value:**

Returns a string containing a data URI.



***

### toDownload

Forces the image to be downloaded to the clients machine. Must be called before any output is sent to the screen.

```php
public toDownload(string $filename, string $mimeType = null, int $quality = 100): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | The filename (without path) to send to the client (e.g. &#039;image.jpeg&#039;). |
| `$mimeType` | **string** | The image format to output as a mime type (defaults to the original mime type). |
| `$quality` | **int** | Image quality as a percentage (default 100). |




***

### toFile

Writes the image to a file.

```php
public toFile(string $file, string $mimeType = null, int $quality = 100): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | The image format to output as a mime type (defaults to the original mime type). |
| `$mimeType` | **string** | Image quality as a percentage (default 100). |
| `$quality` | **int** | Image quality as a percentage (default 100). |




***

### toScreen

Outputs the image to the screen. Must be called before any output is sent to the screen.

```php
public toScreen(string $mimeType = null, int $quality = 100): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mimeType` | **string** | The image format to output as a mime type (defaults to the original mime type). |
| `$quality` | **int** | Image quality as a percentage (default 100). |




***

### toString

Generates an image string.

```php
public toString(string $mimeType = null, int $quality = 100): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mimeType` | **string** | The image format to output as a mime type (defaults to the original mime type). |
| `$quality` | **int** | Image quality as a percentage (default 100). |




***

### keepWithin

Ensures a numeric value is always within the min and max range.

```php
protected static keepWithin(int|float $value, int|float $min, int|float $max): int|float
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **int&#124;float** | A numeric value to test. |
| `$min` | **int&#124;float** | The minimum allowed value. |
| `$max` | **int&#124;float** | The maximum allowed value. |




***

### getAspectRatio

Gets the image's current aspect ratio.

```php
public getAspectRatio(): float
```









**Return Value:**

Returns the aspect ratio as a float.



***

### getExif

Gets the image's exif data.

```php
public getExif(): array|null
```









**Return Value:**

Returns an array of exif data or null if no data is available.



***

### getHeight

Gets the image's current height.

```php
public getHeight(): int
```











***

### getMimeType

Gets the mime type of the loaded image.

```php
public getMimeType(): string
```











***

### getOrientation

Gets the image's current orientation.

```php
public getOrientation(): string
```









**Return Value:**

One of the values: 'landscape', 'portrait', or 'square'



***

### getResolution

Gets the resolution of the image

```php
public getResolution(): mixed
```









**Return Value:**

The resolution as an array of integers: [96, 96]



***

### getWidth

Gets the image's current width.

```php
public getWidth(): int
```











***

### imageCopyMergeAlpha

Same as PHP's imagecopymerge, but works with transparent images. Used internally for overlay.

```php
protected static imageCopyMergeAlpha(resource $dstIm, resource $srcIm, int $dstX, int $dstY, int $srcX, int $srcY, int $srcW, int $srcH, int $pct): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dstIm` | **resource** | Destination image link resource. |
| `$srcIm` | **resource** | Source image link resource. |
| `$dstX` | **int** | x-coordinate of destination point. |
| `$dstY` | **int** | y-coordinate of destination point. |
| `$srcX` | **int** | x-coordinate of source point. |
| `$srcY` | **int** | y-coordinate of source point. |
| `$srcW` | **int** | Source width. |
| `$srcH` | **int** | Source height. |
| `$pct` | **int** |  |


**Return Value:**

true if success.



***

### autoOrient

Rotates an image so the orientation will be correct based on its exif data. It is safe to call
this method on images that don't have exif data (no changes will be made).

```php
public autoOrient(): \claviska\SimpleImage
```











***

### bestFit

Proportionally resize the image to fit inside a specific width and height.

```php
public bestFit(int $maxWidth, int $maxHeight): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxWidth` | **int** | The maximum width the image can be. |
| `$maxHeight` | **int** | The maximum height the image can be. |




***

### crop

Crop the image.

```php
public crop(int|float $x1, int|float $y1, int|float $x2, int|float $y2): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x1` | **int&#124;float** | Top left x coordinate. |
| `$y1` | **int&#124;float** | Top left y coordinate. |
| `$x2` | **int&#124;float** | Bottom right x coordinate. |
| `$y2` | **int&#124;float** | Bottom right x coordinate. |




***

### duotone

Applies a duotone filter to the image.

```php
public duotone(string|array $lightColor, string|array $darkColor): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lightColor` | **string&#124;array** | The lightest color in the duotone. |
| `$darkColor` | **string&#124;array** | The darkest color in the duotone. |




***

### fitToHeight

Proportionally resize the image to a specific height.

```php
public fitToHeight(int $height): \claviska\SimpleImage
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$height` | **int** |  |




***

### fitToWidth

Proportionally resize the image to a specific width.

```php
public fitToWidth(int $width): \claviska\SimpleImage
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$width` | **int** | The width to resize the image to. |




***

### flip

Flip the image horizontally or vertically.

```php
public flip(string $direction): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$direction` | **string** | The direction to flip: x&amp;#124;y&amp;#124;both. |




***

### maxColors

Reduces the image to a maximum number of colors.

```php
public maxColors(int $max, bool $dither = true): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$max` | **int** | The maximum number of colors to use. |
| `$dither` | **bool** | Whether or not to use a dithering effect (default true). |




***

### overlay

Place an image on top of the current image.

```php
public overlay(string|\claviska\SimpleImage $overlay, string $anchor = &#039;center&#039;, float $opacity = 1, int $xOffset, int $yOffset, bool $calculateOffsetFromEdge = false): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$overlay` | **string&#124;\claviska\SimpleImage** | The image to overlay. This can be a filename, a data URI, or a SimpleImage object. |
| `$anchor` | **string** | The anchor point: &#039;center&#039;, &#039;top&#039;, &#039;bottom&#039;, &#039;left&#039;, &#039;right&#039;, &#039;top left&#039;, &#039;top right&#039;, &#039;bottom left&#039;, &#039;bottom right&#039; (default &#039;center&#039;). |
| `$opacity` | **float** | The opacity level of the overlay 0-1 (default 1). |
| `$xOffset` | **int** | Horizontal offset in pixels (default 0). |
| `$yOffset` | **int** | Vertical offset in pixels (default 0). |
| `$calculateOffsetFromEdge` | **bool** | Calculate Offset referring to the edges of the image (default false). |




***

### resize

Resize an image to the specified dimensions. If only one dimension is specified, the image will be resized proportionally.

```php
public resize(int $width = null, int $height = null): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$width` | **int** | The new image width. |
| `$height` | **int** | The new image height. |




***

### resolution

Sets an image's resolution, as per https://www.php.net/manual/en/function.imageresolution.php

```php
public resolution(int $res_x, int $res_y = null): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res_x` | **int** | The horizontal resolution in DPI. |
| `$res_y` | **int** | The vertical resolution in DPI |




***

### rotate

Rotates the image.

```php
public rotate(int $angle, string|array $backgroundColor = &#039;transparent&#039;): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$angle` | **int** | The angle of rotation (-360 - 360). |
| `$backgroundColor` | **string&#124;array** | The background color to use for the uncovered zone area after rotation (default &#039;transparent&#039;). |




***

### text

Adds text to the image.

```php
public text(string $text, array $options, array& $boundary = null): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** | The desired text. |
| `$options` | **array** | An array of options.<br />- fontFile* (string) - The TrueType (or compatible) font file to use.<br />- size (integer) - The size of the font in pixels (default 12).<br />- color (string&amp;#124;array) - The text color (default black).<br />- anchor (string) - The anchor point: &#039;center&#039;, &#039;top&#039;, &#039;bottom&#039;, &#039;left&#039;, &#039;right&#039;, &#039;top left&#039;, &#039;top right&#039;, &#039;bottom left&#039;, &#039;bottom right&#039; (default &#039;center&#039;).<br />- xOffset (integer) - The horizontal offset in pixels (default 0).<br />- yOffset (integer) - The vertical offset in pixels (default 0).<br />- shadow (array) - Text shadow params.<br />   - x* (integer) - Horizontal offset in pixels.<br />   - y* (integer) - Vertical offset in pixels.<br />   - color* (string&amp;#124;array) - The text shadow color.<br />- $calculateOffsetFromEdge (bool) - Calculate offsets from the edge of the image (default false).<br />- $baselineAlign (bool) - Align the text font with the baseline. (default true). |
| `$boundary` | **array** | If passed, this variable will contain an array with coordinates that surround the text: [x1, y1, x2, y2, width, height].<br />This can be used for calculating the text&#039;s position after it gets added to the image. |




***

### textBox

Adds text with a line break to the image.

```php
public textBox(string $text, array $options): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** | The desired text. |
| `$options` | **array** | An array of options.<br />- fontFile* (string) - The TrueType (or compatible) font file to use.<br />- size (integer) - The size of the font in pixels (default 12).<br />- color (string&amp;#124;array) - The text color (default black).<br />- anchor (string) - The anchor point: &#039;center&#039;, &#039;top&#039;, &#039;bottom&#039;, &#039;left&#039;, &#039;right&#039;, &#039;top left&#039;, &#039;top right&#039;, &#039;bottom left&#039;, &#039;bottom right&#039; (default &#039;center&#039;).<br />- xOffset (integer) - The horizontal offset in pixels (default 0). Has no effect when anchor is &#039;center&#039;.<br />- yOffset (integer) - The vertical offset in pixels (default 0). Has no effect when anchor is &#039;center&#039;.<br />- shadow (array) - Text shadow params.<br />  - x* (integer) - Horizontal offset in pixels.<br />  - y* (integer) - Vertical offset in pixels.<br />  - color* (string&amp;#124;array) - The text shadow color.<br />- $calculateOffsetFromEdge (bool) - Calculate offsets from the edge of the image (default false).<br />- width (int) - Width of text box (default image width).<br />- align (string) - How to align text: &#039;left&#039;, &#039;right&#039;, &#039;center&#039;, &#039;justify&#039; (default &#039;left&#039;).<br />- leading (float) - Increase/decrease spacing between lines of text (default 0).<br />- opacity (float) - The opacity level of the text 0-1 (default 1). |




***

### textSeparateLines

Receives a text and breaks into LINES.

```php
private textSeparateLines(int $text, string $fontFile, int $fontSize, int $maxWidth): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **int** |  |
| `$fontFile` | **string** |  |
| `$fontSize` | **int** |  |
| `$maxWidth` | **int** |  |




***

### textSeparateWords

Receives a text and breaks into WORD / SPACE / NEW LINE.

```php
private textSeparateWords(int $text): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **int** |  |




***

### thumbnail

Creates a thumbnail image. This function attempts to get the image as close to the provided
dimensions as possible, then crops the remaining overflow to force the desired size. Useful
for generating thumbnail images.

```php
public thumbnail(int $width, int $height, string $anchor = &#039;center&#039;): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$width` | **int** | The thumbnail width. |
| `$height` | **int** | The thumbnail height. |
| `$anchor` | **string** | The anchor point: &#039;center&#039;, &#039;top&#039;, &#039;bottom&#039;, &#039;left&#039;, &#039;right&#039;, &#039;top left&#039;, &#039;top right&#039;, &#039;bottom left&#039;, &#039;bottom right&#039; (default &#039;center&#039;). |




***

### arc

Draws an arc.

```php
public arc(int $x, int $y, int $width, int $height, int $start, int $end, string|array $color, int|string $thickness = 1): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** | The x coordinate of the arc&#039;s center. |
| `$y` | **int** | The y coordinate of the arc&#039;s center. |
| `$width` | **int** | The width of the arc. |
| `$height` | **int** | The height of the arc. |
| `$start` | **int** | The start of the arc in degrees. |
| `$end` | **int** | The end of the arc in degrees. |
| `$color` | **string&#124;array** | The arc color. |
| `$thickness` | **int&#124;string** | Line thickness in pixels or &#039;filled&#039; (default 1). |




***

### border

Draws a border around the image.

```php
public border(string|array $color, int $thickness = 1): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string&#124;array** | The border color. |
| `$thickness` | **int** | The thickness of the border (default 1). |




***

### dot

Draws a single pixel dot.

```php
public dot(int $x, int $y, string|array $color): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** | The x coordinate of the dot. |
| `$y` | **int** | The y coordinate of the dot. |
| `$color` | **string&#124;array** | The dot color. |




***

### ellipse

Draws an ellipse.

```php
public ellipse(int $x, int $y, int $width, int $height, string|array $color, int|array $thickness = 1): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** | The x coordinate of the center. |
| `$y` | **int** | The y coordinate of the center. |
| `$width` | **int** | The ellipse width. |
| `$height` | **int** | The ellipse height. |
| `$color` | **string&#124;array** | The ellipse color. |
| `$thickness` | **int&#124;array** | Line thickness in pixels or &#039;filled&#039; (default 1). |




***

### fill

Fills the image with a solid color.

```php
public fill(string|array $color): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string&#124;array** | The fill color. |




***

### line

Draws a line.

```php
public line(int $x1, int $y1, int $x2, int $y2, string|array $color, int $thickness = 1): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x1` | **int** | The x coordinate for the first point. |
| `$y1` | **int** | The y coordinate for the first point. |
| `$x2` | **int** | The x coordinate for the second point. |
| `$y2` | **int** | The y coordinate for the second point. |
| `$color` | **string&#124;array** | The line color. |
| `$thickness` | **int** | The line thickness (default 1). |




***

### polygon

Draws a polygon.

```php
public polygon(array $vertices, string|array $color, int|array $thickness = 1): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$vertices` | **array** | The polygon&#039;s vertices in an array of x/y arrays.<br />Example:<br />    [<br />        [&#039;x&#039; =&gt; x1, &#039;y&#039; =&gt; y1],<br />        [&#039;x&#039; =&gt; x2, &#039;y&#039; =&gt; y2],<br />        [&#039;x&#039; =&gt; xN, &#039;y&#039; =&gt; yN]<br />    ] |
| `$color` | **string&#124;array** | The polygon color. |
| `$thickness` | **int&#124;array** | Line thickness in pixels or &#039;filled&#039; (default 1). |




***

### rectangle

Draws a rectangle.

```php
public rectangle(int $x1, int $y1, int $x2, int $y2, string|array $color, int|array $thickness = 1): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x1` | **int** | The upper left x coordinate. |
| `$y1` | **int** | The upper left y coordinate. |
| `$x2` | **int** | The bottom right x coordinate. |
| `$y2` | **int** | The bottom right y coordinate. |
| `$color` | **string&#124;array** | The rectangle color. |
| `$thickness` | **int&#124;array** | Line thickness in pixels or &#039;filled&#039; (default 1). |




***

### roundedRectangle

Draws a rounded rectangle.

```php
public roundedRectangle(int $x1, int $y1, int $x2, int $y2, int $radius, string|array $color, int|array $thickness = 1): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x1` | **int** | The upper left x coordinate. |
| `$y1` | **int** | The upper left y coordinate. |
| `$x2` | **int** | The bottom right x coordinate. |
| `$y2` | **int** | The bottom right y coordinate. |
| `$radius` | **int** | The border radius in pixels. |
| `$color` | **string&#124;array** | The rectangle color. |
| `$thickness` | **int&#124;array** | Line thickness in pixels or &#039;filled&#039; (default 1). |




***

### excludeInsideColor

Exclude inside color.

```php
private excludeInsideColor(\claviska\number $x, \claviska\number $y, string|array $borderColor): mixed
```

Used for roundedRectangle(), ellipse() and arc()






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **\claviska\number** | certer x of rectangle. |
| `$y` | **\claviska\number** | certer y of rectangle. |
| `$borderColor` | **string&#124;array** | The color of border. |




***

### blur

Applies the blur filter.

```php
public blur(string $type = &#039;selective&#039;, \claviska\number $passes = 1): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | The blur algorithm to use: &#039;selective&#039;, &#039;gaussian&#039; (default &#039;gaussian&#039;). |
| `$passes` | **\claviska\number** | The number of time to apply the filter, enhancing the effect (default 1). |




***

### brighten

Applies the brightness filter to brighten the image.

```php
public brighten(int $percentage): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$percentage` | **int** | Percentage to brighten the image (0 - 100). |




***

### colorize

Applies the colorize filter.

```php
public colorize(string|array $color): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string&#124;array** | The filter color. |




***

### contrast

Applies the contrast filter.

```php
public contrast(int $percentage): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$percentage` | **int** | Percentage to adjust (-100 - 100). |




***

### darken

Applies the brightness filter to darken the image.

```php
public darken(int $percentage): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$percentage` | **int** | Percentage to darken the image (0 - 100). |




***

### desaturate

Applies the desaturate (grayscale) filter.

```php
public desaturate(): \claviska\SimpleImage
```











***

### edgeDetect

Applies the edge detect filter.

```php
public edgeDetect(): \claviska\SimpleImage
```











***

### emboss

Applies the emboss filter.

```php
public emboss(): \claviska\SimpleImage
```











***

### invert

Inverts the image's colors.

```php
public invert(): \claviska\SimpleImage
```











***

### opacity

Changes the image's opacity level.

```php
public opacity(float $opacity): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$opacity` | **float** | The desired opacity level (0 - 1). |




***

### pixelate

Applies the pixelate filter.

```php
public pixelate(int $size = 10): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **int** | The size of the blocks in pixels (default 10). |




***

### sepia

Simulates a sepia effect by desaturating the image and applying a sepia tone.

```php
public sepia(): \claviska\SimpleImage
```











***

### sharpen

Sharpens the image.

```php
public sharpen(int $amount = 50): \claviska\SimpleImage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$amount` | **int** | Sharpening amount (default 50). |




***

### sketch

Applies the mean remove filter to produce a sketch effect.

```php
public sketch(): \claviska\SimpleImage
```











***

### allocateColor

Converts a "friendly color" into a color identifier for use with GD's image functions.

```php
protected allocateColor(string|array $color): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string&#124;array** | The color to allocate. |




***

### adjustColor

Adjusts a color by increasing/decreasing red/green/blue/alpha values independently.

```php
public static adjustColor(string|array $color, int $red, int $green, int $blue, int $alpha): int[]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string&#124;array** | The color to adjust. |
| `$red` | **int** | Red adjustment (-255 - 255). |
| `$green` | **int** | Green adjustment (-255 - 255). |
| `$blue` | **int** | Blue adjustment (-255 - 255). |
| `$alpha` | **int** | Alpha adjustment (-1 - 1). |


**Return Value:**

An RGBA color array.



***

### darkenColor

Darkens a color.

```php
public static darkenColor(string|array $color, int $amount): int[]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string&#124;array** | The color to darken. |
| `$amount` | **int** | Amount to darken (0 - 255). |


**Return Value:**

An RGBA color array.



***

### extractColors

Extracts colors from an image like a human would do.™ This method requires the third-party
library \League\ColorExtractor. If you're using Composer, it will be installed for you
automatically.

```php
public extractColors(int $count = 5, string|array $backgroundColor = null): int[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **int** | The max number of colors to extract (default 5). |
| `$backgroundColor` | **string&#124;array** | By default any pixel with alpha value greater than zero will<br />be discarded. This is because transparent colors are not perceived as is. For example, fully<br />transparent black would be seen white on a white background. So if you want to take<br />transparency into account, you have to specify a default background color. |


**Return Value:**

An array of RGBA colors arrays.



***

### getColorAt

Gets the RGBA value of a single pixel.

```php
public getColorAt(int $x, int $y): int[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** | The horizontal position of the pixel. |
| `$y` | **int** | The vertical position of the pixel. |


**Return Value:**

An RGBA color array or false if the x/y position is off the canvas.



***

### lightenColor

Lightens a color.

```php
public static lightenColor(string|array $color, int $amount): int[]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string&#124;array** | The color to lighten. |
| `$amount` | **int** | Amount to lighten (0 - 255). |


**Return Value:**

An RGBA color array.



***

### normalizeColor

Normalizes a hex or array color value to a well-formatted RGBA array.

```php
public static normalizeColor(string|array $color): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string&#124;array** | A CSS color name, hex string, or an array [red, green, blue, alpha].<br />You can pipe alpha transparency through hex strings and color names. For example:<br />    #fff&amp;#124;0.50 &lt;-- 50% white<br />    red&amp;#124;0.25 &lt;-- 25% red |


**Return Value:**

[red, green, blue, alpha].



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
