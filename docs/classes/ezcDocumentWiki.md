***

# ezcDocumentWiki

Document handler for wiki text documents.

This document handler implements generic conversions for wiki markup
languages. The tokenizer, which differs for each wiki language, can be set
directly, or you may use the extended implementations for the specific
sytaxes:

- ezcDocumentConfluenceWiki
- ezcDocumentCreoleWiki
- ezcDocumentDokuwikiWiki

Each wiki syntax has some sort of plugin mechanism, which allows you to
handle the contents of a special formatted syntax element using custom
classes or external applications. You can register a plugin for this, which
then need to "parse" the element contents itself and may return random
docbook markup.

The basic conversion of a wiki document into a docbook document, using the
default creole tokenizer, looks like:

<code>
 $document = new ezcDocumentWiki();
 $document->loadString( '
 = Example text =

 Just some exaple paragraph with a heading, some **emphasis** markup and a
 [[http://ezcomponents.org|link]].' );

 $docbook = $document->getAsDocbook();
 echo $docbook->save();
</code>

You may switch the used tokenizer using the respective options of the
document class, defined in the ezcDocumentWikiOptions class:

<code>
 $document = new ezcDocumentWiki();
 $document->options->tokenizer = new ezcDocumentWikiConfluenceTokenizer();
 $document->loadString( '
 h1. Example text

 Just some exaple paragraph with a heading, some *emphasis* markup and a
 [link|http://ezcomponents.org].' );

 $docbook = $document->getAsDocbook();
 echo $docbook->save();
</code>

For the conversion back from docbook to wiki markup, currently only one
converter to creole markup has been implemented. This conversion can be used
like:

<code>
 $docbook = new ezcDocumentDocbook();
 $docbook->loadFile( 'docbook.xml' );

 $document = new ezcDocumentWiki();
 $document->createFromDocbook( $docbook );
 echo $document->save();
</code>

* Full name: `\ezcDocumentWiki`
* Parent class: [`\ezcDocument`](./ezcDocument.md)
* This class implements:
[`\ezcDocumentValidation`](./ezcDocumentValidation.md)



## Properties


### plugins

Registered plugins

```php
protected array $plugins
```

Plugins are special RST element, which are documented at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#plugins

Plugins are the best entry point for custom rules, and you may
register custom plugin classes using the class method
registerPlugin().




***

### ast

Asbtract syntax tree.

```php
protected \ezcDocumentWikiDocumentNode $ast
```

The internal representation of RST documents.




***

### contents

Plain RST contents as a string

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
and extend from ezcDocumentWikiPlugin.






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
