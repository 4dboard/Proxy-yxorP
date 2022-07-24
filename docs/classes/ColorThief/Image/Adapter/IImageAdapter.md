***

# IImageAdapter

Basic interface for all image adapters.



* Full name: `\ColorThief\Image\Adapter\IImageAdapter`



## Methods


### loadFile

Loads an image from file.

```php
public loadFile(string $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### loadBinaryString

Loads an image from a binary string representation.

```php
public loadBinaryString(string $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **string** |  |




***

### load

Loads an image resource.

```php
public load(resource|object $resource): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **resource&#124;object** |  |




***

### destroy

Destroys the image.

```php
public destroy(): mixed
```











***

### getHeight

Returns image height.

```php
public getHeight(): int
```











***

### getWidth

Returns image width.

```php
public getWidth(): int
```











***

### getPixelColor

Returns the color of the specified pixel.

```php
public getPixelColor(int $x, int $y): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** |  |
| `$y` | **int** |  |




***

### getResource

Get the raw resource.

```php
public getResource(): resource
```











***


***
> Automatically generated from source code comments on 2022-07-24 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
