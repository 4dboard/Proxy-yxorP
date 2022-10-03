***

# QRServerProvider





* Full name: `\RobThree\Auth\Providers\Qr\QRServerProvider`
* Parent class: [`\RobThree\Auth\Providers\Qr\BaseHTTPQRCodeProvider`](./BaseHTTPQRCodeProvider.md)



## Properties


### errorcorrectionlevel



```php
public string $errorcorrectionlevel
```






***

### margin



```php
public int $margin
```






***

### qzone



```php
public int $qzone
```






***

### bgcolor



```php
public string $bgcolor
```






***

### color



```php
public string $color
```






***

### format



```php
public string $format
```






***

## Methods


### __construct



```php
public __construct(bool $verifyssl = false, string $errorcorrectionlevel = &#039;L&#039;, int $margin = 4, int $qzone = 1, string $bgcolor = &#039;ffffff&#039;, string $color = &#039;000000&#039;, string $format = &#039;png&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$verifyssl` | **bool** |  |
| `$errorcorrectionlevel` | **string** |  |
| `$margin` | **int** |  |
| `$qzone` | **int** |  |
| `$bgcolor` | **string** |  |
| `$color` | **string** |  |
| `$format` | **string** |  |




***

### getMimeType

{@inheritdoc}

```php
public getMimeType(): mixed
```











***

### getQRCodeImage

{@inheritdoc}

```php
public getQRCodeImage(mixed $qrtext, mixed $size): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$qrtext` | **mixed** |  |
| `$size` | **mixed** |  |




***

### decodeColor



```php
private decodeColor(string $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### getUrl



```php
public getUrl(string $qrtext, int|string $size): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$qrtext` | **string** | the value to encode in the QR code |
| `$size` | **int&#124;string** | the desired size of the QR code |


**Return Value:**

file contents of the QR code



***


## Inherited methods


### getContent



```php
protected getContent(string $url): string|bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** |  |




***


***

