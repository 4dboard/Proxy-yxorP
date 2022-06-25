***

# Discover

A specialized RestructuredText Parser/Visitor to aid in the discovery phase.

This class collects all headings and their titles and populates the TableOfContents collection.

* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Visitors\Discover`
* Parent class: [`\phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Visitors\Creator`](./Creator.md)



## Properties


### entry_pointers

This array is meant as a cache of the last entry per depth.

```php
protected \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\Heading[] $entry_pointers
```

To build a hierarchy from a non-recursive method, such as visitSection(), you need a way to reference the last
Entry per depth.

By keeping track of these pointers you know onto which parent you will need to add a node by checking which of
higher depth was parsed last.

Important: because it is possible that levels are 'skipped' we will need to unset all 'deeper' depths when
setting a new one. Otherwise we might inadvertently add an entry to the wrong tree.




***

### last_heading

This is a pointer to the last discovered heading.

```php
protected \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\Heading $last_heading
```

Directives and roles may 'include' Files as children of the currently parsed heading. Elements as the toctree
directive or a plain include are examples of such.




***

## Methods


### visit



```php
public visit(\ezcDocumentRstDocumentNode $ast): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\ezcDocumentRstDocumentNode** |  |




***

### visitSection

Visitor for the section heading used to populate the TableOfContents.

```php
protected visitSection(\DOMNode $root, \ezcDocumentRstNode $node): void
```

This method interprets the heading and its containing text and adds new entries to the TableOfContents object
in the RestructuredText document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |



**See Also:**

* \phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Visitors\getDocument() - for the document containing the TableOfContents.* \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents - for the Table of Contents class.

***

### addFileToLastHeading

Adds a TableOfContents File object to the last heading that was discovered.

```php
public addFileToLastHeading(\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\File $file): mixed
```

This may be used by roles or directives to insert an include file into the TableOfContents and thus all
its headings.

This method is explicitly bound to File objects and not other BaseEntry descendents because inline elements
such as headings should also modify the internal pointers for this visitor.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\File** |  |




***


## Inherited methods


### getTableOfContents

Returns the table of contents.

```php
public getTableOfContents(): mixed
```

return TableOfContents $toc









***

### getFilename

Returns the filename for this visitor.

```php
public getFilename(): string
```











***

### getFilenameWithoutExtension

Returns the filename for this visitor without an extension.

```php
public getFilenameWithoutExtension(): string
```











***

### getDocument

Returns the RestructuredText Document to retrieve the specialized cross-document collections.

```php
public getDocument(): \phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Document
```











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

### visitSection

Visit section node

```php
protected visitSection(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitFieldListItem

Visit field list item

```php
protected visitFieldListItem(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

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

### visitNode

Visit single AST node

```php
protected visitNode(\DOMNode $root, \ezcDocumentRstNode $node): void
```

Visit a single AST node, may be called for each node found anywhere
as child. The current position in the DOMDocument is passed by a
reference to the current DOMNode, which is operated on.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### addStylesheets

Add stylesheets to header

```php
protected addStylesheets(\DOMElement $head): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$head` | **\DOMElement** |  |




***

### escapeUrl

Escape all special characters in URIs

```php
public escapeUrl(string $url): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** |  |




***

### visitInterpretedTextNode

Visit interpreted text node markup

```php
protected visitInterpretedTextNode(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitExternalReference

Visit external reference node

```php
protected visitExternalReference(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitInternalFootnoteReference

Visit internal reference node

```php
protected visitInternalFootnoteReference(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitInlineTarget

Visit inline target node

```php
protected visitInlineTarget(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitAnonymousReference

Visit anonomyous reference node

```php
protected visitAnonymousReference(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitBlockquote

Visit blockquotes

```php
protected visitBlockquote(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitBulletList

Visit bullet lists

```php
protected visitBulletList(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitEnumeratedList

Visit enumerated lists

```php
protected visitEnumeratedList(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### generateFootnoteReferenceLink

Generate footnote reference link

```php
protected generateFootnoteReferenceLink(string $name, string $number): string
```

Generate an internal target name out of the footnote name, which may
contain special characters, which are not allowed for URL anchors and
are converted to alphanumeric strings by this method.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$number` | **string** |  |




***

### visitFootnote

Visit footnote

```php
protected visitFootnote(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitLineBlock

Visit line block

```php
protected visitLineBlock(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitLineBlockLine

Visit line block line

```php
protected visitLineBlockLine(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitComment

Visit comment

```php
protected visitComment(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitDefinitionListItem

Visit definition list item

```php
protected visitDefinitionListItem(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitTableCell

Visit table cell

```php
protected visitTableCell(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




***

### visitDirective

Visit directive

```php
protected visitDirective(\DOMNode $root, \ezcDocumentRstNode $node): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\DOMNode** |  |
| `$node` | **\ezcDocumentRstNode** |  |




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

Transform a node tree, with all its subnodes into a string by only
getting the textuual contents from ezcDocumentRstTextLineNode objects.






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

Check if the given list item may be a successor in the same list, as the
last item in the list. Returns the boolean status o the check.






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

Aggregate list items into lists. In RST there are only list items, which
are aggregated to lists depending on their bullet type. The related list
items are aggregated into one list.






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

Collect all possible reference targets in the AST to know the actual
destianation for references while decorating. The references are stored
in an internal structure and you may request the actual link by using
the getReferenceTarget() method.

Aggregate list items into lists. In RST there are only list items, which
are aggregated to lists depending on their bullet type. The related list
items are aggregated into one list.






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

Returns the target name, when an internal reference target exists and
sets it to used, and false otherwise.






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

Returns the target name, when an internal reference target exists and
sets it to used, and false otherwise. For duplicate reference targets
and missing reference targets an error will be triggered.

An optional third parameter may enforce the fetching of the reference,
even if there are duplicates, so that they still can be referenced in
some way.






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

Just recurse into node and visit its children, ignoring the actual
node.






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




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
