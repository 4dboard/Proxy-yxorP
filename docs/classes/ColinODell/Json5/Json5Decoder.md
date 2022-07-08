***

# Json5Decoder





* Full name: `\ColinODell\Json5\Json5Decoder`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### json



```php
private $json
```






***

### length



```php
private $length
```






***

### at



```php
private $at
```






***

### currentByte



```php
private $currentByte
```






***

### lineNumber



```php
private $lineNumber
```






***

### associative



```php
private $associative
```






***

### maxDepth



```php
private $maxDepth
```






***

### castBigIntToString



```php
private $castBigIntToString
```






***

### depth



```php
private $depth
```






***

### currentLineStartsAt



```php
private $currentLineStartsAt
```






***

## Methods


### __construct

Private constructor.

```php
private __construct(string $json, bool $associative = false, int $depth = 512, bool $castBigIntToString = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$json` | **string** |  |
| `$associative` | **bool** |  |
| `$depth` | **int** |  |
| `$castBigIntToString` | **bool** |  |




***

### decode

Takes a JSON encoded string and converts it into a PHP variable.

```php
public static decode(string $source, bool $associative = false, int $depth = 512, int $options): mixed
```

The parameters exactly match PHP's json_decode() function - see
http://php.net/manual/en/function.json-decode.php for more information.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** | The JSON string being decoded. |
| `$associative` | **bool** | When TRUE, returned objects will be converted into associative arrays. |
| `$depth` | **int** | User specified recursion depth. |
| `$options` | **int** | Bitmask of JSON decode options. |




***

### getByte



```php
private getByte(int $at): null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$at` | **int** |  |




***

### currentChar



```php
private currentChar(): string|null
```











***

### next

Parse the next character.

```php
private next(): null|string
```











***

### nextOrFail

Parse the next character if it matches $c or fail.

```php
private nextOrFail(string $c): string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$c` | **string** |  |




***

### peek

Get the next character without consuming it or
assigning it to the ch variable.

```php
private peek(): mixed
```











***

### match

Attempt to match a regular expression at the current position on the current line.

```php
private match(string $regex): string|null
```

This function will not match across multiple lines.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$regex` | **string** |  |




***

### identifier

Parse an identifier.

```php
private identifier(): mixed
```

Normally, reserved words are disallowed here, but we
only use this for unquoted object keys, where reserved words are allowed,
so we don't check for those here. References:
- http://es5.github.com/#x7.6
- https://developer.mozilla.org/en/Core_JavaScript_1.5_Guide/Core_Language_Features#Variables
- http://docstore.mik.ua/orelly/webprog/jscript/ch02_07.htm









***

### number



```php
private number(): mixed
```











***

### string



```php
private string(): mixed
```











***

### inlineComment

Skip an inline comment, assuming this is one.

```php
private inlineComment(): mixed
```

The current character should be the second / character in the // pair that begins this inline comment.
To finish the inline comment, we look for a newline or the end of the text.









***

### blockComment

Skip a block comment, assuming this is one.

```php
private blockComment(): mixed
```

The current character should be the * character in the /* pair that begins this block comment.
To finish the block comment, we look for an ending *​/ pair of characters,
but we also watch for the end of text before the comment is terminated.









***

### comment

Skip a comment, whether inline or block-level, assuming this is one.

```php
private comment(): mixed
```











***

### white

Skip whitespace and comments.

```php
private white(): mixed
```

Note that we're detecting comments by only a single / character.
This works since regular expressions are not valid JSON(5), but this will
break if there are other valid values that begin with a / character!









***

### word

Matches true, false, null, etc

```php
private word(): mixed
```











***

### arr



```php
private arr(): mixed
```











***

### obj

Parse an object value

```php
private obj(): mixed
```











***

### value

Parse a JSON value.

```php
private value(): mixed
```

It could be an object, an array, a string, a number,
or a word.









***

### throwSyntaxError



```php
private throwSyntaxError(mixed $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |




***

### renderChar



```php
private static renderChar(mixed $chr): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chr` | **mixed** |  |




***

### getEscapee



```php
private static getEscapee(string $ch): string|null
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ch` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
