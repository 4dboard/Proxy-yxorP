***

# VBox





* Full name: `\ColorThief\VBox`



## Properties


### r1



```php
public $r1
```






***

### r2



```php
public $r2
```






***

### g1



```php
public $g1
```






***

### g2



```php
public $g2
```






***

### b1



```php
public $b1
```






***

### b2



```php
public $b2
```






***

### histo



```php
public $histo
```






***

### volume



```php
private $volume
```






***

### count



```php
private $count
```






***

### count_set



```php
private $count_set
```






***

### avg



```php
private $avg
```






***

## Methods


### __construct



```php
public __construct(mixed $r1, mixed $r2, mixed $g1, mixed $g2, mixed $b1, mixed $b2, mixed $histo): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$r1` | **mixed** |  |
| `$r2` | **mixed** |  |
| `$g1` | **mixed** |  |
| `$g2` | **mixed** |  |
| `$b1` | **mixed** |  |
| `$b2` | **mixed** |  |
| `$histo` | **mixed** |  |




***

### volume



```php
public volume(mixed $force = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$force` | **mixed** |  |




***

### count



```php
public count(mixed $force = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$force` | **mixed** |  |




***

### copy



```php
public copy(): mixed
```











***

### avg

Calculates the average color represented by this VBox.

```php
public avg(bool $force = false): array|bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$force` | **bool** |  |




***

### contains



```php
public contains(array $rgbValue, mixed $rshift = ColorThief::RSHIFT): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rgbValue` | **array** |  |
| `$rshift` | **mixed** |  |




***

### longestAxis

Determines the longest axis.

```php
public longestAxis(): string
```











***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
