***

# ezcDocumentRstToken

Struct for RST document document tokens

* Full name: `\ezcDocumentRstToken`
* Parent class: [`\ezcBaseStruct`](./ezcBaseStruct.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`WHITESPACE`|public| |1|
|`NEWLINE`|public| |2|
|`BACKSLASH`|public| |3|
|`SPECIAL_CHARS`|public| |4|
|`TEXT_LINE`|public| |5|
|`EOF`|public| |6|

## Properties

### type

Token type

```php
public int $type
```

***

### content

Token content

```php
public mixed $content
```

***

### line

Line of the token in the source file

```php
public int $line
```

***

### position

Position of the token in its line.

```php
public int $position
```

***

### escaped

For text nodes we need an additional identifier, if this text node has been escaped, and though is intentionally freed
from any potential special meaning.

```php
public bool $escaped
```

***

## Methods

### getTokenName

Get token name from type

```php
public static getTokenName(int $type): string
```

Return a user readable name from the numeric token type.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** |  |

yxorP::get('REQUEST')
