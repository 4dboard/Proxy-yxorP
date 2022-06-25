***

# ezcDocumentXhtmlMetadataFilter

Filter, which assigns semantic information just on the base of XHtml element
semantics to the tree.



* Full name: `\ezcDocumentXhtmlMetadataFilter`
* Parent class: [`\ezcDocumentXhtmlBaseFilter`](./ezcDocumentXhtmlBaseFilter.md)



## Properties


### mapping

Metadata name mapping

```php
protected array $mapping
```






***

## Methods


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

### filterMetaData

Filter meta data

```php
protected filterMetaData(\DOMElement $element): void
```

Filter meta elements in HTML header for relevant metadata.






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
