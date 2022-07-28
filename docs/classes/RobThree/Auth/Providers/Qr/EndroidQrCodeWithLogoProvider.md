***

# EndroidQrCodeWithLogoProvider





* Full name: `\RobThree\Auth\Providers\Qr\EndroidQrCodeWithLogoProvider`
* Parent class: [`\RobThree\Auth\Providers\Qr\EndroidQrCodeProvider`](./EndroidQrCodeProvider.md)



## Properties


### logoPath



```php
protected $logoPath
```






***

### logoSize



```php
protected $logoSize
```






***

## Methods


### setLogo

Adds an image to the middle of the QR Code.

```php
public setLogo(string $path, array|int $size = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Path to an image file |
| `$size` | **array&#124;int** | Just the width, or [width, height] |




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


## Inherited methods


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

