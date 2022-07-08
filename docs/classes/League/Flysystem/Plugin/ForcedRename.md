***

# ForcedRename





* Full name: `\League\Flysystem\Plugin\ForcedRename`
* Parent class: [`\League\Flysystem\Plugin\AbstractPlugin`](./AbstractPlugin.md)




## Methods


### getMethod



```php
public getMethod(): mixed
```











***

### handle

Renames a file, overwriting the destination if it exists.

```php
public handle(string $path, string $newpath): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Path to the existing file. |
| `$newpath` | **string** | The new path of the file. |


**Return Value:**

True on success, false on failure.



***


## Inherited methods


### setFilesystem

Set the Filesystem object.

```php
public setFilesystem(\League\Flysystem\FilesystemInterface $filesystem): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filesystem` | **\League\Flysystem\FilesystemInterface** |  |




***


***

