***

# TransformationMatrix

* Full name: `\BaconQrCode\Renderer\Image\TransformationMatrix`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### values

```php
private float[] $values
```

***

## Methods

### __construct

```php
public __construct(): mixed
```

***

### multiply

```php
public multiply(self $other): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **self** |  |

***

### scale

```php
public static scale(float $size): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **float** |  |

***

### translate

```php
public static translate(float $x, float $y): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **float** |  |
| `$y` | **float** |  |

***

### rotate

```php
public static rotate(int $degrees): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$degrees` | **int** |  |

***

### apply

Applies this matrix onto a point and returns the resulting viewport point.

```php
public apply(float $x, float $y): float[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **float** |  |
| `$y` | **float** |  |

***


***

