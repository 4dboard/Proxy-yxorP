***

# ezcDocumentWikiVisitor

Abstract visitor base for Wiki documents represented by the parser AST.



* Full name: `\ezcDocumentWikiVisitor`
* This class implements:
[`\ezcDocumentErrorReporting`](./ezcDocumentErrorReporting.md)
* This class is an **Abstract class**



## Properties


### wiki

Wiki document handler

```php
protected \ezcDocumentWiki $wiki
```






***

### ast

Reference to the AST root node.

```php
protected \ezcDocumentWikiDocumentNode $ast
```






***

### footnotes

List with footnotes for later rendering.

```php
protected array $footnotes
```






***

### footnoteCounter

Label dependant foot note counters for footnote auto enumeration.

```php
protected array $footnoteCounter
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

Create visitor from Wiki document handler.

```php
public __construct(\ezcDocumentWiki $document, string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\ezcDocumentWiki** |  |
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

Docarate Wiki AST

```php
public visit(\ezcDocumentWikiDocumentNode $ast): mixed
```

Visit the Wiki abstract syntax tree.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\ezcDocumentWikiDocumentNode** |  |




***

### addFootnote

Add footnote

```php
protected addFootnote(\ezcDocumentWikiNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiNode** |  |




***

### preProcessAst

Pre process AST

```php
protected preProcessAst(\ezcDocumentWikiNode $node): void
```

Performs multiple preprocessing steps on the AST:

Collect all possible reference targets in the AST to know the actual
destianation for references while decorating. The references are stored
in an internal structure and you may request the actual link by using
the getReferenceTarget() method.

Aggregate list items into lists. In Wiki there are only list items, which
are aggregated to lists depending on their bullet type. The related list
items are aggregated into one list.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiNode** |  |




***

### hasFootnoteTarget

Check for internal footnote reference target

```php
public hasFootnoteTarget(int $number, \ezcDocumentWikiNode $node): \ezcDocumentWikiFootnoteNode
```

Returns the target name, when an internal reference target exists and
sets it to used, and false otherwise.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **int** |  |
| `$node` | **\ezcDocumentWikiNode** |  |




***

### nodeToString

Transform a node tree into a string

```php
protected nodeToString(\ezcDocumentWikiNode $node): string
```

Transform a node tree, with all its subnodes into a string by only
getting the textuual contents from ezcDocumentWikiTextLineNode objects.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiNode** |  |




***

### nodeListToString

Node list to string

```php
protected nodeListToString(array $nodes): string
```

Extract the contents of a node list and return a single string for the
array of nodes.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **array** |  |




***

### visitText

Visit text node

```php
protected visitText(\DOMNode $root, \ezcDocumentWikiNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |




***

### visitChildren

Visit children

```php
protected visitChildren(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

Just recurse into node and visit its children, ignoring the actual
node.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
