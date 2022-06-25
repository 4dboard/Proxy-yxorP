***

# ezcDocumentBBCodeVisitor

Abstract visitor base for BBCode documents represented by the parser AST.



* Full name: `\ezcDocumentBBCodeVisitor`
* This class implements:
[`\ezcDocumentErrorReporting`](./ezcDocumentErrorReporting.md)
* This class is an **Abstract class**



## Properties


### bbcode

BBCode document

```php
protected \ezcDocumentBBCode $bbcode
```






***

### ast

Reference to the AST root node.

```php
protected \ezcDocumentBBCodeDocumentNode $ast
```






***

### errors

Aggregated minor errors during document processing.

```php
protected array $errors
```






***

## Methods


### __construct

Create visitor from BBCode document handler.

```php
public __construct(\ezcDocumentBBCode $document, string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\ezcDocumentBBCode** |  |
| `$path` | **string** |  |




***

### triggerError

Trigger visitor error

```php
public triggerError(int $level, string $message, string $file = null, int $line = null, int $position = null): void
```

Emit a vistitor error, and convert it to an exception depending on the
error reporting settings.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |
| `$message` | **string** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$position` | **int** |  |




***

### getErrors

Return list of errors occured during visiting the document.

```php
public getErrors(): array
```

May be an empty array, if on errors occured, or a list of
ezcDocumentVisitException objects.









***

### visit

Docarate BBCode AST

```php
public visit(\ezcDocumentBBCodeDocumentNode $ast): mixed
```

Visit the BBCode abstract syntax tree.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\ezcDocumentBBCodeDocumentNode** |  |




***

### visitText

Visit text node

```php
protected visitText(\DOMNode $root, \ezcDocumentBBCodeNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentBBCodeNode** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
