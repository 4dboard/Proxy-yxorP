***

# FileIo

Writer containing file system operations.

The Query part of the transformation determines the action, currently
supported is:

* copy, copies a file or directory to the destination given in $artifact

* Full name: `\phpDocumentor\Plugin\Core\Transformer\Writer\FileIo`
* Parent class: [`\phpDocumentor\Transformer\Writer\WriterAbstract`](../../../../Transformer/Writer/WriterAbstract.md)



## Properties


### transformation



```php
protected \phpDocumentor\Transformer\Transformation $transformation
```






***

## Methods


### transform

Invokes the query method contained in this class.

```php
public transform(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** | Document containing the structure. |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** | Transformation to execute. |




***

### executeQueryCopy

Copies files or folders to the Artifact location.

```php
public executeQueryCopy(\phpDocumentor\Transformer\Transformation $transformation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformation` | **\phpDocumentor\Transformer\Transformation** | Transformation to use as data source. |




***


## Inherited methods


### checkRequirements

This method verifies whether PHP has all requirements needed to run this writer.

```php
public checkRequirements(): void
```

If one of the requirements is missing for this Writer then an exception of type RequirementMissing
should be thrown; this indicates to the calling process that this writer will not function.









***

### checkForSpacesInPath

Checks if there is a space in the path.

```php
protected checkForSpacesInPath(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### transform

Abstract definition of the transformation method.

```php
public transform(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation): void
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** | Document containing the structure. |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** | Transformation to execute. |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
