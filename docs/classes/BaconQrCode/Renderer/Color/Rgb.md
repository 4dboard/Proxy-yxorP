***

# Rgb

* Full name: `\BaconQrCode\Renderer\Color\Rgb`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\BaconQrCode\Renderer\Color\ColorInterface`](./ColorInterface.md)
* This class is a **Final class**

## Properties

### red

```php
private int $red
```

***

### green

```php
private int $green
```

***

### blue

```php
private int $blue
```

***

## Methods

### __construct

```php
public __construct(int $red, int $green, int $blue): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$red` | **int** | the red amount of the color, 0 to 255 |
| `$green` | **int** | the green amount of the color, 0 to 255 |
| `$blue` | **int** | the blue amount of the color, 0 to 255 |

***

### getRed

```php
public getRed(): int
```

***

### getGreen

```php
public getGreen(): int
```

***

### getBlue

```php
public getBlue(): int
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

