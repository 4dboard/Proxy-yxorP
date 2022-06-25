***

# ezcDocumentRstFootnoteNode

The footnote AST node



* Full name: `\ezcDocumentRstFootnoteNode`
* Parent class: [`\ezcDocumentRstNode`](./ezcDocumentRstNode.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NUMBERED`|public| |1|
|`AUTO_NUMBERED`|public| |2|
|`LABELED`|public| |4|
|`SYMBOL`|public| |8|
|`CITATION`|public| |16|

## Properties


### name

Footnote target name

```php
public array $name
```






***

### number

Footnote number

```php
public int $number
```






***

### footnoteType

Type of footnote. May be either a normal footnote, or a citation
reference.

```php
public int $footnoteType
```






***

## Methods


### __construct

Construct RST document node

```php
public __construct(\ezcDocumentRstToken $token, array $name, int $footnoteType = self::NUMBERED): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$name` | **array** |  |
| `$footnoteType` | **int** |  |




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
