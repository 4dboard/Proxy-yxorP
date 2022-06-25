***

# ezcDocumentPcssParser

Parser for simplified CSS rules for PDF layout specifications

The EBNF for the parsed grammar is the following. The EBNF does not specify the allowed comments, which are common
C-style comments:

<code>
 File        ::= Directive+
 Directive   ::= Address | Definition '{' Formatting* '}'
 Formatting  ::= Name ':' Value ';'
 Name        ::= [A-Za-z-]+
 Value       ::= QuotedValue | RawValue
 QuotedValue ::= '"' [^"]+ '"'
 RawValue    ::= [^;]+

Definition  ::= '@' [A-Za-z_-]+

Address     ::= Element ( Rule )*
Rule        ::= '>'? Element Element     ::= ElementName ( '.' ClassName | '#' ElementId )

ClassName   ::= [A-Za-z_-]+ ElementName ::= XMLName¹ | '*'
ElementId   ::= XMLName¹

¹ XMLName references to http://www.w3.org/TR/REC-xml/#NT-Name
</code>

* Full name: `\ezcDocumentPcssParser`
* Parent class: [`\ezcDocumentParser`](./ezcDocumentParser.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`XML_NAME_STARTCHAR`|public| |&#039;(?:[:A-Za-z_])&#039;|
|`XML_NAME_CHAR`|public| |&#039;(?:[-0-9])&#039;|
|`T_WHITESPACE`|public| |1|
|`T_COMMENT`|public| |2|
|`T_ADDRESS`|public| |10|
|`T_DESC_ADDRESS`|public| |11|
|`T_ADDRESS_ID`|public| |12|
|`T_ADDRESS_CLASS`|public| |13|
|`T_DEFINITION`|public| |14|
|`T_START`|public| |20|
|`T_END`|public| |21|
|`T_FORMATTING`|public| |30|
|`T_VALUE`|public| |31|
|`T_EOF`|public| |40|

## Properties

### file

Currently parsed file, stored for additional error context

```php
protected string $file
```

***

### expressions

Expressions for tokenizing the strings.

```php
protected array $expressions
```

***

### ignoreTokens

Tokens irrelevant to the parser, which will bee thrown away immediately

```php
protected array $ignoreTokens
```

***

### tokenNames

Names for the known tokens, for nicer error messages

```php
protected array $tokenNames
```

***

## Methods

### __construct

Construct parser

```php
public __construct(): void
```

Creates the regualr expressions for tokenizing the PCSS file.









***

### parseFile

Parse the given file

```php
public parseFile(string $file): void
```

Try to parse the given PCSS file and return the AST containing the file contents.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

***

### parseString

Parse the given file

```php
public parseString(string $string): void
```

Try to parse the given PCSS string and return the AST containing the string contents.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### tokenize

Tokenize the input string

```php
protected tokenize(string $string): array
```

Returns an array of arrays representing the tokens.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### read

Read expected from token array

```php
private read(array $types, array& $tokens): array
```

Try to read the given token from the token array. If another token is found, a parse error is issued. If the token is
found, the token is removed fromt he token array and returned.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **array** |  |
| `$tokens` | **array** |  |

***

### parse

Parse given token array

```php
protected parse(array $tokens): array
```

Parse the given token array, and create an array of directive objects from it, if the token array specifies a valid PCSS
file.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |

***

## Inherited methods

### __construct

Construct new document

```php
public __construct(\ezcDocumentParserOptions $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentParserOptions** |  |

***

### triggerError

Trigger parser error

```php
public triggerError(int $level, string $message, string $file = null, int $line = null, int $position = null): void
```

Emit a parser error and handle it dependiing on the current error reporting settings.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |
| `$message` | **string** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$position` | **int** |  |

***

### getErrors

Return list of errors occured during visiting the document.

```php
public getErrors(): array
```

May be an empty array, if on errors occured, or a list of ezcDocumentVisitException objects.

yxorP::get('REQUEST')
