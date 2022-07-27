***

# MountManager





* Full name: `\League\Flysystem\MountManager`
* This class implements:
[`\League\Flysystem\FilesystemOperator`](./FilesystemOperator.md)



## Properties


### filesystems



```php
private array&lt;string,\League\Flysystem\FilesystemOperator&gt; $filesystems
```






***

## Methods


### __construct

MountManager constructor.

```php
public __construct(array&lt;string,\League\Flysystem\FilesystemOperator&gt; $filesystems = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filesystems` | **array<string,\League\Flysystem\FilesystemOperator>** |  |




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

### has



```php
public has(string $location): bool
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

### read



```php
public read(string $location): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |




***

### readStream



```php
public readStream(string $location): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |




***

### listContents



```php
public listContents(string $location, bool $deep = self::LIST_SHALLOW): \League\Flysystem\DirectoryListing
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$deep` | **bool** |  |




***

### lastModified



```php
public lastModified(string $location): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |




***

### fileSize



```php
public fileSize(string $location): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |




***

### mimeType



```php
public mimeType(string $location): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |




***

### visibility



```php
public visibility(string $location): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |




***

### write



```php
public write(string $location, string $contents, array $config = []): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$contents` | **string** |  |
| `$config` | **array** |  |




***

### writeStream



```php
public writeStream(string $location, mixed $contents, array $config = []): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$contents` | **mixed** |  |
| `$config` | **array** |  |




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

### delete



```php
public delete(string $location): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |




***

### deleteDirectory



```php
public deleteDirectory(string $location): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |




***

### createDirectory



```php
public createDirectory(string $location, array $config = []): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$config` | **array** |  |




***

### move



```php
public move(string $source, string $destination, array $config = []): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** |  |
| `$destination` | **string** |  |
| `$config` | **array** |  |




***

### copy



```php
public copy(string $source, string $destination, array $config = []): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** |  |
| `$destination` | **string** |  |
| `$config` | **array** |  |




***

### mountFilesystems



```php
private mountFilesystems(array $filesystems): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filesystems` | **array** |  |




***

### guardAgainstInvalidMount



```php
private guardAgainstInvalidMount(mixed $key, mixed $filesystem): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$filesystem` | **mixed** |  |




***

### mountFilesystem



```php
private mountFilesystem(string $key, \League\Flysystem\FilesystemOperator $filesystem): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$filesystem` | **\League\Flysystem\FilesystemOperator** |  |




***

### determineFilesystemAndPath



```php
private determineFilesystemAndPath(string $path): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### copyInSameFilesystem



```php
private copyInSameFilesystem(\League\Flysystem\FilesystemOperator $sourceFilesystem, string $sourcePath, string $destinationPath, string $source, string $destination): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sourceFilesystem` | **\League\Flysystem\FilesystemOperator** |  |
| `$sourcePath` | **string** |  |
| `$destinationPath` | **string** |  |
| `$source` | **string** |  |
| `$destination` | **string** |  |




***

### copyAcrossFilesystem



```php
private copyAcrossFilesystem(?string $visibility, \League\Flysystem\FilesystemOperator $sourceFilesystem, string $sourcePath, \League\Flysystem\FilesystemOperator $destinationFilesystem, string $destinationPath, string $source, string $destination): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visibility` | **?string** |  |
| `$sourceFilesystem` | **\League\Flysystem\FilesystemOperator** |  |
| `$sourcePath` | **string** |  |
| `$destinationFilesystem` | **\League\Flysystem\FilesystemOperator** |  |
| `$destinationPath` | **string** |  |
| `$source` | **string** |  |
| `$destination` | **string** |  |




***

### moveInTheSameFilesystem



```php
private moveInTheSameFilesystem(\League\Flysystem\FilesystemOperator $sourceFilesystem, string $sourcePath, string $destinationPath, string $source, string $destination): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sourceFilesystem` | **\League\Flysystem\FilesystemOperator** |  |
| `$sourcePath` | **string** |  |
| `$destinationPath` | **string** |  |
| `$source` | **string** |  |
| `$destination` | **string** |  |




***

### moveAcrossFilesystems



```php
private moveAcrossFilesystems(string $source, string $destination): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** |  |
| `$destination` | **string** |  |




***


***

