***

# Config

* Full name: `\League\Flysystem\Config`

## Properties

### settings

```php
protected array $settings
```

***

### fallback

```php
protected \League\Flysystem\Config|null $fallback
```

***

## Methods

### __construct

Constructor.

```php
public __construct(array $settings = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$settings` | **array** |  |

***

### get

Get a setting.

```php
public get(string $key, mixed $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$default` | **mixed** |  |

**Return Value:**

config setting or default when not found



***

### has

Check if an item exists by key.

```php
public has(string $key): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

***

### getDefault

Try to retrieve a default setting from a config fallback.

```php
protected getDefault(string $key, mixed $default): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$default` | **mixed** |  |

**Return Value:**

config setting or default when not found



***

### set

Set a setting.

```php
public set(string $key, mixed $value): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |

***

### setFallback

Set the fallback.

```php
public setFallback(\League\Flysystem\Config $fallback): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fallback` | **\League\Flysystem\Config** |  |

yxorP::get('REQUEST')
