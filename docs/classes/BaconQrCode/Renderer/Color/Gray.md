***

# Gray

* Full name: `\BaconQrCode\Renderer\Color\Gray`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\BaconQrCode\Renderer\Color\ColorInterface`](./ColorInterface.md)
* This class is a **Final class**

## Properties

### gray

```php
private int $gray
```

***

## Methods

### __construct

```php
public __construct(int $gray): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$gray` | **int** | the gray value between 0 (black) and 100 (white) |

***

### getGray

```php
public getGray(): int
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

