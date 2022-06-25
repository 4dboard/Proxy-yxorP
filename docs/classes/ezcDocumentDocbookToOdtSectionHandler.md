***

# ezcDocumentDocbookToOdtSectionHandler

Visit docbook sections.

Visit docbook <section/> and transform them into ODT <text:section/>.
Handles <title/> nodes in addition.

* Full name: `\ezcDocumentDocbookToOdtSectionHandler`
* Parent class: [`\ezcDocumentDocbookToOdtBaseHandler`](./ezcDocumentDocbookToOdtBaseHandler.md)



## Properties


### level

Current section nesting level in the docbook document.

```php
protected int $level
```






***

### lastSectionId

Last auto-generated section ID.

```php
protected int $lastSectionId
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

### handleTitle

Handles the <title/> element.

```php
protected handleTitle(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |
| `$root` | **mixed** |  |




***

### createRefMark

createRefMark

```php
protected createRefMark(mixed $h, mixed $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$h` | **mixed** |  |
| `$node` | **mixed** |  |




***

### handleSection

Handles the <section/> element.

```php
protected handleSection(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |
| `$root` | **mixed** |  |




***

### generateId

Generates a section ID.

```php
protected generateId(): string
```











***


## Inherited methods


### __construct

Creates a new handler which utilizes the given $styler.

```php
public __construct(\ezcDocumentOdtStyler $styler): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styler` | **\ezcDocumentOdtStyler** |  |




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
