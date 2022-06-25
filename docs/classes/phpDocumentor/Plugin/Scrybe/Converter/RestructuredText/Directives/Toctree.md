***

# Toctree

Directive used to process `.. toctree::` and insert entries from the table of contents.

This directive tries to match the file with an entry in the table of contents during the creation phase. If a
document is found it will generate a mini-table of contents at that location with the depth given using the
`:maxdepth:` parameter.

Another option is :hidden: that will hide the toc from view while still making connections.

This directive is inspired by {@link Sphinx' toctree} directive.

* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Directives\Toctree`
* Parent class: [`\ezcDocumentRstDirective`](../../../../../../ezcDocumentRstDirective.md)
* This class implements:
[`\ezcDocumentRstXhtmlDirective`](../../../../../../ezcDocumentRstXhtmlDirective.md)



## Properties


### links



```php
protected $links
```






***

## Methods


### __construct

Construct directive from AST and node

```php
public __construct(\ezcDocumentRstDocumentNode $ast, mixed $path, \ezcDocumentRstDirectiveNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\ezcDocumentRstDocumentNode** |  |
| `$path` | **mixed** |  |
| `$node` | **\ezcDocumentRstDirectiveNode** |  |




***

### parseLinks



```php
protected parseLinks(): mixed
```











***

### toDocbook

Transform directive to docbook

```php
public toDocbook(\DOMDocument $document, \DOMElement $root): void
```

Create a docbook XML structure at the directives position in the document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$root` | **\DOMElement** |  |




***

### toXhtml

Transform directive to HTML

```php
public toXhtml(\DOMDocument $document, \DOMElement $root): void
```

Create a XHTML structure at the directives position in the document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$root` | **\DOMElement** |  |




***

### addLinksToTableOfContents



```php
protected addLinksToTableOfContents(): mixed
```











***

### getCaption

Retrieves the caption for the given $token.

```php
protected getCaption(\ezcDocumentRstToken $file_name): string
```

The caption is retrieved by converting the filename to a human-readable format.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file_name` | **\ezcDocumentRstToken** |  |




***


## Inherited methods


### __construct

Construct directive from AST and node

```php
public __construct(\ezcDocumentRstDocumentNode $ast, string $path, \ezcDocumentRstDirectiveNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\ezcDocumentRstDocumentNode** |  |
| `$path` | **string** |  |
| `$node` | **\ezcDocumentRstDirectiveNode** |  |




***

### setSourceVisitor

Set the calling vaisitor

```php
public setSourceVisitor(\ezcDocumentRstVisitor $visitor): void
```

Pass the visitor which called the rendering function on the directive
for optional reference.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\ezcDocumentRstVisitor** |  |




***

### toDocbook

Transform directive to docbook

```php
public toDocbook(\DOMDocument $document, \DOMElement $root): void
```

Create a docbook XML structure at the directives position in the
document.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$root` | **\DOMElement** |  |




***

### parseTokens

Parse directive token list with RST parser

```php
protected parseTokens(array $tokens, \ezcDocumentRstVisitor $visitor): \DOMDocument
```

This method is intended to parse the token list, provided for the RST
contents using the standard RST parser. It will be visited afterwards by
the provided RST-visitor implementation.

The method returns the created document as a DOMDocument. You normally
need to use DOMDocument::importNode to embed the conatined nodes in your
target document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |
| `$visitor` | **\ezcDocumentRstVisitor** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
