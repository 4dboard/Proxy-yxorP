***

# ezcDocumentWikiNode

Struct for Wiki document document abstract syntax tree nodes



* Full name: `\ezcDocumentWikiNode`
* Parent class: [`\ezcBaseStruct`](./ezcBaseStruct.md)
* This class is an **Abstract class**



## Properties


### line

Line of node in source file.

```php
public int $line
```






***

### position

Character position of node in source file.

```php
public int $position
```






***

### nodes

Child nodes

```php
public mixed $nodes
```






***

### token

Optional reference to token, not available for all nodes.

```php
public \ezcDocumentWikiToken $token
```






***

## Methods


### __construct

Construct Wiki node

```php
public __construct(\ezcDocumentWikiToken $token): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentWikiToken** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
