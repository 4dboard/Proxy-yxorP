***

# DocLexer

Simple lexer for docblock annotations.



* Full name: `\Doctrine\Common\Annotations\DocLexer`
* Parent class: [`\Doctrine\Common\Lexer\AbstractLexer`](../Lexer/AbstractLexer.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`T_NONE`|public| |1|
|`T_INTEGER`|public| |2|
|`T_STRING`|public| |3|
|`T_FLOAT`|public| |4|
|`T_IDENTIFIER`|public| |100|
|`T_AT`|public| |101|
|`T_CLOSE_CURLY_BRACES`|public| |102|
|`T_CLOSE_PARENTHESIS`|public| |103|
|`T_COMMA`|public| |104|
|`T_EQUALS`|public| |105|
|`T_FALSE`|public| |106|
|`T_NAMESPACE_SEPARATOR`|public| |107|
|`T_OPEN_CURLY_BRACES`|public| |108|
|`T_OPEN_PARENTHESIS`|public| |109|
|`T_TRUE`|public| |110|
|`T_NULL`|public| |111|
|`T_COLON`|public| |112|
|`T_MINUS`|public| |113|

## Properties


### noCase



```php
protected array&lt;string,int&gt; $noCase
```






***

### withCase



```php
protected array&lt;string,int&gt; $withCase
```






***

## Methods


### nextTokenIsAdjacent

Whether the next token starts immediately, or if there were
non-captured symbols before that

```php
public nextTokenIsAdjacent(): bool
```











***

### getCatchablePatterns

Lexical catchable patterns.

```php
protected getCatchablePatterns(): string[]
```











***

### getNonCatchablePatterns

Lexical non-catchable patterns.

```php
protected getNonCatchablePatterns(): string[]
```











***

### getType

Retrieve token type. Also processes the token value if necessary.

```php
protected getType(mixed& $value): int|string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***


## Inherited methods


### setInput

Sets the input data to be tokenized.

```php
public setInput(string $input): void
```

The Lexer is immediately reset and the new input tokenized.
Any unprocessed tokens from any previous input are lost.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | The input to be tokenized. |




***

### reset

Resets the lexer.

```php
public reset(): void
```











***

### resetPeek

Resets the peek pointer to 0.

```php
public resetPeek(): void
```











***

### resetPosition

Resets the lexer position on the input to the given position.

```php
public resetPosition(int $position): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$position` | **int** | Position to place the lexical scanner. |




***

### getInputUntilPosition

Retrieve the original lexer's input until a given position.

```php
public getInputUntilPosition(int $position): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$position` | **int** |  |




***

### isNextToken

Checks whether a given token matches the current lookahead.

```php
public isNextToken(int|string $type): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int&#124;string** |  |




***

### isNextTokenAny

Checks whether any of the given tokens matches the current lookahead.

```php
public isNextTokenAny(list&lt;int|string&gt; $types): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **list<int&#124;string>** |  |




***

### moveNext

Moves to the next token in the input string.

```php
public moveNext(): bool
```











***

### skipUntil

Tells the lexer to skip input tokens until it sees a token with the given value.

```php
public skipUntil(string $type): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | The token type to skip until. |




***

### isA

Checks if given value is identical to the given token.

```php
public isA(mixed $value, int|string $token): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$token` | **int&#124;string** |  |




***

### peek

Moves the lookahead token forward.

```php
public peek(): array|null
```









**Return Value:**

The next token or NULL if there are no more tokens ahead.



***

### glimpse

Peeks at the next token, returns it and immediately resets the peek.

```php
public glimpse(): array|null
```









**Return Value:**

The next token or NULL if there are no more tokens ahead.



***

### scan

Scans the input string for tokens.

```php
protected scan(string $input): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | A query string. |




***

### getLiteral

Gets the literal for a given token.

```php
public getLiteral(int|string $token): int|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **int&#124;string** |  |




***

### getModifiers

Regex modifiers

```php
protected getModifiers(): string
```











***

### getCatchablePatterns

Lexical catchable patterns.

```php
protected getCatchablePatterns(): string[]
```




* This method is **abstract**.






***

### getNonCatchablePatterns

Lexical non-catchable patterns.

```php
protected getNonCatchablePatterns(): string[]
```




* This method is **abstract**.






***

### getType

Retrieve token type. Also processes the token value if necessary.

```php
protected getType(string& $value): int|string|null
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
