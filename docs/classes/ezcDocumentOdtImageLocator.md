***

# ezcDocumentOdtImageLocator

Class to locate images in DocBook to ODT conversion.



* Full name: `\ezcDocumentOdtImageLocator`



## Properties


### paths

Paths to search for images.

```php
protected array|(string) $paths
```






***

## Methods


### __construct

Creates a new image locator for the given $document.

```php
public __construct(\ezcDocument $document): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\ezcDocument** |  |




***

### locateImage

Returns the realpath of the given image $fileName.

```php
public locateImage(string $fileName): string|false
```

Tries to find the image for the given $fileName in the file system and
returns its realpath, if found. If the image cannot be located, false is
returned.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fileName` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
