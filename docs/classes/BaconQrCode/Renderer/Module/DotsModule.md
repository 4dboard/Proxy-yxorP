***

# DotsModule

Renders individual modules as dots.



* Full name: `\BaconQrCode\Renderer\Module\DotsModule`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\BaconQrCode\Renderer\Module\ModuleInterface`](./ModuleInterface.md)
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`LARGE`|public| |1|
|`MEDIUM`|public| |0.8|
|`SMALL`|public| |0.6|

## Properties


### size



```php
private float $size
```






***

## Methods


### __construct



```php
public __construct(float $size): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **float** |  |




***

### createPath



```php
public createPath(\BaconQrCode\Encoder\ByteMatrix $matrix): \BaconQrCode\Renderer\Path\Path
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matrix` | **\BaconQrCode\Encoder\ByteMatrix** |  |




***


***

