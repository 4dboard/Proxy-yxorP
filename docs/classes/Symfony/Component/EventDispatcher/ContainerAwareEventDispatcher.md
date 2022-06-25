***

# ContainerAwareEventDispatcher

Lazily loads listeners and subscribers from the dependency injection
container.



* Full name: `\Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher`
* Parent class: [`\Symfony\Component\EventDispatcher\EventDispatcher`](./EventDispatcher.md)



## Properties


### container



```php
private $container
```






***

### listenerIds

The service IDs of the event listeners and subscribers.

```php
private $listenerIds
```






***

### listeners

The services registered as listeners.

```php
private $listeners
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

### addListenerService

Adds a service as event listener.

```php
public addListenerService(string $eventName, array $callback, int $priority): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **string** | Event for which the listener is added |
| `$callback` | **array** | The service ID of the listener service &amp; the method<br />name that has to be called |
| `$priority` | **int** | The higher this value, the earlier an event listener<br />will be triggered in the chain.<br />Defaults to 0. |




***

### removeListener

Removes an event listener from the specified events.

```php
public removeListener(mixed $eventName, mixed $listener): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** | The event to remove a listener from |
| `$listener` | **mixed** | The listener to remove |




***

### hasListeners

Checks whether an event has any registered listeners.

```php
public hasListeners(mixed $eventName = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** | The name of the event |


**Return Value:**

true if the specified event has any listeners, false otherwise



***

### getListeners

Gets the listeners of a specific event or all listeners sorted by descending priority.

```php
public getListeners(mixed $eventName = null): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** | The name of the event |


**Return Value:**

The event listeners for the specified event, or all event listeners by event name



***

### getListenerPriority

Gets the listener priority for a specific event.

```php
public getListenerPriority(mixed $eventName, mixed $listener): int|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** | The name of the event |
| `$listener` | **mixed** | The listener |


**Return Value:**

The event listener priority



***

### addSubscriberService

Adds a service as event subscriber.

```php
public addSubscriberService(string $serviceId, string $class): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceId` | **string** | The service ID of the subscriber service |
| `$class` | **string** | The service&#039;s class name (which must implement EventSubscriberInterface) |




***

### getContainer



```php
public getContainer(): mixed
```











***

### lazyLoad

Lazily loads listeners for this event from the dependency injection
container.

```php
protected lazyLoad(string $eventName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **string** | The name of the event to dispatch. The name of<br />the event is the name of the method that is<br />invoked on listeners. |




***


## Inherited methods


### dispatch

Dispatches an event to all registered listeners.

```php
public dispatch(mixed $eventName, \Symfony\Component\EventDispatcher\Event $event = null): \Symfony\Component\EventDispatcher\Event
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** | The name of the event to dispatch. The name of<br />the event is the name of the method that is<br />invoked on listeners. |
| `$event` | **\Symfony\Component\EventDispatcher\Event** | The event to pass to the event handlers/listeners<br />If not supplied, an empty Event instance is created |




***

### getListeners

Gets the listeners of a specific event or all listeners sorted by descending priority.

```php
public getListeners(mixed $eventName = null): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** | The name of the event |


**Return Value:**

The event listeners for the specified event, or all event listeners by event name



***

### getListenerPriority

Gets the listener priority for a specific event.

```php
public getListenerPriority(string $eventName, callable $listener): int|null
```

Returns null if the event or the listener does not exist.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **string** | The name of the event |
| `$listener` | **callable** | The listener |


**Return Value:**

The event listener priority



***

### hasListeners

Checks whether an event has any registered listeners.

```php
public hasListeners(mixed $eventName = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** | The name of the event |


**Return Value:**

true if the specified event has any listeners, false otherwise



***

### addListener

Adds an event listener that listens on the specified events.

```php
public addListener(mixed $eventName, mixed $listener, mixed $priority): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** | The event to listen on |
| `$listener` | **mixed** | The listener |
| `$priority` | **mixed** | The higher this value, the earlier an event<br />listener will be triggered in the chain (defaults to 0) |




***

### removeListener

Removes an event listener from the specified events.

```php
public removeListener(mixed $eventName, mixed $listener): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** | The event to remove a listener from |
| `$listener` | **mixed** | The listener to remove |




***

### addSubscriber

Adds an event subscriber.

```php
public addSubscriber(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subscriber` | **\Symfony\Component\EventDispatcher\EventSubscriberInterface** |  |




***

### removeSubscriber



```php
public removeSubscriber(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subscriber` | **\Symfony\Component\EventDispatcher\EventSubscriberInterface** |  |




***

### doDispatch

Triggers the listeners of an event.

```php
protected doDispatch(callable[] $listeners, string $eventName, \Symfony\Component\EventDispatcher\Event $event): mixed
```

This method can be overridden to add functionality that is executed
for each listener.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$listeners` | **callable[]** | The event listeners |
| `$eventName` | **string** | The name of the event to dispatch |
| `$event` | **\Symfony\Component\EventDispatcher\Event** | The event object to pass to the event handlers/listeners |




***

### sortListeners

Sorts the internal list of listeners for the given event by priority.

```php
private sortListeners(string $eventName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **string** | The name of the event |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
