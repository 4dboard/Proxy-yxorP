***

# FormatInformation

Encapsulates a QR Code's format information, including the data mask used and error correction level.



* Full name: `\BaconQrCode\Common\FormatInformation`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`FORMAT_INFO_MASK_QR`|private| |0x5412|
|`FORMAT_INFO_DECODE_LOOKUP`|private| |[[0x5412, 0x0], [0x5125, 0x1], [0x5e7c, 0x2], [0x5b4b, 0x3], [0x45f9, 0x4], [0x40ce, 0x5], [0x4f97, 0x6], [0x4aa0, 0x7], [0x77c4, 0x8], [0x72f3, 0x9], [0x7daa, 0xa], [0x789d, 0xb], [0x662f, 0xc], [0x6318, 0xd], [0x6c41, 0xe], [0x6976, 0xf], [0x1689, 0x10], [0x13be, 0x11], [0x1ce7, 0x12], [0x19d0, 0x13], [0x762, 0x14], [0x255, 0x15], [0xd0c, 0x16], [0x83b, 0x17], [0x355f, 0x18], [0x3068, 0x19], [0x3f31, 0x1a], [0x3a06, 0x1b], [0x24b4, 0x1c], [0x2183, 0x1d], [0x2eda, 0x1e], [0x2bed, 0x1f]]|
|`BITS_SET_IN_HALF_BYTE`|private|array|[0, 1, 1, 2, 1, 2, 2, 3, 1, 2, 2, 3, 2, 3, 3, 4]|

## Properties


### ecLevel

Error correction level.

```php
private \BaconQrCode\Common\ErrorCorrectionLevel $ecLevel
```






***

### dataMask

Data mask.

```php
private int $dataMask
```






***

## Methods


### __construct



```php
protected __construct(int $formatInfo): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatInfo` | **int** |  |




***

### numBitsDiffering

Checks how many bits are different between two integers.

```php
public static numBitsDiffering(int $a, int $b): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$a` | **int** |  |
| `$b` | **int** |  |




***

### decodeFormatInformation

Decodes format information.

```php
public static decodeFormatInformation(int $maskedFormatInfo1, int $maskedFormatInfo2): ?self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maskedFormatInfo1` | **int** |  |
| `$maskedFormatInfo2` | **int** |  |




***

### doDecodeFormatInformation

Internal method for decoding format information.

```php
private static doDecodeFormatInformation(int $maskedFormatInfo1, int $maskedFormatInfo2): ?self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maskedFormatInfo1` | **int** |  |
| `$maskedFormatInfo2` | **int** |  |




***

### getErrorCorrectionLevel

Returns the error correction level.

```php
public getErrorCorrectionLevel(): \BaconQrCode\Common\ErrorCorrectionLevel
```











***

### getDataMask

Returns the data mask.

```php
public getDataMask(): int
```











***

### hashCode

Hashes the code of the EC level.

```php
public hashCode(): int
```











***

### equals

Verifies if this instance equals another one.

```php
public equals(self $other): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **self** |  |




***


***

