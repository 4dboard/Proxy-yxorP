***

# ezcDocumentRstDirectiveNode

The AST node for RST document directives



* Full name: `\ezcDocumentRstDirectiveNode`
* Parent class: [`\ezcDocumentRstBlockNode`](./ezcDocumentRstBlockNode.md)



## Properties


### identifier

Directive target identifier

```php
public string $identifier
```






***

### parameters

Directive paramters

```php
public string $parameters
```






***

### tokens

Directive content tokens

```php
public array $tokens
```






***

### options

Directive options

```php
public array $options
```






***

## Methods


### __construct

Construct RST document node

```php
public __construct(\ezcDocumentRstToken $token, string $identifier): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$identifier` | **string** |  |




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
