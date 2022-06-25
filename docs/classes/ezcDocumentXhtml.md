***

# ezcDocumentXhtml

The document handler for XHTML document markup.



* Full name: `\ezcDocumentXhtml`
* Parent class: [`\ezcDocumentXmlBase`](./ezcDocumentXmlBase.md)
* This class implements:
[`\ezcDocumentValidation`](./ezcDocumentValidation.md)



## Properties


### filters

Array with filter objects for the input HTML document.

```php
protected array|(\ezcDocumentXhtmlFilter) $filters
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

### setFilters

Set filters

```php
public setFilters(array $filters): void
```

Set an array with filter objects, which extract the sematic
information from the given XHtml document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filters` | **array** |  |




***

### buildDocbookDocument

Build docbook document out of annotated XHtml document

```php
protected buildDocbookDocument(\DOMDocument $document): \DOMDocument
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |




***

### isInlineElement

Check if the current node is an inline element

```php
protected isInlineElement(\DOMElement $element): void
```

Textual content is only allowed in inline element. This method returns
true if the current element is an inline element, otherwise text
contents might be ignored in the output.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### transformToDocbook

Recursively transform annotated XHtml elements to docbook

```php
protected transformToDocbook(\DOMElement $xhtml, \DOMElement $docbook, bool $significantWhitespace = false): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xhtml` | **\DOMElement** |  |
| `$docbook` | **\DOMElement** |  |
| `$significantWhitespace` | **bool** |  |




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


## Inherited methods


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

### loadDomDocument

Construct directly from DOMDocument

```php
public loadDomDocument(\DOMDocument $document): void
```

To save execution time this method offers the construction of XML
documents directly from a DOM document instance.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |




***

### setDomDocument

Set DOMDocument

```php
public setDomDocument(\DOMDocument $document): void
```

Directly set the internally stored DOMDocument object, to spare
additional XML parsing overhead. Setting a broken or invalid docbook
document is not checked here, ebcause validation would cost too much
performace on each set. Be careful what you set here, invalid documents
may lead to unpredictable errors.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |




***

### getDomDocument

Get DOMDocument

```php
public getDomDocument(): \DOMDocument
```

Directly return the internally stored DOMDocument object, to spare
additional XML parsing overhead.









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


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
