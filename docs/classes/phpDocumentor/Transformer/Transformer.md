***

# Transformer

Core class responsible for transforming the cache file to a set of artifacts.



* Full name: `\phpDocumentor\Transformer\Transformer`
* This class implements:
[`\phpDocumentor\Compiler\CompilerPassInterface`](../Compiler/CompilerPassInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`EVENT_PRE_TRANSFORMATION`|public| |&#039;transformer.transformation.pre&#039;|
|`EVENT_POST_TRANSFORMATION`|public| |&#039;transformer.transformation.post&#039;|
|`EVENT_PRE_INITIALIZATION`|public| |&#039;transformer.writer.initialization.pre&#039;|
|`EVENT_POST_INITIALIZATION`|public| |&#039;transformer.writer.initialization.post&#039;|
|`EVENT_PRE_TRANSFORM`|public| |&#039;transformer.transform.pre&#039;|
|`EVENT_POST_TRANSFORM`|public| |&#039;transformer.transform.post&#039;|
|`COMPILER_PRIORITY`|public|int|5000|

## Properties


### target



```php
protected string|null $target
```






***

### templates



```php
protected \phpDocumentor\Transformer\Template\Collection $templates
```






***

### writers



```php
protected \phpDocumentor\Transformer\Writer\Collection|\phpDocumentor\Transformer\Writer\WriterAbstract[] $writers
```






***

### transformations



```php
protected \phpDocumentor\Transformer\Transformation[] $transformations
```






***

## Methods


### __construct

Wires the template collection and writer collection to this transformer.

```php
public __construct(\phpDocumentor\Transformer\Template\Collection $templateCollection, \phpDocumentor\Transformer\Writer\Collection $writerCollection): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$templateCollection` | **\phpDocumentor\Transformer\Template\Collection** |  |
| `$writerCollection` | **\phpDocumentor\Transformer\Writer\Collection** |  |




***

### getDescription

Returns a textual description of what this pass does for output purposes.

```php
public getDescription(): string
```











***

### setTarget

Sets the target location where to output the artifacts.

```php
public setTarget(string $target): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **string** | The target location where to output the artifacts. |




***

### getTarget

Returns the location where to store the artifacts.

```php
public getTarget(): string
```











***

### getTemplates

Returns the list of templates which are going to be adopted.

```php
public getTemplates(): \phpDocumentor\Transformer\Template\Collection
```











***

### execute

Transforms the given project into a series of artifacts as provided by the templates.

```php
public execute(\phpDocumentor\Descriptor\ProjectDescriptor $project): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |




***

### generateFilename

Converts a source file name to the name used for generating the end result.

```php
public generateFilename(string $name): string
```

This method strips down the given $name using the following rules:

* if the $name is suffixed with .php then that is removed
* any occurrence of \ or DIRECTORY_SEPARATOR is replaced with .
* any dots that the name starts or ends with is removed
* the result is suffixed with .html






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name to convert. |




***

### log

Dispatches a logging request.

```php
public log(string $message, string $priority = LogLevel::INFO): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message to log. |
| `$priority` | **string** | The logging priority |




***

### debug

Dispatches a logging request to log a debug message.

```php
public debug(string $message): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message to log. |




***

### initializeWriters

Initializes all writers that are used during this transformation.

```php
private initializeWriters(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation[] $transformations): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |
| `$transformations` | **\phpDocumentor\Transformer\Transformation[]** |  |




***

### initializeWriter

Initializes the given writer using the provided project meta-data.

```php
private initializeWriter(\phpDocumentor\Transformer\Writer\WriterAbstract $writer, \phpDocumentor\Descriptor\ProjectDescriptor $project): void
```

This method wil call for the initialization of each writer that supports an initialization routine (as defined by
the `Initializable` interface).

In addition to this, the following events emitted for each writer that is present in the collected list of
transformations, even those that do not implement the `Initializable` interface.

Emitted events:

- transformer.writer.initialization.pre, before the initialization of a single writer.
- transformer.writer.initialization.post, after the initialization of a single writer.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$writer` | **\phpDocumentor\Transformer\Writer\WriterAbstract** |  |
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |




***

### transformProject

Applies all given transformations to the provided project.

```php
private transformProject(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation[] $transformations): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |
| `$transformations` | **\phpDocumentor\Transformer\Transformation[]** |  |




***

### applyTransformationToProject

Applies the given transformation to the provided project.

```php
private applyTransformationToProject(\phpDocumentor\Transformer\Transformation $transformation, \phpDocumentor\Descriptor\ProjectDescriptor $project): void
```

This method will attempt to find an appropriate writer for the given transformation and invoke that with the
transformation and project so that an artifact can be generated that matches the intended transformation.

In addition this method will emit the following events:

- transformer.transformation.pre, before the project has been transformed with this transformation.
- transformer.transformation.post, after the project has been transformed with this transformation






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
