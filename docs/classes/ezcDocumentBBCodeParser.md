***

# ezcDocumentBBCodeParser

Parser for bbcode documents.

* Full name: `\ezcDocumentBBCodeParser`
* Parent class: [`\ezcDocumentParser`](./ezcDocumentParser.md)

## Properties

### shifts

Array containing simplified shift ruleset.

```php
protected array $shifts
```

We cannot express the BBCode syntax as a usual grammar using a BNF. With the pumping lemma for context free grammars [1]
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

[1] http://en.bbcodepedia.org/bbcode/Pumping_lemma_for_context-free_languages




***

### reductions

Array containing simplified reduce ruleset.

```php
protected array $reductions
```

We cannot express the BBCode syntax as a usual grammar using a BNF. This structure implements a pseudo grammar by
assigning a number of callbacks for internal methods implementing reduction rules for a detected syntax element.

<code>
 array(
     ezcDocumentBBCodeNode::DOCUMENT => 'reduceDocument'
     ...
 )
</code>




***

### documentStack

Contains a list of detected syntax elements.

```php
protected array $documentStack
```

At the end of a successfull parsing process this should only contain one document syntax element. During the process it
may contain a list of elements, which are up to reduction.

Each element in the stack has to be an object extending from ezcDocumentRstNode, which may again contain any amount such
objects. This way an abstract syntax tree is constructed.




***

## Methods

### parse

Parse token stream.

```php
public parse(array $tokens): \ezcDocumentBBCodeDocumentNode
```

Parse an array of ezcDocumentBBCodeToken objects into a bbcode abstract syntax tree.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |

***

### shiftListItemToken

Shift list item token

```php
protected shiftListItemToken(\ezcDocumentBBCodeToken $token, array& $tokens): mixed
```

List item tokens indicate a new list item. Just put them on the stack, they will be aggregated later.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentBBCodeToken** |  |
| `$tokens` | **array** |  |

***

### shiftOpeningToken

Shift tag opening token

```php
protected shiftOpeningToken(\ezcDocumentBBCodeToken $token, array& $tokens): mixed
```

Opening tags mean that the following contents will be aggregated, once a matching closing tag is found. Is just shifted
to the document stack.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentBBCodeToken** |  |
| `$tokens` | **array** |  |

***

### shiftClosingToken

Shift tag clsoing token

```php
protected shiftClosingToken(\ezcDocumentBBCodeToken $token, array& $tokens): mixed
```

Closing tags mean that the preceeding contents will be aggregated, once a matching opening tag is found. Is just shifted
to the document stack, and the appropriate reduce call will follow right away.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentBBCodeToken** |  |
| `$tokens` | **array** |  |

***

### shiftWhitespaceToken

Shift whitespace token.

```php
protected shiftWhitespaceToken(\ezcDocumentBBCodeToken $token, array& $tokens): mixed
```

Shift whitespace tokens. Whitespaces are only considered significant, if the prior token was not a block level element.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentBBCodeToken** |  |
| `$tokens` | **array** |  |

***

### shiftTextToken

Shift text token.

```php
protected shiftTextToken(\ezcDocumentBBCodeToken $token, array& $tokens): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentBBCodeToken** |  |
| `$tokens` | **array** |  |

***

### shiftLiteralBlockToken

Shift literal block token

```php
protected shiftLiteralBlockToken(\ezcDocumentBBCodeToken $token, array& $tokens): mixed
```

Literal blocks are just a chunk of code or similar, where the token can jsut be converted into an apropriate node.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentBBCodeToken** |  |
| `$tokens` | **array** |  |

***

### shiftNewLineToken

Shift new line token.

```php
protected shiftNewLineToken(\ezcDocumentBBCodeToken $token, array& $tokens): mixed
```

Double new lines are considered as paragraphs. All other new lines are just shifted as single whitespace text nodes.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentBBCodeToken** |  |
| `$tokens` | **array** |  |

***

### shiftEndOfFileToken

Shift EOF token.

```php
protected shiftEndOfFileToken(\ezcDocumentBBCodeToken $token, array& $tokens): mixed
```

Shift End-Of-File token. We reached the end of the document, and therefore shift a document node onto the stack.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentBBCodeToken** |  |
| `$tokens` | **array** |  |

***

### reduceTags

Reduce tags.

```php
protected reduceTags(\ezcDocumentBBCodeClosingTagNode $node): mixed
```

Locates the matching opening tag for a closing tag and reduces the contents found on the way back.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentBBCodeClosingTagNode** |  |

***

### reduceListItem

Reduce list items.

```php
protected reduceListItem(\ezcDocumentBBCodeParagraphNode $node): mixed
```

Aggregates list items and puts them into a found list.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentBBCodeParagraphNode** |  |

***

### reduceList

Reduce list.

```php
protected reduceList(\ezcDocumentBBCodeParagraphNode $node): mixed
```

Aggregates list items and puts them into a found list.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentBBCodeParagraphNode** |  |

***

### reduceParagraph

Reduce paragraph.

```php
protected reduceParagraph(\ezcDocumentBBCodeParagraphNode $node): mixed
```

Paragraphs are reduce with all inline tokens, which have been added to the document stack before. If there are no inline
nodes, the paragraph will be ommitted.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentBBCodeParagraphNode** |  |

***

### reduceDocument

Reduce prior sections, if a new section has been found.

```php
protected reduceDocument(\ezcDocumentBBCodeDocumentNode $node): mixed
```

If a new section has been found all sections with a higher depth level can be closed, and all items fitting into
sections may be aggregated by the respective sections as well.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\ezcDocumentBBCodeDocumentNode** |  |

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
