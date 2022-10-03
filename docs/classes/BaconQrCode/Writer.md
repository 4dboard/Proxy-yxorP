***

# Writer

QR code writer.



* Full name: `\BaconQrCode\Writer`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### renderer

Renderer instance.

```php
private \BaconQrCode\Renderer\RendererInterface $renderer
```






***

## Methods


### __construct

Creates a new writer with a specific renderer.

```php
public __construct(\BaconQrCode\Renderer\RendererInterface $renderer): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$renderer` | **\BaconQrCode\Renderer\RendererInterface** |  |




***

### writeString

Writes QR code and returns it as string.

```php
public writeString(string $content, string $encoding = Encoder::DEFAULT_BYTE_MODE_ECODING, ?\BaconQrCode\Common\ErrorCorrectionLevel $ecLevel = null, ?\BaconQrCode\Common\Version $forcedVersion = null): string
```

Content is a string which *should* be encoded in UTF-8, in case there are
non ASCII-characters present.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$encoding` | **string** |  |
| `$ecLevel` | **?\BaconQrCode\Common\ErrorCorrectionLevel** |  |
| `$forcedVersion` | **?\BaconQrCode\Common\Version** |  |




***

### writeFile

Writes QR code to a file.

```php
public writeFile(string $content, string $filename, string $encoding = Encoder::DEFAULT_BYTE_MODE_ECODING, ?\BaconQrCode\Common\ErrorCorrectionLevel $ecLevel = null, ?\BaconQrCode\Common\Version $forcedVersion = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$filename` | **string** |  |
| `$encoding` | **string** |  |
| `$ecLevel` | **?\BaconQrCode\Common\ErrorCorrectionLevel** |  |
| `$forcedVersion` | **?\BaconQrCode\Common\Version** |  |



**See Also:**

* \BaconQrCode\Writer::writeString() - 

***


***

