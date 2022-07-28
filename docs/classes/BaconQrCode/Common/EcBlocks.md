***

# EcBlocks

Encapsulates a set of error-correction blocks in one symbol version.

Most versions will use blocks of differing sizes within one version, so, this encapsulates the parameters for each
set of blocks. It also holds the number of error-correction codewords per block since it will be the same across all
blocks within one version.

* Full name: `\BaconQrCode\Common\EcBlocks`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### ecCodewordsPerBlock

Number of EC codewords per block.

```php
private int $ecCodewordsPerBlock
```






***

### ecBlocks

List of EC blocks.

```php
private \BaconQrCode\Common\EcBlock[] $ecBlocks
```






***

## Methods


### __construct



```php
public __construct(int $ecCodewordsPerBlock, \BaconQrCode\Common\EcBlock $ecBlocks): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ecCodewordsPerBlock` | **int** |  |
| `$ecBlocks` | **\BaconQrCode\Common\EcBlock** |  |




***

### getEcCodewordsPerBlock

Returns the number of EC codewords per block.

```php
public getEcCodewordsPerBlock(): int
```











***

### getNumBlocks

Returns the total number of EC block appearances.

```php
public getNumBlocks(): int
```











***

### getTotalEcCodewords

Returns the total count of EC codewords.

```php
public getTotalEcCodewords(): int
```











***

### getEcBlocks

Returns the EC blocks included in this collection.

```php
public getEcBlocks(): \BaconQrCode\Common\EcBlock[]
```











***


***

