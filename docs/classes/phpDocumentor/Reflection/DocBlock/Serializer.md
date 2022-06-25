***

# Serializer

Serializes a DocBlock instance.

* Full name: `\phpDocumentor\Reflection\DocBlock\Serializer`

**See Also:**

* http://phpdoc.org -

## Properties

### indentString

```php
protected string $indentString
```

***

### indent

```php
protected int $indent
```

***

### isFirstLineIndented

```php
protected bool $isFirstLineIndented
```

***

### lineLength

```php
protected int|null $lineLength
```

***

## Methods

### __construct

Create a Serializer instance.

```php
public __construct(int $indent, string $indentString = &#039; &#039;, bool $indentFirstLine = true, int|null $lineLength = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$indent` | **int** | The number of times the indent string is<br />repeated. |
| `$indentString` | **string** | The string to indent the comment with. |
| `$indentFirstLine` | **bool** | Whether to indent the first line. |
| `$lineLength` | **int&#124;null** | The max length of a line or NULL to<br />disable line wrapping. |

***

### setIndentationString

Sets the string to indent comments with.

```php
public setIndentationString(mixed $indentString): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$indentString` | **mixed** |  |

**Return Value:**

This serializer object.



***

### getIndentationString

Gets the string to indent comments with.

```php
public getIndentationString(): string
```

**Return Value:**

The indent string.



***

### setIndent

Sets the number of indents.

```php
public setIndent(int $indent): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$indent` | **int** | The number of times the indent string is repeated. |

**Return Value:**

This serializer object.



***

### getIndent

Gets the number of indents.

```php
public getIndent(): int
```

**Return Value:**

The number of times the indent string is repeated.



***

### setIsFirstLineIndented

Sets whether or not the first line should be indented.

```php
public setIsFirstLineIndented(bool $indentFirstLine): $this
```

Sets whether or not the first line (the one with the "/**") should be indented.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$indentFirstLine` | **bool** | The new value for this setting. |

**Return Value:**

This serializer object.



***

### isFirstLineIndented

Gets whether or not the first line should be indented.

```php
public isFirstLineIndented(): bool
```

**Return Value:**

Whether or not the first line should be indented.



***

### setLineLength

Sets the line length.

```php
public setLineLength(int|null $lineLength): $this
```

Sets the length of each line in the serialization. Content will be wrapped within this limit.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lineLength` | **int&#124;null** | The length of each line. NULL to disable line<br />wrapping altogether. |

**Return Value:**

This serializer object.



***

### getLineLength

Gets the line length.

```php
public getLineLength(): int|null
```

**Return Value:**

The length of each line or NULL if line wrapping is disabled.



***

### getDocComment

Generate a DocBlock comment.

```php
public getDocComment(\phpDocumentor\Reflection\DocBlock $docblock): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docblock` | **\phpDocumentor\Reflection\DocBlock** |  |

**Return Value:**

The serialized doc block. yxorP::get('REQUEST')
