***

# ImageChartsQRCodeProvider





* Full name: `\RobThree\Auth\Providers\Qr\ImageChartsQRCodeProvider`
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

## Methods


### __construct



```php
public __construct(bool $verifyssl = false, string $errorcorrectionlevel = &#039;L&#039;, int $margin = 1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$verifyssl` | **bool** |  |
| `$errorcorrectionlevel` | **string** |  |
| `$margin` | **int** |  |




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

### getUrl



```php
public getUrl(string $qrtext, int $size): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$qrtext` | **string** | the value to encode in the QR code |
| `$size` | **int** | the desired size of the QR code |


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

