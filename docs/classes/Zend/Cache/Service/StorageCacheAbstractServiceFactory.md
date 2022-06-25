***

# StorageCacheAbstractServiceFactory

Storage cache factory for multiple caches.

* Full name: `\Zend\Cache\Service\StorageCacheAbstractServiceFactory`
* This class implements:
  [`\Zend\ServiceManager\AbstractFactoryInterface`](../../ServiceManager/AbstractFactoryInterface.md)

## Properties

### config

```php
protected array $config
```

***

### configKey

Configuration key for cache objects

```php
protected string $configKey
```

***

## Methods

### canCreateServiceWithName

Determine if we can create a service with name

```php
public canCreateServiceWithName(\Zend\ServiceManager\ServiceLocatorInterface $services, string $name, string $requestedName): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$services` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |
| `$name` | **string** |  |
| `$requestedName` | **string** |  |

***

### createServiceWithName

Create service with name

```php
public createServiceWithName(\Zend\ServiceManager\ServiceLocatorInterface $services, string $name, string $requestedName): \Zend\Cache\Storage\StorageInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$services` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |
| `$name` | **string** |  |
| `$requestedName` | **string** |  |

***

### getConfig

Retrieve cache configuration, if any

```php
protected getConfig(\Zend\ServiceManager\ServiceLocatorInterface $services): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$services` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |

yxorP::get('REQUEST')
