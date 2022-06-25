***

# ExpressionPropertyMetadata

Base class for property metadata.

* Full name: `\JMS\Serializer\Metadata\ExpressionPropertyMetadata`
* Parent class: [`\JMS\Serializer\Metadata\PropertyMetadata`](./PropertyMetadata.md)

## Properties

### expression

```php
public string $expression
```

***

## Methods

### __construct

```php
public __construct(mixed $class, mixed $fieldName, mixed $expression): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |
| `$fieldName` | **mixed** |  |
| `$expression` | **mixed** |  |

***

### setAccessor

```php
public setAccessor(mixed $type, mixed $getter = null, mixed $setter = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$getter` | **mixed** |  |
| `$setter` | **mixed** |  |

***

### getValue

```php
public getValue(object $object): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **object** |  |

***

### setValue

```php
public setValue(mixed $obj, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |
| `$value` | **mixed** |  |

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

***

## Inherited methods

### setAccessor

```php
public setAccessor(mixed $type, mixed $getter = null, mixed $setter = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$getter` | **mixed** |  |
| `$setter` | **mixed** |  |

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

### setType

```php
public setType(mixed $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |

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

***

### __construct

```php
public __construct(mixed $class, mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |
| `$name` | **mixed** |  |

yxorP::get('REQUEST')
