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

### naturalOrder

Natural sorting.

```php
public static naturalOrder(int $a, int $b): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$a` | **int** |  |
| `$b` | **int** |  |




***

### getColor

Use the median cut algorithm to cluster similar colors.

```php
public static getColor(mixed $sourceImage, int $quality = 10, array $area = null): array|bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sourceImage` | **mixed** | Path/URL to the image, GD resource, Imagick instance, or image as binary string |
| `$quality` | **int** | 1 is the highest quality. There is a trade-off between quality and speed.<br />The bigger the number, the faster the palette generation but the greater the<br />likelihood that colors will be missed. |
| `$area` | **array** |  |




***

### getPalette

Use the median cut algorithm to cluster similar colors.

```php
public static getPalette(mixed $sourceImage, int $colorCount = 10, int $quality = 10, array $area = null): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sourceImage` | **mixed** | Path/URL to the image, GD resource, Imagick instance, or image as binary string |
| `$colorCount` | **int** | it determines the size of the palette; the number of colors returned |
| `$quality` | **int** | 1 is the highest quality |
| `$area` | **array** |  |




***

### loadImage



```php
private static loadImage(mixed $sourceImage, int $quality, array& $histo, array|null $area = null): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sourceImage` | **mixed** | Path/URL to the image, GD resource, Imagick instance, or image as binary string |
| `$quality` | **int** | Analyze every $quality pixels |
| `$histo` | **array** | Histogram |
| `$area` | **array&#124;null** |  |




***

### vboxFromHistogram



```php
private static vboxFromHistogram(array $histo): \ColorThief\VBox
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$histo` | **array** |  |




***

### doCut



```php
private static doCut(string $color, \ColorThief\VBox $vBox, array $partialSum, int $total): array|void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string** |  |
| `$vBox` | **\ColorThief\VBox** |  |
| `$partialSum` | **array** |  |
| `$total` | **int** |  |




***

### medianCutApply



```php
private static medianCutApply(array $histo, \ColorThief\VBox $vBox): array|void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$histo` | **array** |  |
| `$vBox` | **\ColorThief\VBox** |  |




***

### sumColors

Find the partial sum arrays along the selected axis.

```php
private static sumColors(string $axis, array $histo, \ColorThief\VBox $vBox): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$axis` | **string** | r&amp;#124;g&amp;#124;b |
| `$histo` | **array** |  |
| `$vBox` | **\ColorThief\VBox** |  |


**Return Value:**

[$total, $partialSum]



***

### getVBoxColorRanges



```php
private static getVBoxColorRanges(\ColorThief\VBox $vBox, array $order): array
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
private static quantizeIter(\ColorThief\PQueue& $priorityQueue, float $target, array $histo): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$priorityQueue` | **\ColorThief\PQueue** |  |
| `$target` | **float** |  |
| `$histo` | **array** |  |




***

### quantize



```php
private static quantize( $numPixels,  $maxColors, array& $histo): bool|\ColorThief\CMap
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numPixels` | **** | Number of image pixels analyzed |
| `$maxColors` | **** |  |
| `$histo` | **array** | Histogram |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
