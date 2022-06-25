***

# ezcDocumentRstLiteralTextRole

Visitor for RST literal text roles.



* Full name: `\ezcDocumentRstLiteralTextRole`
* Parent class: [`\ezcDocumentRstTextRole`](./ezcDocumentRstTextRole.md)
* This class implements:
[`\ezcDocumentRstXhtmlTextRole`](./ezcDocumentRstXhtmlTextRole.md)




## Methods


### toDocbook

Transform text role to docbook.

```php
public toDocbook(\DOMDocument $document, \DOMElement $root): void
```

Create a docbook XML structure at the text roles position in the
document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$root` | **\DOMElement** |  |




***

### toXhtml

Transform text role to HTML.

```php
public toXhtml(\DOMDocument $document, \DOMElement $root): void
```

Create a XHTML structure at the text roles position in the document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$root` | **\DOMElement** |  |




***


## Inherited methods


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
