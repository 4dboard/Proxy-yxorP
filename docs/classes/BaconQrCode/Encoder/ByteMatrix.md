***

# ByteMatrix

Byte matrix.



* Full name: `\BaconQrCode\Encoder\ByteMatrix`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### bytes

Bytes in the matrix, represented as array.

```php
private \SplFixedArray&lt;\SplFixedArray&lt;int&gt;&gt; $bytes
```






***

### width

Width of the matrix.

```php
private int $width
```






***

### height

Height of the matrix.

```php
private int $height
```






***

## Methods


### __construct



```php
public __construct(int $width, int $height): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$width` | **int** |  |
| `$height` | **int** |  |




***

### getWidth

Gets the width of the matrix.

```php
public getWidth(): int
```











***

### getHeight

Gets the height of the matrix.

```php
public getHeight(): int
```











***

### getArray

Gets the internal representation of the matrix.

```php
public getArray(): \SplFixedArray&lt;\SplFixedArray&lt;int&gt;&gt;
```











***

### getBytes



```php
public getBytes(): \Traversable&lt;int&gt;
```











***

### get

Gets the byte for a specific position.

```php
public get(int $x, int $y): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** |  |
| `$y` | **int** |  |




***

### set

Sets the byte for a specific position.

```php
public set(int $x, int $y, int $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** |  |
| `$y` | **int** |  |
| `$value` | **int** |  |




***

### clear

Clears the matrix with a specific value.

```php
public clear(int $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **int** |  |




***

### __clone



```php
public __clone(): mixed
```











***

### __toString

Returns a string representation of the matrix.

```php
public __toString(): string
```











***


***

