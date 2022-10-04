***

# SvgImageBackEnd

* Full name: `\BaconQrCode\Renderer\Image\SvgImageBackEnd`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\BaconQrCode\Renderer\Image\ImageBackEndInterface`](./ImageBackEndInterface.md)
* This class is a **Final class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`PRECISION`|private| |3|

## Properties

### xmlWriter

```php
private \XMLWriter|null $xmlWriter
```

***

### stack

```php
private int[]|null $stack
```

***

### currentStack

```php
private int|null $currentStack
```

***

### gradientCount

```php
private int|null $gradientCount
```

***

## Methods

### __construct

```php
public __construct(): mixed
```

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

### startPathElement

```php
private startPathElement(\BaconQrCode\Renderer\Path\Path $path): void
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

### getColorString

```php
private getColorString(\BaconQrCode\Renderer\Color\ColorInterface $color): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **\BaconQrCode\Renderer\Color\ColorInterface** |  |

***


***

