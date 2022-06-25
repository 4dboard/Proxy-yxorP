***

# Error

* Full name: `\PhpParser\Error`
* Parent class: [`RuntimeException`](../RuntimeException.md)

## Properties

### rawMessage

```php
protected $rawMessage
```

***

### attributes

```php
protected $attributes
```

***

## Methods

### __construct

Creates an Exception signifying a parse error.

```php
public __construct(string $message, array|int $attributes = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | Error message |
| `$attributes` | **
array&#124;int** | Attributes of node/token where error occurred<br />(or start line of error -- deprecated) |

***

### getRawMessage

Gets the error message

```php
public getRawMessage(): string
```

**Return Value:**

Error message



***

### getStartLine

Gets the line the error starts in.

```php
public getStartLine(): int
```

**Return Value:**

Error start line



***

### getEndLine

Gets the line the error ends in.

```php
public getEndLine(): int
```

**Return Value:**

Error end line



***

### getAttributes

Gets the attributes of the node/token the error occurred at.

```php
public getAttributes(): array
```

***

### setRawMessage

Sets the line of the PHP file the error occurred in.

```php
public setRawMessage(string $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | Error message |

***

### setStartLine

Sets the line the error starts in.

```php
public setStartLine(int $line): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **int** | Error start line |

***

### hasColumnInfo

Returns whether the error has start and end column information.

```php
public hasColumnInfo(): bool
```

For column information enable the startFilePos and endFilePos in the lexer options.









***

### getStartColumn

Gets the start column (1-based) into the line where the error started.

```php
public getStartColumn(string $code): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **string** | Source code of the file |

***

### getEndColumn

Gets the end column (1-based) into the line where the error ended.

```php
public getEndColumn(string $code): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **string** | Source code of the file |

***

### toColumn

```php
private toColumn(mixed $code, mixed $pos): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$pos` | **mixed** |  |

***

### updateMessage

Updates the exception message after a change to rawMessage or rawLine.

```php
protected updateMessage(): mixed
```

***

### getRawLine

```php
public getRawLine(): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### setRawLine

```php
public setRawLine(mixed $line): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |

yxorP::get('REQUEST')
