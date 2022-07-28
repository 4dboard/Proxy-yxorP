***

# FallbackMimeTypeDetector





* Full name: `\League\Flysystem\Local\FallbackMimeTypeDetector`
* This class implements:
[`\League\MimeTypeDetection\MimeTypeDetector`](../../MimeTypeDetection/MimeTypeDetector.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`INCONCLUSIVE_MIME_TYPES`|private| |[&#039;application/x-empty&#039;, &#039;text/plain&#039;, &#039;text/x-asm&#039;, &#039;application/octet-stream&#039;, &#039;inode/x-empty&#039;]|

## Properties


### detector



```php
private \League\MimeTypeDetection\MimeTypeDetector $detector
```






***

### inconclusiveMimetypes



```php
private array $inconclusiveMimetypes
```






***

## Methods


### __construct



```php
public __construct(\League\MimeTypeDetection\MimeTypeDetector $detector, array $inconclusiveMimetypes = self::INCONCLUSIVE_MIME_TYPES): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$detector` | **\League\MimeTypeDetection\MimeTypeDetector** |  |
| `$inconclusiveMimetypes` | **array** |  |




***

### detectMimeType



```php
public detectMimeType(string $path, mixed $contents): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$contents` | **mixed** |  |




***

### detectMimeTypeFromBuffer



```php
public detectMimeTypeFromBuffer(string $contents): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contents` | **string** |  |




***

### detectMimeTypeFromPath



```php
public detectMimeTypeFromPath(string $path): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### detectMimeTypeFromFile



```php
public detectMimeTypeFromFile(string $path): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***


***

