***

# ImageRenderer





* Full name: `\BaconQrCode\Renderer\ImageRenderer`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\BaconQrCode\Renderer\RendererInterface`](./RendererInterface.md)
* This class is a **Final class**



## Properties


### rendererStyle



```php
private \BaconQrCode\Renderer\RendererStyle\RendererStyle $rendererStyle
```






***

### imageBackEnd



```php
private \BaconQrCode\Renderer\Image\ImageBackEndInterface $imageBackEnd
```






***

## Methods


### __construct



```php
public __construct(\BaconQrCode\Renderer\RendererStyle\RendererStyle $rendererStyle, \BaconQrCode\Renderer\Image\ImageBackEndInterface $imageBackEnd): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rendererStyle` | **\BaconQrCode\Renderer\RendererStyle\RendererStyle** |  |
| `$imageBackEnd` | **\BaconQrCode\Renderer\Image\ImageBackEndInterface** |  |




***

### render



```php
public render(\BaconQrCode\Encoder\QrCode $qrCode): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$qrCode` | **\BaconQrCode\Encoder\QrCode** |  |




***

### drawEyes



```php
private drawEyes(int $matrixSize, \BaconQrCode\Renderer\Path\Path $modulePath): \BaconQrCode\Renderer\Path\Path
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrixSize` | **int** |  |
| `$modulePath` | **\BaconQrCode\Renderer\Path\Path** |  |




***

### drawEye



```php
private drawEye(\BaconQrCode\Renderer\Path\Path $externalPath, \BaconQrCode\Renderer\Path\Path $internalPath, \BaconQrCode\Renderer\RendererStyle\EyeFill $fill, float $xTranslation, float $yTranslation, int $rotation, \BaconQrCode\Renderer\Path\Path $modulePath): \BaconQrCode\Renderer\Path\Path
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$externalPath` | **\BaconQrCode\Renderer\Path\Path** |  |
| `$internalPath` | **\BaconQrCode\Renderer\Path\Path** |  |
| `$fill` | **\BaconQrCode\Renderer\RendererStyle\EyeFill** |  |
| `$xTranslation` | **float** |  |
| `$yTranslation` | **float** |  |
| `$rotation` | **int** |  |
| `$modulePath` | **\BaconQrCode\Renderer\Path\Path** |  |




***


***

