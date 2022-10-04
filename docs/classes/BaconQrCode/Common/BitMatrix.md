***

# BitMatrix

Bit matrix.

Represents a 2D matrix of bits. In function arguments below, and throughout
the common module, x is the column position, and y is the row position. The
ordering is always x, y. The origin is at the top-left.

* Full name: `\BaconQrCode\Common\BitMatrix`

## Properties

### width

Width of the bit matrix.

```php
private int $width
```

***

### height

Height of the bit matrix.

```php
private int $height
```

***

### rowSize

Size in bits of each individual row.

```php
private int $rowSize
```

***

### bits

Bits representation.

```php
private \SplFixedArray&lt;int&gt; $bits
```

***

## Methods

### __construct

```php
public __construct(int $width, int $height = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$width` | **int** |  |
| `$height` | **int** |  |

***

### get

Gets the requested bit, where true means black.

```php
public get(int $x, int $y): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** |  |
| `$y` | **int** |  |

***

### set

Sets the given bit to true.

```php
public set(int $x, int $y): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** |  |
| `$y` | **int** |  |

***

### flip

Flips the given bit.

```php
public flip(int $x, int $y): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** |  |
| `$y` | **int** |  |

***

### clear

Clears all bits (set to false).

```php
public clear(): void
```

***

### setRegion

Sets a square region of the bit matrix to true.

```php
public setRegion(int $left, int $top, int $width, int $height): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$left` | **int** |  |
| `$top` | **int** |  |
| `$width` | **int** |  |
| `$height` | **int** |  |

***

### getRow

A fast method to retrieve one row of data from the matrix as a BitArray.

```php
public getRow(int $y, \BaconQrCode\Common\BitArray $row = null): \BaconQrCode\Common\BitArray
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$y` | **int** |  |
| `$row` | **\BaconQrCode\Common\BitArray** |  |

***

### setRow

Sets a row of data from a BitArray.

```php
public setRow(int $y, \BaconQrCode\Common\BitArray $row): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$y` | **int** |  |
| `$row` | **\BaconQrCode\Common\BitArray** |  |

***

### getEnclosingRectangle

This is useful in detecting the enclosing rectangle of a 'pure' barcode.

```php
public getEnclosingRectangle(): int[]|null
```

***

### getTopLeftOnBit

Gets the most top left set bit.

```php
public getTopLeftOnBit(): int[]|null
```

This is useful in detecting a corner of a 'pure' barcode.









***

### getBottomRightOnBit

Gets the most bottom right set bit.

```php
public getBottomRightOnBit(): int[]|null
```

This is useful in detecting a corner of a 'pure' barcode.









***

### getWidth

Gets the width of the matrix,

```php
public getWidth(): int
```

***

### getHeight

Gets the height of the matrix.

```php
public getHeight(): int
```

***


***

