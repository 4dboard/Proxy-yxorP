***

# ezcDocumentWikiDocbookVisitor

Docbook visitor for the Wiki AST.

* Full name: `\ezcDocumentWikiDocbookVisitor`
* Parent class: [`\ezcDocumentWikiVisitor`](./ezcDocumentWikiVisitor.md)

## Properties

### complexVisitMapping

Mapping of class names to internal visitors for the respective nodes.

```php
protected array $complexVisitMapping
```

***

### simpleVisitMapping

Direct mapping of AST node class names to docbook element names.

```php
protected array $simpleVisitMapping
```

***

### skipNodes

Array with nodes, which can be ignored during the transformation process, they only provide additional information
during preprocessing.

```php
protected array $skipNodes
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

### visitNode

Visit single AST node

```php
protected visitNode(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

Visit a single AST node, may be called for each node found anywhere as child. The current position in the DOMDocument is
passed by a reference to the current DOMNode, which is operated on.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitEmphasisMarkup

Visit emphasis markup

```php
protected visitEmphasisMarkup(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitTitle

Visit section titles

```php
protected visitTitle(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitExternalLink

Visit external link node

```php
protected visitExternalLink(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitLink

Visit link node

```php
protected visitLink(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

Docbook has no support for description of links, so that the description elements in the AST are omitted.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitList

Visit list

```php
protected visitList(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

Ensure stacked lists are created inside another list item.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### isInlineNode

Is inline node?

```php
protected isInlineNode(\DOMNode $node): bool
```

Check if contents of the current node are a inline node

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMNode** |  |

***

### visitImages

Visit images

```php
protected visitImages(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitLiteralBlock

Visit literal block

```php
protected visitLiteralBlock(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitLiteral

Visit literal

```php
protected visitLiteral(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitTableRow

Visit table row

```php
protected visitTableRow(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

Visit a table row and decide if it belongs into a tbody or a thead section.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitTableCell

Visit table cell

```php
protected visitTableCell(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

Visit a table cell and additionally always create an inner paragraph.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitLineBreak

Visit line break

```php
protected visitLineBreak(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitParagraph

Visit paragraph

```php
protected visitParagraph(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitBlockquote

Visit blockquote

```php
protected visitBlockquote(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitFootnote

Visit footnote

```php
protected visitFootnote(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

### visitPlugin

Visit plugin

```php
protected visitPlugin(\DOMNode $root, \ezcDocumentWikiNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

***

## Inherited methods

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

Emit a vistitor error, and convert it to an exception depending on the error reporting settings.

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

May be an empty array, if on errors occured, or a list of ezcDocumentVisitException objects.









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

Collect all possible reference targets in the AST to know the actual destianation for references while decorating. The
references are stored in an internal structure and you may request the actual link by using the getReferenceTarget()
method.

Aggregate list items into lists. In Wiki there are only list items, which are aggregated to lists depending on their
bullet type. The related list items are aggregated into one list.

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

Returns the target name, when an internal reference target exists and sets it to used, and false otherwise.

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

Transform a node tree, with all its subnodes into a string by only getting the textuual contents from
ezcDocumentWikiTextLineNode objects.

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

Extract the contents of a node list and return a single string for the array of nodes.

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

Just recurse into node and visit its children, ignoring the actual node.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentWikiNode** |  |

yxorP::get('REQUEST')
