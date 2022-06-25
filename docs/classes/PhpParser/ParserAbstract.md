***

# ParserAbstract





* Full name: `\PhpParser\ParserAbstract`
* This class is an **Abstract class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SYMBOL_NONE`|public| |-1|

## Properties


### tokenToSymbolMapSize



```php
protected int $tokenToSymbolMapSize
```






***

### actionTableSize



```php
protected int $actionTableSize
```






***

### gotoTableSize



```php
protected int $gotoTableSize
```






***

### invalidSymbol



```php
protected int $invalidSymbol
```






***

### errorSymbol



```php
protected int $errorSymbol
```






***

### defaultAction



```php
protected int $defaultAction
```






***

### unexpectedTokenRule



```php
protected int $unexpectedTokenRule
```






***

### YY2TBLSTATE



```php
protected $YY2TBLSTATE
```






***

### YYNLSTATES



```php
protected $YYNLSTATES
```






***

### tokenToSymbol



```php
protected array $tokenToSymbol
```






***

### symbolToName



```php
protected array $symbolToName
```






***

### productions



```php
protected array $productions
```






***

### actionBase



```php
protected array $actionBase
```






***

### action



```php
protected array $action
```






***

### actionCheck



```php
protected array $actionCheck
```






***

### actionDefault



```php
protected array $actionDefault
```






***

### gotoBase



```php
protected array $gotoBase
```






***

### goto



```php
protected array $goto
```






***

### gotoCheck



```php
protected array $gotoCheck
```






***

### gotoDefault



```php
protected array $gotoDefault
```






***

### ruleToNonTerminal



```php
protected array $ruleToNonTerminal
```






***

### ruleToLength



```php
protected array $ruleToLength
```






***

### lexer



```php
protected \PhpParser\Lexer $lexer
```






***

### semValue



```php
protected mixed $semValue
```






***

### stackPos



```php
protected int $stackPos
```






***

### semStack



```php
protected array $semStack
```






***

### startAttributeStack



```php
protected array[] $startAttributeStack
```






***

### endAttributes



```php
protected array $endAttributes
```






***

### throwOnError



```php
protected bool $throwOnError
```






***

### errors



```php
protected \PhpParser\Error[] $errors
```






***

## Methods


### __construct

Creates a parser instance.

```php
public __construct(\PhpParser\Lexer $lexer, array $options = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lexer` | **\PhpParser\Lexer** | A lexer |
| `$options` | **array** | Options array. The boolean &#039;throwOnError&#039; option determines whether an exception should be<br />thrown on first error, or if the parser should try to continue parsing the remaining code<br />and build a partial AST. |




***

### getErrors

Get array of errors that occurred during the last parse.

```php
public getErrors(): \PhpParser\Error[]
```

This method may only return multiple errors if the 'throwOnError' option is disabled.









***

### parse

Parses PHP code into a node tree.

```php
public parse(string $code): \PhpParser\Node[]|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **string** | The source code to parse |


**Return Value:**

Array of statements (or null if the 'throwOnError' option is disabled and the parser was
unable to recover from an error).



***

### getErrorMessage



```php
protected getErrorMessage(mixed $symbol, mixed $state): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$symbol` | **mixed** |  |
| `$state` | **mixed** |  |




***

### getExpectedTokens



```php
protected getExpectedTokens(mixed $state): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$state` | **mixed** |  |




***

### handleNamespaces

Moves statements of semicolon-style namespaces into $ns->stmts and checks various error conditions.

```php
protected handleNamespaces(\PhpParser\Node[] $stmts): \PhpParser\Node[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stmts` | **\PhpParser\Node[]** |  |




***

### getNamespacingStyle



```php
private getNamespacingStyle(array $stmts): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stmts` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
