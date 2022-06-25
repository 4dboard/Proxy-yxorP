***

# ezcDocumentTestDummyPlugin

Visitor for wiki directives



* Full name: `\ezcDocumentTestDummyPlugin`
* Parent class: [`\ezcDocumentWikiPlugin`](./ezcDocumentWikiPlugin.md)




## Methods


### toDocbook

Transform directive to docbook

```php
public toDocbook(\DOMDocument $document, \DOMElement $root): void
```

Create a docbook XML structure at the directives position in the
document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$root` | **\DOMElement** |  |




***


## Inherited methods


### __construct

Construct directive from AST and node

```php
public __construct(\ezcDocumentWikiDocumentNode $ast, string $path, \ezcDocumentWikiPluginNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\ezcDocumentWikiDocumentNode** |  |
| `$path` | **string** |  |
| `$node` | **\ezcDocumentWikiPluginNode** |  |




***

### setSourceVisitor

Set the calling vaisitor

```php
public setSourceVisitor(\ezcDocumentWikiVisitor $visitor): void
```

Pass the visitor which called the rendering function on the directive
for optional reference.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\ezcDocumentWikiVisitor** |  |




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


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
