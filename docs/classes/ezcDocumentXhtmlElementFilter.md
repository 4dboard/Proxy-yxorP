***

# ezcDocumentXhtmlElementFilter

Filter, which assigns semantic information just on the base of XHtml element
semantics to the tree.



* Full name: `\ezcDocumentXhtmlElementFilter`
* Parent class: [`\ezcDocumentXhtmlBaseFilter`](./ezcDocumentXhtmlBaseFilter.md)



## Properties


### elementFilter

List of element filter objects.

```php
protected array $elementFilter
```






***

## Methods


### __construct

Constructor

```php
public __construct(): void
```

Create initial filter array.









***

### addFilter

Add additional element filter

```php
public addFilter(\ezcDocumentXhtmlElementBaseFilter $filter): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **\ezcDocumentXhtmlElementBaseFilter** |  |




***

### filter

Filter XHtml document

```php
public filter(\DOMDocument $document): \DOMDocument
```

Filter for the document, which may modify / restructure a document and
assign semantic information bits to the elements in the tree.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |




***

### filterNode

Filter node

```php
protected filterNode(\DOMElement $element): void
```

Depending on the element name, it parents and maybe element attributes
semantic information is assigned to nodes.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***


## Inherited methods


### filter

Filter XHtml document

```php
public filter(\DOMDocument $document): \DOMDocument
```

Filter for the document, which may modify / restructure a document and
assign semantic information bits to the elements in the tree.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
