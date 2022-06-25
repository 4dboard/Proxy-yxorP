***

# LazyEventDispatcher

Light-weight event dispatcher.

This implementation focuses primarily on performance, and dispatching
events for certain classes. It is not a general purpose event dispatcher.

* Full name: `\JMS\Serializer\EventDispatcher\LazyEventDispatcher`
* Parent class: [`\JMS\Serializer\EventDispatcher\EventDispatcher`](./EventDispatcher.md)



## Properties


### container



```php
private $container
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Symfony\Component\DependencyInjection\ContainerInterface** |  |




***

### initializeListeners



```php
protected initializeListeners(mixed $eventName, mixed $loweredClass, mixed $format): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |
| `$loweredClass` | **mixed** |  |
| `$format` | **mixed** |  |


**Return Value:**

An array of listeners



***


## Inherited methods


### getDefaultMethodName



```php
public static getDefaultMethodName(mixed $eventName): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |




***

### setListeners

Sets the listeners.

```php
public setListeners(array $listeners): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$listeners` | **array** |  |




***

### addListener

Adds a listener.

```php
public addListener(mixed $eventName, mixed $callable, mixed $class = null, mixed $format = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |
| `$callable` | **mixed** |  |
| `$class` | **mixed** |  |
| `$format` | **mixed** |  |




***

### addSubscriber

Adds a subscribers.

```php
public addSubscriber(\JMS\Serializer\EventDispatcher\EventSubscriberInterface $subscriber): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subscriber` | **\JMS\Serializer\EventDispatcher\EventSubscriberInterface** |  |




***

### hasListeners

Returns whether there are listeners.

```php
public hasListeners(mixed $eventName, mixed $class, mixed $format): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |
| `$class` | **mixed** |  |
| `$format` | **mixed** |  |




***

### dispatch

Dispatches an event.

```php
public dispatch(mixed $eventName, mixed $class, mixed $format, \JMS\Serializer\EventDispatcher\Event $event): void
```

The listeners/subscribers are called in the same order in which they
were added to the dispatcher.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |
| `$class` | **mixed** |  |
| `$format` | **mixed** |  |
| `$event` | **\JMS\Serializer\EventDispatcher\Event** |  |




***

### initializeListeners



```php
protected initializeListeners(string $eventName, string $loweredClass, string $format): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **string** |  |
| `$loweredClass` | **string** |  |
| `$format` | **string** |  |


**Return Value:**

An array of listeners



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
