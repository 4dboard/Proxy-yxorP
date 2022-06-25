***

# ezcDocumentDocbookToHtmlHeadHandler

Visit docbook sectioninfo elements

The sectioninfo elements contain metadata about the document or
sections, which are transformed into the respective metadata in the HTML
header.

* Full name: `\ezcDocumentDocbookToHtmlHeadHandler`
* Parent class: [`\ezcDocumentDocbookToHtmlBaseHandler`](./ezcDocumentDocbookToHtmlBaseHandler.md)



## Properties


### headerMapping

Element name mapping for meta information in the docbook document to
HTML meta element names.

```php
protected array $headerMapping
```






***

### dcHeaderMapping

Element name mapping for meta information in the docbook document to
HTML meta element names, using the dublin core extensions for meta
elements.

```php
protected array $dcHeaderMapping
```






***

## Methods


### handle

Handle a node

```php
public handle(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```

Handle / transform a given node, and return the result of the
conversion.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |
| `$root` | **mixed** |  |




***


## Inherited methods


### getHead

Get head of HTML document

```php
protected getHead(\DOMElement $element): \DOMElement
```

Get the root node of the HTML document head






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### handle

Handle a node.

```php
public handle(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```

Handle / transform a given node, and return the result of the
conversion.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |
| `$root` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
