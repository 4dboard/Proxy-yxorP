***

# Color





* Full name: `\ColorThief\Color`



## Properties


### red

RGB Red value of current color instance.

```php
private int $red
```






***

### green

RGB Green value of current color instance.

```php
private int $green
```






***

### blue

RGB Blue value of current color instance.

```php
private int $blue
```






***

## Methods


### __construct

Creates new instance.

```php
public __construct(int $red, int $green, int $blue): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$red` | **int** |  |
| `$green` | **int** |  |
| `$blue` | **int** |  |




***

### getRed

Get red value.

```php
public getRed(): int
```











***

### getGreen

Get green value.

```php
public getGreen(): int
```











***

### getBlue

Get blue value.

```php
public getBlue(): int
```











***

### getInt

Calculates integer value of current color instance.

```php
public getInt(): int
```











***

### getHex

Calculates hexadecimal value of current color instance.

```php
public getHex(string $prefix = &#039;&#039;): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |




***

### getArray

Calculates RGB in array format of current color instance.

```php
public getArray(): array
```











***

### getRgb

Calculates RGB in string format of current color instance.

```php
public getRgb(): string
```











***

### format

Formats current color instance into given format.

```php
public format(string $type): string|int|array|self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |




***

### __toString

Get color as string.

```php
public __toString(): string
```











***


***

