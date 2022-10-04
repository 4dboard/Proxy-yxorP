***

# MaskUtil

Mask utility.

* Full name: `\BaconQrCode\Encoder\MaskUtil`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`N1`|public| |3|
|`N2`|public| |3|
|`N3`|public| |40|
|`N4`|public| |10|

## Methods

### __construct

```php
private __construct(): mixed
```

***

### applyMaskPenaltyRule1

Applies mask penalty rule 1 and returns the penalty.

```php
public static applyMaskPenaltyRule1(\BaconQrCode\Encoder\ByteMatrix $matrix): int
```

Finds repetitive cells with the same color and gives penalty to them.
Example: 00000 or 11111.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |

***

### applyMaskPenaltyRule2

Applies mask penalty rule 2 and returns the penalty.

```php
public static applyMaskPenaltyRule2(\BaconQrCode\Encoder\ByteMatrix $matrix): int
```

Finds 2x2 blocks with the same color and gives penalty to them. This is
actually equivalent to the spec's rule, which is to find MxN blocks and
give a penalty proportional to (M-1)x(N-1), because this is the number of
2x2 blocks inside such a block.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |

***

### applyMaskPenaltyRule3

Applies mask penalty rule 3 and returns the penalty.

```php
public static applyMaskPenaltyRule3(\BaconQrCode\Encoder\ByteMatrix $matrix): int
```

Finds consecutive cells of 00001011101 or 10111010000, and gives penalty
to them. If we find patterns like 000010111010000, we give penalties
twice (i.e. 40 * 2).

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |

***

### applyMaskPenaltyRule4

Applies mask penalty rule 4 and returns the penalty.

```php
public static applyMaskPenaltyRule4(\BaconQrCode\Encoder\ByteMatrix $matrix): int
```

Calculates the ratio of dark cells and gives penalty if the ratio is far
from 50%. It gives 10 penalty for 5% distance.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |

***

### getDataMaskBit

Returns the mask bit for "getMaskPattern" at "x" and "y".

```php
public static getDataMaskBit(int $maskPattern, int $x, int $y): bool
```

See 8.8 of JISX0510:2004 for mask pattern conditions.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maskPattern` | **int** |  |
| `$x` | **int** |  |
| `$y` | **int** |  |

***

### applyMaskPenaltyRule1Internal

Helper function for applyMaskPenaltyRule1.

```php
private static applyMaskPenaltyRule1Internal(\BaconQrCode\Encoder\ByteMatrix $matrix, bool $isHorizontal): int
```

We need this for doing this calculation in both vertical and horizontal
orders respectively.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |
| `$isHorizontal` | **bool** |  |

***


***

