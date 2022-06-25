***

# ezcDocumentPdfImage

PDF image handler

Class handling image references, extracting their mime type and dimensions.
Dispatches to concrete handler, which claim that they are able to handle the
current image and requests dimensions and mime type from the handler.

By default only one handler is registered, which uses PHPs getimagesize()
function to handle all images, which getimagesize() can handle. For other
image types additional handlers can be registered using the registerImageHander()
method.

* Full name: `\ezcDocumentPdfImage`



## Properties


### handler

List of registered image handlers

```php
protected static $handler
```



* This property is **static**.


***

### file

Path to image file

```php
protected string $file
```






***

### currentHandler

Handler used for the current image file.

```php
protected \ezcDocumentPdfImageHandler $currentHandler
```






***

## Methods


### __construct

Construct new image handler

```php
public __construct(): void
```











***

### createFromFile

Create image handler object from file

```php
public static createFromFile(string $file): \ezcDocumentPdfImage
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |




***

### registerImageHander

Register additional image handler

```php
public static registerImageHander(\ezcDocumentPdfImageHandler $handler): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **\ezcDocumentPdfImageHandler** |  |




***

### loadFile

Load image file

```php
public loadFile(string $file): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |




***

### getDimensions

Get image dimensions

```php
public getDimensions(): array
```

Return an array with the image dimensions. The array will look like:
array( ezcDocumentPcssMeasure $width, ezcDocumentPcssMeasure $height ).









***

### getMimeType

Get image mime type

```php
public getMimeType(): string
```

Return a string with the image mime type, identifying the type of the
image.









***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
