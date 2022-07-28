***

# RendererStyle





* Full name: `\BaconQrCode\Renderer\RendererStyle\RendererStyle`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### size



```php
private int $size
```






***

### margin



```php
private int $margin
```






***

### module



```php
private \BaconQrCode\Renderer\Module\ModuleInterface $module
```






***

### eye



```php
private \BaconQrCode\Renderer\Eye\EyeInterface|null $eye
```






***

### fill



```php
private \BaconQrCode\Renderer\RendererStyle\Fill $fill
```






***

## Methods


### __construct



```php
public __construct(int $size, int $margin = 4, ?\BaconQrCode\Renderer\Module\ModuleInterface $module = null, ?\BaconQrCode\Renderer\Eye\EyeInterface $eye = null, ?\BaconQrCode\Renderer\RendererStyle\Fill $fill = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **int** |  |
| `$margin` | **int** |  |
| `$module` | **?\BaconQrCode\Renderer\Module\ModuleInterface** |  |
| `$eye` | **?\BaconQrCode\Renderer\Eye\EyeInterface** |  |
| `$fill` | **?\BaconQrCode\Renderer\RendererStyle\Fill** |  |




***

### withSize



```php
public withSize(int $size): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **int** |  |




***

### withMargin



```php
public withMargin(int $margin): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$margin` | **int** |  |




***

### getSize



```php
public getSize(): int
```











***

### getMargin



```php
public getMargin(): int
```











***

### getModule



```php
public getModule(): \BaconQrCode\Renderer\Module\ModuleInterface
```











***

### getEye



```php
public getEye(): \BaconQrCode\Renderer\Eye\EyeInterface
```











***

### getFill



```php
public getFill(): \BaconQrCode\Renderer\RendererStyle\Fill
```











***


***

