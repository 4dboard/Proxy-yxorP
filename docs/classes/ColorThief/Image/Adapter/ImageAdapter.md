***

# ImageAdapter

Base adapter implementation to handle image manipulation.



* Full name: `\ColorThief\Image\Adapter\ImageAdapter`
* This class implements:
[`\ColorThief\Image\Adapter\IImageAdapter`](./IImageAdapter.md)
* This class is an **Abstract class**



## Properties


### resource

The image resource handler.

```php
protected $resource
```






***

## Methods


### load

Loads an image resource.

```php
public load(mixed $resource): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |




***

### destroy

Destroys the image.

```php
public destroy(): mixed
```











***

### getResource

Get the raw resource.

```php
public getResource(): resource
```











***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
