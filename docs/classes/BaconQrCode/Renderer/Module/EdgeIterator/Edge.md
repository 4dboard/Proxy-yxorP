***

# Edge





* Full name: `\BaconQrCode\Renderer\Module\EdgeIterator\Edge`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### positive



```php
private bool $positive
```






***

### points



```php
private int[][] $points
```






***

### simplifiedPoints



```php
private int[][]|null $simplifiedPoints
```






***

### minX



```php
private int $minX
```






***

### minY



```php
private int $minY
```






***

### maxX



```php
private int $maxX
```






***

### maxY



```php
private int $maxY
```






***

## Methods


### __construct



```php
public __construct(bool $positive): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$positive` | **bool** |  |




***

### addPoint



```php
public addPoint(int $x, int $y): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **int** |  |
| `$y` | **int** |  |




***

### isPositive



```php
public isPositive(): bool
```











***

### getPoints



```php
public getPoints(): int[][]
```











***

### getMaxX



```php
public getMaxX(): int
```











***

### getSimplifiedPoints



```php
public getSimplifiedPoints(): array
```











***


***

