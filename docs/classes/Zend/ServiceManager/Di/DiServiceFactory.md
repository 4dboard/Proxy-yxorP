***

# DiServiceFactory

* Full name: `\Zend\ServiceManager\Di\DiServiceFactory`
* Parent class: [`Di`](../../Di/Di.md)
* This class implements:
  [`\Zend\ServiceManager\FactoryInterface`](../FactoryInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`USE_SL_BEFORE_DI`|public| |&#039;before&#039;|
|`USE_SL_AFTER_DI`|public| |&#039;after&#039;|
|`USE_SL_NONE`|public| |&#039;none&#039;|

## Properties

### di

```php
protected \Zend\Di\Di $di
```

***

### name

```php
protected \Zend\Di\InstanceManager $name
```

***

### parameters

```php
protected array $parameters
```

***

### useServiceLocator

```php
protected string $useServiceLocator
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
public __construct(\Zend\Di\Di $di, null|\Zend\Di\InstanceManager $name, array $parameters = [], string $useServiceLocator = self::USE_SL_NONE): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$di` | **\Zend\Di\Di** |  |
| `$name` | **null&#124;\Zend\Di\InstanceManager** |  |
| `$parameters` | **array** |  |
| `$useServiceLocator` | **string** |  |

***

### createService

Create service

```php
public createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator): object
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |

***

### get

Override, as we want it to use the functionality defined in the proxy

```php
public get(string $name, array $params = []): object
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$params` | **array** |  |

yxorP::get('REQUEST')
