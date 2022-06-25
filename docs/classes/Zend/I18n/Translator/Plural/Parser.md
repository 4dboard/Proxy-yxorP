***

# Parser

Plural rule parser.

This plural rule parser is implemented after the article "Top Down Operator
Precedence" described in <http://javascript.crockford.com/tdop/tdop.html>.

* Full name: `\Zend\I18n\Translator\Plural\Parser`



## Properties


### string

String to parse.

```php
protected string $string
```






***

### currentPos

Current lexer position in the string.

```php
protected int $currentPos
```






***

### currentToken

Current token.

```php
protected \Zend\I18n\Translator\Plural\Symbol $currentToken
```






***

### symbolTable

Table of symbols.

```php
protected array $symbolTable
```






***

## Methods


### __construct

Create a new plural parser.

```php
public __construct(): mixed
```











***

### populateSymbolTable

Populate the symbol table.

```php
protected populateSymbolTable(): void
```











***

### registerLeftInfixSymbol

Register a left infix symbol.

```php
protected registerLeftInfixSymbol(string $id, int $leftBindingPower): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$leftBindingPower` | **int** |  |




***

### registerRightInfixSymbol

Register a right infix symbol.

```php
protected registerRightInfixSymbol(string $id, int $leftBindingPower): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$leftBindingPower` | **int** |  |




***

### registerPrefixSymbol

Register a prefix symbol.

```php
protected registerPrefixSymbol(string $id, int $leftBindingPower): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$leftBindingPower` | **int** |  |




***

### registerSymbol

Register a symbol.

```php
protected registerSymbol(string $id, int $leftBindingPower): \Zend\I18n\Translator\Plural\Symbol
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$leftBindingPower` | **int** |  |




***

### getSymbol

Get a new symbol.

```php
protected getSymbol(string $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### parse

Parse a string.

```php
public parse(string $string): \Zend\I18n\Translator\Plural\Symbol
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***

### expression

Parse an expression.

```php
public expression(int $rightBindingPower): \Zend\I18n\Translator\Plural\Symbol
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rightBindingPower` | **int** |  |




***

### advance

Advance the current token and optionally check the old token id.

```php
public advance(string $id = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### getNextToken

Get the next token.

```php
protected getNextToken(): array
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
