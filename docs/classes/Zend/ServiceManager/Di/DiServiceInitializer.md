***

# DiServiceInitializer

* Full name: `\Zend\ServiceManager\Di\DiServiceInitializer`
* Parent class: [`Di`](../../Di/Di.md)
* This class implements:
  [`\Zend\ServiceManager\InitializerInterface`](../InitializerInterface.md)

## Properties

### di

```php
protected \Zend\Di\Di $di
```

***

### diInstanceManagerProxy

```php
protected \Zend\ServiceManager\Di\DiInstanceManagerProxy $diInstanceManagerProxy
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
public __construct(\Zend\Di\Di $di, \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator, null|\Zend\ServiceManager\Di\DiInstanceManagerProxy $diImProxy = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$di` | **\Zend\Di\Di** |  |
| `$serviceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |
| `$diImProxy` | **null&#124;\Zend\ServiceManager\Di\DiInstanceManagerProxy** |  |

***

### initialize

Initialize

```php
public initialize( $instance, \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$instance` | **** |  |
| `$serviceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |

yxorP::get('REQUEST')
