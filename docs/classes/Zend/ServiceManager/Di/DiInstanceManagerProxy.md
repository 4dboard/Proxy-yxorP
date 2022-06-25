***

# DiInstanceManagerProxy

* Full name: `\Zend\ServiceManager\Di\DiInstanceManagerProxy`
* Parent class: [`InstanceManager`](../../Di/InstanceManager.md)

## Properties

### diInstanceManager

```php
protected \Zend\Di\InstanceManager $diInstanceManager
```

***

### serviceLocator

```php
protected \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
```

***

## Methods

### __construct

Constructor

```php
public __construct(\Zend\Di\InstanceManager $diInstanceManager, \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$diInstanceManager` | **\Zend\Di\InstanceManager** |  |
| `$serviceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |

***

### hasSharedInstance

Determine if we have a shared instance by class or alias

```php
public hasSharedInstance( $classOrAlias): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classOrAlias` | **** |  |

***

### getSharedInstance

Get shared instance

```php
public getSharedInstance( $classOrAlias): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classOrAlias` | **** |  |

yxorP::get('REQUEST')
