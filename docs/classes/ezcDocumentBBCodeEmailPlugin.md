***

# ezcDocumentBBCodeEmailPlugin

Visitor for bbcode email tags



* Full name: `\ezcDocumentBBCodeEmailPlugin`
* Parent class: [`\ezcDocumentBBCodePlugin`](./ezcDocumentBBCodePlugin.md)




## Methods


### toDocbook

Convert a BBCode tag into Docbook

```php
public toDocbook(\ezcDocumentBBCodeVisitor $visitor, \DOMElement $root, \ezcDocumentBBCodeNode $node): void
```

Convert the given node into a Docbook structure, in the given root. For
child elements in the node you may call the visitNode() method of the
provided visitor.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\ezcDocumentBBCodeVisitor** |  |
| `$root` | **\DOMElement** |  |
| `$node` | **\ezcDocumentBBCodeNode** |  |




***


## Inherited methods


### toDocbook

Convert a BBCode tag into Docbook

```php
public toDocbook(\ezcDocumentBBCodeVisitor $visitor, \DOMElement $root, \ezcDocumentBBCodeNode $node): void
```

Convert the given node into a Docbook structure, in the given root. For
child elements in the node you may call the visitNode() method of the
provided visitor.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\ezcDocumentBBCodeVisitor** |  |
| `$root` | **\DOMElement** |  |
| `$node` | **\ezcDocumentBBCodeNode** |  |




***

### getText

Recursively extract text from node

```php
protected getText(\ezcDocumentBBCodeNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentBBCodeNode** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
