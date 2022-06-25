***

# ezcDocumentWikiTokenizer

Tokenizer for wiki documents

The tokenizer used for all wiki documents should prepare a token array, which can be used by the wiki parser, without
any wiki language specific handling in the parser itself required. For this the tokenizing is performed in two steps:

1) Extract tokens from text
2) Filter tokens

Token extraction
----------------

For the token extraction the reqular expressions in the $tokens property are used. The $tokens array has to be build
like, and can be created in the constrctor:

<code>
 array(
     array(
         'class' => Class name of token,
         'match' => Regular expression to match,
     ),
     ...
 )
</code>

The array is evaluated in the given order, until one of the regular expressions match. The regular expression should
have at least one named match (?P<value> ... ), with the name "value", which will be assigned to the token, created form
the given class name, as its content. The matched contents will be removed from the beginning of the string.

Optionally a second named match, called "match", may be used inside the regular expression. If so, only the contents
inside this match will be removed from the beginning of the string. This enables you to perform a trivial lookahead
inside the tokenizer.

If no expression matches, an exception will be thrown.

Token filtering
---------------

After all tokens are extracted from the text, they may miss some values, which may be required by the parser, like the
level of title tokens. Those should be extracted and assigned during the filtering stage. For this the filterTokens()
method should be implemented, which may iterate over the token stream and assign the required values.

If the wiki markup language supports plugins you may also want to "parse"
the plugin contents to extract type, parameters and its text here.

* Full name: `\ezcDocumentWikiTokenizer`
* This class is an **Abstract class**

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

Create token array with regular repression matching the respective token.

* This method is **abstract**.

***

### tokenizeFile

Tokenize the given file

```php
public tokenizeFile(string $file): array
```

The method tries to tokenize the passed files and returns an array of ezcDocumentWikiToken struct on succes, or throws a
ezcDocumentTokenizerException, if something could not be matched by any token.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

***

### convertTabs

Convert tabs to spaces

```php
protected convertTabs(\ezcDocumentWikiToken $token): void
```

Convert all tabs to spaces, as defined in:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#whitespace

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentWikiToken** |  |

***

### filterTokens

Filter tokens

```php
protected filterTokens(array $tokens): array
```

Method to filter tokens, after the input string ahs been tokenized. The filter should extract additional information
from tokens, which are not generally available yet, like the depth of a title depending on the title markup.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |

***

### tokenizeString

Tokenize the given string

```php
public tokenizeString(string $string): array
```

The method tries to tokenize the passed strings and returns an array of ezcDocumentWikiToken struct on succes, or throws
a ezcDocumentTokenizerException, if something could not be matched by any token.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

yxorP::get('REQUEST')
