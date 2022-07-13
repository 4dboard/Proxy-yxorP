***

# MountManager

Class MountManager.

Proxies methods to Filesystem (@see __call):

* Full name: `\League\Flysystem\MountManager`
* This class implements:
[`\League\Flysystem\FilesystemInterface`](./FilesystemInterface.md)



## Properties


### filesystems



```php
protected \League\Flysystem\FilesystemInterface[] $filesystems
```






***

## Methods


### __construct

Constructor.

```php
public __construct(\League\Flysystem\FilesystemInterface[] $filesystems = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filesystems` | **\League\Flysystem\FilesystemInterface[]** | [:prefix =&gt; Filesystem,] |




***

### mountFilesystems

Mount filesystems.

```php
public mountFilesystems(\League\Flysystem\FilesystemInterface[] $filesystems): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filesystems` | **\League\Flysystem\FilesystemInterface[]** | [:prefix =&gt; Filesystem,] |




***

### mountFilesystem

Mount filesystems.

```php
public mountFilesystem(string $prefix, \League\Flysystem\FilesystemInterface $filesystem): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |
| `$filesystem` | **\League\Flysystem\FilesystemInterface** |  |




***

### getFilesystem

Get the filesystem with the corresponding prefix.

```php
public getFilesystem(string $prefix): \League\Flysystem\FilesystemInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |




***

### filterPrefix

Retrieve the prefix from an arguments array.

```php
public filterPrefix(array $arguments): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments` | **array** |  |


**Return Value:**

[:prefix, :arguments]



***

### listContents

List contents of a directory.

```php
public listContents(string $directory = &#039;&#039;, bool $recursive = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **string** |  |
| `$recursive` | **bool** |  |




***

### __call

Call forwarder.

```php
public __call(string $method, array $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$arguments` | **array** |  |




***

### copy

Copy a file.

```php
public copy(string $from, string $to, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$from` | **string** |  |
| `$to` | **string** |  |
| `$config` | **array** |  |




***

### listWith

List with plugin adapter.

```php
public listWith(array $keys = [], string $directory = &#039;&#039;, bool $recursive = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keys` | **array** |  |
| `$directory` | **string** |  |
| `$recursive` | **bool** |  |




***

### move

Move a file.

```php
public move(string $from, string $to, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$from` | **string** |  |
| `$to` | **string** |  |
| `$config` | **array** |  |




***

### invokePluginOnFilesystem

Invoke a plugin on a filesystem mounted on a given prefix.

```php
public invokePluginOnFilesystem(string $method, array $arguments, string $prefix): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$arguments` | **array** |  |
| `$prefix` | **string** |  |




***

### getPrefixAndPath



```php
protected getPrefixAndPath(string $path): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |


**Return Value:**

[:prefix, :path]



***

### has

Check whether a file exists.

```php
public has(string $path): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### read

Read a file.

```php
public read(string $path): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path to the file. |


**Return Value:**

The file contents or false on failure.



***

### readStream

Retrieves a read-stream for a path.

```php
public readStream(string $path): resource|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path to the file. |


**Return Value:**

The path resource or false on failure.



***

### getMetadata

Get a file's metadata.

```php
public getMetadata(string $path): array|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path to the file. |


**Return Value:**

The file metadata or false on failure.



***

### getSize

Get a file's size.

```php
public getSize(string $path): int|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path to the file. |


**Return Value:**

The file size or false on failure.



***

### getMimetype

Get a file's mime-type.

```php
public getMimetype(string $path): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path to the file. |


**Return Value:**

The file mime-type or false on failure.



***

### getTimestamp

Get a file's timestamp.

```php
public getTimestamp(string $path): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path to the file. |


**Return Value:**

The timestamp or false on failure.



***

### getVisibility

Get a file's visibility.

```php
public getVisibility(string $path): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path to the file. |


**Return Value:**

The visibility (public|private) or false on failure.



***

### write

Write a new file.

```php
public write(string $path, string $contents, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path of the new file. |
| `$contents` | **string** | The file contents. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### writeStream

Write a new file using a stream.

```php
public writeStream(string $path, resource $resource, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path of the new file. |
| `$resource` | **resource** | The file handle. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### update

Update an existing file.

```php
public update(string $path, string $contents, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path of the existing file. |
| `$contents` | **string** | The file contents. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### updateStream

Update an existing file using a stream.

```php
public updateStream(string $path, resource $resource, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path of the existing file. |
| `$resource` | **resource** | The file handle. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### rename

Rename a file.

```php
public rename(string $path, string $newpath): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Path to the existing file. |
| `$newpath` | **string** | The new path of the file. |


**Return Value:**

True on success, false on failure.



***

### delete

Delete a file.

```php
public delete(string $path): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |


**Return Value:**

True on success, false on failure.



***

### deleteDir

Delete a directory.

```php
public deleteDir(string $dirname): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirname` | **string** |  |


**Return Value:**

True on success, false on failure.



***

### createDir

Create a directory.

```php
public createDir(string $dirname, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirname` | **string** | The name of the new directory. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### setVisibility

Set the visibility for a file.

```php
public setVisibility(string $path, string $visibility): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path to the file. |
| `$visibility` | **string** | One of &#039;public&#039; or &#039;private&#039;. |


**Return Value:**

True on success, false on failure.



***

### put

Create a file or update if exists.

```php
public put(string $path, string $contents, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path to the file. |
| `$contents` | **string** | The file contents. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### putStream

Create a file or update if exists.

```php
public putStream(string $path, resource $resource, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path to the file. |
| `$resource` | **resource** | The file handle. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### readAndDelete

Read and delete a file.

```php
public readAndDelete(string $path): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path to the file. |


**Return Value:**

The file contents, or false on failure.



***

### get

Get a file/directory handler.

```php
public get(string $path, \League\Flysystem\Handler $handler = null): \League\Flysystem\Handler
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path to the file. |
| `$handler` | **\League\Flysystem\Handler** | An optional existing handler to populate. |


**Return Value:**

Either a file or directory handler.



***


## Inherited methods


### addPlugin

Register a plugin.

```php
public addPlugin(\League\Flysystem\PluginInterface $plugin): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plugin` | **\League\Flysystem\PluginInterface** |  |




***

### findPlugin

Find a specific plugin.

```php
protected findPlugin(string $method): \League\Flysystem\PluginInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |




***

### invokePlugin

Invoke a plugin by method name.

```php
protected invokePlugin(string $method, array $arguments, \League\Flysystem\FilesystemInterface $filesystem): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$arguments` | **array** |  |
| `$filesystem` | **\League\Flysystem\FilesystemInterface** |  |




***

### __call

Plugins pass-through.

```php
public __call(string $method, array $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$arguments` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
