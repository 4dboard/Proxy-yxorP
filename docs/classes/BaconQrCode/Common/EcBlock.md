***

# EcBlock

Encapsulates the parameters for one error-correction block in one symbol version.

This includes the number of data codewords, and the number of times a block with these parameters is used
consecutively in the QR code version's format.

* Full name: `\BaconQrCode\Common\EcBlock`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### count

How many times the block is used.

```php
private int $count
```

***

### dataCodewords

Number of data codewords.

```php
private int $dataCodewords
```

***

## Methods

### __construct

```php
public __construct(int $count, int $dataCodewords): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **int** |  |
| `$dataCodewords` | **int** |  |

***

### getCount

Returns how many times the block is used.

```php
public getCount(): int
```

***

### getDataCodewords

Returns the number of data codewords.

```php
public getDataCodewords(): int
```

***


***

