***

# Lexer

A Lexer is a stateful stream generator in that every time
it is advanced, it returns the next token in the Source. Assuming the
source lexes, the final Token emitted by the lexer will be of kind
EOF, after which the lexer will repeatedly return the same EOF token
whenever called.

Algorithm is O(N) both on memory and time

* Full name: `\GraphQL\Language\Lexer`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TOKEN_BANG`|private| |33|
|`TOKEN_HASH`|private| |35|
|`TOKEN_DOLLAR`|private| |36|
|`TOKEN_AMP`|private| |38|
|`TOKEN_PAREN_L`|private| |40|
|`TOKEN_PAREN_R`|private| |41|
|`TOKEN_DOT`|private| |46|
|`TOKEN_COLON`|private| |58|
|`TOKEN_EQUALS`|private| |61|
|`TOKEN_AT`|private| |64|
|`TOKEN_BRACKET_L`|private| |91|
|`TOKEN_BRACKET_R`|private| |93|
|`TOKEN_BRACE_L`|private| |123|
|`TOKEN_PIPE`|private| |124|
|`TOKEN_BRACE_R`|private| |125|

## Properties

### source

```php
public \GraphQL\Language\Source $source
```

***

### options

```php
public bool[] $options
```

***

### lastToken

The previously focused non-ignored token.

```php
public \GraphQL\Language\Token $lastToken
```

***

### token

The currently focused non-ignored token.

```php
public \GraphQL\Language\Token $token
```

***

### line

The (1-indexed) line containing the current token.

```php
public int $line
```

***

### lineStart

The character offset at which the current line begins.

```php
public int $lineStart
```

***

### position

Current cursor position for UTF8 encoding of the source

```php
private int $position
```

***

### byteStreamPosition

Current cursor position for ASCII representation of the source

```php
private int $byteStreamPosition
```

***

## Methods

### __construct

```php
public __construct(\GraphQL\Language\Source $source, bool[] $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\GraphQL\Language\Source** |  |
| `$options` | **bool[]** |  |

***

### advance

```php
public advance(): \GraphQL\Language\Token
```

***

### lookahead

```php
public lookahead(): mixed
```

***

### readToken

```php
private readToken(\GraphQL\Language\Token $prev): \GraphQL\Language\Token
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prev` | **\GraphQL\Language\Token** |  |

***

### unexpectedCharacterMessage

```php
private unexpectedCharacterMessage(mixed $code): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |

***

### readName

Reads an alphanumeric + underscore name from the source.

```php
private readName(int $line, int $col, \GraphQL\Language\Token $prev): \GraphQL\Language\Token
```

[_A-Za-z][_0-9A-Za-z]*

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **int** |  |
| `$col` | **int** |  |
| `$prev` | **\GraphQL\Language\Token** |  |

***

### readNumber

Reads a number token from the source file, either a float
or an int depending on whether a decimal point appears.

```php
private readNumber(int $line, int $col, \GraphQL\Language\Token $prev): \GraphQL\Language\Token
```

Int:   -?(0|[1-9][0-9]*)
Float: -?(0|[1-9][0-9]*)(\.[0-9]+)?((E|e)(+|-)?[0-9]+)?

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **int** |  |
| `$col` | **int** |  |
| `$prev` | **\GraphQL\Language\Token** |  |

***

### readDigits

Returns string with all digits + changes current string cursor position to point to the first char after digits

```php
private readDigits(): mixed
```

***

### readString

```php
private readString(int $line, int $col, \GraphQL\Language\Token $prev): \GraphQL\Language\Token
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **int** |  |
| `$col` | **int** |  |
| `$prev` | **\GraphQL\Language\Token** |  |

***

### readBlockString

Reads a block string token from the source file.

```php
private readBlockString(mixed $line, mixed $col, \GraphQL\Language\Token $prev): mixed
```

"""("?"?(\\"""|\\(?!=""")|[^"\\]))*"""

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |
| `$col` | **mixed** |  |
| `$prev` | **\GraphQL\Language\Token** |  |

***

### assertValidStringCharacterCode

```php
private assertValidStringCharacterCode(mixed $code, mixed $position): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$position` | **mixed** |  |

***

### assertValidBlockStringCharacterCode

```php
private assertValidBlockStringCharacterCode(mixed $code, mixed $position): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$position` | **mixed** |  |

***

### positionAfterWhitespace

Reads from body starting at startPosition until it finds a non-whitespace
or commented character, then places cursor to the position of that character.

```php
private positionAfterWhitespace(): mixed
```

***

### readComment

Reads a comment token from the source file.

```php
private readComment(int $line, int $col, \GraphQL\Language\Token $prev): \GraphQL\Language\Token
```

#[\u0009\u0020-\uFFFF]*

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **int** |  |
| `$col` | **int** |  |
| `$prev` | **\GraphQL\Language\Token** |  |

***

### readChar

Reads next UTF8Character from the byte stream, starting from $byteStreamPosition.

```php
private readChar(bool $advance = false, int $byteStreamPosition = null): (string|int)[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$advance` | **bool** |  |
| `$byteStreamPosition` | **int** |  |

***

### readChars

Reads next $numberOfChars UTF8 characters from the byte stream, starting from $byteStreamPosition.

```php
private readChars(int $charCount, bool $advance = false, null $byteStreamPosition = null): (string|int)[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$charCount` | **int** |  |
| `$advance` | **bool** |  |
| `$byteStreamPosition` | **null** |  |

***

### moveStringCursor

Moves internal string cursor position

```php
private moveStringCursor(int $positionOffset, int $byteStreamOffset): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$positionOffset` | **int** |  |
| `$byteStreamOffset` | **int** |  |

***


***

