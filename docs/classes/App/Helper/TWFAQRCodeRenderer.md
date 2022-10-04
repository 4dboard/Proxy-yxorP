***

# TWFAQRCodeRenderer





* Full name: `\App\Helper\TWFAQRCodeRenderer`
* This class implements:
[`\RobThree\Auth\Providers\Qr\IQRCodeProvider`](../../RobThree/Auth/Providers/Qr/IQRCodeProvider.md)




## Methods


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
public getQRCodeImage(mixed $qrtext, mixed $size = 200, mixed $margin): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$qrtext` | **mixed** | the value to encode in the QR code |
| `$size` | **mixed** | the desired size of the QR code |
| `$margin` | **mixed** |  |


**Return Value:**

file contents of the QR code



***


***

