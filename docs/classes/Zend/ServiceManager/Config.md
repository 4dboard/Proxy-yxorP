***

# Config





* Full name: `\Zend\ServiceManager\Config`
* This class implements:
[`\Zend\ServiceManager\ConfigInterface`](./ConfigInterface.md)



## Properties


### config



```php
protected array $config
```






***

## Methods


### __construct

Constructor

```php
public __construct(array $config = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***

### getAllowOverride

Get allow override

```php
public getAllowOverride(): null|bool
```











***

### getFactories

Get factories

```php
public getFactories(): array
```











***

### getAbstractFactories

Get abstract factories

```php
public getAbstractFactories(): array
```











***

### getInvokables

Get invokables

```php
public getInvokables(): array
```











***

### getServices

Get services

```php
public getServices(): array
```











***

### getAliases

Get aliases

```php
public getAliases(): array
```











***

### getInitializers

Get initializers

```php
public getInitializers(): array
```











***

### getShared

Get shared

```php
public getShared(): array
```











***

### getDelegators

Get the delegator services map, with keys being the services acting as delegates,
and values being the delegator factories names

```php
public getDelegators(): array
```











***

### configureServiceManager

Configure service manager

```php
public configureServiceManager(\Zend\ServiceManager\ServiceManager $serviceManager): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceManager` | **\Zend\ServiceManager\ServiceManager** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
