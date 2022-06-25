***

# LazyServiceFactory

Delegator factory responsible of instantiating lazy loading value holder proxies of given services at runtime

* Full name: `\Zend\ServiceManager\Proxy\LazyServiceFactory`
* This class implements:
  [`\Zend\ServiceManager\DelegatorFactoryInterface`](../DelegatorFactoryInterface.md)

**See Also:**

* https://github.com/Ocramius/ProxyManager/blob/master/docs/lazy-loading-value-holder.md -

## Properties

### proxyFactory

```php
protected \ProxyManager\Factory\LazyLoadingValueHolderFactory $proxyFactory
```

***

### servicesMap

```php
protected string[] $servicesMap
```

***

## Methods

### __construct

```php
public __construct(\ProxyManager\Factory\LazyLoadingValueHolderFactory $proxyFactory, string[] $servicesMap): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$proxyFactory` | **\ProxyManager\Factory\LazyLoadingValueHolderFactory** |  |
| `$servicesMap` | **string[]** | a map of service names to class names of their<br />respective classes |

***

### createDelegatorWithName

A factory that creates delegates of a given service

```php
public createDelegatorWithName(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator, mixed $name, mixed $requestedName, mixed $callback): object|\ProxyManager\Proxy\LazyLoadingInterface|\ProxyManager\Proxy\ValueHolderInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceLocator` | **
\Zend\ServiceManager\ServiceLocatorInterface** | the service locator which requested the service |
| `$name` | **mixed** | the normalized service name |
| `$requestedName` | **mixed** | the requested service name |
| `$callback` | **mixed** | the callback that is responsible for creating the service |

yxorP::get('REQUEST')
