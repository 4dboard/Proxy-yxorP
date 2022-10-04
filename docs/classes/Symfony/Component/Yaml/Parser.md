***

# Parser

Parser parses YAML strings to convert them to PHP arrays.

* Full name: `\Symfony\Component\Yaml\Parser`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TAG_PATTERN`|public| |&#039;(?P&lt;tag&gt;![\\w!.\\/:-]+)&#039;|
|`BLOCK_SCALAR_HEADER_PATTERN`|public| |&#039;(?P&lt;separator&gt;\\||&gt;)(?P&lt;modifiers&gt;\\+|\\-|\\d+|\\+\\d+|\\-\\d+|\\d+\\+|\\d+\\-)?(?P&lt;comments&gt; +#.*)?&#039;|
|`REFERENCE_PATTERN`|public| |&#039;#^&amp;(?P&lt;ref&gt;[^ ]++) *+(?P&lt;value&gt;.*)#u&#039;|

## Properties

### filename

```php
private ?string $filename
```

***

### offset

```php
private int $offset
```

***

### numberOfParsedLines

```php
private int $numberOfParsedLines
```

***

### totalNumberOfLines

```php
private ?int $totalNumberOfLines
```

***

### lines

```php
private array $lines
```

***

### currentLineNb

```php
private int $currentLineNb
```

***

### currentLine

```php
private string $currentLine
```

***

### refs

```php
private array $refs
```

***

### skippedLineNumbers

```php
private array $skippedLineNumbers
```

***

### locallySkippedLineNumbers

```php
private array $locallySkippedLineNumbers
```

***

### refsBeingParsed

```php
private array $refsBeingParsed
```

***

## Methods

### parseFile

Parses a YAML file into a PHP value.

```php
public parseFile(string $filename, int $flags): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | The path to the YAML file to be parsed |
| `$flags` | **int** | A bit field of PARSE_* constants to customize the YAML parser behavior |

***

### parse

Parses a YAML string to a PHP value.

```php
public parse(string $value, int $flags): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | A YAML string |
| `$flags` | **int** | A bit field of PARSE_* constants to customize the YAML parser behavior |

***

### doParse

```php
private doParse(string $value, int $flags): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |
| `$flags` | **int** |  |

***

### parseBlock

```php
private parseBlock(int $offset, string $yaml, int $flags): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** |  |
| `$yaml` | **string** |  |
| `$flags` | **int** |  |

***

### getCurrentLineIndentation

```php
private getCurrentLineIndentation(): int
```

***

### getNextEmbedBlock

Returns the next embed block of YAML.

```php
private getNextEmbedBlock(int|null $indentation = null, bool $inSequence = false): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$indentation` | **int&#124;null** | The indent level at which the block is to be read, or null for default |
| `$inSequence` | **bool** | True if the enclosing data structure is a sequence |

***

### hasMoreLines

```php
private hasMoreLines(): bool
```

***

### moveToNextLine

Moves the parser to the next line.

```php
private moveToNextLine(): bool
```

***

### moveToPreviousLine

Moves the parser to the previous line.

```php
private moveToPreviousLine(): bool
```

***

### parseValue

Parses a YAML value.

```php
private parseValue(string $value, int $flags, string $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | A YAML value |
| `$flags` | **int** | A bit field of PARSE_* constants to customize the YAML parser behavior |
| `$context` | **string** | The parser context (either sequence or mapping) |

***

### parseBlockScalar

Parses a block scalar.

```php
private parseBlockScalar(string $style, string $chomping = &#039;&#039;, int $indentation): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$style` | **string** | The style indicator that was used to begin this block scalar (&amp;#124; or &gt;) |
| `$chomping` | **string** | The chomping indicator that was used to begin this block scalar (+ or -) |
| `$indentation` | **int** | The indentation indicator that was used to begin this block scalar |

***

### isNextLineIndented

Returns true if the next line is indented.

```php
private isNextLineIndented(): bool
```

***

### isCurrentLineEmpty

```php
private isCurrentLineEmpty(): bool
```

***

### isCurrentLineBlank

```php
private isCurrentLineBlank(): bool
```

***

### isCurrentLineComment

```php
private isCurrentLineComment(): bool
```

***

### isCurrentLineLastLineInDocument

```php
private isCurrentLineLastLineInDocument(): bool
```

***

### cleanup

```php
private cleanup(string $value): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

***

### isNextLineUnIndentedCollection

```php
private isNextLineUnIndentedCollection(): bool
```

***

### isStringUnIndentedCollectionItem

```php
private isStringUnIndentedCollectionItem(): bool
```

***

### trimTag

Trim the tag on top of the value.

```php
private trimTag(string $value): string
```

Prevent values such as "!foo {quz: bar}" to be considered as
a mapping block.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

***

### getLineTag

```php
private getLineTag(string $value, int $flags, bool $nextLineCheck = true): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |
| `$flags` | **int** |  |
| `$nextLineCheck` | **bool** |  |

***

### lexInlineQuotedString

```php
private lexInlineQuotedString(int& $cursor): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cursor` | **int** |  |

***

### lexUnquotedString

```php
private lexUnquotedString(int& $cursor): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cursor` | **int** |  |

***

### lexInlineMapping

```php
private lexInlineMapping(int& $cursor): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cursor` | **int** |  |

***

### lexInlineSequence

```php
private lexInlineSequence(int& $cursor): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cursor` | **int** |  |

***

### lexInlineStructure

```php
private lexInlineStructure(int& $cursor, string $closingTag): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cursor` | **int** |  |
| `$closingTag` | **string** |  |

***

### consumeWhitespaces

```php
private consumeWhitespaces(int& $cursor): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cursor` | **int** |  |

***


***

