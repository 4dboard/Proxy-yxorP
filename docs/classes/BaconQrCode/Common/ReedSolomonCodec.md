***

# ReedSolomonCodec

Reed-Solomon codec for 8-bit characters.

Based on libfec by Phil Karn, KA9Q.

* Full name: `\BaconQrCode\Common\ReedSolomonCodec`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### symbolSize

Symbol size in bits.

```php
private int $symbolSize
```






***

### blockSize

Block size in symbols.

```php
private int $blockSize
```






***

### firstRoot

First root of RS code generator polynomial, index form.

```php
private int $firstRoot
```






***

### primitive

Primitive element to generate polynomial roots, index form.

```php
private int $primitive
```






***

### iPrimitive

Prim-th root of 1, index form.

```php
private int $iPrimitive
```






***

### numRoots

RS code generator polynomial degree (number of roots).

```php
private int $numRoots
```






***

### padding

Padding bytes at front of shortened block.

```php
private int $padding
```






***

### alphaTo

Log lookup table.

```php
private \SplFixedArray $alphaTo
```






***

### indexOf

Anti-Log lookup table.

```php
private \SplFixedArray $indexOf
```






***

### generatorPoly

Generator polynomial.

```php
private \SplFixedArray $generatorPoly
```






***

## Methods


### __construct



```php
public __construct(int $symbolSize, int $gfPoly, int $firstRoot, int $primitive, int $numRoots, int $padding): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$symbolSize` | **int** |  |
| `$gfPoly` | **int** |  |
| `$firstRoot` | **int** |  |
| `$primitive` | **int** |  |
| `$numRoots` | **int** |  |
| `$padding` | **int** |  |




***

### encode

Encodes data and writes result back into parity array.

```php
public encode(\SplFixedArray $data, \SplFixedArray $parity): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\SplFixedArray** |  |
| `$parity` | **\SplFixedArray** |  |




***

### decode

Decodes received data.

```php
public decode(\SplFixedArray $data, \SplFixedArray $erasures = null): ?int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\SplFixedArray** |  |
| `$erasures` | **\SplFixedArray** |  |




***

### modNn

Computes $x % GF_SIZE, where GF_SIZE is 2**GF_BITS - 1, without a slow divide.

```php
private modNn(int $x): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** |  |




***


***

