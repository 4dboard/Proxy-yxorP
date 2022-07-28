***

# Fill





* Full name: `\BaconQrCode\Renderer\RendererStyle\Fill`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### backgroundColor



```php
private \BaconQrCode\Renderer\Color\ColorInterface $backgroundColor
```






***

### foregroundColor



```php
private \BaconQrCode\Renderer\Color\ColorInterface|null $foregroundColor
```






***

### foregroundGradient



```php
private \BaconQrCode\Renderer\RendererStyle\Gradient|null $foregroundGradient
```






***

### topLeftEyeFill



```php
private \BaconQrCode\Renderer\RendererStyle\EyeFill $topLeftEyeFill
```






***

### topRightEyeFill



```php
private \BaconQrCode\Renderer\RendererStyle\EyeFill $topRightEyeFill
```






***

### bottomLeftEyeFill



```php
private \BaconQrCode\Renderer\RendererStyle\EyeFill $bottomLeftEyeFill
```






***

### default



```php
private static self|null $default
```



* This property is **static**.


***

## Methods


### __construct



```php
private __construct(\BaconQrCode\Renderer\Color\ColorInterface $backgroundColor, ?\BaconQrCode\Renderer\Color\ColorInterface $foregroundColor, ?\BaconQrCode\Renderer\RendererStyle\Gradient $foregroundGradient, \BaconQrCode\Renderer\RendererStyle\EyeFill $topLeftEyeFill, \BaconQrCode\Renderer\RendererStyle\EyeFill $topRightEyeFill, \BaconQrCode\Renderer\RendererStyle\EyeFill $bottomLeftEyeFill): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$backgroundColor` | **\BaconQrCode\Renderer\Color\ColorInterface** |  |
| `$foregroundColor` | **?\BaconQrCode\Renderer\Color\ColorInterface** |  |
| `$foregroundGradient` | **?\BaconQrCode\Renderer\RendererStyle\Gradient** |  |
| `$topLeftEyeFill` | **\BaconQrCode\Renderer\RendererStyle\EyeFill** |  |
| `$topRightEyeFill` | **\BaconQrCode\Renderer\RendererStyle\EyeFill** |  |
| `$bottomLeftEyeFill` | **\BaconQrCode\Renderer\RendererStyle\EyeFill** |  |




***

### default



```php
public static default(): self
```



* This method is **static**.







***

### withForegroundColor



```php
public static withForegroundColor(\BaconQrCode\Renderer\Color\ColorInterface $backgroundColor, \BaconQrCode\Renderer\Color\ColorInterface $foregroundColor, \BaconQrCode\Renderer\RendererStyle\EyeFill $topLeftEyeFill, \BaconQrCode\Renderer\RendererStyle\EyeFill $topRightEyeFill, \BaconQrCode\Renderer\RendererStyle\EyeFill $bottomLeftEyeFill): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$backgroundColor` | **\BaconQrCode\Renderer\Color\ColorInterface** |  |
| `$foregroundColor` | **\BaconQrCode\Renderer\Color\ColorInterface** |  |
| `$topLeftEyeFill` | **\BaconQrCode\Renderer\RendererStyle\EyeFill** |  |
| `$topRightEyeFill` | **\BaconQrCode\Renderer\RendererStyle\EyeFill** |  |
| `$bottomLeftEyeFill` | **\BaconQrCode\Renderer\RendererStyle\EyeFill** |  |




***

### withForegroundGradient



```php
public static withForegroundGradient(\BaconQrCode\Renderer\Color\ColorInterface $backgroundColor, \BaconQrCode\Renderer\RendererStyle\Gradient $foregroundGradient, \BaconQrCode\Renderer\RendererStyle\EyeFill $topLeftEyeFill, \BaconQrCode\Renderer\RendererStyle\EyeFill $topRightEyeFill, \BaconQrCode\Renderer\RendererStyle\EyeFill $bottomLeftEyeFill): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$backgroundColor` | **\BaconQrCode\Renderer\Color\ColorInterface** |  |
| `$foregroundGradient` | **\BaconQrCode\Renderer\RendererStyle\Gradient** |  |
| `$topLeftEyeFill` | **\BaconQrCode\Renderer\RendererStyle\EyeFill** |  |
| `$topRightEyeFill` | **\BaconQrCode\Renderer\RendererStyle\EyeFill** |  |
| `$bottomLeftEyeFill` | **\BaconQrCode\Renderer\RendererStyle\EyeFill** |  |




***

### uniformColor



```php
public static uniformColor(\BaconQrCode\Renderer\Color\ColorInterface $backgroundColor, \BaconQrCode\Renderer\Color\ColorInterface $foregroundColor): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$backgroundColor` | **\BaconQrCode\Renderer\Color\ColorInterface** |  |
| `$foregroundColor` | **\BaconQrCode\Renderer\Color\ColorInterface** |  |




***

### uniformGradient



```php
public static uniformGradient(\BaconQrCode\Renderer\Color\ColorInterface $backgroundColor, \BaconQrCode\Renderer\RendererStyle\Gradient $foregroundGradient): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$backgroundColor` | **\BaconQrCode\Renderer\Color\ColorInterface** |  |
| `$foregroundGradient` | **\BaconQrCode\Renderer\RendererStyle\Gradient** |  |




***

### hasGradientFill



```php
public hasGradientFill(): bool
```











***

### getBackgroundColor



```php
public getBackgroundColor(): \BaconQrCode\Renderer\Color\ColorInterface
```











***

### getForegroundColor



```php
public getForegroundColor(): \BaconQrCode\Renderer\Color\ColorInterface
```











***

### getForegroundGradient



```php
public getForegroundGradient(): \BaconQrCode\Renderer\RendererStyle\Gradient
```











***

### getTopLeftEyeFill



```php
public getTopLeftEyeFill(): \BaconQrCode\Renderer\RendererStyle\EyeFill
```











***

### getTopRightEyeFill



```php
public getTopRightEyeFill(): \BaconQrCode\Renderer\RendererStyle\EyeFill
```











***

### getBottomLeftEyeFill



```php
public getBottomLeftEyeFill(): \BaconQrCode\Renderer\RendererStyle\EyeFill
```











***


***

