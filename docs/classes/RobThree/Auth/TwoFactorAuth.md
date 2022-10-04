***

# TwoFactorAuth

* Full name: `\RobThree\Auth\TwoFactorAuth`

## Properties

### algorithm

```php
private string $algorithm
```

***

### period

```php
private int $period
```

***

### digits

```php
private int $digits
```

***

### issuer

```php
private string $issuer
```

***

### qrcodeprovider

```php
private ?\RobThree\Auth\Providers\Qr\IQRCodeProvider $qrcodeprovider
```

***

### rngprovider

```php
private ?\RobThree\Auth\Providers\Rng\IRNGProvider $rngprovider
```

***

### timeprovider

```php
private ?\RobThree\Auth\Providers\Time\ITimeProvider $timeprovider
```

***

### _base32dict

```php
private static string $_base32dict
```

* This property is **static**.

***

### _base32

```php
private static array $_base32
```

* This property is **static**.

***

### _base32lookup

```php
private static array $_base32lookup
```

* This property is **static**.

***

### _supportedalgos

```php
private static array $_supportedalgos
```

* This property is **static**.

***

## Methods

### __construct

```php
public __construct(?string $issuer = null, int $digits = 6, int $period = 30, string $algorithm = &#039;sha1&#039;, ?\RobThree\Auth\Providers\Qr\IQRCodeProvider $qrcodeprovider = null, ?\RobThree\Auth\Providers\Rng\IRNGProvider $rngprovider = null, ?\RobThree\Auth\Providers\Time\ITimeProvider $timeprovider = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$issuer` | **?string** |  |
| `$digits` | **int** |  |
| `$period` | **int** |  |
| `$algorithm` | **string** |  |
| `$qrcodeprovider` | **?\RobThree\Auth\Providers\Qr\IQRCodeProvider** |  |
| `$rngprovider` | **?\RobThree\Auth\Providers\Rng\IRNGProvider** |  |
| `$timeprovider` | **?\RobThree\Auth\Providers\Time\ITimeProvider** |  |

***

### createSecret

Create a new secret

```php
public createSecret(int $bits = 80, bool $requirecryptosecure = true): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bits` | **int** |  |
| `$requirecryptosecure` | **bool** |  |

***

### getCode

Calculate the code with given secret and point in time

```php
public getCode(string $secret, ?int $time = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secret` | **string** |  |
| `$time` | **?int** |  |

***

### verifyCode

Check if the code is correct. This will accept codes starting from ($discrepancy * $period) sec ago to ($discrepancy *
period) sec from now

```php
public verifyCode(string $secret, string $code, int $discrepancy = 1, ?int $time = null, int& $timeslice): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secret` | **string** |  |
| `$code` | **string** |  |
| `$discrepancy` | **int** |  |
| `$time` | **?int** |  |
| `$timeslice` | **int** |  |

***

### codeEquals

Timing-attack safe comparison of 2 codes (see http://blog.ircmaxell.com/2014/11/its-all-about-time.html)

```php
private codeEquals(string $safe, string $user): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$safe` | **string** |  |
| `$user` | **string** |  |

***

### getQRCodeImageAsDataUri

Get data-uri of QRCode

```php
public getQRCodeImageAsDataUri(string $label, string $secret, mixed $size = 200): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$label` | **string** |  |
| `$secret` | **string** |  |
| `$size` | **mixed** |  |

***

### ensureCorrectTime

Compare default timeprovider with specified timeproviders and ensure the time is within the specified number of
seconds (leniency)

```php
public ensureCorrectTime(?array $timeproviders = null, int $leniency = 5): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timeproviders` | **?array** |  |
| `$leniency` | **int** |  |

***

### getTime

```php
private getTime(?int $time = null): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$time` | **?int** |  |

***

### getTimeSlice

```php
private getTimeSlice(int $time = null, int $offset): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$time` | **int** |  |
| `$offset` | **int** |  |

***

### getQRText

Builds a string to be encoded in a QR code

```php
public getQRText(string $label, string $secret): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$label` | **string** |  |
| `$secret` | **string** |  |

***

### base32Decode

```php
private base32Decode(string $value): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

***

### getQrCodeProvider

```php
public getQrCodeProvider(): \RobThree\Auth\Providers\Qr\IQRCodeProvider
```

***

### getRngProvider

```php
public getRngProvider(): \RobThree\Auth\Providers\Rng\IRNGProvider
```

***

### getTimeProvider

```php
public getTimeProvider(): \RobThree\Auth\Providers\Time\ITimeProvider
```

***


***

