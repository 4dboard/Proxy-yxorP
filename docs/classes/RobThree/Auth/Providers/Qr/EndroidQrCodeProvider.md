***

# EndroidQrCodeProvider

* Full name: `\RobThree\Auth\Providers\Qr\EndroidQrCodeProvider`
* This class implements:
  [`\RobThree\Auth\Providers\Qr\IQRCodeProvider`](./IQRCodeProvider.md)

## Properties

### bgcolor

```php
public $bgcolor
```

***

### color

```php
public $color
```

***

### margin

```php
public $margin
```

***

### errorcorrectionlevel

```php
public $errorcorrectionlevel
```

***

### endroid4

```php
protected $endroid4
```

***

## Methods

### __construct

```php
public __construct(mixed $bgcolor = &#039;ffffff&#039;, mixed $color = &#039;000000&#039;, mixed $margin, mixed $errorcorrectionlevel = &#039;H&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bgcolor` | **mixed** |  |
| `$color` | **mixed** |  |
| `$margin` | **mixed** |  |
| `$errorcorrectionlevel` | **mixed** |  |

***

### getMimeType

Returns the appropriate mime type for the QR code
that will be generated

```php
public getMimeType(): string
```

***

### getQRCodeImage

Generate and return the QR code to embed in a web page

```php
public getQRCodeImage(mixed $qrtext, mixed $size): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$qrtext` | **mixed** | the value to encode in the QR code |
| `$size` | **mixed** | the desired size of the QR code |

**Return Value:**

file contents of the QR code



***

### qrCodeInstance

```php
protected qrCodeInstance(mixed $qrtext, mixed $size): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$qrtext` | **mixed** |  |
| `$size` | **mixed** |  |

***

### handleColor

```php
private handleColor(mixed $color): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **mixed** |  |

***

### handleErrorCorrectionLevel

```php
private handleErrorCorrectionLevel(mixed $level): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |

***


***

