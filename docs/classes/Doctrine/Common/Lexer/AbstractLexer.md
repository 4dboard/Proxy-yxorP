***

# AbstractLexer

Base class for writing simple lexers, i.e. for creating small DSLs.



* Full name: `\Doctrine\Common\Lexer\AbstractLexer`
* This class is an **Abstract class**



## Properties


### input

Lexer original input string.

```php
private string $input
```






***

### tokens

Array of scanned tokens.

```php
private array[] $tokens
```

Each token is an associative array containing three items:
- 'value'    : the string value of the token in the input string
- 'type'     : the type of the token (identifier, numeric, string, input
               parameter, none)
- 'position' : the position of the token in the input string




***

### position

Current lexer position in input string.

```php
private int $position
```






***

### peek

Current peek of current lexer position.

```php
private int $peek
```






***

### lookahead

The next token in the input.

```php
public array|null $lookahead
```






***

### token

The last matched/seen token.

```php
public array|null $token
```






***

### regex

Composed regex for input parsing.

```php
private string|null $regex
```






***

## Methods


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
