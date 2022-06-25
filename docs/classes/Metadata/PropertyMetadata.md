***

# PropertyMetadata

Base class for property metadata.

This class is intended to be extended to add your application specific properties, and flags.

* Full name: `\Metadata\PropertyMetadata`
* This class implements:
  [`\Serializable`](../Serializable.md)

## Properties

### class

```php
public $class
```

***

### name

```php
public $name
```

***

### reflection

```php
public $reflection
```

***

## Methods

### __construct

```php
public __construct(mixed $class, mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |
| `$name` | **mixed** |  |

***

### getValue

```php
public getValue(object $obj): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **object** |  |

***

### setValue

```php
public setValue(object $obj, string $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **object** |  |
| `$value` | **string** |  |

***

### serialize

```php
public serialize(): mixed
```

***

### unserialize

```php
public unserialize(mixed $str): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |

yxorP::get('REQUEST')
