***

# ImagickImageBackEnd





* Full name: `\BaconQrCode\Renderer\Image\ImagickImageBackEnd`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\BaconQrCode\Renderer\Image\ImageBackEndInterface`](./ImageBackEndInterface.md)
* This class is a **Final class**



## Properties


### imageFormat



```php
private string $imageFormat
```






***

### compressionQuality



```php
private int $compressionQuality
```






***

### image



```php
private \Imagick|null $image
```






***

### draw



```php
private \ImagickDraw|null $draw
```






***

### gradientCount



```php
private int|null $gradientCount
```






***

### matrices



```php
private \BaconQrCode\Renderer\Image\TransformationMatrix[]|null $matrices
```






***

### matrixIndex



```php
private int|null $matrixIndex
```






***

## Methods


### __construct



```php
public __construct(string $imageFormat = &#039;png&#039;, int $compressionQuality = 100): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$imageFormat` | **string** |  |
| `$compressionQuality` | **int** |  |




***

### new

Starts a new image.

```php
public new(int $size, \BaconQrCode\Renderer\Color\ColorInterface $backgroundColor): void
```

If a previous image was already started, previous data get erased.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **int** |  |
| `$backgroundColor` | **\BaconQrCode\Renderer\Color\ColorInterface** |  |




***

### scale

Transforms all following drawing operation coordinates by scaling them by a given factor.

```php
public scale(float $size): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **float** |  |




***

### translate

Transforms all following drawing operation coordinates by translating them by a given amount.

```php
public translate(float $x, float $y): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **float** |  |
| `$y` | **float** |  |




***

### rotate

Transforms all following drawing operation coordinates by rotating them by a given amount.

```php
public rotate(int $degrees): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$degrees` | **int** |  |




***

### push

Pushes the current coordinate transformation onto a stack.

```php
public push(): void
```











***

### pop

Pops the last coordinate transformation from a stack.

```php
public pop(): void
```











***

### drawPathWithColor

Draws a path with a given color.

```php
public drawPathWithColor(\BaconQrCode\Renderer\Path\Path $path, \BaconQrCode\Renderer\Color\ColorInterface $color): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **\BaconQrCode\Renderer\Path\Path** |  |
| `$color` | **\BaconQrCode\Renderer\Color\ColorInterface** |  |




***

### drawPathWithGradient

Draws a path with a given gradient which spans the box described by the position and size.

```php
public drawPathWithGradient(\BaconQrCode\Renderer\Path\Path $path, \BaconQrCode\Renderer\RendererStyle\Gradient $gradient, float $x, float $y, float $width, float $height): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **\BaconQrCode\Renderer\Path\Path** |  |
| `$gradient` | **\BaconQrCode\Renderer\RendererStyle\Gradient** |  |
| `$x` | **float** |  |
| `$y` | **float** |  |
| `$width` | **float** |  |
| `$height` | **float** |  |




***

### done

Ends the image drawing operation and returns the resulting blob.

```php
public done(): string
```

This should reset the state of the back end and thus this method should only be callable once per image.









***

### drawPath



```php
private drawPath(\BaconQrCode\Renderer\Path\Path $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **\BaconQrCode\Renderer\Path\Path** |  |




***

### createGradientFill



```php
private createGradientFill(\BaconQrCode\Renderer\RendererStyle\Gradient $gradient, float $x, float $y, float $width, float $height): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$gradient` | **\BaconQrCode\Renderer\RendererStyle\Gradient** |  |
| `$x` | **float** |  |
| `$y` | **float** |  |
| `$width` | **float** |  |
| `$height` | **float** |  |




***

### getColorPixel



```php
private getColorPixel(\BaconQrCode\Renderer\Color\ColorInterface $color): \ImagickPixel
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **\BaconQrCode\Renderer\Color\ColorInterface** |  |




***


***

