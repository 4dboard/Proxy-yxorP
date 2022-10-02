***

# QrCode

QR code.

* Full name: `\BaconQrCode\Encoder\QrCode`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NUM_MASK_PATTERNS`|public| |8|

## Properties

### mode

Mode of the QR code.

```php
private \BaconQrCode\Common\Mode $mode
```

***

### errorCorrectionLevel

EC level of the QR code.

```php
private \BaconQrCode\Common\ErrorCorrectionLevel $errorCorrectionLevel
```

***

### version

Version of the QR code.

```php
private \BaconQrCode\Common\Version $version
```

***

### maskPattern

Mask pattern of the QR code.

```php
private int $maskPattern
```

***

### matrix

Matrix of the QR code.

```php
private \BaconQrCode\Encoder\ByteMatrix $matrix
```

***

## Methods

### __construct

```php
public __construct(\BaconQrCode\Common\Mode $mode, \BaconQrCode\Common\ErrorCorrectionLevel $errorCorrectionLevel, \BaconQrCode\Common\Version $version, int $maskPattern, \BaconQrCode\Encoder\ByteMatrix $matrix): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **\BaconQrCode\Common\Mode** |  |
| `$errorCorrectionLevel` | **\BaconQrCode\Common\ErrorCorrectionLevel** |  |
| `$version` | **\BaconQrCode\Common\Version** |  |
| `$maskPattern` | **int** |  |
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |

***

### getMode

Gets the mode.

```php
public getMode(): \BaconQrCode\Common\Mode
```

***

### getErrorCorrectionLevel

Gets the EC level.

```php
public getErrorCorrectionLevel(): \BaconQrCode\Common\ErrorCorrectionLevel
```

***

### getVersion

Gets the version.

```php
public getVersion(): \BaconQrCode\Common\Version
```

***

### getMaskPattern

Gets the mask pattern.

```php
public getMaskPattern(): int
```

***

### getMatrix

Gets the matrix.

```php
public getMatrix(): \BaconQrCode\Encoder\ByteMatrix
```

***

### isValidMaskPattern

Validates whether a mask pattern is valid.

```php
public static isValidMaskPattern(int $maskPattern): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maskPattern` | **int** |  |

***

### __toString

Returns a string representation of the QR code.

```php
public __toString(): string
```

***


***

