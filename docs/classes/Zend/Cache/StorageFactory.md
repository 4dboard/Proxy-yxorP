***

# StorageFactory

* Full name: `\Zend\Cache\StorageFactory`
* This class is an **Abstract class**

## Properties

### adapters

Plugin manager for loading adapters

```php
protected static null|\Zend\Cache\Storage\AdapterPluginManager $adapters
```

* This property is **static**.

***

### plugins

Plugin manager for loading plugins

```php
protected static null|\Zend\Cache\Storage\PluginManager $plugins
```

* This property is **static**.

***

## Methods

### factory

The storage factory This can instantiate storage adapters and plugins.

```php
public static factory(array|\Traversable $cfg): \Zend\Cache\Storage\StorageInterface
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cfg` | **array&#124;\Traversable** |  |

***

### adapterFactory

Instantiate a storage adapter

```php
public static adapterFactory(string|\Zend\Cache\Storage\StorageInterface $adapterName, array|\Traversable|\Zend\Cache\Storage\Adapter\AdapterOptions $options = []): \Zend\Cache\Storage\StorageInterface
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapterName` | **string&#124;\Zend\Cache\Storage\StorageInterface** |  |
| `$options` | **array&#124;\Traversable&#124;\Zend\Cache\Storage\Adapter\AdapterOptions** |  |

***

### getAdapterPluginManager

Get the adapter plugin manager

```php
public static getAdapterPluginManager(): \Zend\Cache\Storage\AdapterPluginManager
```

* This method is **static**.

***

### setAdapterPluginManager

Change the adapter plugin manager

```php
public static setAdapterPluginManager(\Zend\Cache\Storage\AdapterPluginManager $adapters): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapters` | **\Zend\Cache\Storage\AdapterPluginManager** |  |

***

### resetAdapterPluginManager

Resets the internal adapter plugin manager

```php
public static resetAdapterPluginManager(): void
```

* This method is **static**.

***

### pluginFactory

Instantiate a storage plugin

```php
public static pluginFactory(string|\Zend\Cache\Storage\Plugin\PluginInterface $pluginName, array|\Traversable|\Zend\Cache\Storage\Plugin\PluginOptions $options = []): \Zend\Cache\Storage\Plugin\PluginInterface
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pluginName` | **string&#124;\Zend\Cache\Storage\Plugin\PluginInterface** |  |
| `$options` | **array&#124;\Traversable&#124;\Zend\Cache\Storage\Plugin\PluginOptions** |  |

***

### getPluginManager

Get the plugin manager

```php
public static getPluginManager(): \Zend\Cache\Storage\PluginManager
```

* This method is **static**.

***

### setPluginManager

Change the plugin manager

```php
public static setPluginManager(\Zend\Cache\Storage\PluginManager $plugins): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plugins` | **\Zend\Cache\Storage\PluginManager** |  |

***

### resetPluginManager

Resets the internal plugin manager

```php
public static resetPluginManager(): void
```

* This method is **static**.

yxorP::get('REQUEST')
