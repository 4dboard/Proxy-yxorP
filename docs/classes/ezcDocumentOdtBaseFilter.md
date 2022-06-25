***

# ezcDocumentOdtBaseFilter

Abstract base class for ODT filters, assigning semantic information to
ODT documents.



* Full name: `\ezcDocumentOdtBaseFilter`
* This class is an **Abstract class**




## Methods


### filter

Filter ODT document

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
