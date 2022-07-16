***

# Filesystem





* Full name: `\League\Flysystem\Filesystem`
* This class implements:
[`\League\Flysystem\FilesystemInterface`](./FilesystemInterface.md)



## Properties


### adapter



```php
protected \League\Flysystem\AdapterInterface $adapter
```






***

## Methods


### __construct

Constructor.

```php
public __construct(\League\Flysystem\AdapterInterface $adapter, \League\Flysystem\Config|array $config = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **\League\Flysystem\AdapterInterface** |  |
| `$config` | **\League\Flysystem\Config&#124;array** |  |




***

### getAdapter

Get the Adapter.

```php
public getAdapter(): \League\Flysystem\AdapterInterface
```









**Return Value:**

adapter



***

### has

Check whether a file exists.

```php
public has(mixed $path): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### write

Write a new file.

```php
public write(mixed $path, mixed $contents, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path of the new file. |
| `$contents` | **mixed** | The file contents. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### writeStream

Write a new file using a stream.

```php
public writeStream(mixed $path, mixed $resource, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path of the new file. |
| `$resource` | **mixed** | The file handle. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### put

Create a file or update if exists.

```php
public put(mixed $path, mixed $contents, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the file. |
| `$contents` | **mixed** | The file contents. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### putStream

Create a file or update if exists.

```php
public putStream(mixed $path, mixed $resource, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the file. |
| `$resource` | **mixed** | The file handle. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### readAndDelete

Read and delete a file.

```php
public readAndDelete(mixed $path): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the file. |


**Return Value:**

The file contents, or false on failure.



***

### update

Update an existing file.

```php
public update(mixed $path, mixed $contents, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path of the existing file. |
| `$contents` | **mixed** | The file contents. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### updateStream

Update an existing file using a stream.

```php
public updateStream(mixed $path, mixed $resource, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path of the existing file. |
| `$resource` | **mixed** | The file handle. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### read

Read a file.

```php
public read(mixed $path): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the file. |


**Return Value:**

The file contents or false on failure.



***

### readStream

Retrieves a read-stream for a path.

```php
public readStream(mixed $path): resource|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the file. |


**Return Value:**

The path resource or false on failure.



***

### rename

Rename a file.

```php
public rename(mixed $path, mixed $newpath): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | Path to the existing file. |
| `$newpath` | **mixed** | The new path of the file. |


**Return Value:**

True on success, false on failure.



***

### copy

Copy a file.

```php
public copy(mixed $path, mixed $newpath): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | Path to the existing file. |
| `$newpath` | **mixed** | The new path of the file. |


**Return Value:**

True on success, false on failure.



***

### delete

Delete a file.

```php
public delete(mixed $path): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |


**Return Value:**

True on success, false on failure.



***

### deleteDir

Delete a directory.

```php
public deleteDir(mixed $dirname): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirname` | **mixed** |  |


**Return Value:**

True on success, false on failure.



***

### createDir

Create a directory.

```php
public createDir(mixed $dirname, array $config = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirname` | **mixed** | The name of the new directory. |
| `$config` | **array** | An optional configuration array. |


**Return Value:**

True on success, false on failure.



***

### listContents

List contents of a directory.

```php
public listContents(mixed $directory = &#039;&#039;, mixed $recursive = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **mixed** | The directory to list. |
| `$recursive` | **mixed** | Whether to list recursively. |


**Return Value:**

A list of file metadata.



***

### getMimetype

Get a file's mime-type.

```php
public getMimetype(mixed $path): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the file. |


**Return Value:**

The file mime-type or false on failure.



***

### getTimestamp

Get a file's timestamp.

```php
public getTimestamp(mixed $path): int|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the file. |


**Return Value:**

The timestamp or false on failure.



***

### getVisibility

Get a file's visibility.

```php
public getVisibility(mixed $path): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the file. |


**Return Value:**

The visibility (public|private) or false on failure.



***

### getSize

Get a file's size.

```php
public getSize(mixed $path): int|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the file. |


**Return Value:**

The file size or false on failure.



***

### setVisibility

Set the visibility for a file.

```php
public setVisibility(mixed $path, mixed $visibility): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the file. |
| `$visibility` | **mixed** | One of &#039;public&#039; or &#039;private&#039;. |


**Return Value:**

True on success, false on failure.



***

### getMetadata

Get a file's metadata.

```php
public getMetadata(mixed $path): array|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the file. |


**Return Value:**

The file metadata or false on failure.



***

### get

Get a file/directory handler.

```php
public get(mixed $path, \League\Flysystem\Handler $handler = null): \League\Flysystem\Handler
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the file. |
| `$handler` | **\League\Flysystem\Handler** | An optional existing handler to populate. |


**Return Value:**

Either a file or directory handler.



***

### assertPresent

Assert a file is present.

```php
public assertPresent(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | path to file |




***

### assertAbsent

Assert a file is absent.

```php
public assertAbsent(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | path to file |




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

