***

# ParseException

Exception class thrown when an error occurs during parsing.

* Full name: `\Symfony\Component\Yaml\Exception\ParseException`
* Parent class: [`\Symfony\Component\Yaml\Exception\RuntimeException`](./RuntimeException.md)

## Properties

### parsedFile

```php
private ?string $parsedFile
```

***

### parsedLine

```php
private int $parsedLine
```

***

### snippet

```php
private ?string $snippet
```

***

### rawMessage

```php
private string $rawMessage
```

***

## Methods

### __construct

```php
public __construct(string $message, int $parsedLine = -1, string|null $snippet = null, string|null $parsedFile = null, \Throwable $previous = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The error message |
| `$parsedLine` | **int** | The line where the error occurred |
| `$snippet` | **string&#124;null** | The snippet of code near the problem |
| `$parsedFile` | **string&#124;null** | The file name where the error occurred |
| `$previous` | **\Throwable** |  |

***

### getSnippet

Gets the snippet of code near the error.

```php
public getSnippet(): string
```

***

### setSnippet

Sets the snippet of code near the error.

```php
public setSnippet(string $snippet): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$snippet` | **string** |  |

***

### getParsedFile

Gets the filename where the error occurred.

```php
public getParsedFile(): string
```

This method returns null if a string is parsed.









***

### setParsedFile

Sets the filename where the error occurred.

```php
public setParsedFile(string $parsedFile): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parsedFile` | **string** |  |

***

### getParsedLine

Gets the line where the error occurred.

```php
public getParsedLine(): int
```

***

### setParsedLine

Sets the line where the error occurred.

```php
public setParsedLine(int $parsedLine): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parsedLine` | **int** |  |

***

### updateRepr

```php
private updateRepr(): mixed
```

***


***

