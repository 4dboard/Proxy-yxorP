***

# MatrixUtil

Matrix utility.



* Full name: `\BaconQrCode\Encoder\MatrixUtil`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`POSITION_DETECTION_PATTERN`|private| |[[1, 1, 1, 1, 1, 1, 1], [1, 0, 0, 0, 0, 0, 1], [1, 0, 1, 1, 1, 0, 1], [1, 0, 1, 1, 1, 0, 1], [1, 0, 1, 1, 1, 0, 1], [1, 0, 0, 0, 0, 0, 1], [1, 1, 1, 1, 1, 1, 1]]|
|`POSITION_ADJUSTMENT_PATTERN`|private| |[[1, 1, 1, 1, 1], [1, 0, 0, 0, 1], [1, 0, 1, 0, 1], [1, 0, 0, 0, 1], [1, 1, 1, 1, 1]]|
|`POSITION_ADJUSTMENT_PATTERN_COORDINATE_TABLE`|private| |[
    [null, null, null, null, null, null, null],
    // Version 1
    [6, 18, null, null, null, null, null],
    // Version 2
    [6, 22, null, null, null, null, null],
    // Version 3
    [6, 26, null, null, null, null, null],
    // Version 4
    [6, 30, null, null, null, null, null],
    // Version 5
    [6, 34, null, null, null, null, null],
    // Version 6
    [6, 22, 38, null, null, null, null],
    // Version 7
    [6, 24, 42, null, null, null, null],
    // Version 8
    [6, 26, 46, null, null, null, null],
    // Version 9
    [6, 28, 50, null, null, null, null],
    // Version 10
    [6, 30, 54, null, null, null, null],
    // Version 11
    [6, 32, 58, null, null, null, null],
    // Version 12
    [6, 34, 62, null, null, null, null],
    // Version 13
    [6, 26, 46, 66, null, null, null],
    // Version 14
    [6, 26, 48, 70, null, null, null],
    // Version 15
    [6, 26, 50, 74, null, null, null],
    // Version 16
    [6, 30, 54, 78, null, null, null],
    // Version 17
    [6, 30, 56, 82, null, null, null],
    // Version 18
    [6, 30, 58, 86, null, null, null],
    // Version 19
    [6, 34, 62, 90, null, null, null],
    // Version 20
    [6, 28, 50, 72, 94, null, null],
    // Version 21
    [6, 26, 50, 74, 98, null, null],
    // Version 22
    [6, 30, 54, 78, 102, null, null],
    // Version 23
    [6, 28, 54, 80, 106, null, null],
    // Version 24
    [6, 32, 58, 84, 110, null, null],
    // Version 25
    [6, 30, 58, 86, 114, null, null],
    // Version 26
    [6, 34, 62, 90, 118, null, null],
    // Version 27
    [6, 26, 50, 74, 98, 122, null],
    // Version 28
    [6, 30, 54, 78, 102, 126, null],
    // Version 29
    [6, 26, 52, 78, 104, 130, null],
    // Version 30
    [6, 30, 56, 82, 108, 134, null],
    // Version 31
    [6, 34, 60, 86, 112, 138, null],
    // Version 32
    [6, 30, 58, 86, 114, 142, null],
    // Version 33
    [6, 34, 62, 90, 118, 146, null],
    // Version 34
    [6, 30, 54, 78, 102, 126, 150],
    // Version 35
    [6, 24, 50, 76, 102, 128, 154],
    // Version 36
    [6, 28, 54, 80, 106, 132, 158],
    // Version 37
    [6, 32, 58, 84, 110, 136, 162],
    // Version 38
    [6, 26, 54, 82, 110, 138, 166],
    // Version 39
    [6, 30, 58, 86, 114, 142, 170],
]|
|`TYPE_INFO_COORDINATES`|private| |[[8, 0], [8, 1], [8, 2], [8, 3], [8, 4], [8, 5], [8, 7], [8, 8], [7, 8], [5, 8], [4, 8], [3, 8], [2, 8], [1, 8], [0, 8]]|
|`VERSION_INFO_POLY`|private| |0x1f25|
|`TYPE_INFO_POLY`|private| |0x537|
|`TYPE_INFO_MASK_PATTERN`|private| |0x5412|


## Methods


### clearMatrix

Clears a given matrix.

```php
public static clearMatrix(\BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### buildMatrix

Builds a complete matrix.

```php
public static buildMatrix(\BaconQrCode\Common\BitArray $dataBits, \BaconQrCode\Common\ErrorCorrectionLevel $level, \BaconQrCode\Common\Version $version, int $maskPattern, \BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dataBits` | **\BaconQrCode\Common\BitArray** |  |
| `$level` | **\BaconQrCode\Common\ErrorCorrectionLevel** |  |
| `$version` | **\BaconQrCode\Common\Version** |  |
| `$maskPattern` | **int** |  |
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### removePositionDetectionPatterns

Removes the position detection patterns from a matrix.

```php
public static removePositionDetectionPatterns(\BaconQrCode\Encoder\ByteMatrix $matrix): void
```

This can be useful if you need to render those patterns separately.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### embedTypeInfo

Embeds type information into a matrix.

```php
private static embedTypeInfo(\BaconQrCode\Common\ErrorCorrectionLevel $level, int $maskPattern, \BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **\BaconQrCode\Common\ErrorCorrectionLevel** |  |
| `$maskPattern` | **int** |  |
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### makeTypeInfoBits

Generates type information bits and appends them to a bit array.

```php
private static makeTypeInfoBits(\BaconQrCode\Common\ErrorCorrectionLevel $level, int $maskPattern, \BaconQrCode\Common\BitArray $bits): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **\BaconQrCode\Common\ErrorCorrectionLevel** |  |
| `$maskPattern` | **int** |  |
| `$bits` | **\BaconQrCode\Common\BitArray** |  |




***

### maybeEmbedVersionInfo

Embeds version information if required.

```php
private static maybeEmbedVersionInfo(\BaconQrCode\Common\Version $version, \BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **\BaconQrCode\Common\Version** |  |
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### makeVersionInfoBits

Generates version information bits and appends them to a bit array.

```php
private static makeVersionInfoBits(\BaconQrCode\Common\Version $version, \BaconQrCode\Common\BitArray $bits): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **\BaconQrCode\Common\Version** |  |
| `$bits` | **\BaconQrCode\Common\BitArray** |  |




***

### calculateBchCode

Calculates the BCH code for a value and a polynomial.

```php
private static calculateBchCode(int $value, int $poly): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **int** |  |
| `$poly` | **int** |  |




***

### findMsbSet

Finds and MSB set.

```php
private static findMsbSet(int $value): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **int** |  |




***

### embedBasicPatterns

Embeds basic patterns into a matrix.

```php
private static embedBasicPatterns(\BaconQrCode\Common\Version $version, \BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **\BaconQrCode\Common\Version** |  |
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### embedPositionDetectionPatternsAndSeparators

Embeds position detection patterns and separators into a byte matrix.

```php
private static embedPositionDetectionPatternsAndSeparators(\BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### embedPositionDetectionPattern

Embeds a single position detection pattern into a byte matrix.

```php
private static embedPositionDetectionPattern(int $xStart, int $yStart, \BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xStart` | **int** |  |
| `$yStart` | **int** |  |
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### removePositionDetectionPattern



```php
private static removePositionDetectionPattern(int $xStart, int $yStart, \BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xStart` | **int** |  |
| `$yStart` | **int** |  |
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### embedHorizontalSeparationPattern

Embeds a single horizontal separation pattern.

```php
private static embedHorizontalSeparationPattern(int $xStart, int $yStart, \BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xStart` | **int** |  |
| `$yStart` | **int** |  |
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### embedVerticalSeparationPattern

Embeds a single vertical separation pattern.

```php
private static embedVerticalSeparationPattern(int $xStart, int $yStart, \BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xStart` | **int** |  |
| `$yStart` | **int** |  |
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### embedDarkDotAtLeftBottomCorner

Embeds a dot at the left bottom corner.

```php
private static embedDarkDotAtLeftBottomCorner(\BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### maybeEmbedPositionAdjustmentPatterns

Embeds position adjustment patterns if required.

```php
private static maybeEmbedPositionAdjustmentPatterns(\BaconQrCode\Common\Version $version, \BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **\BaconQrCode\Common\Version** |  |
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### embedPositionAdjustmentPattern

Embeds a single position adjustment pattern.

```php
private static embedPositionAdjustmentPattern(int $xStart, int $yStart, \BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xStart` | **int** |  |
| `$yStart` | **int** |  |
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### embedTimingPatterns

Embeds timing patterns into a matrix.

```php
private static embedTimingPatterns(\BaconQrCode\Encoder\ByteMatrix $matrix): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***

### embedDataBits

Embeds "dataBits" using "getMaskPattern".

```php
private static embedDataBits(\BaconQrCode\Common\BitArray $dataBits, int $maskPattern, \BaconQrCode\Encoder\ByteMatrix $matrix): void
```

For debugging purposes, it skips masking process if "getMaskPattern" is -1. See 8.7 of JISX0510:2004 (p.38) for
how to embed data bits.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dataBits` | **\BaconQrCode\Common\BitArray** |  |
| `$maskPattern` | **int** |  |
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***


***

