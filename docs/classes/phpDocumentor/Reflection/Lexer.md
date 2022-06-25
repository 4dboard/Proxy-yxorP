***

# Lexer

Custom lexer for phpDocumentor.

phpDocumentor has a custom Lexer for PHP-Parser because it needs
unmodified value for Scalar variables instead of an interpreted version.

If the interpreted version was to be used then the XML interpretation would
fail because of special characters.

* Full name: `\phpDocumentor\Reflection\Lexer`
* Parent class: [`\PhpParser\Lexer`](../../PhpParser/Lexer.md)

**See Also:**

* http://phpdoc.org - 




## Methods


### getNextToken

Retrieves the next token and determines the associated attributes and
returns the token id.

```php
public getNextToken(string& $value = null, string[]& $startAttributes = null, string[]& $endAttributes = null): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |
| `$startAttributes` | **string[]** |  |
| `$endAttributes` | **string[]** |  |




***

### isTokenScalar

Returns whether the given token id is a scalar that will be interpreted
by PHP-Parser.

```php
protected isTokenScalar(int $tokenId): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokenId` | **int** | The id to check, must match a \PhpParser_Parser::T_*<br />constant. |




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
| `$options` | **array** | Options array. Currently only the &#039;usedAttributes&#039; option is supported,<br />which is an array of attributes to add to the AST nodes. Possible attributes<br />are: &#039;comments&#039;, &#039;startLine&#039;, &#039;endLine&#039;, &#039;startTokenPos&#039;, &#039;endTokenPos&#039;,<br />&#039;startFilePos&#039;, &#039;endFilePos&#039;. The option defaults to the first three.<br />For more info see getNextToken() docs. |




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

The available attributes are determined by the 'usedAttributes' option, which can
be specified in the constructor. The following attributes are supported:

 * 'comments'      => Array of PhpParser\Comment or PhpParser\Comment\Doc instances,
                      representing all comments that occurred between the previous
                      non-discarded token and the current one.
 * 'startLine'     => Line in which the node starts.
 * 'endLine'       => Line in which the node ends.
 * 'startTokenPos' => Offset into the token array of the first token in the node.
 * 'endTokenPos'   => Offset into the token array of the last token in the node.
 * 'startFilePos'  => Offset into the code string of the first character that is part of the node.
 * 'endFilePos'    => Offset into the code string of the last character that is part of the node






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

The token array is in the same format as provided by the
token_get_all() function and does not discard tokens (i.e.
whitespace and comments are included). The token position
attributes are against this token array.







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

The token map maps the PHP internal token identifiers
to the identifiers used by the Parser. Additionally it
maps T_OPEN_TAG_WITH_ECHO to T_ECHO and T_CLOSE_TAG to ';'.







**Return Value:**

The token map



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
