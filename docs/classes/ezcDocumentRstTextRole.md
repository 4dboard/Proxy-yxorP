***

# ezcDocumentRstTextRole

Visitor for RST text roles



* Full name: `\ezcDocumentRstTextRole`
* This class is an **Abstract class**



## Properties


### node

Current text role RST AST node.

```php
protected \ezcDocumentRstTextRoleNode $node
```






***

### ast

Complete RST abstract syntax tree, if this is necessary to render the
text role.

```php
protected \ezcDocumentRstDocumentNode $ast
```






***

### path

Current document base path, especially relevant for file inclusions.

```php
protected string $path
```






***

### visitor

The calling visitor.

```php
protected \ezcDocumentRstVisitor $visitor
```






***

## Methods


### __construct

Construct text role from AST and node

```php
public __construct(\ezcDocumentRstDocumentNode $ast, string $path, \ezcDocumentRstMarkupInterpretedTextNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\ezcDocumentRstDocumentNode** |  |
| `$path` | **string** |  |
| `$node` | **\ezcDocumentRstMarkupInterpretedTextNode** |  |




***

### setSourceVisitor

Set the calling vaisitor

```php
public setSourceVisitor(\ezcDocumentRstVisitor $visitor): void
```

Pass the visitor which called the rendering function on the text role
for optional reference.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\ezcDocumentRstVisitor** |  |




***

### appendText

Append text from interpreted text node to given DOMElement

```php
protected appendText(\DOMElement $root): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMElement** |  |




***

### toDocbook

Transform text role to docbook

```php
public toDocbook(\DOMDocument $document, \DOMElement $root): void
```

Create a docbook XML structure at the text roles position in the
document.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$root` | **\DOMElement** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
