***

# RoundnessModule

Rounds the corners of module groups.



* Full name: `\BaconQrCode\Renderer\Module\RoundnessModule`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\BaconQrCode\Renderer\Module\ModuleInterface`](./ModuleInterface.md)
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`STRONG`|public| |1|
|`MEDIUM`|public| |0.5|
|`SOFT`|public| |0.25|

## Properties


### intensity



```php
private float $intensity
```






***

## Methods


### __construct



```php
public __construct(float $intensity): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$intensity` | **float** |  |




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

