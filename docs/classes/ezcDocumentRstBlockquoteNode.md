***

# ezcDocumentRstBlockquoteNode

The blockquote AST node



* Full name: `\ezcDocumentRstBlockquoteNode`
* Parent class: [`\ezcDocumentRstBlockNode`](./ezcDocumentRstBlockNode.md)



## Properties


### annotation

Blockquote annotation

```php
public \ezcDocumentRstBlockquoteAnnotationNode $annotation
```






***

### closed

Indicator telling whether a blockquote has been finished by either a
annotation or an explicit blockquote separation marker.

```php
public bool $closed
```






***

## Methods


### __construct

Construct RST document node

```php
public __construct(\ezcDocumentRstToken $token): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |




***


## Inherited methods


### __construct

Construct RST node

```php
public __construct(\ezcDocumentRstToken $token, int $type): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$type` | **int** |  |




***

### getTokenName

Get node name from type

```php
public static getTokenName(int $type): string
```

Return a user readable name from the numeric node type.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** |  |




***

### content

Return node content, if available somehow

```php
protected content(): string
```











***

### dump

Get dump of document

```php
public dump(int $depth): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$depth` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
