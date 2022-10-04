***

# VBox





* Full name: `\ColorThief\VBox`



## Properties


### r1



```php
public int $r1
```






***

### r2



```php
public int $r2
```






***

### g1



```php
public int $g1
```






***

### g2



```php
public int $g2
```






***

### b1



```php
public int $b1
```






***

### b2



```php
public int $b2
```






***

### histo



```php
public array&lt;int,int&gt; $histo
```






***

### volume



```php
private int $volume
```






***

### volume_set



```php
private bool $volume_set
```






***

### count



```php
private int $count
```






***

### count_set



```php
private bool $count_set
```






***

### avg



```php
private array $avg
```






***

### avg_set



```php
private bool $avg_set
```






***

## Methods


### __construct

VBox constructor.

```php
public __construct(int $r1, int $r2, int $g1, int $g2, int $b1, int $b2, array&lt;int,int&gt; $histo): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$r1` | **int** |  |
| `$r2` | **int** |  |
| `$g1` | **int** |  |
| `$g2` | **int** |  |
| `$b1` | **int** |  |
| `$b2` | **int** |  |
| `$histo` | **array<int,int>** |  |




***

### volume



```php
public volume(bool $force = false): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$force` | **bool** |  |




***

### count



```php
public count(bool $force = false): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$force` | **bool** |  |




***

### copy



```php
public copy(): self
```











***

### avg

Calculates the average color represented by this VBox.

```php
public avg(bool $force = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$force` | **bool** |  |




***

### contains



```php
public contains(array $rgbValue, int $rshift = ColorThief::RSHIFT): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rgbValue` | **array** |  |
| `$rshift` | **int** |  |




***

### longestAxis

Determines the longest axis.

```php
public longestAxis(): string
```











***


***

