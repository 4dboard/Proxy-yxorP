***

# MergeableClassMetadata

Base class for class metadata.

This class is intended to be extended to add your own application specific properties, and flags.

* Full name: `\Metadata\MergeableClassMetadata`
* Parent class: [`\Metadata\ClassMetadata`](./ClassMetadata.md)
* This class implements:
  [`\Metadata\MergeableInterface`](./MergeableInterface.md)

## Methods

### merge

```php
public merge(\Metadata\MergeableInterface $object): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **\Metadata\MergeableInterface** |  |

***

## Inherited methods

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
