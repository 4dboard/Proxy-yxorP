***

# Comment





* Full name: `\PhpParser\Comment`



## Properties


### text



```php
protected $text
```






***

### line



```php
protected $line
```






***

## Methods


### __construct

Constructs a comment node.

```php
public __construct(string $text, int $line = -1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** | Comment text (including comment delimiters like /*) |
| `$line` | **int** | Line number the comment started on |




***

### getText

Gets the comment text.

```php
public getText(): string
```









**Return Value:**

The comment text (including comment delimiters like /*)



***

### setText

Sets the comment text.

```php
public setText(string $text): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** | The comment text (including comment delimiters like /*) |




***

### getLine

Gets the line number the comment started on.

```php
public getLine(): int
```









**Return Value:**

Line number



***

### setLine

Sets the line number the comment started on.

```php
public setLine(int $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **int** | Line number |




***

### __toString

Gets the comment text.

```php
public __toString(): string
```









**Return Value:**

The comment text (including comment delimiters like /*)



***

### getReformattedText

Gets the reformatted comment text.

```php
public getReformattedText(): mixed|string
```

"Reformatted" here means that we try to clean up the whitespace at the
starts of the lines. This is necessary because we receive the comments
without trailing whitespace on the first line, but with trailing whitespace
on all subsequent lines.









***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
