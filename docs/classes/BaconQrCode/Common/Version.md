***

# Version

Version representation.

* Full name: `\BaconQrCode\Common\Version`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERSION_DECODE_INFO`|private| |[0x7c94, 0x85bc, 0x9a99, 0xa4d3, 0xbbf6, 0xc762, 0xd847, 0xe60d, 0xf928, 0x10b78, 0x1145d, 0x12a17, 0x13532, 0x149a6, 0x15683, 0x168c9, 0x177ec, 0x18ec4, 0x191e1, 0x1afab, 0x1b08e, 0x1cc1a, 0x1d33f, 0x1ed75, 0x1f250, 0x209d5, 0x216f0, 0x228ba, 0x2379f, 0x24b0b, 0x2542e, 0x26a64, 0x27541, 0x28c69]|

## Properties

### versionNumber

Version number of this version.

```php
private int $versionNumber
```

***

### alignmentPatternCenters

Alignment pattern centers.

```php
private \SplFixedArray $alignmentPatternCenters
```

***

### ecBlocks

Error correction blocks.

```php
private \BaconQrCode\Common\EcBlocks[] $ecBlocks
```

***

### totalCodewords

Total number of codewords.

```php
private int $totalCodewords
```

***

### versions

Cached version instances.

```php
private static array&lt;int,self&gt;|null $versions
```

* This property is **static**.

***

## Methods

### __construct

```php
private __construct(int $versionNumber, int[] $alignmentPatternCenters, \BaconQrCode\Common\EcBlocks $ecBlocks): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$versionNumber` | **int** |  |
| `$alignmentPatternCenters` | **int[]** |  |
| `$ecBlocks` | **\BaconQrCode\Common\EcBlocks** |  |

***

### getVersionNumber

Returns the version number.

```php
public getVersionNumber(): int
```

***

### getAlignmentPatternCenters

Returns the alignment pattern centers.

```php
public getAlignmentPatternCenters(): int[]
```

***

### getTotalCodewords

Returns the total number of codewords.

```php
public getTotalCodewords(): int
```

***

### getDimensionForVersion

Calculates the dimension for the current version.

```php
public getDimensionForVersion(): int
```

***

### getEcBlocksForLevel

Returns the number of EC blocks for a specific EC level.

```php
public getEcBlocksForLevel(\BaconQrCode\Common\ErrorCorrectionLevel $ecLevel): \BaconQrCode\Common\EcBlocks
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ecLevel` | **\BaconQrCode\Common\ErrorCorrectionLevel** |  |

***

### getProvisionalVersionForDimension

Gets a provisional version number for a specific dimension.

```php
public static getProvisionalVersionForDimension(int $dimension): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dimension` | **int** |  |

***

### getVersionForNumber

Gets a version instance for a specific version number.

```php
public static getVersionForNumber(int $versionNumber): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$versionNumber` | **int** |  |

***

### decodeVersionInformation

Decodes version information from an integer and returns the version.

```php
public static decodeVersionInformation(int $versionBits): ?self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$versionBits` | **int** |  |

***

### buildFunctionPattern

Builds the function pattern for the current version.

```php
public buildFunctionPattern(): \BaconQrCode\Common\BitMatrix
```

***

### __toString

Returns a string representation for the version.

```php
public __toString(): string
```

***

### versions

Build and cache a specific version.

```php
private static versions(): array&lt;int,self&gt;
```

See ISO 18004:2006 6.5.1 Table 9.

* This method is **static**.

***


***

