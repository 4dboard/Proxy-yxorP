***

# EyeFill

* Full name: `\BaconQrCode\Renderer\RendererStyle\EyeFill`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### externalColor

```php
private \BaconQrCode\Renderer\Color\ColorInterface|null $externalColor
```

***

### internalColor

```php
private \BaconQrCode\Renderer\Color\ColorInterface|null $internalColor
```

***

### inherit

```php
private static self|null $inherit
```

* This property is **static**.

***

## Methods

### __construct

```php
public __construct(?\BaconQrCode\Renderer\Color\ColorInterface $externalColor, ?\BaconQrCode\Renderer\Color\ColorInterface $internalColor): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$externalColor` | **?\BaconQrCode\Renderer\Color\ColorInterface** |  |
| `$internalColor` | **?\BaconQrCode\Renderer\Color\ColorInterface** |  |

***

### uniform

```php
public static uniform(\BaconQrCode\Renderer\Color\ColorInterface $color): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **\BaconQrCode\Renderer\Color\ColorInterface** |  |

***

### inherit

```php
public static inherit(): self
```

* This method is **static**.

***

### inheritsBothColors

```php
public inheritsBothColors(): bool
```

***

### inheritsExternalColor

```php
public inheritsExternalColor(): bool
```

***

### inheritsInternalColor

```php
public inheritsInternalColor(): bool
```

***

### getExternalColor

```php
public getExternalColor(): \BaconQrCode\Renderer\Color\ColorInterface
```

***

### getInternalColor

```php
public getInternalColor(): \BaconQrCode\Renderer\Color\ColorInterface
```

***


***

