***

# TableStyle

Defines the styles for a Table.

* Full name: `\Symfony\Component\Console\Helper\TableStyle`

## Properties

### paddingChar

```php
private $paddingChar
```

***

### horizontalOutsideBorderChar

```php
private $horizontalOutsideBorderChar
```

***

### horizontalInsideBorderChar

```php
private $horizontalInsideBorderChar
```

***

### verticalOutsideBorderChar

```php
private $verticalOutsideBorderChar
```

***

### verticalInsideBorderChar

```php
private $verticalInsideBorderChar
```

***

### crossingChar

```php
private $crossingChar
```

***

### crossingTopRightChar

```php
private $crossingTopRightChar
```

***

### crossingTopMidChar

```php
private $crossingTopMidChar
```

***

### crossingTopLeftChar

```php
private $crossingTopLeftChar
```

***

### crossingMidRightChar

```php
private $crossingMidRightChar
```

***

### crossingBottomRightChar

```php
private $crossingBottomRightChar
```

***

### crossingBottomMidChar

```php
private $crossingBottomMidChar
```

***

### crossingBottomLeftChar

```php
private $crossingBottomLeftChar
```

***

### crossingMidLeftChar

```php
private $crossingMidLeftChar
```

***

### crossingTopLeftBottomChar

```php
private $crossingTopLeftBottomChar
```

***

### crossingTopMidBottomChar

```php
private $crossingTopMidBottomChar
```

***

### crossingTopRightBottomChar

```php
private $crossingTopRightBottomChar
```

***

### headerTitleFormat

```php
private $headerTitleFormat
```

***

### footerTitleFormat

```php
private $footerTitleFormat
```

***

### cellHeaderFormat

```php
private $cellHeaderFormat
```

***

### cellRowFormat

```php
private $cellRowFormat
```

***

### cellRowContentFormat

```php
private $cellRowContentFormat
```

***

### borderFormat

```php
private $borderFormat
```

***

### padType

```php
private $padType
```

***

## Methods

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

### getPaddingChar

Gets padding character, used for cell padding.

```php
public getPaddingChar(): string
```

***

### setHorizontalBorderChars

Sets horizontal border characters.

```php
public setHorizontalBorderChars(string $outside, string $inside = null): $this
```

<code>
╔═══════════════╤══════════════════════════╤══════════════════╗
1 ISBN          2 Title                    │ Author           ║
╠═══════════════╪══════════════════════════╪══════════════════╣
║ 99921-58-10-7 │ Divine Comedy            │ Dante Alighieri  ║
║ 9971-5-0210-0 │ A Tale of Two Cities     │ Charles Dickens  ║
║ 960-425-059-0 │ The Lord of the Rings    │ J. R. R. Tolkien ║
║ 80-902734-1-6 │ And Then There Were None │ Agatha Christie  ║
╚═══════════════╧══════════════════════════╧══════════════════╝
</code>






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$outside` | **string** |  |
| `$inside` | **string** |  |

***

### setVerticalBorderChars

Sets vertical border characters.

```php
public setVerticalBorderChars(string $outside, string $inside = null): $this
```

<code>
╔═══════════════╤══════════════════════════╤══════════════════╗
║ ISBN          │ Title                    │ Author           ║
╠═══════1═══════╪══════════════════════════╪══════════════════╣
║ 99921-58-10-7 │ Divine Comedy            │ Dante Alighieri  ║
║ 9971-5-0210-0 │ A Tale of Two Cities     │ Charles Dickens  ║
╟───────2───────┼──────────────────────────┼──────────────────╢
║ 960-425-059-0 │ The Lord of the Rings    │ J. R. R. Tolkien ║
║ 80-902734-1-6 │ And Then There Were None │ Agatha Christie  ║
╚═══════════════╧══════════════════════════╧══════════════════╝
</code>






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$outside` | **string** |  |
| `$inside` | **string** |  |

***

### setCrossingChars

Sets crossing characters.

```php
public setCrossingChars(string $cross, string $topLeft, string $topMid, string $topRight, string $midRight, string $bottomRight, string $bottomMid, string $bottomLeft, string $midLeft, string|null $topLeftBottom = null, string|null $topMidBottom = null, string|null $topRightBottom = null): $this
```

Example:
<code>
1═══════════════2══════════════════════════2══════════════════3
║ ISBN │ Title │ Author ║
8'══════════════0'═════════════════════════0'═════════════════4'
║ 99921-58-10-7 │ Divine Comedy │ Dante Alighieri ║
║ 9971-5-0210-0 │ A Tale of Two Cities │ Charles Dickens ║
8───────────────0──────────────────────────0──────────────────4
║ 960-425-059-0 │ The Lord of the Rings │ J. R. R. Tolkien ║
║ 80-902734-1-6 │ And Then There Were None │ Agatha Christie ║
7═══════════════6══════════════════════════6══════════════════5
</code>

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cross` | **string** | Crossing char (see #0 of example) |
| `$topLeft` | **string** | Top left char (see #1 of example) |
| `$topMid` | **string** | Top mid char (see #2 of example) |
| `$topRight` | **string** | Top right char (see #3 of example) |
| `$midRight` | **string** | Mid right char (see #4 of example) |
| `$bottomRight` | **string** | Bottom right char (see #5 of example) |
| `$bottomMid` | **string** | Bottom mid char (see #6 of example) |
| `$bottomLeft` | **string** | Bottom left char (see #7 of example) |
| `$midLeft` | **string** | Mid left char (see #8 of example) |
| `$topLeftBottom` | **string&#124;null** | Top left bottom char (see #8&#039; of example), equals to $midLeft if null |
| `$topMidBottom` | **string&#124;null** | Top mid bottom char (see #0&#039; of example), equals to $cross if null |
| `$topRightBottom` | **string&#124;null** | Top right bottom char (see #4&#039; of example), equals to $midRight if null |

***

### setDefaultCrossingChar

Sets default crossing character used for each cross.

```php
public setDefaultCrossingChar(string $char): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$char` | **string** |  |

**See Also:**

*
    - {@link setCrossingChars()} for setting each crossing individually.

***

### getCrossingChar

Gets crossing character.

```php
public getCrossingChar(): string
```

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

### getCellHeaderFormat

Gets header cell format.

```php
public getCellHeaderFormat(): string
```

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

### getCellRowFormat

Gets row cell format.

```php
public getCellRowFormat(): string
```

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

### getCellRowContentFormat

Gets row cell content format.

```php
public getCellRowContentFormat(): string
```

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

### getBorderFormat

Gets table border format.

```php
public getBorderFormat(): string
```

***

### setPadType

Sets cell padding type.

```php
public setPadType(int $padType): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$padType` | **int** |  |

***

### getPadType

Gets cell padding type.

```php
public getPadType(): int
```

***

### getHeaderTitleFormat

```php
public getHeaderTitleFormat(): string
```

***

### setHeaderTitleFormat

```php
public setHeaderTitleFormat(string $format): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** |  |

***

### getFooterTitleFormat

```php
public getFooterTitleFormat(): string
```

***

### setFooterTitleFormat

```php
public setFooterTitleFormat(string $format): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** |  |

***


***

