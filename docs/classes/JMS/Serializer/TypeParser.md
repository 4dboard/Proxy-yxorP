***

# TypeParser

Parses a serializer type.

* Full name: `\JMS\Serializer\TypeParser`
* Parent class: [`\JMS\Parser\AbstractParser`](../Parser/AbstractParser.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`T_NAME`|public| |1|
|`T_STRING`|public| |2|
|`T_OPEN_BRACKET`|public| |3|
|`T_CLOSE_BRACKET`|public| |4|
|`T_COMMA`|public| |5|
|`T_NONE`|public| |6|

## Methods

### __construct

```php
public __construct(): mixed
```

***

### parseInternal

```php
protected parseInternal(): array
```

**Return Value:**

of the format ["name" => string, "params" => array]



***

## Inherited methods

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
