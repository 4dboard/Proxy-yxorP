***

# BitUtils

General bit utilities.

All utility methods are based on 32-bit integers and also work on 64-bit
systems.

* Full name: `\BaconQrCode\Common\BitUtils`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Methods

### __construct

```php
private __construct(): mixed
```

***

### unsignedRightShift

Performs an unsigned right shift.

```php
public static unsignedRightShift(int $a, int $b): int
```

This is the same as the unsigned right shift operator ">>>" in other
languages.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$a` | **int** |  |
| `$b` | **int** |  |

***

### numberOfTrailingZeros

Gets the number of trailing zeros.

```php
public static numberOfTrailingZeros(int $i): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$i` | **int** |  |

***


***

