***

# ezcDocumentXhtmlXpathFilter

Filter, which lets you locate the relevant content nodes by a XPath query.

The XPath filter extracts the nodes specified by one or more xpath
expressions, and replaces the document body with those extracted nodes. This
way you may manually extract the relevant content nodes from a website and
let the later filters only tranform those.

* Full name: `\ezcDocumentXhtmlXpathFilter`
* Parent class: [`\ezcDocumentXhtmlBaseFilter`](./ezcDocumentXhtmlBaseFilter.md)



## Properties


### queries

XPath queries used for the content extraction.

```php
protected array $queries
```






***

## Methods


### __construct

Construct XPath filter

```php
public __construct(mixed $xpath = &#039;/*[local-name() = &quot;html&quot;]/*[local-name() = &quot;body&quot;]&#039;): void
```

Construct the XPath filter, which extracts the nodes specified by one or
more xpath expressions, and replaces the document body with those
extracted nodes. This way you may manually extract the relevant content
nodes from a website and let the later filters only tranform those.

You can either pass a single XPath query as a string, or an array of
XPath queries to the constructor.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xpath` | **mixed** |  |




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
