***

# ezcDocumentRstParser

Parser for RST documents

RST is not describable by a context free grammar, so that the common parser approaches won't work.

Parser basics
-------------

We decided to implement a parser roughly following the scheme of common shift reduce parsers with a dynamic lookahead.

- Shifting:

  The shift step commonly tries to convert a token or a sequence of tokens to the respective AST node. In the case of
  RST we may need a dynamic lookahead to decide which type of AST node a token relates to, which is different from
  common LRn parsers.

  There is a map of parser tokens to internal methods for callbacks, which are called in the defined order if the main
  parser methods reach the respective token in the provided token array. Each shift method is called with the relating
  token and the array of subsequent, yet unhandled, tokens.

  These methods are expected to return either false, if the current token cannot be shifted by the called rule, true,
  when the token has been handled, but no document node has been created from it or a new ezcDocumentRstNode object,
  which is some AST node. When a shift method returned false the next shift method in the array is called to handle the
  token.

  The returned ezcDocumentRstNode objects are put on the document stack in the order they are found in the token array.

- Reducing:

  The reduce step commonly tries to reduce matching structures, like finding the matching opening brace, when a closing
  brace has been added to the document stack. In this case all nodes between the two braces are aggregated into the
  brace node, so that a tree is created.

  The reductions array defines an array with a mapping of node types to rection callbacks, which are called if such a
  node has been added to the document stack. Each reduction method may either return false, if it could not handle the
  given node, or a new node. The reduction methods often manipulate the document stack, like searching backwards and
  aggregating nodes.

  If a reduction method returns a node the parser reenters the reduction process with the new node.

The state of the RST parser heavily depends on the current indentation level, which is stored in the class property
$indentation, and mainly modified in the special shift method updateIndentation(), which is called on each line break
token.

Some of the shift methods aggregate additional tokens from the token array, bypassing the main parser method. This
should only be done, if no common handling is required for the aggregated tokens.

Tables
------

The handling of RST tables is quite complex and the affiliation of tokens to nodes depend on the line and character
position of the token. In this case the tokens are first aggregated into their cell contexts and reenter the parser
afterwards.

For token lists, which are required to reenter the parser - independently from the current global parser state - the
method reenterParser() takes such token lists, removes the overall indentation and returns a new document of the
provided token array.

* Full name: `\ezcDocumentRstParser`
* Parent class: [`\ezcDocumentParser`](./ezcDocumentParser.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`REGEXP_INLINE_LINK`|public| |&#039;(
(?:^|[\\s,.!?])

            (?# Ignore matching braces around the URL)
                (&lt;)?
                    (\\[)?
                        (\\()?
                            (?# Ignore quoting around the URL)
                            ([\&#039;&quot;]?)
                                (?# Actually match the URL)
                                (?P&lt;match&gt;
                                    (?P&lt;url&gt;[a-z]+://[^\\s]*?) |
                                    (?:mailto:)?(?P&lt;mail&gt;[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,})
                                )
                            \\4
                        (?(3)\\))
                    (?(2)\\])
                (?(1)&gt;)
            (?# Ignore common punctuation after the URL)
        [.,?!]?(?:\\s|$)
    )Sxm&#039;|

## Properties

### indentation

Current indentation of a paragraph / lsit item.

```php
protected int $indentation
```

***

### postIndentation

For the special case of dense bullet lists we need to update the indetation right after we created a new paragraph in
one action. We store the indetation to update past the paragraph creation in this case in this variable.

```php
protected int $postIndentation
```

***

### shifts

Array containing simplified shift ruleset

```php
protected array $shifts
```

We cannot express the RST syntax as a usual grammar using a BNF. With the pumping lemma for context free grammars [1]
you can easily prove, that the word a^n b c^n d e^n is not a context free grammar, and this is what the title
definitions are.

This structure contains an array with callbacks implementing the shift rules for all tokens. There may be multiple rules
for one single token.

The callbacks itself create syntax elements and push them to the document stack. After each push the reduction callbacks
will be called for the pushed elements.

The array should look like:
<code>
array(
WHITESPACE => array(
reductionMethod, ...
), ...
)
</code>

[1] http://en.wikipedia.org/wiki/Pumping_lemma_for_context-free_languages




***

### reductions

Array containing simplified reduce ruleset

```php
protected array $reductions
```

We cannot express the RST syntax as a usual grammar using a BNF. This structure implements a pseudo grammar by assigning
a number of callbacks for internal methods implementing reduction rules for a detected syntax element.

<code>
 array(
     ezcDocumentRstNode::DOCUMENT => 'reduceDocument'
     ...
 )
</code>




***

### textNodes

List of node types, which can be considered as inline text nodes.

```php
protected array $textNodes
```

***

### blockNodes

List of node types, which are valid block nodes, where we can indentation changes after, or which can be aggregated into
sections.

```php
protected array $blockNodes
```

***

### documentStack

Contains a list of detected syntax elements.

```php
protected \ezcDocumentRstStack $documentStack
```

At the end of a successfull parsing process this should only contain one document syntax element. During the process it
may contain a list of elements, which are up to reduction.

Each element in the stack has to be an object extending from ezcDocumentRstNode, which may again contain any amount such
objects. This way an abstract syntax tree is constructed.




***

### titleLevels

Array with title levels used by the document author in their order.

```php
protected array $titleLevels
```

***

### shortDirectives

List of builtin directives, which do not aggregate more text the parameters and options. User defined directives always
aggregate following indeted text.

```php
protected array $shortDirectives
```

***

## Methods

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

### parse

Shift- / reduce-parser for RST token stack

```php
public parse(array $tokens): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |

***

### realignTokens

Re-align tokens

```php
protected realignTokens(array $tokens): array
```

Realign tokens, so that the line start positions start at 0 again, even they were indeted before.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |

***

### reenterParser

Reenter parser with a list of tokens

```php
protected reenterParser(array $tokens, bool $reindent = true): \ezcDocumentRstDocumentNode
```

Returns a parsed document created from the given tokens. With optional, but default, reindetation of the tokens relative
to the first token.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |
| `$reindent` | **bool** |  |

***

### dumpStack

Print a dump of the document stack

```php
protected dumpStack(): void
```

This function is only for use during dubbing of the document stack structure.









***

### updateIndentation

Update the current indentation after each newline.

```php
protected updateIndentation(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftDocument

Create new document node

```php
protected shiftDocument(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstDocumentNode
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftBackslash

Escaping of special characters

```php
protected shiftBackslash(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstTitleNode
```

A backslash is used for character escaping, as defined at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#escaping-mechanism

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftTitle

Create new title node from titles with a top and bottom line

```php
protected shiftTitle(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstTitleNode
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftTransition

Shift transistions, which are separators in the document.

```php
protected shiftTransition(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstTitleNode
```

Transitions are specified here:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#transitions

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftLineBlock

Shift line blocks

```php
protected shiftLineBlock(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstTitleNode
```

Shift line blocks, which are specified at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#line-blocks

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftText

Just keep text as text nodes

```php
protected shiftText(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstTitleNode
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftParagraph

Shift a paragraph node on two newlines

```php
protected shiftParagraph(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstTitleNode
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### isInlineStartToken

Check if token is an inline markup start token.

```php
protected isInlineStartToken(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): bool
```

For a user readable list of the following rules, see:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#inline-markup

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### isInlineEndToken

Check if token is an inline markup end token.

```php
protected isInlineEndToken(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): bool
```

For a user readable list of the following rules, see:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#inline-markup

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftInlineLiteral

Detect inline literal

```php
protected shiftInlineLiteral(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

As defined at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#inline-literals

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftInlineMarkup

Detect inline markup

```php
protected shiftInlineMarkup(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

As defined at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#inline-markup

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftInterpretedTextRole

Try to shift a interpreted text role

```php
protected shiftInterpretedTextRole(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): mixed
```

Text role shifting is only called directly from the shiftInterpretedTextMarkup() method and tries to find the associated
role.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftInterpretedTextMarkup

Detect interpreted text inline markup

```php
protected shiftInterpretedTextMarkup(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

As defined at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#interpreted-text

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftAnonymousHyperlinks

Detect inline markup

```php
protected shiftAnonymousHyperlinks(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

As defined at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#inline-markup

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### detectFootnoteType

Tries to detect footnote type

```php
protected detectFootnoteType(array $name): void
```

The type of the footnote

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **array** |  |

***

### shiftReference

Detect reference

```php
protected shiftReference(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

As defined at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#inline-markup

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftExternalReference

Detect inline markup

```php
protected shiftExternalReference(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

As defined at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#inline-markup

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftBlockquoteAnnotation

Blockquote annotations

```php
protected shiftBlockquoteAnnotation(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### isEnumeratedList

Is enumerated list?

```php
protected isEnumeratedList(\ezcDocumentRstStack $tokens, mixed $token = null): void
```

As defined at
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#bullet-lists

Checks if the curretn token with thw following tokens may be an enumerated list. Used by the repective shifting method
and when checking for indentation updates.

Returns true, if the tokens may be an enumerated list, and false otherwise.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **\ezcDocumentRstStack** |  |
| `$token` | **mixed** |  |

***

### shiftEnumeratedList

Enumerated lists

```php
protected shiftEnumeratedList(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

As defined at
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#bullet-lists

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftBulletList

Bullet point lists

```php
protected shiftBulletList(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

As defined at
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#bullet-lists

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftWhitespaceAsText

Just keep text as text nodes

```php
protected shiftWhitespaceAsText(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstTextLineNode
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftAsWhitespace

Keep the newline as a single whitespace to maintain readability in texts.

```php
protected shiftAsWhitespace(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstTextLineNode
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftSpecialCharsAsText

Just keep text as text nodes

```php
protected shiftSpecialCharsAsText(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstTextLineNode
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftLiteralBlock

Shift literal block

```php
protected shiftLiteralBlock(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

Shift a complete literal block into one node. The behaviour of literal blocks is defined at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#literal-blocks

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### readUntil

Read all token until one of the given tokens occurs

```php
protected readUntil(\ezcDocumentRstStack $tokens, array $until): array
```

Reads all tokens and removes them from the token stack, which do not match of the given tokens. Escaping is maintained.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **\ezcDocumentRstStack** |  |
| `$until` | **array** |  |

***

### readMutlipleIndentedLines

Read multiple lines

```php
protected readMutlipleIndentedLines(\ezcDocumentRstStack $tokens, bool $strict = false): array
```

Reads the content of multiple indented lines, where the indentation can bei either handled strict, or lose, when literal
text is expected.

Returns an array with the collected tokens, until the indentation changes.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **\ezcDocumentRstStack** |  |
| `$strict` | **bool** |  |

***

### shiftDirective

Shift directives

```php
protected shiftDirective(\ezcDocumentRstDirectiveNode $directive, \ezcDocumentRstStack $tokens): \ezcDocumentRstDirectiveNode
```

Shift directives as a subaction of the shiftComment method, though the signature differs from the common shift methods.

This method aggregated options and parameters of directives, but leaves the content aggregation to the common comment
aggregation.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directive` | **\ezcDocumentRstDirectiveNode** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### handleSpecialDirectives

Handle special directives

```php
protected handleSpecialDirectives(\ezcDocumentRstSubstitutionNode $substitution, \ezcDocumentRstDirectiveNode $node): \ezcDocumentRstSubstitutionNode
```

Handle special directives like replace, which require reparsing of the directives contents, which is not possible to do
during visiting, but is required to already be done inside the parser.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$substitution` | **\ezcDocumentRstSubstitutionNode** |  |
| `$node` | **\ezcDocumentRstDirectiveNode** |  |

***

### shiftComment

Shift comment

```php
protected shiftComment(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

Shift comments. Comments are introduced by '..' and just contain text. There are several other block, which are
introduced the same way, but where the first token determines the actual type.

This method implements the parsing and detection of those different items.

Comments are basically described here, but there are crosscutting concerns throughout the complete specification:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#comments

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftAnonymousReference

Shift anonymous reference target

```php
protected shiftAnonymousReference(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

Shift the short version of anonymous reference targets, the long version is handled in the shiftComment() method. Both
are specified at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#anonymous-hyperlinks

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftFieldList

Shift field lists

```php
protected shiftFieldList(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

Shift field lists, which are introduced by a term surrounded by columns and any text following. Field lists are
specified at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#field-lists

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### readSimpleCells

Read simple cells

```php
protected readSimpleCells(array $cellStarts, \ezcDocumentRstStack& $tokens): array
```

Read cells as defined in simple tables. Cells are maily structured by whitespaces, but may also exceed one cell.

Returns an array with cells, ordered by their rows and columns.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cellStarts` | **array** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### readSimpleTableSpecification

Read simple table specifications

```php
protected readSimpleTableSpecification(\ezcDocumentRstStack& $tokens): array
```

Read the column specification headers of a simple table and return the sizes of the specified columns in an array.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftSimpleTable

Shift simple table

```php
protected shiftSimpleTable(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

"Simple tables" are not defined by a complete grid, but only by top and bottome lines. There exact specification can be
found at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#simple-tables

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### readGridTableSpecification

Read grid table specifications

```php
protected readGridTableSpecification(\ezcDocumentRstStack& $tokens): array
```

Read the column specification headers of a grid table and return the sizes of the specified columns in an array.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftGridTable

Shift grid table

```php
protected shiftGridTable(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

In "Grid tables" the values are embedded in a complete grid visually describing a a table using characters.
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#grid-tables

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### shiftDefinitionList

Shift definition lists

```php
protected shiftDefinitionList(\ezcDocumentRstToken $token, \ezcDocumentRstStack $tokens): \ezcDocumentRstMarkupEmphasisNode
```

Shift definition lists, which are introduced by an indentation change without speration by a paragraph. Because of this
the method is called form the updateIndentation method, which handles such indentation changes.

The text for the definition and its classifiers is already on the document stack because of this.

Definition lists are specified at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#definition-lists

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$tokens` | **\ezcDocumentRstStack** |  |

***

### reduceTitle

Reduce all elements to one document node.

```php
protected reduceTitle(\ezcDocumentRstTitleNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstTitleNode** |  |

***

### reduceSection

Reduce prior sections, if a new section has been found.

```php
protected reduceSection(\ezcDocumentRstNode $node): void
```

If a new section has been found all sections with a higher depth level can be closed, and all items fitting into
sections may be aggregated by the respective sections as well.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### reduceBlockquoteAnnotationParagraph

Reduce blockquote annotation content

```php
protected reduceBlockquoteAnnotationParagraph(\ezcDocumentRstNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### reduceBlockquoteAnnotation

Reduce blockquote annotation

```php
protected reduceBlockquoteAnnotation(\ezcDocumentRstNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### reduceBlockquote

Reduce paragraph to blockquote

```php
protected reduceBlockquote(\ezcDocumentRstNode $node): void
```

Indented paragraphs are blockquotes, which should be wrapped in such a node.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### reduceListItem

Reduce paragraph to bullet lsit

```php
protected reduceListItem(\ezcDocumentRstNode $node): void
```

Indented paragraphs are bllet lists, if prefixed by a bullet list indicator.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### reduceList

Reduce item to bullet list

```php
protected reduceList(\ezcDocumentRstNode $node): void
```

Called for all items, which may be part of bullet lists. Depending on the indentation level we reduce some amount of
items to a bullet list.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### reduceParagraph

Reduce paragraph

```php
protected reduceParagraph(\ezcDocumentRstNode $node): void
```

Aggregates all nodes which are allowed as subnodes into a paragraph.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### reduceMarkup

Reduce markup

```php
protected reduceMarkup(\ezcDocumentRstNode $node): void
```

Tries to find the opening tag for a markup definition.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### reduceInterpretedText

Reduce interpreted text inline markup

```php
protected reduceInterpretedText(\ezcDocumentRstNode $node): void
```

Tries to find the opening tag for a markup definition.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### reduceInternalTarget

Reduce internal target

```php
protected reduceInternalTarget(\ezcDocumentRstNode $node): void
```

Internal targets are listed before the literal markup block, so it may be found and reduced after we found a markup
block.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### reduceReference

Reduce reference

```php
protected reduceReference(\ezcDocumentRstNode $node): void
```

Reduce references as defined at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#inline-markup

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

***

### reduceLink

Reduce link

```php
protected reduceLink(\ezcDocumentRstNode $node): void
```

Uses the preceding element as the hyperlink content. This should be either a literal markup section, or just the last
word.

As we do not get workd content out of the tokenizer (too much overhead), we split out the previous text node up, in case
we got one.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentRstNode** |  |

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

Emit a parser error and handle it dependiing on the current error reporting settings.

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

yxorP::get('REQUEST')
