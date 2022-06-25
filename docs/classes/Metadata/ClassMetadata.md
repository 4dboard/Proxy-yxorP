***

# ClassMetadata

Base class for class metadata.

This class is intended to be extended to add your own application specific properties, and flags.

* Full name: `\Metadata\ClassMetadata`
* This class implements:
  [`\Serializable`](../Serializable.md)

## Properties

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

### methodMetadata

```php
public $methodMetadata
```

***

### propertyMetadata

```php
public $propertyMetadata
```

***

### fileResources

```php
public $fileResources
```

***

### createdAt

```php
public $createdAt
```

***

## Methods

### __construct

```php
public __construct(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### addMethodMetadata

```php
public addMethodMetadata(\Metadata\MethodMetadata $metadata): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Metadata\MethodMetadata** |  |

***

### addPropertyMetadata

```php
public addPropertyMetadata(\Metadata\PropertyMetadata $metadata): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Metadata\PropertyMetadata** |  |

***

### isFresh

```php
public isFresh(mixed $timestamp = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timestamp` | **mixed** |  |

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
