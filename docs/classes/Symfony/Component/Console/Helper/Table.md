***

# Table

Provides helpers to display a table.

* Full name: `\Symfony\Component\Console\Helper\Table`

## Properties

### headers

Table headers.

```php
private $headers
```

***

### rows

Table rows.

```php
private $rows
```

***

### columnWidths

Column widths cache.

```php
private $columnWidths
```

***

### numberOfColumns

Number of columns cache.

```php
private int $numberOfColumns
```

***

### output

```php
private \Symfony\Component\Console\Output\OutputInterface $output
```

***

### style

```php
private \Symfony\Component\Console\Helper\TableStyle $style
```

***

### columnStyles

```php
private array $columnStyles
```

***

### styles

```php
private static $styles
```

* This property is **static**.

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Console\Output\OutputInterface $output): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

***

### setStyleDefinition

Sets a style definition.

```php
public static setStyleDefinition(string $name, \Symfony\Component\Console\Helper\TableStyle $style): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The style name |
| `$style` | **\Symfony\Component\Console\Helper\TableStyle** | A TableStyle instance |

***

### getStyleDefinition

Gets a style definition by name.

```php
public static getStyleDefinition(string $name): \Symfony\Component\Console\Helper\TableStyle
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The style name |

***

### setStyle

Sets table style.

```php
public setStyle(\Symfony\Component\Console\Helper\TableStyle|string $name): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **\Symfony\Component\Console\Helper\TableStyle&#124;string** | The style name or a TableStyle instance |

***

### getStyle

Gets the current table style.

```php
public getStyle(): \Symfony\Component\Console\Helper\TableStyle
```

***

### setColumnStyle

Sets table column style.

```php
public setColumnStyle(int $columnIndex, \Symfony\Component\Console\Helper\TableStyle|string $name): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$columnIndex` | **int** | Column index |
| `$name` | **\Symfony\Component\Console\Helper\TableStyle&#124;string** | The style name or a TableStyle instance |

***

### getColumnStyle

Gets the current style for a column.

```php
public getColumnStyle(int $columnIndex): \Symfony\Component\Console\Helper\TableStyle
```

If style was not set, it returns the global table style.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$columnIndex` | **int** | Column index |

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
public addRow(mixed $row): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$row` | **mixed** |  |

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

### render

Renders table to output.

```php
public render(): mixed
```

Example:

+---------------+-----------------------+------------------+ | ISBN | Title | Author |
+---------------+-----------------------+------------------+ | 99921-58-10-7 | Divine Comedy | Dante Alighieri | |
9971-5-0210-0 | A Tale of Two Cities | Charles Dickens | | 960-425-059-0 | The Lord of the Rings | J. R. R. Tolkien |
+---------------+-----------------------+------------------+









***

### renderRowSeparator

Renders horizontal header separator.

```php
private renderRowSeparator(): mixed
```

Example:

+-----+-----------+-------+









***

### renderColumnSeparator

Renders vertical column separator.

```php
private renderColumnSeparator(): mixed
```

***

### renderRow

Renders table row.

```php
private renderRow(array $row, string $cellFormat): mixed
```

Example:

| 9971-5-0210-0 | A Tale of Two Cities | Charles Dickens |

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$row` | **array** |  |
| `$cellFormat` | **string** |  |

***

### renderCell

Renders table cell with padding.

```php
private renderCell(array $row, int $column, string $cellFormat): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$row` | **array** |  |
| `$column` | **int** |  |
| `$cellFormat` | **string** |  |

***

### calculateNumberOfColumns

Calculate number of columns for this table.

```php
private calculateNumberOfColumns(): mixed
```

***

### buildTableRows

```php
private buildTableRows(mixed $rows): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rows` | **mixed** |  |

***

### fillNextRows

fill rows that contains rowspan > 1.

```php
private fillNextRows(array $rows, int $line): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rows` | **array** |  |
| `$line` | **int** |  |

***

### fillCells

fill cells for a row that contains colspan > 1.

```php
private fillCells(mixed $row): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$row` | **mixed** |  |

***

### copyRow

```php
private copyRow(array $rows, int $line): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rows` | **array** |  |
| `$line` | **int** |  |

***

### getNumberOfColumns

Gets number of columns by row.

```php
private getNumberOfColumns(array $row): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$row` | **array** |  |

***

### getRowColumns

Gets list of columns for the given row.

```php
private getRowColumns(array $row): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$row` | **array** |  |

***

### calculateColumnsWidth

Calculates columns widths.

```php
private calculateColumnsWidth(array $rows): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rows` | **array** |  |

***

### getColumnSeparatorWidth

Gets column width.

```php
private getColumnSeparatorWidth(): int
```

***

### getCellWidth

Gets cell width.

```php
private getCellWidth(array $row, int $column): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$row` | **array** |  |
| `$column` | **int** |  |

***

### cleanup

Called after rendering to cleanup cache data.

```php
private cleanup(): mixed
```

***

### initStyles

```php
private static initStyles(): mixed
```

* This method is **static**.

***

### resolveStyle

```php
private resolveStyle(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

yxorP::get('REQUEST')
