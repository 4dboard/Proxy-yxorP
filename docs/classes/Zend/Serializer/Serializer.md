***

# Serializer

* Full name: `\Zend\Serializer\Serializer`
* This class is an **Abstract class**

## Properties

### adapters

Plugin manager for loading adapters

```php
protected static null|\Zend\Serializer\AdapterPluginManager $adapters
```

* This property is **static**.

***

### defaultAdapter

The default adapter.

```php
protected static string|\Zend\Serializer\Adapter\AdapterInterface $defaultAdapter
```

* This property is **static**.

***

## Methods

### factory

Create a serializer adapter instance.

```php
public static factory(string|\Zend\Serializer\Adapter\AdapterInterface $adapterName, mixed $adapterOptions = null): \Zend\Serializer\Adapter\AdapterInterface
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapterName` | **string&#124;\Zend\Serializer\Adapter\AdapterInterface** | Name of the adapter class |
| `$adapterOptions` | **mixed** |  |

***

### setAdapterPluginManager

Change the adapter plugin manager

```php
public static setAdapterPluginManager(\Zend\Serializer\AdapterPluginManager $adapters): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapters` | **\Zend\Serializer\AdapterPluginManager** |  |

***

### getAdapterPluginManager

Get the adapter plugin manager

```php
public static getAdapterPluginManager(): \Zend\Serializer\AdapterPluginManager
```

* This method is **static**.

***

### resetAdapterPluginManager

Resets the internal adapter plugin manager

```php
public static resetAdapterPluginManager(): \Zend\Serializer\AdapterPluginManager
```

* This method is **static**.

***

### setDefaultAdapter

Change the default adapter.

```php
public static setDefaultAdapter(string|\Zend\Serializer\Adapter\AdapterInterface $adapter, array|\Traversable|null $adapterOptions = null): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **string&#124;\Zend\Serializer\Adapter\AdapterInterface** |  |
| `$adapterOptions` | **array&#124;\Traversable&#124;null** |  |

***

### getDefaultAdapter

Get the default adapter.

```php
public static getDefaultAdapter(): \Zend\Serializer\Adapter\AdapterInterface
```

* This method is **static**.

***

### serialize

Generates a storable representation of a value using the default adapter.

```php
public static serialize(mixed $value, string|\Zend\Serializer\Adapter\AdapterInterface $adapter = null, array|\Traversable|null $adapterOptions = null): string
```

Optionally different adapter could be provided as second argument

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$adapter` | **string&#124;\Zend\Serializer\Adapter\AdapterInterface** |  |
| `$adapterOptions` | **
array&#124;\Traversable&#124;null** | Adapter constructor options<br />only used to create adapter instance |

***

### unserialize

Creates a PHP value from a stored representation using the default adapter.

```php
public static unserialize(string $serialized, string|\Zend\Serializer\Adapter\AdapterInterface $adapter = null, array|\Traversable|null $adapterOptions = null): mixed
```

Optionally different adapter could be provided as second argument

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serialized` | **string** |  |
| `$adapter` | **string&#124;\Zend\Serializer\Adapter\AdapterInterface** |  |
| `$adapterOptions` | **
array&#124;\Traversable&#124;null** | Adapter constructor options<br />only used to create adapter instance |

yxorP::get('REQUEST')
