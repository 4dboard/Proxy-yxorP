***

# ImageLoader





* Full name: `\ColorThief\Image\ImageLoader`



## Properties


### preferredAdapter



```php
private \ColorThief\Image\Adapter\AdapterInterface|string|null $preferredAdapter
```






***

## Methods


### setPreferredAdapter

Configure the preferred adapter to use to load images.

```php
public setPreferredAdapter(string|\ColorThief\Image\Adapter\AdapterInterface|null $adapter): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **string&#124;\ColorThief\Image\Adapter\AdapterInterface&#124;null** | Name of the preferred adapter or adapter instance.<br />If null, the adapter is automatically chosen according to the<br />available extensions. |




***

### load



```php
public load(mixed $source): \ColorThief\Image\Adapter\AdapterInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **mixed** | Path/URL to the image, GD resource, Imagick/Gmagick instance, or image as binary string |




***

### isGdImage

Determines if given source data is a GD image.

```php
public isGdImage(mixed $data): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### isImagick

Determines if given source data is an Imagick object.

```php
public isImagick(mixed $data): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### isGmagick

Determines if given source data is a Gmagick object.

```php
public isGmagick(mixed $data): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### createAdapter

Creates an adapter instance according to config settings.

```php
public createAdapter(string|\ColorThief\Image\Adapter\AdapterInterface|null $preferredAdapter = null): \ColorThief\Image\Adapter\AdapterInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preferredAdapter` | **string&#124;\ColorThief\Image\Adapter\AdapterInterface&#124;null** |  |




***

### isBinary

Determines if given source data is binary data.

```php
public isBinary(mixed $data): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### isUrl

Determines if given source data is url.

```php
public isUrl(mixed $data): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### isFilePath

Determines if given source data is file path.

```php
public isFilePath(mixed $data): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***


***

