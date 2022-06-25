***

# Token

Represents a Token.

* Full name: `\Twig\Token`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`EOF_TYPE`|public| |-1|
|`TEXT_TYPE`|public| |0|
|`BLOCK_START_TYPE`|public| |1|
|`VAR_START_TYPE`|public| |2|
|`BLOCK_END_TYPE`|public| |3|
|`VAR_END_TYPE`|public| |4|
|`NAME_TYPE`|public| |5|
|`NUMBER_TYPE`|public| |6|
|`STRING_TYPE`|public| |7|
|`OPERATOR_TYPE`|public| |8|
|`PUNCTUATION_TYPE`|public| |9|
|`INTERPOLATION_START_TYPE`|public| |10|
|`INTERPOLATION_END_TYPE`|public| |11|
|`ARROW_TYPE`|public| |12|

## Properties

### value

```php
protected $value
```

***

### type

```php
protected $type
```

***

### lineno

```php
protected $lineno
```

***

## Methods

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
