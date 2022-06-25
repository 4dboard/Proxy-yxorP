***

# ezcDocumentWikiParser

Parser for wiki documents.



* Full name: `\ezcDocumentWikiParser`
* Parent class: [`\ezcDocumentParser`](./ezcDocumentParser.md)



## Properties


### shifts

Array containing simplified shift ruleset.

```php
protected array $shifts
```

We cannot express the Wiki syntax as a usual grammar using a BNF. With
the pumping lemma for context free grammars [1] you can easily prove,
that the word a^n b c^n d e^n is not a context free grammar, and this is
what the title definitions are.

This structure contains an array with callbacks implementing the shift
rules for all tokens. There may be multiple rules for one single token.

The callbacks itself create syntax elements and push them to the
document stack. After each push the reduction callbacks will be called
for the pushed elements.

The array should look like:
<code>
 array(
     WHITESPACE => array(
         reductionMethod,
         ...
     ),
     ...
 )
</code>

[1] http://en.wikipedia.org/wiki/Pumping_lemma_for_context-free_languages




***

### reductions

Array containing simplified reduce ruleset.

```php
protected array $reductions
```

We cannot express the Wiki syntax as a usual grammar using a BNF. This
structure implements a pseudo grammar by assigning a number of callbacks
for internal methods implementing reduction rules for a detected syntax
element.

<code>
 array(
     ezcDocumentWikiNode::DOCUMENT => 'reduceDocument'
     ...
 )
</code>




***

### documentStack

Contains a list of detected syntax elements.

```php
protected array $documentStack
```

At the end of a successfull parsing process this should only contain one
document syntax element. During the process it may contain a list of
elements, which are up to reduction.

Each element in the stack has to be an object extending from
ezcDocumentRstNode, which may again contain any amount such objects.
This way an abstract syntax tree is constructed.




***

### insideLineToken

Flag if we are inside a line level node

```php
protected bool $insideLineToken
```






***

### conversionsArray

Array with token node conversions.

```php
protected array $conversionsArray
```

Token to node conversions are used for tokens, which do not require any
additional checking of the tokens context. This is especially useful,
because the wiki tokenizer already implement a lot of this logic.




***

## Methods


### parse

Parse token stream.

```php
public parse(array $tokens): \ezcDocumentWikiDocumentNode
```

Parse an array of ezcDocumentWikiToken objects into a wiki abstract
syntax tree.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |




***

### shiftEscapeToken

Shift escape token.

```php
protected shiftEscapeToken(\ezcDocumentWikiToken $token, array& $tokens): mixed
```

Escape tokens will cause that the following token is ignored in his
common meaning. The following token is converted to plain text, while
the escape token will be removed.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentWikiToken** |  |
| `$tokens` | **array** |  |




***

### shiftTitleToken

Shift title token.

```php
protected shiftTitleToken(\ezcDocumentWikiToken $token, array& $tokens): mixed
```

Some wiki markup languages use a second title token at the end of the
line instead of just a line break. In the case we are already inside a
line token, just shift an invisible line break.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentWikiToken** |  |
| `$tokens` | **array** |  |




***

### shiftNewLineToken

Shift new line token.

```php
protected shiftNewLineToken(\ezcDocumentWikiToken $token, array& $tokens): mixed
```

Paragraphs are always indicated by multiple new line tokens. When
detected we just shift a paragraph node, which the will be reduced with
prior inline nodes.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentWikiToken** |  |
| `$tokens` | **array** |  |




***

### shiftWithTokenConversion

Shift with token conversion.

```php
protected shiftWithTokenConversion(\ezcDocumentWikiToken $token, array& $tokens): mixed
```

Token to node conversions are used for tokens, which do not require any
additional checking of the tokens context. This is especially useful,
because the wiki tokenizer already implement a lot of this logic.

The actual conversions are specified in the class property
$conversionsArray.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentWikiToken** |  |
| `$tokens` | **array** |  |




***

### reduceText

Reduce text nodes.

```php
protected reduceText(\ezcDocumentWikiTextNode $node): mixed
```

Reduce texts into single nodes, if the prior node is also a text node.
This reduces the number of AST nodes required to represent texts
drastically.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiTextNode** |  |




***

### reduceParagraph

Reduce paragraph.

```php
protected reduceParagraph(\ezcDocumentWikiParagraphNode $node): mixed
```

Paragraphs are reduce with all inline tokens, which have been added to
the document stack before. If there are no inline nodes, the paragraph
will be ommitted.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiParagraphNode** |  |




***

### reduceSection

Reduce prior sections, if a new section has been found.

```php
protected reduceSection(\ezcDocumentWikiSectionNode $node): mixed
```

If a new section has been found all sections with a higher depth level
can be closed, and all items fitting into sections may be aggregated by
the respective sections as well.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiSectionNode** |  |




***

### reduceTitleToSection

Reduce all elements to one document node.

```php
protected reduceTitleToSection(\ezcDocumentWikiTitleNode $node): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiTitleNode** |  |




***

### reduceMatchingInlineMarkup

Reduce matching inline markup.

```php
protected reduceMatchingInlineMarkup(\ezcDocumentWikiMatchingInlineNode $node): mixed
```

Reduction rule for inline markup which is intended to have a matching
counterpart in the same block level element.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiMatchingInlineNode** |  |




***

### reduceLineNode

Reduce line node.

```php
protected reduceLineNode(\ezcDocumentWikiInvisibleBreakNode $node): mixed
```

Line nodes are closed at the end of their respective line. The end is
marked by an ezcDocumentWikiInvisibleBreakNode.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiInvisibleBreakNode** |  |




***

### reduceLinkNodes

Reduce wiki links.

```php
protected reduceLinkNodes(\ezcDocumentWikiLinkEndNode $node): mixed
```

Reduce links with all of their aggregated parameters.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiLinkEndNode** |  |




***

### reduceImageNodes

Reduce wiki image references.

```php
protected reduceImageNodes(\ezcDocumentWikiImageEndNode $node): mixed
```

Reduce image references with all of their aggregated parameters.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiImageEndNode** |  |




***

### reduceFootnoteNodes

Reduce wiki footnotes.

```php
protected reduceFootnoteNodes(\ezcDocumentWikiFootnoteEndNode $node): mixed
```

Reduce inline footnotes






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiFootnoteEndNode** |  |




***

### reduceBlockquoteNode

Reduce multiline blockquote nodes.

```php
protected reduceBlockquoteNode(\ezcDocumentWikiBlockquoteNode $node): mixed
```

Reduce multline block quote nodes, which are not already closed by line
endings.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiBlockquoteNode** |  |




***

### reduceBulletListItem

Reduce bullet list items to list.

```php
protected reduceBulletListItem(\ezcDocumentWikiBlockLevelNode $node): mixed
```

Reduce list items to lists, and create new wrapping list nodes.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiBlockLevelNode** |  |




***

### reduceEnumeratedListItem

Reduce enumerated list items to list.

```php
protected reduceEnumeratedListItem(\ezcDocumentWikiBlockLevelNode $node): mixed
```

Reduce list items to lists, and create new wrapping list nodes.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiBlockLevelNode** |  |




***

### mergeListRecursively

Merge lists recusively.

```php
protected mergeListRecursively(array $lists): \ezcDocumentWikiListNode
```

Merge lists recusively






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lists` | **array** |  |




***

### reduceLists

Reduce lists.

```php
protected reduceLists(\ezcDocumentWikiBlockLevelNode $node): mixed
```

Stack lists with higher indentation into each other and merge multiple
lists of same type and indentation.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiBlockLevelNode** |  |




***

### reduceTableRow

Reduce table rows.

```php
protected reduceTableRow(\ezcDocumentWikiTableRowNode $node): mixed
```

Reduce the nodes aagregated for one table row into table cells, and
merge the table rows into table nodes.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentWikiTableRowNode** |  |




***


## Inherited methods


### __construct

Construct new document

```php
public __construct(\ezcDocumentParserOptions $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentParserOptions** |  |




***

### triggerError

Trigger parser error

```php
public triggerError(int $level, string $message, string $file = null, int $line = null, int $position = null): void
```

Emit a parser error and handle it dependiing on the current error
reporting settings.






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


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
