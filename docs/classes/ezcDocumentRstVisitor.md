***

# ezcDocumentRstVisitor

Abstract visitor base for RST documents represented by the parser AST.

* Full name: `\ezcDocumentRstVisitor`
* This class implements:
  [`\ezcDocumentErrorReporting`](./ezcDocumentErrorReporting.md)
* This class is an **Abstract class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`UNUSED`|public| |1|
|`USED`|public| |2|
|`DUBLICATE`|public| |4|

## Properties

### rst

RST document handler

```php
protected \ezcDocumentRst $rst
```

***

### ast

Reference to the AST root node.

```php
protected \ezcDocumentRstDocumentNode $ast
```

***

### path

Location of the currently processed RST file, relevant for inclusion.

```php
protected string $path
```

***

### references

Collected refrence targets.

```php
protected array $references
```

***

### referenceCounter

Counter of duplicate references for duplicate references.

```php
protected array $referenceCounter
```

***

### namedExternalReferences

Collected named external reference targets

```php
protected array $namedExternalReferences
```

***

### anonymousReferences

Collected anonymous externals reference targets

```php
protected array $anonymousReferences
```

***

### anonymousReferenceCounter

Index of last requested anonymous reference target.

```php
protected int $anonymousReferenceCounter
```

***

### substitutions

Collected substitutions.

```php
protected array $substitutions
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

### footnoteSymbols

Foot note symbol signs, as defined at
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#auto-symbol-footnotes

```php
protected array $footnoteSymbols
```

***

### errors

Aggregated minor errors during document processing.

```php
protected array $errors
```

***

### usedIDs

Array of already generated IDs, so none will be used twice.

```php
protected array $usedIDs
```

***

## Methods

### __construct

Create visitor from RST document handler.

```php
public __construct(\ezcDocumentRst $document, string $path): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\ezcDocumentRst** |  |
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

Docarate RST AST

```php
public visit(\ezcDocumentRstDocumentNode $ast): mixed
```

Visit the RST abstract syntax tree.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\ezcDocumentRstDocumentNode** |  |

***

### addReferenceTarget

Add a reference target

```php
private addReferenceTarget(string $string): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### nodeToString

Transform a node tree into a string

```php
public nodeToString(\ezcDocumentRstNode $node): string
```

Transform a node tree, with all its subnodes into a string by only getting the textuual contents from
ezcDocumentRstTextLineNode objects.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### tokenListToString

Get string from token list.

```php
protected tokenListToString(array $tokens): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |

***

### compareListType

Compare two list items

```php
protected compareListType(\ezcDocumentRstNode $item, \ezcDocumentRstNode $lastItem): bool
```

Check if the given list item may be a successor in the same list, as the last item in the list. Returns the boolean
status o the check.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **\ezcDocumentRstNode** |  |
| `$lastItem` | **\ezcDocumentRstNode** |  |

***

### aggregateListItems

Aggregate list items

```php
protected aggregateListItems(\ezcDocumentRstNode $node): void
```

Aggregate list items into lists. In RST there are only list items, which are aggregated to lists depending on their
bullet type. The related list items are aggregated into one list.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### addFootnote

Add footnote

```php
protected addFootnote(\ezcDocumentRstNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### preProcessAst

Pre process AST

```php
protected preProcessAst(\ezcDocumentRstNode $node): void
```

Performs multiple preprocessing steps on the AST:

Collect all possible reference targets in the AST to know the actual destianation for references while decorating. The
references are stored in an internal structure and you may request the actual link by using the getReferenceTarget()
method.

Aggregate list items into lists. In RST there are only list items, which are aggregated to lists depending on their
bullet type. The related list items are aggregated into one list.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### hasFootnoteTarget

Check for internal footnote reference target

```php
public hasFootnoteTarget(string $string, \ezcDocumentRstNode $node): \ezcDocumentRstFootnoteNode
```

Returns the target name, when an internal reference target exists and sets it to used, and false otherwise.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |
| `$node` | **\ezcDocumentRstNode** |  |

***

### hasReferenceTarget

Check for internal reference target

```php
public hasReferenceTarget(string $string, \ezcDocumentRstNode $node = null, bool $force = false): string
```

Returns the target name, when an internal reference target exists and sets it to used, and false otherwise. For
duplicate reference targets and missing reference targets an error will be triggered.

An optional third parameter may enforce the fetching of the reference, even if there are duplicates, so that they still
can be referenced in some way.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |
| `$node` | **\ezcDocumentRstNode** |  |
| `$force` | **bool** |  |

***

### getNamedExternalReference

Return named external reference target

```php
public getNamedExternalReference(string $name): string
```

Get the target value of a named external reference.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getAnonymousReferenceTarget

Get anonymous reference target

```php
public getAnonymousReferenceTarget(): string
```

Get the target URL of an anonomyous reference target.









***

### substitute

Get substitution contents

```php
protected substitute(string $string): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### calculateId

Get a valid identifier string

```php
protected calculateId(string $string): string
```

Get a valid identifier string from an arbritrary string.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### calculateUniqueId

Calculate unique ID

```php
protected calculateUniqueId(string $string): string
```

Calculate a valid identifier, which is unique for this document.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### visitText

Visit text node

```php
protected visitText(\DOMNode $root, \ezcDocumentRstNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |

***

### visitChildren

Visit children

```php
protected visitChildren(\DOMNode $root, \ezcDocumentRstNode $node): void
```

Just recurse into node and visit its children, ignoring the actual node.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |

***

### visitSubstitutionReference

Visit substitution reference node

```php
protected visitSubstitutionReference(\DOMNode $root, \ezcDocumentRstNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |

yxorP::get('REQUEST')
