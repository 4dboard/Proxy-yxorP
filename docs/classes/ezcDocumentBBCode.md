***

# ezcDocumentBBCode

Document handler for BBCode text documents.

BBCode are common in forum software and only provide a very basic set of
markup directives. The implemented BBCode handler focusses on the BBCode
implementation in the most common forum software: phpBB.

Just like in the forum software it can be extended with custom BBCode
definitions.

* Full name: `\ezcDocumentBBCode`
* Parent class: [`\ezcDocument`](./ezcDocument.md)
* This class implements:
[`\ezcDocumentValidation`](./ezcDocumentValidation.md)



## Properties


### plugins

Registered plugins

```php
protected array $plugins
```

Plugins are the best entry point for custom BBCodes, so you may
register custom plugin classes using the class method
registerPlugin().




***

### ast

Asbtract syntax tree.

```php
protected \ezcDocumentBBCodeDocumentNode $ast
```

The internal representation of BBCode documents.




***

### contents

Plain BBCode contents as a string

```php
protected string $contents
```






***

## Methods


### registerPlugin

Register plugin handler

```php
public registerPlugin(string $name, string $class): void
```

Register a custom plugin handler for special plugins or overwrite
existing plugin handlers. The plugins are specified by its
(lowercase) name and the class name, which should handle the plugin
and extend from ezcDocumentBBCodePlugin.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$class` | **string** |  |




***

### getPluginHandler

Get plugin handler

```php
public getPluginHandler(string $name): string
```

Get plugin handler class name for the specified name.






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






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\ezcDocumentDocbook** |  |




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









***


## Inherited methods


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

### save

Return document as string

```php
public save(): string
```

Serialize the document to a string an return it.


* This method is **abstract**.






***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
