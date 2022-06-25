***

# ezcDocumentWikiConfluenceTokenizer

Tokenizer for Confluence wiki documents.

The Confluence wiki is a quite popular wiki and part of the Atlassian
software stack. It is chosen, because it uses an entirely different markup
in some places, compared to the other wiki markup languages. The markup is
documented at:

http://confluence.atlassian.com/renderer/notationhelp.action?section=all

For the basic workings of the tokenizer see the class level documentation in
the ezcDocumentWikiTokenizer class.

* Full name: `\ezcDocumentWikiConfluenceTokenizer`
* Parent class: [`\ezcDocumentWikiTokenizer`](./ezcDocumentWikiTokenizer.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`WHITESPACE_CHARS`|public| |&#039;[\\x20\\t]&#039;|
|`TEXT_END_CHARS`|public| |&#039;/*^,#_~?+!\\\\\\[\\]{}|=\\r\\n\\t\\x20-&#039;|
|`SPECIAL_CHARS`|public| |&#039;/*^,#_~?+!\\\\\\[\\]{}|=-&#039;|

## Properties


### imageAttributeMapping

Mapping of confluence image attribute names to image start token
properties.

```php
protected array $imageAttributeMapping
```






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

### parsePluginContents

Parse plugin contents

```php
protected parsePluginContents(\ezcDocumentWikiPluginToken $plugin): void
```

Plugins are totally different in each wiki component and its contents
should not be passed through the normal wiki parser. So we fetch its
contents completely and let each tokinzer extract names and parameters
from the complete token itself.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plugin` | **\ezcDocumentWikiPluginToken** |  |




***

### parseImageDescriptor

Parse confluence image descriptors

```php
protected parseImageDescriptor(\ezcDocumentWikiImageStartToken $token, mixed $descriptor): void
```

Parse confluence image descriptors which are completely different from
other wiki languages, so that they cannot be handled by the default
parser.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentWikiImageStartToken** |  |
| `$descriptor` | **mixed** |  |




***

### filterTokens

Filter tokens

```php
protected filterTokens(array $tokens): array
```

Method to filter tokens, after the input string ahs been tokenized. The
filter should extract additional information from tokens, which are not
generally available yet, like the depth of a title depending on the
title markup.






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

Create token array with regular repression matching the respective
token.


* This method is **abstract**.






***

### tokenizeFile

Tokenize the given file

```php
public tokenizeFile(string $file): array
```

The method tries to tokenize the passed files and returns an array of
ezcDocumentWikiToken struct on succes, or throws a
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

Method to filter tokens, after the input string ahs been tokenized. The
filter should extract additional information from tokens, which are not
generally available yet, like the depth of a title depending on the
title markup.


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

The method tries to tokenize the passed strings and returns an array of
ezcDocumentWikiToken struct on succes, or throws a
ezcDocumentTokenizerException, if something could not be matched by any
token.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
