***

# DiAbstractServiceFactory





* Full name: `\Zend\ServiceManager\Di\DiAbstractServiceFactory`
* Parent class: [`\Zend\ServiceManager\Di\DiServiceFactory`](./DiServiceFactory.md)
* This class implements:
[`\Zend\ServiceManager\AbstractFactoryInterface`](../AbstractFactoryInterface.md)




## Methods


### __construct

Constructor

```php
public __construct(\Zend\Di\Di $di, null|string|\Zend\Di\InstanceManager $useServiceLocator = self::USE_SL_NONE): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$di` | **\Zend\Di\Di** |  |
| `$useServiceLocator` | **null&#124;string&#124;\Zend\Di\InstanceManager** |  |




***

### createServiceWithName

Create service with name

```php
public createServiceWithName(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator, mixed $name, mixed $requestedName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |
| `$name` | **mixed** |  |
| `$requestedName` | **mixed** |  |




***

### canCreateServiceWithName

Determine if we can create a service with name

```php
public canCreateServiceWithName(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator, mixed $name, mixed $requestedName): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |
| `$name` | **mixed** |  |
| `$requestedName` | **mixed** |  |




***


## Inherited methods


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




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
