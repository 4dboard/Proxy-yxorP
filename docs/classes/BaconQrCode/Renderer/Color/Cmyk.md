***

# Cmyk

* Full name: `\BaconQrCode\Renderer\Color\Cmyk`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\BaconQrCode\Renderer\Color\ColorInterface`](./ColorInterface.md)
* This class is a **Final class**

## Properties

### cyan

```php
private int $cyan
```

***

### magenta

```php
private int $magenta
```

***

### yellow

```php
private int $yellow
```

***

### black

```php
private int $black
```

***

## Methods

### __construct

```php
public __construct(int $cyan, int $magenta, int $yellow, int $black): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cyan` | **int** | the cyan amount, 0 to 100 |
| `$magenta` | **int** | the magenta amount, 0 to 100 |
| `$yellow` | **int** | the yellow amount, 0 to 100 |
| `$black` | **int** | the black amount, 0 to 100 |

***

### getCyan

```php
public getCyan(): int
```

***

### getMagenta

```php
public getMagenta(): int
```

***

### getYellow

```php
public getYellow(): int
```

***

### getBlack

```php
public getBlack(): int
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

