***

# TableHelper

Provides helpers to display table output.

* Full name: `\Symfony\Component\Console\Helper\TableHelper`
* Parent class: [`\Symfony\Component\Console\Helper\Helper`](./Helper.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`LAYOUT_DEFAULT`|public| |0|
|`LAYOUT_BORDERLESS`|public| |1|
|`LAYOUT_COMPACT`|public| |2|

## Properties

### table

```php
private $table
```

***

## Methods

### __construct

```php
public __construct(mixed $triggerDeprecationError = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$triggerDeprecationError` | **mixed** |  |

***

### setLayout

Sets table layout type.

```php
public setLayout(int $layout): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$layout` | **int** | self::LAYOUT_* |

***

### setHeaders

```php
public setHeaders(array $headers): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** |  |

***

### setRows

```php
public setRows(array $rows): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rows` | **array** |  |

***

### addRows

```php
public addRows(array $rows): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rows` | **array** |  |

***

### addRow

```php
public addRow(array $row): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$row` | **array** |  |

***

### setRow

```php
public setRow(mixed $column, array $row): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$column` | **mixed** |  |
| `$row` | **array** |  |

***

### setPaddingChar

Sets padding character, used for cell padding.

```php
public setPaddingChar(string $paddingChar): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paddingChar` | **string** |  |

***

### setHorizontalBorderChar

Sets horizontal border character.

```php
public setHorizontalBorderChar(string $horizontalBorderChar): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$horizontalBorderChar` | **string** |  |

***

### setVerticalBorderChar

Sets vertical border character.

```php
public setVerticalBorderChar(string $verticalBorderChar): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$verticalBorderChar` | **string** |  |

***

### setCrossingChar

Sets crossing character.

```php
public setCrossingChar(string $crossingChar): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$crossingChar` | **string** |  |

***

### setCellHeaderFormat

Sets header cell format.

```php
public setCellHeaderFormat(string $cellHeaderFormat): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cellHeaderFormat` | **string** |  |

***

### setCellRowFormat

Sets row cell format.

```php
public setCellRowFormat(string $cellRowFormat): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cellRowFormat` | **string** |  |

***

### setCellRowContentFormat

Sets row cell content format.

```php
public setCellRowContentFormat(string $cellRowContentFormat): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cellRowContentFormat` | **string** |  |

***

### setBorderFormat

Sets table border format.

```php
public setBorderFormat(string $borderFormat): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$borderFormat` | **string** |  |

***

### setPadType

Sets cell padding type.

```php
public setPadType(int $padType): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$padType` | **int** | STR_PAD_* |

***

### render

Renders table to output.

```php
public render(\Symfony\Component\Console\Output\OutputInterface $output): mixed
```

Example:
+---------------+-----------------------+------------------+ | ISBN | Title | Author |
+---------------+-----------------------+------------------+ | 99921-58-10-7 | Divine Comedy | Dante Alighieri | |
9971-5-0210-0 | A Tale of Two Cities | Charles Dickens | | 960-425-059-0 | The Lord of the Rings | J. R. R. Tolkien |
+---------------+-----------------------+------------------+

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

***

### getName

{@inheritdoc}

```php
public getName(): mixed
```

***

## Inherited methods

### setHelperSet

Sets the helper set associated with this helper.

```php
public setHelperSet(\Symfony\Component\Console\Helper\HelperSet $helperSet = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helperSet` | **\Symfony\Component\Console\Helper\HelperSet** |  |

***

### getHelperSet

Gets the helper set associated with this helper.

```php
public getHelperSet(): \Symfony\Component\Console\Helper\HelperSet
```

**Return Value:**

A HelperSet instance



***

### strlen

Returns the length of a string, using mb_strwidth if it is available.

```php
public static strlen(string $string): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to check its length |

**Return Value:**

The length of the string



***

### formatTime

```php
public static formatTime(mixed $secs): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secs` | **mixed** |  |

***

### formatMemory

```php
public static formatMemory(mixed $memory): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$memory` | **mixed** |  |

***

### strlenWithoutDecoration

```php
public static strlenWithoutDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, mixed $string): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **mixed** |  |

***

### removeDecoration

```php
public static removeDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, mixed $string): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **mixed** |  |

yxorP::get('REQUEST')
