***

# Twig_Token

Represents a Token.

* Full name: `\Twig_Token`
* Parent class: [`\Twig\Token`](./Twig/Token.md)

## Inherited methods

### __construct

```php
public __construct(int $type, string $value, int $lineno): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** | The type of the token |
| `$value` | **string** | The token value |
| `$lineno` | **int** | The line position in the source |

***

### __toString

```php
public __toString(): mixed
```

***

### test

Tests the current token for a type and/or a value.

```php
public test(array|string|int $type, array|string|null $values = null): bool
```

Parameters may be:

* just type
* type and value (or array of possible values)
* just value (or array of possible values) (NAME_TYPE is used as type)

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **array&#124;string&#124;int** | The type to test |
| `$values` | **array&#124;string&#124;null** | The token value |

***

### getLine

```php
public getLine(): int
```

***

### getType

```php
public getType(): int
```

***

### getValue

```php
public getValue(): string
```

***

### typeToString

Returns the constant representation (internal) of a given type.

```php
public static typeToString(int $type, bool $short = false): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** | The type as an integer |
| `$short` | **bool** | Whether to return a short representation or not |

**Return Value:**

The string representation



***

### typeToEnglish

Returns the English representation of a given type.

```php
public static typeToEnglish(int $type): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** | The type as an integer |

**Return Value:**

The string representation yxorP::get('REQUEST')
