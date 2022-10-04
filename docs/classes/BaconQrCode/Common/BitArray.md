***

# BitArray

A simple, fast array of bits.



* Full name: `\BaconQrCode\Common\BitArray`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### bits

Bits represented as an array of integers.

```php
private \SplFixedArray&lt;int&gt; $bits
```






***

### size

Size of the bit array in bits.

```php
private int $size
```






***

## Methods


### __construct

Creates a new bit array with a given size.

```php
public __construct(int $size): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **int** |  |




***

### getSize

Gets the size in bits.

```php
public getSize(): int
```











***

### getSizeInBytes

Gets the size in bytes.

```php
public getSizeInBytes(): int
```











***

### ensureCapacity

Ensures that the array has a minimum capacity.

```php
public ensureCapacity(int $size): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **int** |  |




***

### get

Gets a specific bit.

```php
public get(int $i): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$i` | **int** |  |




***

### set

Sets a specific bit.

```php
public set(int $i): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$i` | **int** |  |




***

### flip

Flips a specific bit.

```php
public flip(int $i): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$i` | **int** |  |




***

### getNextSet

Gets the next set bit position from a given position.

```php
public getNextSet(int $from): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$from` | **int** |  |




***

### getNextUnset

Gets the next unset bit position from a given position.

```php
public getNextUnset(int $from): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$from` | **int** |  |




***

### setBulk

Sets a bulk of bits.

```php
public setBulk(int $i, int $newBits): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$i` | **int** |  |
| `$newBits` | **int** |  |




***

### setRange

Sets a range of bits.

```php
public setRange(int $start, int $end): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$start` | **int** |  |
| `$end` | **int** |  |




***

### clear

Clears the bit array, unsetting every bit.

```php
public clear(): void
```











***

### isRange

Checks if a range of bits is set or not set.

```php
public isRange(int $start, int $end, bool $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$start` | **int** |  |
| `$end` | **int** |  |
| `$value` | **bool** |  |




***

### appendBit

Appends a bit to the array.

```php
public appendBit(bool $bit): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bit` | **bool** |  |




***

### appendBits

Appends a number of bits (up to 32) to the array.

```php
public appendBits(int $value, int $numBits): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **int** |  |
| `$numBits` | **int** |  |




***

### appendBitArray

Appends another bit array to this array.

```php
public appendBitArray(self $other): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **self** |  |




***

### xorBits

Makes an exclusive-or comparision on the current bit array.

```php
public xorBits(self $other): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **self** |  |




***

### toBytes

Converts the bit array to a byte array.

```php
public toBytes(int $bitOffset, int $numBytes): \SplFixedArray&lt;int&gt;
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bitOffset` | **int** |  |
| `$numBytes` | **int** |  |




***

### getBitArray

Gets the internal bit array.

```php
public getBitArray(): \SplFixedArray&lt;int&gt;
```











***

### reverse

Reverses the array.

```php
public reverse(): void
```











***

### __toString

Returns a string representation of the bit array.

```php
public __toString(): string
```











***


***

