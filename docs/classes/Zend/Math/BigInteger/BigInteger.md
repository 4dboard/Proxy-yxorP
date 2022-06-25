***

# BigInteger

* Full name: `\Zend\Math\BigInteger\BigInteger`
* This class is an **Abstract class**

## Properties

### adapters

Plugin manager for loading adapters

```php
protected static null|\Zend\Math\BigInteger\AdapterPluginManager $adapters
```

* This property is **static**.

***

### defaultAdapter

The default adapter.

```php
protected static \Zend\Math\BigInteger\Adapter\AdapterInterface $defaultAdapter
```

* This property is **static**.

***

## Methods

### factory

Create a BigInteger adapter instance

```php
public static factory(string|\Zend\Math\BigInteger\Adapter\AdapterInterface|null $adapterName = null): \Zend\Math\BigInteger\Adapter\AdapterInterface
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapterName` | **string&#124;\Zend\Math\BigInteger\Adapter\AdapterInterface&#124;null** |  |

***

### setAdapterPluginManager

Set adapter plugin manager

```php
public static setAdapterPluginManager(\Zend\Math\BigInteger\AdapterPluginManager $adapters): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapters` | **\Zend\Math\BigInteger\AdapterPluginManager** |  |

***

### getAdapterPluginManager

Get the adapter plugin manager

```php
public static getAdapterPluginManager(): \Zend\Math\BigInteger\AdapterPluginManager
```

* This method is **static**.

***

### setDefaultAdapter

Set default BigInteger adapter

```php
public static setDefaultAdapter(string|\Zend\Math\BigInteger\Adapter\AdapterInterface $adapter): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **string&#124;\Zend\Math\BigInteger\Adapter\AdapterInterface** |  |

***

### getDefaultAdapter

Get default BigInteger adapter

```php
public static getDefaultAdapter(): null|\Zend\Math\BigInteger\Adapter\AdapterInterface
```

* This method is **static**.

***

### getAvailableAdapter

Determine and return available adapter

```php
public static getAvailableAdapter(): \Zend\Math\BigInteger\Adapter\AdapterInterface
```

* This method is **static**.

***

### __callStatic

Call adapter methods statically

```php
public static __callStatic(string $method, mixed $args): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$args` | **mixed** |  |

yxorP::get('REQUEST')
