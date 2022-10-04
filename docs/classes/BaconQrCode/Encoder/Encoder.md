***

# Encoder

Encoder.

* Full name: `\BaconQrCode\Encoder\Encoder`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DEFAULT_BYTE_MODE_ECODING`|public| |&#039;ISO-8859-1&#039;|
|`ALPHANUMERIC_TABLE`|private| |[

    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    // 0x00-0x0f
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    -1,
    // 0x10-0x1f
    36,
    -1,
    -1,
    -1,
    37,
    38,
    -1,
    -1,
    -1,
    -1,
    39,
    40,
    -1,
    41,
    42,
    43,
    // 0x20-0x2f
    0,
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    44,
    -1,
    -1,
    -1,
    -1,
    -1,
    // 0x30-0x3f
    -1,
    10,
    11,
    12,
    13,
    14,
    15,
    16,
    17,
    18,
    19,
    20,
    21,
    22,
    23,
    24,
    // 0x40-0x4f
    25,
    26,
    27,
    28,
    29,
    30,
    31,
    32,
    33,
    34,
    35,
    -1,
    -1,
    -1,
    -1,
    -1,

]|

## Properties

### codecs

Codec cache.

```php
private static array $codecs
```

* This property is **static**.

***

## Methods

### encode

Encodes "content" with the error correction level "ecLevel".

```php
public static encode(string $content, \BaconQrCode\Common\ErrorCorrectionLevel $ecLevel, string $encoding = self::DEFAULT_BYTE_MODE_ECODING, ?\BaconQrCode\Common\Version $forcedVersion = null): \BaconQrCode\Encoder\QrCode
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$ecLevel` | **\BaconQrCode\Common\ErrorCorrectionLevel** |  |
| `$encoding` | **string** |  |
| `$forcedVersion` | **?\BaconQrCode\Common\Version** |  |

***

### getAlphanumericCode

Gets the alphanumeric code for a byte.

```php
private static getAlphanumericCode(int $code): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **int** |  |

***

### chooseMode

Chooses the best mode for a given content.

```php
private static chooseMode(string $content, string $encoding = null): \BaconQrCode\Common\Mode
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$encoding` | **string** |  |

***

### calculateMaskPenalty

Calculates the mask penalty for a matrix.

```php
private static calculateMaskPenalty(\BaconQrCode\Encoder\ByteMatrix $matrix): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |

***

### isOnlyDoubleByteKanji

Checks if content only consists of double-byte kanji characters.

```php
private static isOnlyDoubleByteKanji(string $content): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |

***

### chooseMaskPattern

Chooses the best mask pattern for a matrix.

```php
private static chooseMaskPattern(\BaconQrCode\Common\BitArray $bits, \BaconQrCode\Common\ErrorCorrectionLevel $ecLevel, \BaconQrCode\Common\Version $version, \BaconQrCode\Encoder\ByteMatrix $matrix): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bits` | **\BaconQrCode\Common\BitArray** |  |
| `$ecLevel` | **\BaconQrCode\Common\ErrorCorrectionLevel** |  |
| `$version` | **\BaconQrCode\Common\Version** |  |
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |

***

### chooseVersion

Chooses the best version for the input.

```php
private static chooseVersion(int $numInputBits, \BaconQrCode\Common\ErrorCorrectionLevel $ecLevel): \BaconQrCode\Common\Version
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numInputBits` | **int** |  |
| `$ecLevel` | **\BaconQrCode\Common\ErrorCorrectionLevel** |  |

***

### terminateBits

Terminates the bits in a bit array.

```php
private static terminateBits(int $numDataBytes, \BaconQrCode\Common\BitArray $bits): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numDataBytes` | **int** |  |
| `$bits` | **\BaconQrCode\Common\BitArray** |  |

***

### getNumDataBytesAndNumEcBytesForBlockId

Gets number of data- and EC bytes for a block ID.

```php
private static getNumDataBytesAndNumEcBytesForBlockId(int $numTotalBytes, int $numDataBytes, int $numRsBlocks, int $blockId): int[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numTotalBytes` | **int** |  |
| `$numDataBytes` | **int** |  |
| `$numRsBlocks` | **int** |  |
| `$blockId` | **int** |  |

***

### interleaveWithEcBytes

Interleaves data with EC bytes.

```php
private static interleaveWithEcBytes(\BaconQrCode\Common\BitArray $bits, int $numTotalBytes, int $numDataBytes, int $numRsBlocks): \BaconQrCode\Common\BitArray
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bits` | **\BaconQrCode\Common\BitArray** |  |
| `$numTotalBytes` | **int** |  |
| `$numDataBytes` | **int** |  |
| `$numRsBlocks` | **int** |  |

***

### generateEcBytes

Generates EC bytes for given data.

```php
private static generateEcBytes(\SplFixedArray&lt;int&gt; $dataBytes, int $numEcBytesInBlock): \SplFixedArray&lt;int&gt;
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dataBytes` | **\SplFixedArray<int>** |  |
| `$numEcBytesInBlock` | **int** |  |

***

### getCodec

Gets an RS codec and caches it.

```php
private static getCodec(int $numDataBytes, int $numEcBytesInBlock): \BaconQrCode\Common\ReedSolomonCodec
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numDataBytes` | **int** |  |
| `$numEcBytesInBlock` | **int** |  |

***

### appendModeInfo

Appends mode information to a bit array.

```php
private static appendModeInfo(\BaconQrCode\Common\Mode $mode, \BaconQrCode\Common\BitArray $bits): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **\BaconQrCode\Common\Mode** |  |
| `$bits` | **\BaconQrCode\Common\BitArray** |  |

***

### appendLengthInfo

Appends length information to a bit array.

```php
private static appendLengthInfo(int $numLetters, \BaconQrCode\Common\Version $version, \BaconQrCode\Common\Mode $mode, \BaconQrCode\Common\BitArray $bits): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numLetters` | **int** |  |
| `$version` | **\BaconQrCode\Common\Version** |  |
| `$mode` | **\BaconQrCode\Common\Mode** |  |
| `$bits` | **\BaconQrCode\Common\BitArray** |  |

***

### appendBytes

Appends bytes to a bit array in a specific mode.

```php
private static appendBytes(string $content, \BaconQrCode\Common\Mode $mode, \BaconQrCode\Common\BitArray $bits, string $encoding): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$mode` | **\BaconQrCode\Common\Mode** |  |
| `$bits` | **\BaconQrCode\Common\BitArray** |  |
| `$encoding` | **string** |  |

***

### appendNumericBytes

Appends numeric bytes to a bit array.

```php
private static appendNumericBytes(string $content, \BaconQrCode\Common\BitArray $bits): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$bits` | **\BaconQrCode\Common\BitArray** |  |

***

### appendAlphanumericBytes

Appends alpha-numeric bytes to a bit array.

```php
private static appendAlphanumericBytes(string $content, \BaconQrCode\Common\BitArray $bits): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$bits` | **\BaconQrCode\Common\BitArray** |  |

***

### append8BitBytes

Appends regular 8-bit bytes to a bit array.

```php
private static append8BitBytes(string $content, \BaconQrCode\Common\BitArray $bits, string $encoding): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$bits` | **\BaconQrCode\Common\BitArray** |  |
| `$encoding` | **string** |  |

***

### appendKanjiBytes

Appends KANJI bytes to a bit array.

```php
private static appendKanjiBytes(string $content, \BaconQrCode\Common\BitArray $bits): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$bits` | **\BaconQrCode\Common\BitArray** |  |

***

### appendEci

Appends ECI information to a bit array.

```php
private static appendEci(\BaconQrCode\Common\CharacterSetEci $eci, \BaconQrCode\Common\BitArray $bits): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eci` | **\BaconQrCode\Common\CharacterSetEci** |  |
| `$bits` | **\BaconQrCode\Common\BitArray** |  |

***


***

