***

# Document

This is a customized RestructuredText document to register Scrybe-specific directives, roles and options.

The following directives are introduced using this class:

- toctree, a directive used to insert table of contents into documents.
- image, an overridden version of `image` that collects the assets.
- figure, an overridden version of the `figure` that collects the assets.

The following roles are introduced in this class:

- doc, a reference to an external piece of documentation.

* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Document`
* Parent class: [`\ezcDocumentRst`](../../../../../ezcDocumentRst.md)



## Properties


### file

Fileset containing the project root and list of files in this run.

```php
protected \phpDocumentor\Fileset\File $file
```






***

### converter

Converter used to retrieve global assets from.

```php
protected \phpDocumentor\Plugin\Scrybe\Converter\ConverterInterface $converter
```

The converter contains global assets, such as the Table of Contents, that can be used in directives and roles.




***

## Methods


### __construct

Sets the Scrybe-specific options, registers the roles and directives and loads the file.

```php
public __construct(\phpDocumentor\Plugin\Scrybe\Converter\ConverterInterface $converter, \phpDocumentor\Fileset\File $file): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\phpDocumentor\Plugin\Scrybe\Converter\ConverterInterface** |  |
| `$file` | **\phpDocumentor\Fileset\File** |  |




***

### getConverter

Returns the converter responsible for converting this object.

```php
public getConverter(): \phpDocumentor\Plugin\Scrybe\Converter\ConverterInterface
```











***

### getFile

Returns the file associated with this document.

```php
public getFile(): \phpDocumentor\Fileset\File
```











***

### logStats

Sends the errors of the given Rst document to the logger as a block.

```php
public logStats(\Exception|null $fatal, \Monolog\Logger $logger): void
```

If a fatal error occurred then this can be passed as the $fatal argument and is shown as such.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fatal` | **\Exception&#124;null** |  |
| `$logger` | **\Monolog\Logger** |  |




***


## Inherited methods


### registerDirective

Register directive handler

```php
public registerDirective(string $name, string $class): void
```

Register a custom directive handler for special directives or overwrite
existing directive handlers. The directives are specified by its
(lowercase) name and the class name, which should handle the directive
and extend from ezcDocumentRstDirective.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$class` | **string** |  |




***

### registerRole

Register text role handler

```php
public registerRole(string $name, string $class): void
```

Register a custom text role handler for special text roles or overwrite
existing text role handlers. The text roles are specified by its
(lowercase) name and the class name, which should handle the text role
and extend from ezcDocumentRstTextRole.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$class` | **string** |  |




***

### getDirectiveHandler

Get directive handler

```php
public getDirectiveHandler(string $name): string
```

Get directive handler class name for the specified name.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getRoleHandler

Get text role handler

```php
public getRoleHandler(string $name): string
```

Get text role handler class name for the specified name.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### loadString

Create document from input string

```php
public loadString(string $string): void
```

Create a document of the current type handler class and parse it into a
usable internal structure.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***

### getAsDocbook

Return document compiled to the docbook format

```php
public getAsDocbook(): \ezcDocumentDocbook
```

The internal document structure is compiled to the docbook format and
the resulting docbook document is returned.

This method is required for all formats to have one central format, so
that each format can be compiled into each other format using docbook as
an intermediate format.

You may of course just call an existing converter for this conversion.


* This method is **abstract**.






***

### createFromDocbook

Create document from docbook document

```php
public createFromDocbook(\ezcDocumentDocbook $document): void
```

A document of the docbook format is provided and the internal document
structure should be created out of this.

This method is required for all formats to have one central format, so
that each format can be compiled into each other format using docbook as
an intermediate format.

You may of course just call an existing converter for this conversion.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\ezcDocumentDocbook** |  |




***

### getAsXhtml

Return document compiled to the HTML format

```php
public getAsXhtml(): \ezcDocumentXhtml
```

The internal document structure is compiled to the HTML format and the
resulting HTML document is returned.

This is an optional interface for document markup languages which
support a direct transformation to HTML as a shortcut.









***

### validateFile

Validate the input file

```php
public validateFile(string $file): mixed
```

Validate the input file against the specification of the current
document format.

Returns true, if the validation succeded, and an array with
ezcDocumentValidationError objects otherwise.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |




***

### validateString

Validate the input string

```php
public validateString(string $string): mixed
```

Validate the input string against the specification of the current
document format.

Returns true, if the validation succeded, and an array with
ezcDocumentValidationError objects otherwise.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***

### save

Return document as string

```php
public save(): string
```

Serialize the document to a string an return it.


* This method is **abstract**.






***

### __construct

Construct new document

```php
public __construct(\ezcDocumentOptions $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentOptions** |  |




***

### triggerError

Trigger visitor error

```php
public triggerError(int $level, string $message, string $file = null, int $line = null, int $position = null): void
```

Emit a vistitor error, and convert it to an exception depending on the
error reporting settings.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |
| `$message` | **string** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$position` | **int** |  |




***

### getErrors

Return list of errors occured during visiting the document.

```php
public getErrors(): array
```

May be an empty array, if on errors occured, or a list of
ezcDocumentVisitException objects.









***

### loadFile

Create document from file

```php
public loadFile(string $file): void
```

Create a document of the current type handler class and parse it into a
usable internal structure. The default implementation just calls
loadString(), but you may want to provide an optimized implementation.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |




***

### getPath

Get document base path

```php
public getPath(): string
```











***

### setPath

Set document base path

```php
public setPath(string $path): mixed
```

The base path will be used as a base for relative file
inclusions in the document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
