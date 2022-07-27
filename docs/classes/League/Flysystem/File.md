***

# File





* Full name: `\League\Flysystem\File`
* Parent class: [`\League\Flysystem\Handler`](./Handler.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.




## Methods


### exists

Check whether the file exists.

```php
public exists(): bool
```











***

### read

Read the file.

```php
public read(): string|false
```









**Return Value:**

file contents



***

### readStream

Read the file as a stream.

```php
public readStream(): resource|false
```









**Return Value:**

file stream



***

### write

Write the new file.

```php
public write(string $content): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |


**Return Value:**

success boolean



***

### writeStream

Write the new file using a stream.

```php
public writeStream(resource $resource): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **resource** |  |


**Return Value:**

success boolean



***

### update

Update the file contents.

```php
public update(string $content): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |


**Return Value:**

success boolean



***

### updateStream

Update the file contents with a stream.

```php
public updateStream(resource $resource): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **resource** |  |


**Return Value:**

success boolean



***

### put

Create the file or update if exists.

```php
public put(string $content): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |


**Return Value:**

success boolean



***

### putStream

Create the file or update if exists using a stream.

```php
public putStream(resource $resource): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **resource** |  |


**Return Value:**

success boolean



***

### rename

Rename the file.

```php
public rename(string $newpath): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$newpath` | **string** |  |


**Return Value:**

success boolean



***

### copy

Copy the file.

```php
public copy(string $newpath): \League\Flysystem\File|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$newpath` | **string** |  |


**Return Value:**

new file or false



***

### getTimestamp

Get the file's timestamp.

```php
public getTimestamp(): string|false
```









**Return Value:**

The timestamp or false on failure.



***

### getMimetype

Get the file's mimetype.

```php
public getMimetype(): string|false
```









**Return Value:**

The file mime-type or false on failure.



***

### getVisibility

Get the file's visibility.

```php
public getVisibility(): string|false
```









**Return Value:**

The visibility (public|private) or false on failure.



***

### getMetadata

Get the file's metadata.

```php
public getMetadata(): array|false
```









**Return Value:**

The file metadata or false on failure.



***

### getSize

Get the file size.

```php
public getSize(): int|false
```









**Return Value:**

The file size or false on failure.



***

### delete

Delete the file.

```php
public delete(): bool
```









**Return Value:**

success boolean



***


## Inherited methods


### __construct

Constructor.

```php
public __construct(\League\Flysystem\FilesystemInterface $filesystem = null, string $path = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filesystem` | **\League\Flysystem\FilesystemInterface** |  |
| `$path` | **string** |  |




***

### isDir

Check whether the entree is a directory.

```php
public isDir(): bool
```











***

### isFile

Check whether the entree is a file.

```php
public isFile(): bool
```











***

### getType

Retrieve the entree type (file|dir).

```php
public getType(): string
```









**Return Value:**

file or dir



***

### setFilesystem

Set the Filesystem object.

```php
public setFilesystem(\League\Flysystem\FilesystemInterface $filesystem): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filesystem` | **\League\Flysystem\FilesystemInterface** |  |




***

### getFilesystem

Retrieve the Filesystem object.

```php
public getFilesystem(): \League\Flysystem\FilesystemInterface
```











***

### setPath

Set the entree path.

```php
public setPath(string $path): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### getPath

Retrieve the entree path.

```php
public getPath(): string
```









**Return Value:**

path



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

