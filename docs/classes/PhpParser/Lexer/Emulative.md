***

# Emulative

ATTENTION: This code is WRITE-ONLY. Do not try to read it.

* Full name: `\PhpParser\Lexer\Emulative`
* Parent class: [`\PhpParser\Lexer`](../Lexer.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`T_ELLIPSIS`|public| |1001|
|`T_POW`|public| |1002|
|`T_POW_EQUAL`|public| |1003|
|`T_COALESCE`|public| |1004|
|`T_SPACESHIP`|public| |1005|
|`T_YIELD_FROM`|public| |1006|
|`PHP_7_0`|public| |&#039;7.0.0dev&#039;|
|`PHP_5_6`|public| |&#039;5.6.0rc1&#039;|
|`PHP_5_5`|public| |&#039;5.5.0beta1&#039;|
|`PHP_5_4`|public| |&#039;5.4.0beta1&#039;|

## Properties

### newKeywords

```php
protected $newKeywords
```

***

### inObjectAccess

```php
protected $inObjectAccess
```

***

## Methods

### __construct

Creates a Lexer.

```php
public __construct(array $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **
array** | Options array. Currently only the &#039;usedAttributes&#039; option is supported,<br />which is an array of attributes to add to the AST nodes. Possible attributes<br />are: &#039;comments&#039;, &#039;startLine&#039;, &#039;endLine&#039;, &#039;startTokenPos&#039;, &#039;endTokenPos&#039;,<br />&#039;startFilePos&#039;, &#039;endFilePos&#039;. The option defaults to the first three.<br />For more info see getNextToken() docs. |

***

### startLexing

Initializes the lexer for lexing the provided source code.

```php
public startLexing(mixed $code): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** | The source code to lex |

***

### preprocessCode

```php
protected preprocessCode(mixed $code): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |

***

### postprocessTokens

```php
protected postprocessTokens(): mixed
```

***

### restoreContentCallback

```php
public restoreContentCallback(array $matches): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **array** |  |

***

### hex2bin

```php
private hex2bin(mixed $str): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |

***

### getNextToken

Fetches the next token.

```php
public getNextToken(mixed& $value = null, mixed& $startAttributes = null, mixed& $endAttributes = null): int
```

The available attributes are determined by the 'usedAttributes' option, which can be specified in the constructor. The
following attributes are supported:

* 'comments' => Array of PhpParser\Comment or PhpParser\Comment\Doc instances, representing all comments that occurred
  between the previous non-discarded token and the current one.
* 'startLine' => Line in which the node starts.
* 'endLine' => Line in which the node ends.
* 'startTokenPos' => Offset into the token array of the first token in the node.
* 'endTokenPos' => Offset into the token array of the last token in the node.
* 'startFilePos' => Offset into the code string of the first character that is part of the node.
* 'endFilePos' => Offset into the code string of the last character that is part of the node

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | Variable to store token content in |
| `$startAttributes` | **mixed** | Variable to store start attributes in |
| `$endAttributes` | **mixed** | Variable to store end attributes in |

**Return Value:**

Token id



***

## Inherited methods

### __construct

Creates a Lexer.

```php
public __construct(array $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **
array** | Options array. Currently only the &#039;usedAttributes&#039; option is supported,<br />which is an array of attributes to add to the AST nodes. Possible attributes<br />are: &#039;comments&#039;, &#039;startLine&#039;, &#039;endLine&#039;, &#039;startTokenPos&#039;, &#039;endTokenPos&#039;,<br />&#039;startFilePos&#039;, &#039;endFilePos&#039;. The option defaults to the first three.<br />For more info see getNextToken() docs. |

***

### startLexing

Initializes the lexer for lexing the provided source code.

```php
public startLexing(string $code): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **string** | The source code to lex |

***

### resetErrors

```php
protected resetErrors(): mixed
```

***

### handleErrors

```php
protected handleErrors(): mixed
```

***

### getNextToken

Fetches the next token.

```php
public getNextToken(mixed& $value = null, mixed& $startAttributes = null, mixed& $endAttributes = null): int
```

The available attributes are determined by the 'usedAttributes' option, which can be specified in the constructor. The
following attributes are supported:

* 'comments' => Array of PhpParser\Comment or PhpParser\Comment\Doc instances, representing all comments that occurred
  between the previous non-discarded token and the current one.
* 'startLine' => Line in which the node starts.
* 'endLine' => Line in which the node ends.
* 'startTokenPos' => Offset into the token array of the first token in the node.
* 'endTokenPos' => Offset into the token array of the last token in the node.
* 'startFilePos' => Offset into the code string of the first character that is part of the node.
* 'endFilePos' => Offset into the code string of the last character that is part of the node

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | Variable to store token content in |
| `$startAttributes` | **mixed** | Variable to store start attributes in |
| `$endAttributes` | **mixed** | Variable to store end attributes in |

**Return Value:**

Token id



***

### getTokens

Returns the token array for current code.

```php
public getTokens(): array
```

The token array is in the same format as provided by the token_get_all() function and does not discard tokens (i.e.
whitespace and comments are included). The token position attributes are against this token array.

**Return Value:**

Array of tokens in token_get_all() format



***

### handleHaltCompiler

Handles __halt_compiler() by returning the text after it.

```php
public handleHaltCompiler(): string
```

**Return Value:**

Remaining text



***

### createTokenMap

Creates the token map.

```php
protected createTokenMap(): array
```

The token map maps the PHP internal token identifiers to the identifiers used by the Parser. Additionally it maps
T_OPEN_TAG_WITH_ECHO to T_ECHO and T_CLOSE_TAG to ';'.

**Return Value:**

The token map yxorP::get('REQUEST')
