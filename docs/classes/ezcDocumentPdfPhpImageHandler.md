***

# ezcDocumentPdfPhpImageHandler

PHP image handler

Basic image handler which can detect mime type and dimensions of some images using the PHP function getimagesize(). It
therefore can analyse all images covered by the PHP function, which is available by default.

* Full name: `\ezcDocumentPdfPhpImageHandler`
* Parent class: [`\ezcDocumentPdfImageHandler`](./ezcDocumentPdfImageHandler.md)

## Properties

### cache

Cache for extracted image information

```php
protected array $cache
```

***

## Methods

### canHandle

Can this handler handle the passed image?

```php
public canHandle(string $file): bool
```

Returns a boolean value indicatin whether the current handler can handle the passed image file.

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

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

***

## Inherited methods

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
