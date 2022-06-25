***

# ezcDocumentPdf

Document handler for PDF documents.

This document handler can load Docbook documents and generate PDF documents
from them. It can be configured using its option class
ezcDocumentPdfOptions. The example below shows the configuration of a
driver.

<code>
 // Load the docbook document and create a PDF from it
 $pdf = new ezcDocumentPdf();
 $pdf->options->driver = new ezcDocumentPdfHaruDriver();

 // Load a custom style sheet
 $pdf->loadStyles( 'custom.css' );

 // Add a customized footer
 $pdf->registerPdfPart( new ezcDocumentPdfFooterPdfPart(
     new ezcDocumentPdfFooterOptions( array(
         'showDocumentTitle'  => false,
         'showDocumentAuthor' => false,
         'height'             => '10mm',
     ) )
 ) );

 // Add a customized header
 $pdf->registerPdfPart( new ezcDocumentPdfHeaderPdfPart(
     new ezcDocumentPdfFooterOptions( array(
         'showPageNumber'     => false,
         'height'             => '10mm',
     ) )
 ) );

 $pdf->createFromDocbook( $docbook );
 file_put_contents( __FILE__ . '.pdf', $pdf );
</code>

Like shown in the example, it is possible to load any amount of custom style
definitions and register additional PDF parts, like headers and footers.

* Full name: `\ezcDocumentPdf`
* Parent class: [`\ezcDocument`](./ezcDocument.md)



## Properties


### styles

Container for style directives.

```php
protected \ezcDocumentPcssStyleInferencer $styles
```






***

### content

The generated PDF

```php
protected string $content
```






***

### pdfParts

List of PDF parts to append to documents

```php
protected array|(\ezcDocumentPdfPart) $pdfParts
```






***

## Methods


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

### loadStyles

Load style definition file

```php
public loadStyles(string $file): void
```

Parse and load a PCSS file and use the resulting style definitions for
rendering.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |




***

### registerPdfPart

Append a PDF part

```php
public registerPdfPart(\ezcDocumentPdfPart $part): void
```

Register additional PDF parts to be included in the rendering process,
like headers and footers.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$part` | **\ezcDocumentPdfPart** |  |




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
