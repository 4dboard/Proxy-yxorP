***

# ezcDocumentXhtmlBaseFilter

Abstract base class for XHtml filters, assigning semantic information to XHtml documents.

* Full name: `\ezcDocumentXhtmlBaseFilter`
* This class is an **Abstract class**

## Methods

### filter

Filter XHtml document

```php
public filter(\DOMDocument $document): \DOMDocument
```

Filter for the document, which may modify / restructure a document and assign semantic information bits to the elements
in the tree.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |

yxorP::get('REQUEST')
