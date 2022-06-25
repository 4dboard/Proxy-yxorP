***

# FilesLoader

Base loader for loading validation metadata from a list of files.



* Full name: `\Symfony\Component\Validator\Mapping\Loader\FilesLoader`
* Parent class: [`\Symfony\Component\Validator\Mapping\Loader\LoaderChain`](./LoaderChain.md)
* This class is an **Abstract class**

**See Also:**

* \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader - 
* \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader - 




## Methods


### __construct

Creates a new loader.

```php
public __construct(array $paths): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **array** | An array of file paths |




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
