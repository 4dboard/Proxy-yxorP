***

# Alpha





* Full name: `\BaconQrCode\Renderer\Color\Alpha`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\BaconQrCode\Renderer\Color\ColorInterface`](./ColorInterface.md)
* This class is a **Final class**



## Properties


### alpha



```php
private int $alpha
```






***

### baseColor



```php
private \BaconQrCode\Renderer\Color\ColorInterface $baseColor
```






***

## Methods


### __construct



```php
public __construct(int $alpha, \BaconQrCode\Renderer\Color\ColorInterface $baseColor): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alpha` | **int** | the alpha value, 0 to 100 |
| `$baseColor` | **\BaconQrCode\Renderer\Color\ColorInterface** |  |




***

### getAlpha



```php
public getAlpha(): int
```











***

### getBaseColor



```php
public getBaseColor(): \BaconQrCode\Renderer\Color\ColorInterface
```











***

### toRgb

Converts the color to RGB.

```php
public toRgb(): \BaconQrCode\Renderer\Color\Rgb
```











***

### toCmyk

Converts the color to CMYK.

```php
public toCmyk(): \BaconQrCode\Renderer\Color\Cmyk
```











***

### toGray

Converts the color to gray.

```php
public toGray(): \BaconQrCode\Renderer\Color\Gray
```











***


***

