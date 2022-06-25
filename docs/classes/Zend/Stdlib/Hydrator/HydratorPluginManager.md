***

# HydratorPluginManager

Plugin manager implementation for hydrators.

Enforces that adapters retrieved are instances of HydratorInterface

* Full name: `\Zend\Stdlib\Hydrator\HydratorPluginManager`
* Parent class: [`\Zend\Hydrator\HydratorPluginManager`](../../Hydrator/HydratorPluginManager.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.






## Inherited methods


### validatePlugin

Validate the plugin

```php
public validatePlugin(mixed $plugin): void
```

Checks that the filter loaded is either a valid callback or an instance
of FilterInterface.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plugin` | **mixed** |  |




***

### __construct

Constructor

```php
public __construct(\Zend\ServiceManager\ConfigInterface $config = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Zend\ServiceManager\ConfigInterface** |  |




***

### get

Retrieve a registered instance

```php
public get(string $name, bool $usePeeringServiceManagers = true): object|array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$usePeeringServiceManagers` | **bool** |  |




***

### setService

Register a service with the locator

```php
public setService(string $name, mixed $service): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$service` | **mixed** |  |




***

### setServiceLocator

Set the main service locator so factories can have access to it to pull deps

```php
public setServiceLocator(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator): \Zend\ServiceManager\AbstractPluginManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |




***

### getServiceLocator

Get the main plugin manager. Useful for fetching dependencies from within factories.

```php
public getServiceLocator(): \Zend\ServiceManager\ServiceLocatorInterface
```











***

### createFromInvokable

Attempt to create an instance via an invokable class

```php
protected createFromInvokable(string $canonicalName, string $requestedName): null|\stdClass
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$canonicalName` | **string** |  |
| `$requestedName` | **string** |  |




***

### createFromFactory

Attempt to create an instance via a factory

```php
protected createFromFactory(string $canonicalName, string $requestedName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$canonicalName` | **string** |  |
| `$requestedName` | **string** |  |




***

### createServiceViaCallback

Create service via callback

```php
protected createServiceViaCallback(callable $callable, string $cName, string $rName): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** |  |
| `$cName` | **string** |  |
| `$rName` | **string** |  |




***

### tryThrowingServiceLocatorUsageException



```php
private tryThrowingServiceLocatorUsageException(string $serviceName, bool $isAutoInvokable, \Exception $exception): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceName` | **string** |  |
| `$isAutoInvokable` | **bool** |  |
| `$exception` | **\Exception** |  |




***

### setAllowOverride

Set allow override

```php
public setAllowOverride( $allowOverride): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allowOverride` | **** |  |




***

### getAllowOverride

Get allow override

```php
public getAllowOverride(): bool
```











***

### setShareByDefault

Set flag indicating whether services are shared by default

```php
public setShareByDefault(bool $shareByDefault): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shareByDefault` | **bool** |  |




***

### shareByDefault

Are services shared by default?

```php
public shareByDefault(): bool
```











***

### setThrowExceptionInCreate

Set throw exceptions in create

```php
public setThrowExceptionInCreate(bool $throwExceptionInCreate): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$throwExceptionInCreate` | **bool** |  |




***

### getThrowExceptionInCreate

Get throw exceptions in create

```php
public getThrowExceptionInCreate(): bool
```











***

### setRetrieveFromPeeringManagerFirst

Set flag indicating whether to pull from peering manager before attempting creation

```php
public setRetrieveFromPeeringManagerFirst(bool $retrieveFromPeeringManagerFirst = true): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$retrieveFromPeeringManagerFirst` | **bool** |  |




***

### retrieveFromPeeringManagerFirst

Should we retrieve from the peering manager prior to attempting to create a service?

```php
public retrieveFromPeeringManagerFirst(): bool
```











***

### setInvokableClass

Set invokable class

```php
public setInvokableClass(string $name, string $invokableClass, bool $shared = null): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$invokableClass` | **string** |  |
| `$shared` | **bool** |  |




***

### setFactory

Set factory

```php
public setFactory(string $name, string|\Zend\ServiceManager\FactoryInterface|callable $factory, bool $shared = null): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$factory` | **string&#124;\Zend\ServiceManager\FactoryInterface&#124;callable** |  |
| `$shared` | **bool** |  |




***

### addAbstractFactory

Add abstract factory

```php
public addAbstractFactory(\Zend\ServiceManager\AbstractFactoryInterface|string $factory, bool $topOfStack = true): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$factory` | **\Zend\ServiceManager\AbstractFactoryInterface&#124;string** |  |
| `$topOfStack` | **bool** |  |




***

### addDelegator

Sets the given service name as to be handled by a delegator factory

```php
public addDelegator(string $serviceName, string $delegatorFactoryName): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceName` | **string** | name of the service being the delegate |
| `$delegatorFactoryName` | **string** | name of the service being the delegator factory |




***

### addInitializer

Add initializer

```php
public addInitializer(callable|\Zend\ServiceManager\InitializerInterface $initializer, bool $topOfStack = true): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$initializer` | **callable&#124;\Zend\ServiceManager\InitializerInterface** |  |
| `$topOfStack` | **bool** |  |




***

### setShared



```php
public setShared(string $name, bool $isShared): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$isShared` | **bool** |  |




***

### isShared



```php
public isShared(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### resolveAlias

Resolve the alias for the given canonical name

```php
protected resolveAlias(string $cName): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cName` | **string** | The canonical name to resolve |


**Return Value:**

The resolved canonical name



***

### create

Create an instance of the requested service

```php
public create(string|array $name): bool|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;array** |  |




***

### createDelegatorCallback

Creates a callback that uses a delegator to create a service

```php
private createDelegatorCallback(\Zend\ServiceManager\DelegatorFactoryInterface|callable $delegatorFactory, string $rName, string $cName, callable $creationCallback): callable
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$delegatorFactory` | **\Zend\ServiceManager\DelegatorFactoryInterface&#124;callable** | the delegator factory |
| `$rName` | **string** | requested service name |
| `$cName` | **string** | canonical service name |
| `$creationCallback` | **callable** | callback for instantiating the real service |




***

### doCreate

Actually creates the service

```php
protected doCreate(string $rName, string $cName): bool|mixed|null|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rName` | **string** | real service name |
| `$cName` | **string** | canonicalized service name |




***

### canCreate

Determine if we can create an instance.

```php
public canCreate(string|array $name, bool $checkAbstractFactories = true): bool
```

Proxies to has()




* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;array** |  |
| `$checkAbstractFactories` | **bool** |  |




***

### has

Determine if an instance exists.

```php
public has(string|array $name, bool $checkAbstractFactories = true, bool $usePeeringServiceManagers = true): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;array** | An array argument accepts exactly two values.<br />Example: array(&#039;canonicalName&#039;, &#039;requestName&#039;) |
| `$checkAbstractFactories` | **bool** |  |
| `$usePeeringServiceManagers` | **bool** |  |




***

### canCreateFromAbstractFactory

Determine if we can create an instance from an abstract factory.

```php
public canCreateFromAbstractFactory(string $cName, string $rName): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cName` | **string** |  |
| `$rName` | **string** |  |




***

### checkForCircularAliasReference

Ensure the alias definition will not result in a circular reference

```php
protected checkForCircularAliasReference(string $alias, string $nameOrAlias): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alias` | **string** |  |
| `$nameOrAlias` | **string** |  |




***

### setAlias



```php
public setAlias(string $alias, string $nameOrAlias): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alias` | **string** |  |
| `$nameOrAlias` | **string** |  |




***

### hasAlias

Determine if we have an alias

```php
public hasAlias(string $alias): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alias` | **string** |  |




***

### createScopedServiceManager

Create scoped service manager

```php
public createScopedServiceManager(string $peering = self::SCOPE_PARENT): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$peering` | **string** |  |




***

### addPeeringServiceManager

Add a peering relationship

```php
public addPeeringServiceManager(\Zend\ServiceManager\ServiceManager $manager, string $peering = self::SCOPE_PARENT): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$manager` | **\Zend\ServiceManager\ServiceManager** |  |
| `$peering` | **string** |  |




***

### canonicalizeName

Canonicalize name

```php
protected canonicalizeName(string $name): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getRegisteredServices

Retrieve a keyed list of all registered services. Handy for debugging!

```php
public getRegisteredServices(): array
```











***

### getCanonicalNames

Retrieve a keyed list of all canonical names. Handy for debugging!

```php
public getCanonicalNames(): array
```











***

### setCanonicalNames

Allows to override the canonical names lookup map with predefined
values.

```php
public setCanonicalNames(array $canonicalNames): \Zend\ServiceManager\ServiceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$canonicalNames` | **array** |  |




***

### retrieveFromPeeringManager

Attempt to retrieve an instance via a peering manager

```php
protected retrieveFromPeeringManager(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### loopPeeringServiceManagers

Loop over peering service managers.

```php
protected loopPeeringServiceManagers(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### createFromAbstractFactory

Attempt to create an instance via an abstract factory

```php
protected createFromAbstractFactory(string $canonicalName, string $requestedName): object|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$canonicalName` | **string** |  |
| `$requestedName` | **string** |  |




***

### checkNestedContextStart



```php
protected checkNestedContextStart(string $cName): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cName` | **string** |  |




***

### checkNestedContextStop



```php
protected checkNestedContextStop(bool $force = false): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$force` | **bool** |  |




***

### createDelegatorFromFactory



```php
protected createDelegatorFromFactory( $canonicalName,  $requestedName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$canonicalName` | **** |  |
| `$requestedName` | **** |  |




***

### isSubclassOf

Checks if the object has this class as one of its parents

```php
protected static isSubclassOf(string $className, string $type): bool
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |
| `$type` | **string** |  |



**See Also:**

* https://bugs.php.net/bug.php?id=53727 - * https://github.com/zendframework/zf2/pull/1807 - 

***

### unregisterService

Unregister a service

```php
protected unregisterService(string $canonical): void
```

Called when $allowOverride is true and we detect that a service being
added to the instance already exists. This will remove the duplicate
entry, and also any shared flags previously registered.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$canonical` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
