***

# ezcDocumentEzXmlToDocbookConverter

Converter for docbook to XDocbook with a PHP callback based mechanism, for fast
and easy PHP based extensible transformations.

This converter does not support the full docbook standard, but only a subset
commonly used in the document component. If you need to transform documents
using the full docbook you might prefer to use the
ezcDocumentEzXmlToDocbookXsltConverter with the default stylesheet from
Welsh.

* Full name: `\ezcDocumentEzXmlToDocbookConverter`
* Parent class: [`\ezcDocumentElementVisitorConverter`](./ezcDocumentElementVisitorConverter.md)



## Properties


### defaultNamespace

Deafult document namespace.

```php
protected string $defaultNamespace
```

If no namespace has been explicitely declared in the source document
assume this as the defalt namespace.




***

## Methods


### __construct

Construct converter

```php
public __construct(\ezcDocumentEzXmlToDocbookConverterOptions $options = null): void
```

Construct converter from XSLT file, which is used for the actual






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentEzXmlToDocbookConverterOptions** |  |




***

### initializeDocument

Initialize destination document

```php
protected initializeDocument(): mixed
```

Initialize the structure which the destination document could be build
with. This may be an initial DOMDocument with some default elements, or
a string, or something else.









***

### createDocument

Create document from structure

```php
protected createDocument(mixed $content): \ezcDocumentDocbook
```

Build a ezcDocumentDocument object from the structure created during the
visiting process.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |




***

### visitText

Visit text node.

```php
protected visitText(\DOMText $node, mixed $root): mixed
```

Visit a text node in the source document and transform it to the
destination result






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMText** |  |
| `$root` | **mixed** |  |




***


## Inherited methods


### convert

Convert documents between two formats

```php
public convert(\ezcDocument $doc): \ezcDocument
```

Convert documents of the given type to the requested type.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$doc` | **\ezcDocument** |  |




***

### initializeDocument

Initialize destination document

```php
protected initializeDocument(): mixed
```

Initialize the structure which the destination document could be build
with. This may be an initial DOMDocument with some default elements, or
a string, or something else.


* This method is **abstract**.






***

### createDocument

Create document from structure

```php
protected createDocument(mixed $content): \ezcDocumentDocument
```

Build a ezcDocumentDocument object from the structure created during the
visiting process.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |




***

### visitChildren

Recursively visit children of a document node.

```php
public visitChildren(\DOMNode $node, mixed $root): mixed
```

Recurse through the whole document tree and call the defined callbacks
for node transformations, defined in the class property
$visitorElementHandler.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMNode** |  |
| `$root` | **mixed** |  |




***

### visitNode

Visit a single document node

```php
public visitNode(\DOMNode $node, mixed $root): mixed
```

Visit a single document node and look up the correct visitor and us it
to handle the node.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMNode** |  |
| `$root` | **mixed** |  |




***

### visitElement

Visit DOMElement nodes.

```php
protected visitElement(\DOMNode $node, mixed $root): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMNode** |  |
| `$root` | **mixed** |  |




***

### visitText

Visit text node.

```php
protected visitText(\DOMText $text, mixed $root): mixed
```

Visit a text node in the source document and transform it to the
destination result


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **\DOMText** |  |
| `$root` | **mixed** |  |




***

### setElementHandler

Set custom element handler

```php
public setElementHandler(string $namespace, string $element, \ezcDocumentElementVisitorHandler $handler): void
```

Set handler for yet unhandled element or overwrite the handler of an
existing element.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |
| `$element` | **string** |  |
| `$handler` | **\ezcDocumentElementVisitorHandler** |  |




***

### __construct

Construct new document

```php
public __construct(\ezcDocumentConverterOptions $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentConverterOptions** |  |




***

### triggerError

Trigger parser error

```php
public triggerError(int $level, string $message, string $file = null, int $line = null, int $position = null): void
```

Emit a parser error and handle it dependiing on the current error
reporting settings.






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


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
