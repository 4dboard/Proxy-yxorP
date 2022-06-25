***

# XmlFilesLoader

Loads validation metadata from a list of XML files.



* Full name: `\Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader`
* Parent class: [`\Symfony\Component\Validator\Mapping\Loader\FilesLoader`](./FilesLoader.md)

**See Also:**

* \Symfony\Component\Validator\Mapping\Loader\FilesLoader - 




## Methods


### getFileLoaderInstance

Creates a loader for the given file path.

```php
public getFileLoaderInstance(mixed $file): \Symfony\Component\Validator\Mapping\Loader\LoaderInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |


**Return Value:**

The created loader



***


## Inherited methods


### __construct



```php
public __construct(\Symfony\Component\Validator\Mapping\Loader\LoaderInterface[] $loaders): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loaders` | **\Symfony\Component\Validator\Mapping\Loader\LoaderInterface[]** | The metadata loaders to use |




***

### getFileLoaders

Returns an array of file loaders for the given file paths.

```php
protected getFileLoaders(array $paths): \Symfony\Component\Validator\Mapping\Loader\LoaderInterface[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **array** | An array of file paths |


**Return Value:**

The metadata loaders



***

### getFileLoaderInstance

Creates a loader for the given file path.

```php
protected getFileLoaderInstance(string $path): \Symfony\Component\Validator\Mapping\Loader\LoaderInterface
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The file path |


**Return Value:**

The created loader



***

### loadClassMetadata

Loads validation metadata into a {@link ClassMetadata} instance.

```php
public loadClassMetadata(\Symfony\Component\Validator\Mapping\ClassMetadata $metadata): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Symfony\Component\Validator\Mapping\ClassMetadata** |  |


**Return Value:**

Whether the loader succeeded



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
