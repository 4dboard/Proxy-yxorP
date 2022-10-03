***

# Path

Internal Representation of a vector path.



* Full name: `\BaconQrCode\Renderer\Path\Path`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\IteratorAggregate`](../../../IteratorAggregate.md)
* This class is a **Final class**



## Properties


### operations



```php
private \BaconQrCode\Renderer\Path\OperationInterface[] $operations
```






***

## Methods


### move

Moves the drawing operation to a certain position.

```php
public move(float $x, float $y): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **float** |  |
| `$y` | **float** |  |




***

### line

Draws a line from the current position to another position.

```php
public line(float $x, float $y): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **float** |  |
| `$y` | **float** |  |




***

### ellipticArc

Draws an elliptic arc from the current position to another position.

```php
public ellipticArc(float $xRadius, float $yRadius, float $xAxisRotation, bool $largeArc, bool $sweep, float $x, float $y): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xRadius` | **float** |  |
| `$yRadius` | **float** |  |
| `$xAxisRotation` | **float** |  |
| `$largeArc` | **bool** |  |
| `$sweep` | **bool** |  |
| `$x` | **float** |  |
| `$y` | **float** |  |




***

### curve

Draws a curve from the current position to another position.

```php
public curve(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x1` | **float** |  |
| `$y1` | **float** |  |
| `$x2` | **float** |  |
| `$y2` | **float** |  |
| `$x3` | **float** |  |
| `$y3` | **float** |  |




***

### close

Closes a sub-path.

```php
public close(): self
```











***

### append

Appends another path to this one.

```php
public append(self $other): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **self** |  |




***

### translate



```php
public translate(float $x, float $y): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$x` | **float** |  |
| `$y` | **float** |  |




***

### getIterator



```php
public getIterator(): \BaconQrCode\Renderer\Path\OperationInterface[]|\Traversable
```











***


***

