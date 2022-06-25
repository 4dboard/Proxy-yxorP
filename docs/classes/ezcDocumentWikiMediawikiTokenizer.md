***

# ezcDocumentWikiMediawikiTokenizer

Tokenizer for Mediawiki wiki documents.

Mediawiki is probably the most popular wiki, and the driving force behing Wikipedia. The markup has a lot extension, but
the basics are defined at:

http://www.mediawiki.org/wiki/Markup_spec

* Full name: `\ezcDocumentWikiMediawikiTokenizer`
* Parent class: [`\ezcDocumentWikiTokenizer`](./ezcDocumentWikiTokenizer.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`WHITESPACE_CHARS`|public| |&#039;[\\x20\\t]&#039;|
|`NEW_LINE`|public| |&#039;(?:\\r\\n|\\r|\\n)&#039;|
|`TEXT_END_CHARS`|public| |&#039;/*^,\&#039;_&lt;\\\\\\[\\]{}()|=\\r\\n\\t\\x20&#039;|
|`SPECIAL_CHARS`|public| |&#039;/*^,\&#039;_&lt;&gt;\\\\\\[\\]{}()|=&#039;|

## Methods

### __construct

Construct tokenizer

```php
public __construct(): void
```

Create token array with regular repression matching the respective token.









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

***

### filterTokens

Filter tokens

```php
protected filterTokens(array $tokens): array
```

Method to filter tokens, after the input string ahs been tokenized. The filter should extract additional information
from tokens, which are not generally available yet, like the depth of a title depending on the title markup.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |

***

## Inherited methods

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
