***

# ModuleEye

Renders an eye based on a module renderer.



* Full name: `\BaconQrCode\Renderer\Eye\ModuleEye`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\BaconQrCode\Renderer\Eye\EyeInterface`](./EyeInterface.md)
* This class is a **Final class**



## Properties


### module



```php
private \BaconQrCode\Renderer\Module\ModuleInterface $module
```






***

## Methods


### __construct



```php
public __construct(\BaconQrCode\Renderer\Module\ModuleInterface $module): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$module` | **\BaconQrCode\Renderer\Module\ModuleInterface** |  |




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

