***

# BaconQrCodeProvider

* Full name: `\RobThree\Auth\Providers\Qr\BaconQrCodeProvider`
* This class implements:
  [`\RobThree\Auth\Providers\Qr\IQRCodeProvider`](./IQRCodeProvider.md)

## Properties

### borderWidth

```php
private $borderWidth
```

***

### backgroundColour

```php
private $backgroundColour
```

***

### foregroundColour

```php
private $foregroundColour
```

***

### format

```php
private $format
```

***

## Methods

### __construct

Ensure we using the latest Bacon QR Code and specify default options

```php
public __construct(int $borderWidth = 4, string $backgroundColour = &#039;#ffffff&#039;, string $foregroundColour = &#039;#000000&#039;, string $format = &#039;png&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$borderWidth` | **int** | space around the QR code, 4 is the default from Bacon QR Code |
| `$backgroundColour` | **string** | hex reference for the background colour |
| `$foregroundColour` | **string** | hex reference for the foreground colour |
| `$format` | **string** | the desired output, png or svg |

***

### getMimeType

Standard functions from IQRCodeProvider

```php
public getMimeType(): string
```

***

### getQRCodeImage

Generate and return the QR code to embed in a web page

```php
public getQRCodeImage(mixed $qrText, mixed $size): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$qrText` | **mixed** |  |
| `$size` | **mixed** | the desired size of the QR code |

**Return Value:**

file contents of the QR code



***

### getQRCodeByBackend

Abstract QR code generation function
providing colour changing support

```php
private getQRCodeByBackend(mixed $qrText, mixed $size, \BaconQrCode\Renderer\Image\ImageBackEndInterface $backend): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$qrText` | **mixed** |  |
| `$size` | **mixed** |  |
| `$backend` | **\BaconQrCode\Renderer\Image\ImageBackEndInterface** |  |

***

### handleColour

Ensure colour is an array of three values but also
accept a string and assume its a 3 or 6 character hex

```php
private handleColour(mixed $colour): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$colour` | **mixed** |  |

***


***

