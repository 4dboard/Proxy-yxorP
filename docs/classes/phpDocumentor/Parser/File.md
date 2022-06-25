***

# File

Parses a single file into a FileDescriptor and adds it to the given ProjectBuilder.



* Full name: `\phpDocumentor\Parser\File`



## Properties


### parser



```php
protected \phpDocumentor\Parser\Parser $parser
```






***

## Methods


### __construct

Registers the Parser object to get settings from.

```php
public __construct(\phpDocumentor\Parser\Parser $parser): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parser` | **\phpDocumentor\Parser\Parser** |  |




***

### parse

Parses the file identified by the given filename and passes the resulting FileDescriptor to the ProjectBuilder.

```php
public parse(string $filename, \phpDocumentor\Descriptor\ProjectDescriptorBuilder $builder): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$builder` | **\phpDocumentor\Descriptor\ProjectDescriptorBuilder** |  |




***

### createFileReflector

Creates a new FileReflector for the given filename or null if the file contains no modifications.

```php
protected createFileReflector(\phpDocumentor\Descriptor\ProjectDescriptorBuilder $builder, string $filename): \phpDocumentor\Reflection\FileReflector|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$builder` | **\phpDocumentor\Descriptor\ProjectDescriptorBuilder** |  |
| `$filename` | **string** |  |


**Return Value:**

Returns a new FileReflector or null if no modifications were detected for the given
filename.



***

### logErrorsForDescriptor

Writes the errors found in the Descriptor to the log.

```php
protected logErrorsForDescriptor(\phpDocumentor\Descriptor\FileDescriptor $fileDescriptor): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fileDescriptor` | **\phpDocumentor\Descriptor\FileDescriptor** |  |




***

### getRelativeFilename

Returns the filename, relative to the root of the project directory.

```php
public getRelativeFilename(string $filename): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | The filename to make relative. |




***

### log

Dispatches a logging request.

```php
protected log(string $message, string $priority = LogLevel::INFO, string[] $parameters = array()): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message to log. |
| `$priority` | **string** | The logging priority as declared in the LogLevel PSR-3 class. |
| `$parameters` | **string[]** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
