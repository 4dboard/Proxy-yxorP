***

# PhpCode

* Full name: `\Zend\Serializer\Adapter\PhpCode`
* Parent class: [`\Zend\Serializer\Adapter\AbstractAdapter`](./AbstractAdapter.md)

## Methods

### serialize

Serialize PHP using var_export

```php
public serialize(mixed $value): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### unserialize

Deserialize PHP string

```php
public unserialize(string $code): mixed
```

Warning: this uses eval(), and should likely be avoided.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **string** |  |

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
