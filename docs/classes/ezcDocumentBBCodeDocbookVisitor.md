***

# ezcDocumentBBCodeDocbookVisitor

Docbook visitor for the BBCode AST.



* Full name: `\ezcDocumentBBCodeDocbookVisitor`
* Parent class: [`\ezcDocumentBBCodeVisitor`](./ezcDocumentBBCodeVisitor.md)



## Properties


### visitMapping

Mapping of AST nodes to the visitor methods, which are sued to transform
the respective node into Docbook

```php
protected array $visitMapping
```






***

### document

DOM document

```php
protected \DOMDocument $document
```






***

## Methods


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

### visitNode

Visit single AST node

```php
public visitNode(\DOMNode $root, \ezcDocumentBBCodeNode $node): void
```

Visit a single AST node, may be called for each node found anywhere
as child. The current position in the DOMDocument is passed by a
reference to the current DOMNode, which is operated on.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentBBCodeNode** |  |




***

### visitParagraph

Visit paragraph markup

```php
protected visitParagraph(\DOMNode $root, \ezcDocumentBBCodeNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentBBCodeNode** |  |




***

### visitTag

Visit simple BBCode tag

```php
protected visitTag(\DOMNode $root, \ezcDocumentBBCodeNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentBBCodeNode** |  |




***

### visitInlineLiteral

Visit inlien literal markup

```php
protected visitInlineLiteral(\DOMNode $root, \ezcDocumentBBCodeNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentBBCodeNode** |  |




***

### visitLiteralBlock

Visit literal block markup

```php
protected visitLiteralBlock(\DOMNode $root, \ezcDocumentBBCodeNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentBBCodeNode** |  |




***

### visitListItems

Visit list items in a list

```php
protected visitListItems(\DOMNode $list, \ezcDocumentBBCodeListNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$list` | **\DOMNode** |  |
| `$node` | **\ezcDocumentBBCodeListNode** |  |




***

### visitBulletList

Visit bullet list

```php
protected visitBulletList(\DOMNode $root, \ezcDocumentBBCodeNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentBBCodeNode** |  |




***

### visitEnumeratedList

Visit enumerated list

```php
protected visitEnumeratedList(\DOMNode $root, \ezcDocumentBBCodeNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentBBCodeNode** |  |




***


## Inherited methods


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
