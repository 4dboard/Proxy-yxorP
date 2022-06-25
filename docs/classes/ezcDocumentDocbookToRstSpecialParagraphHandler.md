***

# ezcDocumentDocbookToRstSpecialParagraphHandler

Visit special paragraphs.

Transform the paragraphs with special annotations like <note> and
<caution> to paragraphs inside the HTML document with a class
representing the meaning of the docbook elements. The mapping which is
used inside this method is used throughout the document comoponent and
compatible with the RTS mapping.

* Full name: `\ezcDocumentDocbookToRstSpecialParagraphHandler`
* Parent class: [`\ezcDocumentDocbookToRstBaseHandler`](./ezcDocumentDocbookToRstBaseHandler.md)



## Properties


### types

Handled paragraph names / types

```php
protected array $types
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


### renderDirective

Render a directive

```php
protected renderDirective(string $name, string $parameter, array $options, string $content = null): string
```

Render a directive with the given paramters.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$parameter` | **string** |  |
| `$options` | **array** |  |
| `$content` | **string** |  |




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
