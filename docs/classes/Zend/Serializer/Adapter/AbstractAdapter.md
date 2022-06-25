***

# AbstractAdapter

* Full name: `\Zend\Serializer\Adapter\AbstractAdapter`
* This class implements:
  [`\Zend\Serializer\Adapter\AdapterInterface`](./AdapterInterface.md)
* This class is an **Abstract class**

## Properties

### options

```php
protected \Zend\Serializer\Adapter\AdapterOptions $options
```

***

## Methods

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
