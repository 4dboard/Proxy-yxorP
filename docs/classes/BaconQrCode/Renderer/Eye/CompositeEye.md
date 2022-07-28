***

# CompositeEye

Combines the style of two different eyes.



* Full name: `\BaconQrCode\Renderer\Eye\CompositeEye`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\BaconQrCode\Renderer\Eye\EyeInterface`](./EyeInterface.md)
* This class is a **Final class**



## Properties


### externalEye



```php
private \BaconQrCode\Renderer\Eye\EyeInterface $externalEye
```






***

### internalEye



```php
private \BaconQrCode\Renderer\Eye\EyeInterface $internalEye
```






***

## Methods


### __construct



```php
public __construct(\BaconQrCode\Renderer\Eye\EyeInterface $externalEye, \BaconQrCode\Renderer\Eye\EyeInterface $internalEye): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$externalEye` | **\BaconQrCode\Renderer\Eye\EyeInterface** |  |
| `$internalEye` | **\BaconQrCode\Renderer\Eye\EyeInterface** |  |




***

### getExternalPath

Returns the path of the external eye element.

```php
public getExternalPath(): \BaconQrCode\Renderer\Path\Path
```

The path origin point (0, 0) must be anchored at the middle of the path.









***

### getInternalPath

Returns the path of the internal eye element.

```php
public getInternalPath(): \BaconQrCode\Renderer\Path\Path
```

The path origin point (0, 0) must be anchored at the middle of the path.









***


***

