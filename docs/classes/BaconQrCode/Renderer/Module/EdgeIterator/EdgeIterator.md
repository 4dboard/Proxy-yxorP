***

# EdgeIterator

Edge iterator based on potrace.

* Full name: `\BaconQrCode\Renderer\Module\EdgeIterator\EdgeIterator`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\IteratorAggregate`](../../../../IteratorAggregate.md)
* This class is a **Final class**

## Properties

### bytes

```php
private int[] $bytes
```

***

### size

```php
private int $size
```

***

### width

```php
private int $width
```

***

### height

```php
private int $height
```

***

## Methods

### __construct

```php
public __construct(\BaconQrCode\Encoder\ByteMatrix $matrix): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |

***

### getIterator

```php
public getIterator(): \BaconQrCode\Renderer\Module\EdgeIterator\Edge[]
```

***

### findNext

```php
private findNext(int $x, int $y): int[]|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** |  |
| `$y` | **int** |  |

***

### findEdge

```php
private findEdge(int $x, int $y): \BaconQrCode\Renderer\Module\EdgeIterator\Edge
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** |  |
| `$y` | **int** |  |

***

### xorEdge

```php
private xorEdge(\BaconQrCode\Renderer\Module\EdgeIterator\Edge $path): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **\BaconQrCode\Renderer\Module\EdgeIterator\Edge** |  |

***

### isSet

```php
private isSet(int $x, int $y): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** |  |
| `$y` | **int** |  |

***

### pointOf

```php
private pointOf(int $i): int[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$i` | **int** |  |

***

### flip

```php
private flip(int $x, int $y): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** |  |
| `$y` | **int** |  |

***


***

