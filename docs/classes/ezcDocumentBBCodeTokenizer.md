***

# ezcDocumentBBCodeTokenizer

Tokenizer for bbcode documents

The tokenizer used for all bbcode documents should prepare a token array,
which can be used by the bbcode parser, without any bbcode language specific
handling in the parser itself required.

Token extraction
----------------

For the token extraction the reqular expressions in the $tokens property are
used. The $tokens array has to be build like, and can be created in the
constrctor:

<code>
 array(
     array(
         'class' => Class name of token,
         'match' => Regular expression to match,
     ),
     ...
 )
</code>

The array is evaluated in the given order, until one of the regular
expressions match. The regular expression should have at least one named
match (?P<value> ... ), with the name "value", which will be assigned to the
token, created form the given class name, as its content. The matched
contents will be removed from the beginning of the string.

Optionally a second named match, called "match", may be used inside the
regular expression. If so, only the contents inside this match will be
removed from the beginning of the string. This enables you to perform a
trivial lookahead inside the tokenizer.

If no expression matches, an exception will be thrown.

* Full name: `\ezcDocumentBBCodeTokenizer`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`WHITESPACE_CHARS`|public| |&#039;[\\x20\\t]&#039;|
|`TEXT_END_CHARS`|public| |&#039;\\[\\]\\r\\n&#039;|
|`SPECIAL_CHARS`|public| |&#039;\\[\\]&#039;|

## Properties


### tokens

List with tokens and a regular expression matching the given token.

```php
protected array $tokens
```

The tokens are matched in the given order.




***

## Methods


### __construct

Construct tokenizer

```php
public __construct(): void
```

Create token array with regular repression matching the respective
token.









***

### tokenizeFile

Tokenize the given file

```php
public tokenizeFile(string $file): array
```

The method tries to tokenize the passed files and returns an array of
ezcDocumentBBCodeToken struct on succes, or throws a
ezcDocumentTokenizerException, if something could not be matched by any
token.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |




***

### convertTabs

Convert tabs to spaces

```php
protected convertTabs(\ezcDocumentBBCodeToken $token): void
```

Convert all tabs to spaces, as defined in:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#whitespace






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentBBCodeToken** |  |




***

### tokenizeString

Tokenize the given string

```php
public tokenizeString(string $string): array
```

The method tries to tokenize the passed strings and returns an array of
ezcDocumentBBCodeToken struct on succes, or throws a
ezcDocumentTokenizerException, if something could not be matched by any
token.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
