***

# SquareEye

Renders the eyes in their default square shape.



* Full name: `\BaconQrCode\Renderer\Eye\SquareEye`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\BaconQrCode\Renderer\Eye\EyeInterface`](./EyeInterface.md)
* This class is a **Final class**



## Properties


### instance



```php
private static self|null $instance
```



* This property is **static**.


***

## Methods


### __construct



```php
private __construct(): mixed
```











***

### instance



```php
public static instance(): self
```



* This method is **static**.







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

