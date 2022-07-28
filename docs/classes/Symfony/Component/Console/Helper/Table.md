***

# Table

Provides helpers to display a table.



* Full name: `\Symfony\Component\Console\Helper\Table`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SEPARATOR_TOP`|private| |0|
|`SEPARATOR_TOP_BOTTOM`|private| |1|
|`SEPARATOR_MID`|private| |2|
|`SEPARATOR_BOTTOM`|private| |3|
|`BORDER_OUTSIDE`|private| |0|
|`BORDER_INSIDE`|private| |1|

## Properties


### headerTitle



```php
private $headerTitle
```






***

### footerTitle



```php
private $footerTitle
```






***

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

### horizontal



```php
private $horizontal
```






***

### effectiveColumnWidths

Column widths cache.

```php
private $effectiveColumnWidths
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

### columnWidths

User set column widths.

```php
private array $columnWidths
```






***

### columnMaxWidths



```php
private $columnMaxWidths
```






***

### styles



```php
private static array&lt;string,\Symfony\Component\Console\Helper\TableStyle&gt;|null $styles
```



* This property is **static**.


***

### rendered



```php
private $rendered
```






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
| `$name` | **string** |  |
| `$style` | **\Symfony\Component\Console\Helper\TableStyle** |  |




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
| `$name` | **string** |  |




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
| `$columnIndex` | **int** |  |
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
| `$columnIndex` | **int** |  |




***

### setColumnWidth

Sets the minimum width of a column.

```php
public setColumnWidth(int $columnIndex, int $width): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$columnIndex` | **int** |  |
| `$width` | **int** |  |




***

### setColumnWidths

Sets the minimum width of all columns.

```php
public setColumnWidths(array $widths): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$widths` | **array** |  |




***

### setColumnMaxWidth

Sets the maximum width of a column.

```php
public setColumnMaxWidth(int $columnIndex, int $width): $this
```

Any cell within this column which contents exceeds the specified width will be wrapped into multiple lines, while
formatted strings are preserved.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$columnIndex` | **int** |  |
| `$width` | **int** |  |




***

### setHeaders



```php
public setHeaders(array $headers): $this
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
public addRows(array $rows): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rows` | **array** |  |




***

### addRow



```php
public addRow(mixed $row): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$row` | **mixed** |  |




***

### appendRow

Adds a row to the table, and re-renders the table.

```php
public appendRow(mixed $row): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$row` | **mixed** |  |




***

### setRow



```php
public setRow(mixed $column, array $row): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$column` | **mixed** |  |
| `$row` | **array** |  |




***

### setHeaderTitle



```php
public setHeaderTitle(?string $title): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **?string** |  |




***

### setFooterTitle



```php
public setFooterTitle(?string $title): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **?string** |  |




***

### setHorizontal



```php
public setHorizontal(bool $horizontal = true): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$horizontal` | **bool** |  |




***

### render

Renders table to output.

```php
public render(): mixed
```

Example:

+---------------+-----------------------+------------------+
| ISBN          | Title                 | Author           |
+---------------+-----------------------+------------------+
| 99921-58-10-7 | Divine Comedy         | Dante Alighieri  |
| 9971-5-0210-0 | A Tale of Two Cities  | Charles Dickens  |
| 960-425-059-0 | The Lord of the Rings | J. R. R. Tolkien |
+---------------+-----------------------+------------------+









***

### renderRowSeparator

Renders horizontal header separator.

```php
private renderRowSeparator(int $type = self::SEPARATOR_MID, string $title = null, string $titleFormat = null): mixed
```

Example:

+-----+-----------+-------+






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** |  |
| `$title` | **string** |  |
| `$titleFormat` | **string** |  |




***

### renderColumnSeparator

Renders vertical column separator.

```php
private renderColumnSeparator(int $type = self::BORDER_OUTSIDE): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** |  |




***

### renderRow

Renders table row.

```php
private renderRow(array $row, string $cellFormat, string $firstCellFormat = null): mixed
```

Example:

| 9971-5-0210-0 | A Tale of Two Cities  | Charles Dickens  |






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$row` | **array** |  |
| `$cellFormat` | **string** |  |
| `$firstCellFormat` | **string** |  |




***

### renderCell

Renders table cell with padding.

```php
private renderCell(array $row, int $column, string $cellFormat): string
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
private calculateNumberOfColumns(array $rows): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rows` | **array** |  |




***

### buildTableRows



```php
private buildTableRows(array $rows): \Symfony\Component\Console\Helper\TableRows
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rows` | **array** |  |




***

### calculateRowCount



```php
private calculateRowCount(): int
```











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
private fillCells(iterable $row): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$row` | **iterable** |  |




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
private calculateColumnsWidth(iterable $groups): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$groups` | **iterable** |  |




***

### getColumnSeparatorWidth



```php
private getColumnSeparatorWidth(): int
```











***

### getCellWidth



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
private static initStyles(): array&lt;string,\Symfony\Component\Console\Helper\TableStyle&gt;
```



* This method is **static**.







***

### resolveStyle



```php
private resolveStyle(mixed $name): \Symfony\Component\Console\Helper\TableStyle
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***


***

