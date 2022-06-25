***

# LazyHandlerRegistry





* Full name: `\JMS\Serializer\Handler\LazyHandlerRegistry`
* Parent class: [`\JMS\Serializer\Handler\HandlerRegistry`](./HandlerRegistry.md)



## Properties


### container



```php
private $container
```






***

### initializedHandlers



```php
private $initializedHandlers
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, array $handlers = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Symfony\Component\DependencyInjection\ContainerInterface** |  |
| `$handlers` | **array** |  |




***

### registerHandler

Registers a handler in the registry.

```php
public registerHandler(mixed $direction, mixed $typeName, mixed $format, mixed $handler): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$direction` | **mixed** | one of the GraphNavigator::DIRECTION_??? constants |
| `$typeName` | **mixed** |  |
| `$format` | **mixed** |  |
| `$handler` | **mixed** | function(VisitorInterface, mixed $data, array $type): mixed |




***

### getHandler



```php
public getHandler(mixed $direction, mixed $typeName, mixed $format): callable|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$direction` | **mixed** | one of the GraphNavigator::DIRECTION_??? constants |
| `$typeName` | **mixed** |  |
| `$format` | **mixed** |  |




***


## Inherited methods


### getDefaultMethod



```php
public static getDefaultMethod(mixed $direction, mixed $type, mixed $format): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$direction` | **mixed** |  |
| `$type` | **mixed** |  |
| `$format` | **mixed** |  |




***

### __construct



```php
public __construct(array $handlers = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handlers` | **array** |  |




***

### registerSubscribingHandler



```php
public registerSubscribingHandler(\JMS\Serializer\Handler\SubscribingHandlerInterface $handler): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **\JMS\Serializer\Handler\SubscribingHandlerInterface** |  |




***

### registerHandler

Registers a handler in the registry.

```php
public registerHandler(mixed $direction, mixed $typeName, mixed $format, mixed $handler): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$direction` | **mixed** | one of the GraphNavigator::DIRECTION_??? constants |
| `$typeName` | **mixed** |  |
| `$format` | **mixed** |  |
| `$handler` | **mixed** | function(VisitorInterface, mixed $data, array $type): mixed |




***

### getHandler



```php
public getHandler(mixed $direction, mixed $typeName, mixed $format): callable|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$direction` | **mixed** | one of the GraphNavigator::DIRECTION_??? constants |
| `$typeName` | **mixed** |  |
| `$format` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
