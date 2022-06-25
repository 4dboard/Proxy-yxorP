***

# ezcDocumentPdfImageHandler

PDF image handler

Abstract base class for image handlers. Should be extended by classes, which can handle a set of image types and provide
information about image mime types and dimensions.

* Full name: `\ezcDocumentPdfImageHandler`
* This class is an **Abstract class**

## Methods

### canHandle

Can this handler handle the passed image?

```php
public canHandle(string $file): bool
```

Returns a boolean value indicatin whether the current handler can handle the passed image file.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

***

### getDimensions

Get image dimensions

```php
public getDimensions(string $file): array
```

Return an array with the image dimensions. The array will look like:
array( ezcDocumentPcssMeasure $width, ezcDocumentPcssMeasure $height ).

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

***

### getMimeType

Get image mime type

```php
public getMimeType(string $file): string
```

Return a string with the image mime type, identifying the type of the image.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

yxorP::get('REQUEST')
