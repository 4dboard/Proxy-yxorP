***

# EllipticArc





* Full name: `\BaconQrCode\Renderer\Path\EllipticArc`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\BaconQrCode\Renderer\Path\OperationInterface`](./OperationInterface.md)
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ZERO_TOLERANCE`|private| |1.0E-5|

## Properties


### xRadius



```php
private float $xRadius
```






***

### yRadius



```php
private float $yRadius
```






***

### xAxisAngle



```php
private float $xAxisAngle
```






***

### largeArc



```php
private bool $largeArc
```






***

### sweep



```php
private bool $sweep
```






***

### x



```php
private float $x
```






***

### y



```php
private float $y
```






***

## Methods


### __construct



```php
public __construct(float $xRadius, float $yRadius, float $xAxisAngle, bool $largeArc, bool $sweep, float $x, float $y): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xRadius` | **float** |  |
| `$yRadius` | **float** |  |
| `$xAxisAngle` | **float** |  |
| `$largeArc` | **bool** |  |
| `$sweep` | **bool** |  |
| `$x` | **float** |  |
| `$y` | **float** |  |




***

### getXRadius



```php
public getXRadius(): float
```











***

### getYRadius



```php
public getYRadius(): float
```











***

### getXAxisAngle



```php
public getXAxisAngle(): float
```











***

### isLargeArc



```php
public isLargeArc(): bool
```











***

### isSweep



```php
public isSweep(): bool
```











***

### getX



```php
public getX(): float
```











***

### getY



```php
public getY(): float
```











***

### translate

Translates the operation's coordinates.

```php
public translate(float $x, float $y): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **float** |  |
| `$y` | **float** |  |




***

### toCurves

Converts the elliptic arc to multiple curves.

```php
public toCurves(float $fromX, float $fromY): (\BaconQrCode\Renderer\Path\Curve|\BaconQrCode\Renderer\Path\Line)[]
```

Since not all image back ends support elliptic arcs, this method allows to convert the arc into multiple curves
resembling the same result.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fromX` | **float** |  |
| `$fromY` | **float** |  |



**See Also:**

* https://mortoray.com/2017/02/16/rendering-an-svg-elliptical-arc-as-bezier-curves/ - 

***

### createCurves



```php
private createCurves(float $fromX, mixed $fromY): \BaconQrCode\Renderer\Path\Curve[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fromX` | **float** |  |
| `$fromY` | **mixed** |  |




***

### calculateCenterPointParameters



```php
private calculateCenterPointParameters(float $fromX, float $fromY, float $xAngle): float[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fromX` | **float** |  |
| `$fromY` | **float** |  |
| `$xAngle` | **float** |  |




***

### angle



```php
private static angle(float $ux, float $uy, float $vx, float $vy): float
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ux` | **float** |  |
| `$uy` | **float** |  |
| `$vx` | **float** |  |
| `$vy` | **float** |  |




***

### point



```php
private static point(float $centerX, float $centerY, float $radiusX, float $radiusY, float $xAngle, float $angle): float[]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$centerX` | **float** |  |
| `$centerY` | **float** |  |
| `$radiusX` | **float** |  |
| `$radiusY` | **float** |  |
| `$xAngle` | **float** |  |
| `$angle` | **float** |  |




***

### derivative



```php
private static derivative(float $radiusX, float $radiusY, float $xAngle, float $angle): float[]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$radiusX` | **float** |  |
| `$radiusY` | **float** |  |
| `$xAngle` | **float** |  |
| `$angle` | **float** |  |




***


***

