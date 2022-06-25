***

# MsgPack

* Full name: `\Zend\Serializer\Adapter\MsgPack`
* Parent class: [`\Zend\Serializer\Adapter\AbstractAdapter`](./AbstractAdapter.md)

## Properties

### serialized0

```php
private static string $serialized0
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

Serialize PHP value to msgpack

```php
public serialize(mixed $value): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### unserialize

Deserialize msgpack string to PHP value

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
