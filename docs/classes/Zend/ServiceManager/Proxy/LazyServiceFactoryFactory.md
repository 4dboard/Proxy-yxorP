***

# LazyServiceFactoryFactory

Service factory responsible of instantiating {@see \Zend\ServiceManager\Proxy\LazyServiceFactory} and configuring it
starting from application configuration

* Full name: `\Zend\ServiceManager\Proxy\LazyServiceFactoryFactory`
* This class implements:
  [`\Zend\ServiceManager\FactoryInterface`](../FactoryInterface.md)

## Methods

### createService

Create service

```php
public createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator): \Zend\ServiceManager\Proxy\LazyServiceFactory
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |

yxorP::get('REQUEST')
