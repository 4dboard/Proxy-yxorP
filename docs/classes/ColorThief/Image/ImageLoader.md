***

# ImageLoader





* Full name: `\ColorThief\Image\ImageLoader`




## Methods


### load



```php
public load(mixed $source): \ColorThief\Image\Adapter\ImageAdapter
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **mixed** | Path/URL to the image, GD resource, Imagick instance, or image as binary string |




***

### isImagickLoaded

Checks if Imagick extension is loaded.

```php
public isImagickLoaded(): bool
```











***

### isGmagickLoaded

Checks if Gmagick extension is loaded.

```php
public isGmagickLoaded(): bool
```











***

### getAdapter



```php
public getAdapter(string $adapterType): \ColorThief\Image\Adapter\ImageAdapter
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapterType` | **string** |  |




***


***
> yxorP Documentation
