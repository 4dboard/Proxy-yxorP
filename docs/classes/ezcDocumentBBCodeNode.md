***

# ezcDocumentBBCodeNode

Struct for BBCode document document abstract syntax tree nodes



* Full name: `\ezcDocumentBBCodeNode`
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
public \ezcDocumentBBCodeToken $token
```






***

## Methods


### __construct

Construct BBCode node

```php
public __construct(\ezcDocumentBBCodeToken $token): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentBBCodeToken** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
