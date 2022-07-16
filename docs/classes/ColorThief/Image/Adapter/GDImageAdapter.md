***

# GDImageAdapter

Base adapter implementation to handle image manipulation.



* Full name: `\ColorThief\Image\Adapter\GDImageAdapter`
* Parent class: [`\ColorThief\Image\Adapter\ImageAdapter`](./ImageAdapter.md)




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

### loadBinaryString

{@inheritdoc}

```php
public loadBinaryString(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### loadFile

{@inheritdoc}

```php
public loadFile(mixed $file): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |




***

### destroy

Destroys the image.

```php
public destroy(): mixed
```











***

### getHeight

{@inheritdoc}

```php
public getHeight(): mixed
```











***

### getWidth

{@inheritdoc}

```php
public getWidth(): mixed
```











***

### getPixelColor

{@inheritdoc}

```php
public getPixelColor(mixed $x, mixed $y): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **mixed** |  |
| `$y` | **mixed** |  |




***


## Inherited methods


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
> Automatically generated from source code comments on 2022-07-16 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
