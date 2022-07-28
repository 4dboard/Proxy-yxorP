***

# LocalFilesystemAdapter





* Full name: `\League\Flysystem\Local\LocalFilesystemAdapter`
* This class implements:
[`\League\Flysystem\FilesystemAdapter`](../FilesystemAdapter.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SKIP_LINKS`|public|int|01|
|`DISALLOW_LINKS`|public|int|02|

## Properties


### prefixer



```php
private \League\Flysystem\PathPrefixer $prefixer
```






***

### writeFlags



```php
private int $writeFlags
```






***

### linkHandling



```php
private int $linkHandling
```






***

### visibility



```php
private \League\Flysystem\UnixVisibility\VisibilityConverter $visibility
```






***

### mimeTypeDetector



```php
private \League\MimeTypeDetection\MimeTypeDetector $mimeTypeDetector
```






***

### rootLocation



```php
private string $rootLocation
```






***

### rootLocationIsSetup



```php
private bool $rootLocationIsSetup
```






***

## Methods


### __construct



```php
public __construct(string $location, \League\Flysystem\UnixVisibility\VisibilityConverter $visibility = null, int $writeFlags = LOCK_EX, int $linkHandling = self::DISALLOW_LINKS, \League\MimeTypeDetection\MimeTypeDetector $mimeTypeDetector = null, bool $lazyRootCreation = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$visibility` | **\League\Flysystem\UnixVisibility\VisibilityConverter** |  |
| `$writeFlags` | **int** |  |
| `$linkHandling` | **int** |  |
| `$mimeTypeDetector` | **\League\MimeTypeDetection\MimeTypeDetector** |  |
| `$lazyRootCreation` | **bool** |  |




***

### ensureRootDirectoryExists



```php
private ensureRootDirectoryExists(): void
```











***

### write



```php
public write(string $path, string $contents, \League\Flysystem\Config $config): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$contents` | **string** |  |
| `$config` | **\League\Flysystem\Config** |  |




***

### writeStream



```php
public writeStream(string $path, mixed $contents, \League\Flysystem\Config $config): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$contents` | **mixed** |  |
| `$config` | **\League\Flysystem\Config** |  |




***

### writeToFile



```php
private writeToFile(string $path, resource|string $contents, \League\Flysystem\Config $config): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$contents` | **resource&#124;string** |  |
| `$config` | **\League\Flysystem\Config** |  |




***

### delete



```php
public delete(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### deleteDirectory



```php
public deleteDirectory(string $prefix): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |




***

### listDirectoryRecursively



```php
private listDirectoryRecursively(string $path, int $mode = RecursiveIteratorIterator::SELF_FIRST): \Generator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$mode` | **int** |  |




***

### deleteFileInfoObject



```php
protected deleteFileInfoObject(\SplFileInfo $file): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\SplFileInfo** |  |




***

### listContents



```php
public listContents(string $path, bool $deep): iterable&lt;\League\Flysystem\StorageAttributes&gt;
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$deep` | **bool** |  |




***

### move



```php
public move(string $source, string $destination, \League\Flysystem\Config $config): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** |  |
| `$destination` | **string** |  |
| `$config` | **\League\Flysystem\Config** |  |




***

### copy



```php
public copy(string $source, string $destination, \League\Flysystem\Config $config): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** |  |
| `$destination` | **string** |  |
| `$config` | **\League\Flysystem\Config** |  |




***

### read



```php
public read(string $path): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### readStream



```php
public readStream(string $path): resource
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### ensureDirectoryExists



```php
protected ensureDirectoryExists(string $dirname, int $visibility): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirname` | **string** |  |
| `$visibility` | **int** |  |




***

### fileExists



```php
public fileExists(string $location): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |




***

### directoryExists



```php
public directoryExists(string $location): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |




***

### createDirectory



```php
public createDirectory(string $path, \League\Flysystem\Config $config): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$config` | **\League\Flysystem\Config** |  |




***

### setVisibility



```php
public setVisibility(string $path, string $visibility): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$visibility` | **string** |  |




***

### visibility



```php
public visibility(string $path): \League\Flysystem\FileAttributes
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### resolveDirectoryVisibility



```php
private resolveDirectoryVisibility(?string $visibility): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visibility` | **?string** |  |




***

### mimeType



```php
public mimeType(string $path): \League\Flysystem\FileAttributes
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### lastModified



```php
public lastModified(string $path): \League\Flysystem\FileAttributes
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### fileSize



```php
public fileSize(string $path): \League\Flysystem\FileAttributes
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### listDirectory



```php
private listDirectory(string $location): \Generator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |




***

### setPermissions



```php
private setPermissions(string $location, int $visibility): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$visibility` | **int** |  |




***


***

