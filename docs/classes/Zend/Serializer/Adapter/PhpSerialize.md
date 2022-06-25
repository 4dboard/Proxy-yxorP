***

# PhpSerialize

* Full name: `\Zend\Serializer\Adapter\PhpSerialize`
* Parent class: [`\Zend\Serializer\Adapter\AbstractAdapter`](./AbstractAdapter.md)

## Properties

### serializedFalse

Serialized boolean false value

```php
private static null|string $serializedFalse
```

* This property is **static**.

***

## Methods

### __construct

Constructor

```php
public __construct(mixed $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **mixed** |  |

***

### serialize

Serialize using serialize()

```php
public serialize(mixed $value): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### unserialize

Unserialize

```php
public unserialize(string $serialized): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serialized` | **string** |  |

***

## Inherited methods

### __construct

Constructor

```php
public __construct(array|\Traversable|\Zend\Serializer\Adapter\AdapterOptions $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Serializer\Adapter\AdapterOptions** |  |

***

### setOptions

Set adapter options

```php
public setOptions(array|\Traversable|\Zend\Serializer\Adapter\AdapterOptions $options): \Zend\Serializer\Adapter\AbstractAdapter
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Serializer\Adapter\AdapterOptions** |  |

***

### getOptions

Get adapter options

```php
public getOptions(): \Zend\Serializer\Adapter\AdapterOptions
```

yxorP::get('REQUEST')
