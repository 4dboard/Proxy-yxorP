***

# Lexer

Lexes a template string.



* Full name: `\Twig\Lexer`
* This class implements:
[`\Twig_LexerInterface`](../Twig_LexerInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`STATE_DATA`|public| |0|
|`STATE_BLOCK`|public| |1|
|`STATE_VAR`|public| |2|
|`STATE_STRING`|public| |3|
|`STATE_INTERPOLATION`|public| |4|
|`REGEX_NAME`|public| |&#039;/[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*/A&#039;|
|`REGEX_NUMBER`|public| |&#039;/[0-9]+(?:\\.[0-9]+)?([Ee][\\+\\-][0-9]+)?/A&#039;|
|`REGEX_STRING`|public| |&#039;/&quot;([^#&quot;\\\\]*(?:\\\\.[^#&quot;\\\\]*)*)&quot;|\&#039;([^\&#039;\\\\]*(?:\\\\.[^\&#039;\\\\]*)*)\&#039;/As&#039;|
|`REGEX_DQ_STRING_DELIM`|public| |&#039;/&quot;/A&#039;|
|`REGEX_DQ_STRING_PART`|public| |&#039;/[^#&quot;\\\\]*(?:(?:\\\\.|#(?!\\{))[^#&quot;\\\\]*)*/As&#039;|
|`PUNCTUATION`|public| |&#039;()[]{}?:.,|&#039;|

## Properties


### tokens



```php
protected $tokens
```






***

### code



```php
protected $code
```






***

### cursor



```php
protected $cursor
```






***

### lineno



```php
protected $lineno
```






***

### end



```php
protected $end
```






***

### state



```php
protected $state
```






***

### states



```php
protected $states
```






***

### brackets



```php
protected $brackets
```






***

### env



```php
protected $env
```






***

### filename



```php
protected $filename
```






***

### options



```php
protected $options
```






***

### regexes



```php
protected $regexes
```






***

### position



```php
protected $position
```






***

### positions



```php
protected $positions
```






***

### currentVarBlockLine



```php
protected $currentVarBlockLine
```






***

### source



```php
private $source
```






***

## Methods


### __construct



```php
public __construct(\Twig\Environment $env, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$env` | **\Twig\Environment** |  |
| `$options` | **array** |  |




***

### tokenize

Tokenizes a source code.

```php
public tokenize(mixed $code, mixed $name = null): \TokenStream
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** | The source code |
| `$name` | **mixed** | A unique identifier for the source code |




***

### lexData



```php
protected lexData(): mixed
```











***

### lexBlock



```php
protected lexBlock(): mixed
```











***

### lexVar



```php
protected lexVar(): mixed
```











***

### lexExpression



```php
protected lexExpression(): mixed
```











***

### lexRawData



```php
protected lexRawData(mixed $tag): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag` | **mixed** |  |




***

### lexComment



```php
protected lexComment(): mixed
```











***

### lexString



```php
protected lexString(): mixed
```











***

### lexInterpolation



```php
protected lexInterpolation(): mixed
```











***

### pushToken



```php
protected pushToken(mixed $type, mixed $value = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$value` | **mixed** |  |




***

### moveCursor



```php
protected moveCursor(mixed $text): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |




***

### getOperatorRegex



```php
protected getOperatorRegex(): mixed
```











***

### pushState



```php
protected pushState(mixed $state): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$state` | **mixed** |  |




***

### popState



```php
protected popState(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
