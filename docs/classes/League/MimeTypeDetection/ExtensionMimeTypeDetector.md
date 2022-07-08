***

# ExtensionMimeTypeDetector





* Full name: `\League\MimeTypeDetection\ExtensionMimeTypeDetector`
* This class implements:
[`\League\MimeTypeDetection\MimeTypeDetector`](./MimeTypeDetector.md)



## Properties


### extensions



```php
private \League\MimeTypeDetection\ExtensionToMimeTypeMap $extensions
```






***

## Methods


### __construct



```php
public __construct(\League\MimeTypeDetection\ExtensionToMimeTypeMap $extensions = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extensions` | **\League\MimeTypeDetection\ExtensionToMimeTypeMap** |  |




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

### detectMimeTypeFromBuffer



```php
public detectMimeTypeFromBuffer(string $contents): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contents` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
