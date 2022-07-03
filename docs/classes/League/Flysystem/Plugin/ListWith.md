***

# ListWith





* Full name: `\League\Flysystem\Plugin\ListWith`
* Parent class: [`\League\Flysystem\Plugin\AbstractPlugin`](./AbstractPlugin.md)




## Methods


### getMethod

Get the method name.

```php
public getMethod(): string
```











***

### handle

List contents with metadata.

```php
public handle(string[] $keys = [], string $directory = &#039;&#039;, bool $recursive = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keys` | **string[]** |  |
| `$directory` | **string** |  |
| `$recursive` | **bool** |  |


**Return Value:**

listing with metadata



***

### getMetadataByName

Get a meta-data value by key name.

```php
protected getMetadataByName(array $object, string $key): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **array** |  |
| `$key` | **string** |  |




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
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
