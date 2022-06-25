***

# AbstractParser

Base Parser which provides some useful parsing methods intended for sub-classing.

* Full name: `\JMS\Parser\AbstractParser`
* This class is an **Abstract class**

## Properties

### lexer

```php
protected $lexer
```

***

### context

```php
protected $context
```

***

## Methods

### __construct

```php
public __construct(\JMS\Parser\AbstractLexer $lexer): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lexer` | **\JMS\Parser\AbstractLexer** |  |

***

### parse

Parses the given input.

```php
public parse(string $str, string $context = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |
| `$context` | **string** | parsing context (allows to produce better error messages) |

***

### parseInternal

```php
protected parseInternal(): mixed
```

* This method is **abstract**.

***

### match

Matches a token, and returns its value.

```php
protected match(int $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** |  |

**Return Value:**

the value of the matched token



***

### matchAny

Matches any of the passed tokens, and returns the matched token's value.

```php
protected matchAny(int[] $types): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **int[]** |  |

***

### syntaxError

Raises a syntax error exception.

```php
protected syntaxError(string $expectedDesc, array $actualToken = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedDesc` | **string** | A human understandable explanation what was expected |
| `$actualToken` | **array** | The token that was found. If not given, next token will be assumed. |

yxorP::get('REQUEST')
