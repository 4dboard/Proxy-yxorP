***

# DriverChain

* Full name: `\Metadata\Driver\DriverChain`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\Metadata\Driver\AdvancedDriverInterface`](./AdvancedDriverInterface.md)
* This class is a **Final class**

## Properties

### drivers

```php
private $drivers
```

***

## Methods

### __construct

```php
public __construct(array $drivers = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$drivers` | **array** |  |

***

### addDriver

```php
public addDriver(\Metadata\Driver\DriverInterface $driver): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\Metadata\Driver\DriverInterface** |  |

***

### loadMetadataForClass

```php
public loadMetadataForClass(\ReflectionClass $class): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |

***

### getAllClassNames

Gets all the metadata class names known to this driver.

```php
public getAllClassNames(): array
```

yxorP::get('REQUEST')
