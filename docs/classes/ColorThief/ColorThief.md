***

# ColorThief

* Full name: `\ColorThief\ColorThief`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SIGBITS`|public| |5|
|`RSHIFT`|public| |3|
|`MAX_ITERATIONS`|public| |1000|
|`FRACT_BY_POPULATIONS`|public| |0.75|
|`THRESHOLD_ALPHA`|public| |62|
|`THRESHOLD_WHITE`|public| |250|

## Methods

### getColorIndex

Get combined color index (3 colors as one integer) from RGB values (0-255) or RGB Histogram Buckets (0-31).

```php
public static getColorIndex(int $red, int $green, int $blue, int $sigBits = self::SIGBITS): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$red` | **int** |  |
| `$green` | **int** |  |
| `$blue` | **int** |  |
| `$sigBits` | **int** |  |

***

### getColorsFromIndex

Get RGB values (0-255) or RGB Histogram Buckets from a combined color index (3 colors as one integer).

```php
public static getColorsFromIndex(int $index, int $sigBits = 8): array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **int** |  |
| `$sigBits` | **int** |  |

***

### getColor

Gets the dominant color from the image using the median cut algorithm to cluster similar colors.

```php
public static getColor(mixed $sourceImage, int $quality = 10, array|null $area = null, string $outputFormat = &#039;array&#039;, \ColorThief\Image\Adapter\AdapterInterface|string|null $adapter = null): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sourceImage` | **mixed** | Path/URL to the image, GD resource, Imagick/Gmagick instance, or image as binary string |
| `$quality` | **int** | 1 is the highest quality. There is a trade-off between quality and speed.<br />It determines how many pixels are skipped before the next one is sampled.<br />We rarely need to sample every single pixel in the image to get good results.<br />The bigger the number, the faster the palette generation but the greater the<br />likelihood that colors will be missed. |
| `$area` | **array&#124;null** | It allows you to specify a rectangular area in the image in order to get<br />colors only for this area. It needs to be an associative array with the<br />following keys:<br />$area[&#039;x&#039;]: The x-coordinate of the top left corner of the area. Default to 0.<br />$area[&#039;y&#039;]: The y-coordinate of the top left corner of the area. Default to 0.<br />$area[&#039;w&#039;]: The width of the area. Default to image width minus x-coordinate.<br />$area[&#039;h&#039;]: The height of the area. Default to image height minus y-coordinate. |
| `$outputFormat` | **string** | By default, color is returned as an array of three integers representing<br />red, green, and blue values.<br />You can choose another output format by passing one of the following values:<br />&#039;rgb&#039;   : RGB string notation (ex: rgb(253, 42, 152)).<br />&#039;hex&#039;   : String of the hexadecimal representation (ex: #fd2a98).<br />&#039;int&#039;   : Integer color value (ex: 16591512).<br />&#039;array&#039; : Default format (ex: [253, 42, 152]).<br />&#039;obj&#039;   : Instance of ColorThief\Color, for custom processing. |
| `$adapter` | **\ColorThief\Image\Adapter\AdapterInterface&#124;string&#124;null** | Optional argument to choose a preferred image adapter to use for loading the image.<br />By default, the adapter is automatically chosen depending on the available extensions<br />and the type of $sourceImage (for example Imagick is used if $sourceImage is an Imagick instance).<br />You can pass one of the &#039;Imagick&#039;, &#039;Gmagick&#039; or &#039;Gd&#039; string to use the corresponding<br />underlying image extension, or you can pass an instance of any class implementing<br />the AdapterInterface interface to use a custom image loader. |

***

### getPalette

Gets a palette of dominant colors from the image using the median cut algorithm to cluster similar colors.

```php
public static getPalette(mixed $sourceImage, int $colorCount = 10, int $quality = 10, array|null $area = null, string $outputFormat = &#039;array&#039;, \ColorThief\Image\Adapter\AdapterInterface|string|null $adapter = null): array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sourceImage` | **mixed** | Path/URL to the image, GD resource, Imagick/Gmagick instance, or image as binary string |
| `$colorCount` | **int** | it determines the size of the palette; the number of colors returned |
| `$quality` | **int** | 1 is the highest quality. There is a trade-off between quality and speed.<br />It determines how many pixels are skipped before the next one is sampled.<br />We rarely need to sample every single pixel in the image to get good results.<br />The bigger the number, the faster the palette generation but the greater the<br />likelihood that colors will be missed. |
| `$area` | **array&#124;null** | It allows you to specify a rectangular area in the image in order to get<br />colors only for this area. It needs to be an associative array with the<br />following keys:<br />$area[&#039;x&#039;]: The x-coordinate of the top left corner of the area. Default to 0.<br />$area[&#039;y&#039;]: The y-coordinate of the top left corner of the area. Default to 0.<br />$area[&#039;w&#039;]: The width of the area. Default to image width minus x-coordinate.<br />$area[&#039;h&#039;]: The height of the area. Default to image height minus y-coordinate. |
| `$outputFormat` | **string** | By default, colors are returned as an array of three integers representing<br />red, green, and blue values.<br />You can choose another output format by passing one of the following values:<br />&#039;rgb&#039;   : RGB string notation (ex: rgb(253, 42, 152)).<br />&#039;hex&#039;   : String of the hexadecimal representation (ex: #fd2a98).<br />&#039;int&#039;   : Integer color value (ex: 16591512).<br />&#039;array&#039; : Default format (ex: [253, 42, 152]).<br />&#039;obj&#039;   : Instance of ColorThief\Color, for custom processing. |
| `$adapter` | **\ColorThief\Image\Adapter\AdapterInterface&#124;string&#124;null** | Optional argument to choose a preferred image adapter to use for loading the image.<br />By default, the adapter is automatically chosen depending on the available extensions<br />and the type of $sourceImage (e.g. Imagick is used if $sourceImage is an Imagick instance).<br />You can pass one of the &#039;Imagick&#039;, &#039;Gmagick&#039; or &#039;Gd&#039; string to use the corresponding<br />underlying image extension, or you can pass an instance of any class implementing<br />the AdapterInterface interface to use a custom image loader. |

***

### loadImage

```php
private static loadImage(mixed $sourceImage, int $quality, array&lt;int,int&gt;& $histo, array $area = null, \ColorThief\Image\Adapter\AdapterInterface|string|null $adapter = null): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sourceImage` | **mixed** | Path/URL to the image, GD resource, Imagick instance, or image as binary string |
| `$quality` | **int** | Analyze every $quality pixels |
| `$histo` | **array<int,int>** | Histogram |
| `$area` | **array** |  |
| `$adapter` | **\ColorThief\Image\Adapter\AdapterInterface&#124;string&#124;null** | Image adapter to use for loading the image |

***

### vboxFromHistogram

```php
private static vboxFromHistogram(array&lt;int,int&gt; $histo): \ColorThief\VBox
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$histo` | **array<int,int>** |  |

***

### doCut

```php
private static doCut(string $color, \ColorThief\VBox $vBox, int[] $partialSum, int $total): ?array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string** |  |
| `$vBox` | **\ColorThief\VBox** |  |
| `$partialSum` | **int[]** |  |
| `$total` | **int** |  |

***

### medianCutApply

```php
private static medianCutApply(array&lt;int,int&gt; $histo, \ColorThief\VBox $vBox): \ColorThief\VBox[]|null
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$histo` | **array<int,int>** |  |
| `$vBox` | **\ColorThief\VBox** |  |

***

### sumColors

Find the partial sum arrays along the selected axis.

```php
private static sumColors(string $axis, array&lt;int,int&gt; $histo, \ColorThief\VBox $vBox): array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$axis` | **string** | r&amp;#124;g&amp;#124;b |
| `$histo` | **array<int,int>** |  |
| `$vBox` | **\ColorThief\VBox** |  |

***

### getVBoxColorRanges

```php
private static getVBoxColorRanges(\ColorThief\VBox $vBox, array $order): int[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$vBox` | **\ColorThief\VBox** |  |
| `$order` | **array** |  |

***

### quantizeIter

Inner function to do the iteration.

```php
private static quantizeIter(\ColorThief\PQueue&lt;\ColorThief\VBox&gt;& $priorityQueue, float $target, array&lt;int,int&gt; $histo): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$priorityQueue` | **\ColorThief\PQueue<\ColorThief\VBox>** |  |
| `$target` | **float** |  |
| `$histo` | **array<int,int>** |  |

***

### quantize

```php
private static quantize(int $numPixels, int $maxColors, array&lt;int,int&gt;& $histo): \ColorThief\Color[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numPixels` | **int** | Number of image pixels analyzed |
| `$maxColors` | **int** |  |
| `$histo` | **array<int,int>** | Histogram |

***


***

