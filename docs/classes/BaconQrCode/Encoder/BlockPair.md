***

# BlockPair

Block pair.

* Full name: `\BaconQrCode\Encoder\BlockPair`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### dataBytes

Data bytes in the block.

```php
private \SplFixedArray&lt;int&gt; $dataBytes
```

***

### errorCorrectionBytes

Error correction bytes in the block.

```php
private \SplFixedArray&lt;int&gt; $errorCorrectionBytes
```

***

## Methods

### __construct

Creates a new block pair.

```php
public __construct(\SplFixedArray&lt;int&gt; $data, \SplFixedArray&lt;int&gt; $errorCorrection): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\SplFixedArray<int>** |  |
| `$errorCorrection` | **\SplFixedArray<int>** |  |

***

### getDataBytes

Gets the data bytes.

```php
public getDataBytes(): \SplFixedArray&lt;int&gt;
```

***

### getErrorCorrectionBytes

Gets the error correction bytes.

```php
public getErrorCorrectionBytes(): \SplFixedArray&lt;int&gt;
```

***


***

