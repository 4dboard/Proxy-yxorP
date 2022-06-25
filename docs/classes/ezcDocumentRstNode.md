***

# ezcDocumentRstNode

Struct for RST document document abstract syntax tree nodes



* Full name: `\ezcDocumentRstNode`
* Parent class: [`\ezcBaseStruct`](./ezcBaseStruct.md)
* This class is an **Abstract class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DOCUMENT`|public| |1|
|`SECTION`|public| |1|
|`TITLE`|public| |2|
|`PARAGRAPH`|public| |3|
|`TEXT_LINE`|public| |4|
|`BLOCKQUOTE`|public| |5|
|`ANNOTATION`|public| |6|
|`LITERAL_BLOCK`|public| |7|
|`COMMENT`|public| |8|
|`TRANSITION`|public| |9|
|`FIELD_LIST`|public| |10|
|`DEFINITION_LIST`|public| |11|
|`LINE_BLOCK`|public| |12|
|`LINE_BLOCK_LINE`|public| |13|
|`DEFINITION_LIST_LIST`|public| |14|
|`BULLET_LIST`|public| |20|
|`ENUMERATED_LIST`|public| |21|
|`BULLET_LIST_LIST`|public| |22|
|`ENUMERATED_LIST_LIST`|public| |23|
|`MARKUP_EMPHASIS`|public| |30|
|`MARKUP_STRONG`|public| |31|
|`MARKUP_INTERPRETED`|public| |32|
|`MARKUP_LITERAL`|public| |33|
|`MARKUP_SUBSTITUTION`|public| |34|
|`LINK_ANONYMOUS`|public| |40|
|`LINK_REFERENCE`|public| |41|
|`TARGET`|public| |42|
|`REFERENCE`|public| |43|
|`LITERAL`|public| |50|
|`SUBSTITUTION`|public| |51|
|`DIRECTIVE`|public| |52|
|`NAMED_REFERENCE`|public| |53|
|`FOOTNOTE`|public| |54|
|`ANON_REFERENCE`|public| |55|
|`TABLE`|public| |100|
|`TABLE_HEAD`|public| |101|
|`TABLE_BODY`|public| |102|
|`TABLE_ROW`|public| |103|
|`TABLE_CELL`|public| |104|

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

### type

Node type

```php
public int $type
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
public \ezcDocumentRstToken $token
```






***

### identifier

Optional paragraph identifier, to reference the paragraph using internal
links.

```php
public string $identifier
```






***

## Methods


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
