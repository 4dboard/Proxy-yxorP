***

# ForcedCopy





* Full name: `\League\Flysystem\Plugin\ForcedCopy`
* Parent class: [`\League\Flysystem\Plugin\AbstractPlugin`](./AbstractPlugin.md)




## Methods


### getMethod



```php
public getMethod(): mixed
```











***

### handle

Copies a file, overwriting any existing files.

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
> Automatically generated from source code comments on 2022-07-24 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
