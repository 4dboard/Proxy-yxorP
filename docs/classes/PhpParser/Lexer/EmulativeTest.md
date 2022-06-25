***

# EmulativeTest





* Full name: `\PhpParser\Lexer\EmulativeTest`
* Parent class: [`\PhpParser\LexerTest`](../LexerTest.md)




## Methods


### getLexer



```php
protected getLexer(array $options = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### testReplaceKeywords



```php
public testReplaceKeywords(mixed $keyword, mixed $expectedToken): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyword` | **mixed** |  |
| `$expectedToken` | **mixed** |  |




***

### testNoReplaceKeywordsAfterObjectOperator



```php
public testNoReplaceKeywordsAfterObjectOperator(mixed $keyword): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyword` | **mixed** |  |




***

### provideTestReplaceKeywords



```php
public provideTestReplaceKeywords(): mixed
```











***

### testLexNewFeatures



```php
public testLexNewFeatures(mixed $code, array $expectedTokens): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$expectedTokens` | **array** |  |




***

### testLeaveStuffAloneInStrings



```php
public testLeaveStuffAloneInStrings(mixed $code): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




***

### provideTestLexNewFeatures



```php
public provideTestLexNewFeatures(): mixed
```











***


## Inherited methods


### getLexer



```php
protected getLexer(array $options = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### testError



```php
public testError(mixed $code, mixed $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$message` | **mixed** |  |




***

### provideTestError



```php
public provideTestError(): mixed
```











***

### testLex



```php
public testLex(mixed $code, mixed $options, mixed $tokens): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$options` | **mixed** |  |
| `$tokens` | **mixed** |  |




***

### provideTestLex



```php
public provideTestLex(): mixed
```











***

### testHandleHaltCompiler



```php
public testHandleHaltCompiler(mixed $code, mixed $remaining): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$remaining` | **mixed** |  |




***

### provideTestHaltCompiler



```php
public provideTestHaltCompiler(): mixed
```











***

### testHandleHaltCompilerError



```php
public testHandleHaltCompilerError(): mixed
```











***

### testGetTokens



```php
public testGetTokens(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
