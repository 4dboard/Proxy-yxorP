***

# PatternFactory

* Full name: `\Zend\Cache\PatternFactory`
* This class is an **Abstract class**

## Properties

### plugins

The pattern manager

```php
protected static null|\Zend\Cache\PatternPluginManager $plugins
```

* This property is **static**.

***

## Methods

### factory

Instantiate a cache pattern

```php
public static factory(string|\Zend\Cache\Pattern\PatternInterface $patternName, array|\Traversable|\Zend\Cache\Pattern\PatternOptions $options = []): \Zend\Cache\Pattern\PatternInterface
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$patternName` | **string&#124;\Zend\Cache\Pattern\PatternInterface** |  |
| `$options` | **array&#124;\Traversable&#124;\Zend\Cache\Pattern\PatternOptions** |  |

***

### getPluginManager

Get the pattern plugin manager

```php
public static getPluginManager(): \Zend\Cache\PatternPluginManager
```

* This method is **static**.

***

### setPluginManager

Set the pattern plugin manager

```php
public static setPluginManager(\Zend\Cache\PatternPluginManager $plugins): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plugins` | **\Zend\Cache\PatternPluginManager** |  |

***

### resetPluginManager

Reset pattern plugin manager to default

```php
public static resetPluginManager(): void
```

* This method is **static**.

yxorP::get('REQUEST')
