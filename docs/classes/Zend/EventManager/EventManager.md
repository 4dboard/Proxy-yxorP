***

# EventManager

Event manager: notification system

Use the EventManager when you want to create a per-instance notification
system for your objects.

* Full name: `\Zend\EventManager\EventManager`
* This class implements:
[`\Zend\EventManager\EventManagerInterface`](./EventManagerInterface.md)



## Properties


### events

Subscribed events and their listeners

```php
protected array $events
```






***

### eventClass



```php
protected string $eventClass
```






***

### identifiers

Identifiers, used to pull shared signals from SharedEventManagerInterface instance

```php
protected array $identifiers
```






***

### sharedManager

Shared event manager

```php
protected false|null|\Zend\EventManager\SharedEventManagerInterface $sharedManager
```






***

## Methods


### __construct

Constructor

```php
public __construct(null|string|int|array|\Traversable $identifiers = null): mixed
```

Allows optionally specifying identifier(s) to use to pull signals from a
SharedEventManagerInterface.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$identifiers` | **null&#124;string&#124;int&#124;array&#124;\Traversable** |  |




***

### setEventClass

Set the event class to utilize

```php
public setEventClass(string $class): \Zend\EventManager\EventManager
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |




***

### setSharedManager

Set shared event manager

```php
public setSharedManager(\Zend\EventManager\SharedEventManagerInterface $sharedEventManager): \Zend\EventManager\EventManager
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sharedEventManager` | **\Zend\EventManager\SharedEventManagerInterface** |  |




***

### unsetSharedManager

Remove any shared event manager currently attached

```php
public unsetSharedManager(): void
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### getSharedManager

Get shared event manager

```php
public getSharedManager(): false|\Zend\EventManager\SharedEventManagerInterface
```

If one is not defined, but we have a static instance in
StaticEventManager, that one will be used and set in this instance.

If none is available in the StaticEventManager, a boolean false is
returned.









***

### getIdentifiers

Get the identifier(s) for this EventManager

```php
public getIdentifiers(): array
```











***

### setIdentifiers

Set the identifiers (overrides any currently set identifiers)

```php
public setIdentifiers(string|int|array|\Traversable $identifiers): \Zend\EventManager\EventManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$identifiers` | **string&#124;int&#124;array&#124;\Traversable** |  |


**Return Value:**

Provides a fluent interface



***

### addIdentifiers

Add some identifier(s) (appends to any currently set identifiers)

```php
public addIdentifiers(string|int|array|\Traversable $identifiers): \Zend\EventManager\EventManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$identifiers` | **string&#124;int&#124;array&#124;\Traversable** |  |


**Return Value:**

Provides a fluent interface



***

### trigger

Trigger all listeners for a given event

```php
public trigger(string|\Zend\EventManager\EventInterface $event, string|object $target = null, array|\ArrayAccess $argv = [], null|callable $callback = null): \Zend\EventManager\ResponseCollection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string&#124;\Zend\EventManager\EventInterface** |  |
| `$target` | **string&#124;object** | Object calling emit, or symbol describing target (such as static method name) |
| `$argv` | **array&#124;\ArrayAccess** | Array of arguments; typically, should be associative |
| `$callback` | **null&#124;callable** | Trigger listeners until return value of this callback evaluate to true |


**Return Value:**

All listener return values



***

### triggerUntil

Trigger listeners until return value of one causes a callback to
evaluate to true

```php
public triggerUntil(string|\Zend\EventManager\EventInterface $event, string|object $target, array|\ArrayAccess $argv = null, callable $callback = null): \Zend\EventManager\ResponseCollection
```

Triggers listeners until the provided callback evaluates the return
value of one as true, or until all listeners have been executed.




* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string&#124;\Zend\EventManager\EventInterface** |  |
| `$target` | **string&#124;object** | Object calling emit, or symbol describing target (such as static method name) |
| `$argv` | **array&#124;\ArrayAccess** | Array of arguments; typically, should be associative |
| `$callback` | **callable** |  |




***

### triggerEvent

Trigger an event instance.

```php
public triggerEvent(\Zend\EventManager\EventInterface $event): \Zend\EventManager\ResponseCollection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Zend\EventManager\EventInterface** |  |




***

### triggerEventUntil

Trigger an event instance, short-circuiting if a listener response evaluates true via the callback.

```php
public triggerEventUntil(callable $callback, \Zend\EventManager\EventInterface $event): \Zend\EventManager\ResponseCollection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** |  |
| `$event` | **\Zend\EventManager\EventInterface** |  |




***

### attach

Attach a listener to an event

```php
public attach(string|array|\Zend\EventManager\ListenerAggregateInterface $event, callable|int $callback = null, int $priority = 1): \Zend\Stdlib\CallbackHandler|mixed
```

The first argument is the event, and the next argument describes a
callback that will respond to that event. A CallbackHandler instance
describing the event listener combination will be returned.

The last argument indicates a priority at which the event should be
executed. By default, this value is 1; however, you may set it for any
integer value. Higher values have higher priority (i.e., execute first).

You can specify "*" for the event name. In such cases, the listener will
be triggered for every event.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string&#124;array&#124;\Zend\EventManager\ListenerAggregateInterface** | An event or array of event names. If a ListenerAggregateInterface, proxies to {@link}. |
| `$callback` | **callable&#124;int** | If string $event provided, expects PHP callback; for a ListenerAggregateInterface $event, this will be the priority |
| `$priority` | **int** | If provided, the priority at which to register the callable |


**Return Value:**

CallbackHandler if attaching callable (to allow later unsubscribe); mixed if attaching aggregate



***

### attachAggregate

Attach a listener aggregate

```php
public attachAggregate(\Zend\EventManager\ListenerAggregateInterface $aggregate, int $priority = 1): mixed
```

Listener aggregates accept an EventManagerInterface instance, and call attach()
one or more times, typically to attach to multiple events using local
methods.




* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aggregate` | **\Zend\EventManager\ListenerAggregateInterface** |  |
| `$priority` | **int** | If provided, a suggested priority for the aggregate to use |


**Return Value:**

return value of {@link}



***

### detach

Unsubscribe a listener from an event

```php
public detach(\Zend\Stdlib\CallbackHandler|\Zend\EventManager\ListenerAggregateInterface $listener): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$listener` | **\Zend\Stdlib\CallbackHandler&#124;\Zend\EventManager\ListenerAggregateInterface** |  |


**Return Value:**

Returns true if event and listener found, and unsubscribed; returns false if either event or listener not found



***

### detachAggregate

Detach a listener aggregate

```php
public detachAggregate(\Zend\EventManager\ListenerAggregateInterface $aggregate): mixed
```

Listener aggregates accept an EventManagerInterface instance, and call detach()
of all previously attached listeners.




* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aggregate` | **\Zend\EventManager\ListenerAggregateInterface** |  |


**Return Value:**

return value of {@link}



***

### getEvents

Retrieve all registered events

```php
public getEvents(): array
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### getListeners

Retrieve all listeners for a given event

```php
public getListeners(string $event): \Zend\Stdlib\PriorityQueue
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |




***

### clearListeners

Clear all listeners for a given event

```php
public clearListeners(string $event): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |




***

### prepareArgs

Prepare arguments

```php
public prepareArgs(array $args): \ArrayObject
```

Use this method if you want to be able to modify arguments from within a
listener. It returns an ArrayObject of the arguments, which may then be
passed to trigger().






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** |  |




***

### triggerListeners

Trigger listeners

```php
protected triggerListeners(string $event, \Zend\EventManager\EventInterface $e, null|callable $callback = null): \Zend\EventManager\ResponseCollection
```

Actual functionality for triggering listeners, to which trigger() delegate.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** | Event name |
| `$e` | **\Zend\EventManager\EventInterface** |  |
| `$callback` | **null&#124;callable** |  |




***

### getSharedListeners

Get list of all listeners attached to the shared event manager for
identifiers registered by this instance

```php
protected getSharedListeners(string $event): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |




***

### insertListeners

Add listeners to the master queue of listeners

```php
protected insertListeners(\Zend\Stdlib\PriorityQueue $masterListeners, array|\Traversable $listeners): void
```

Used to inject shared listeners and wildcard listeners.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$masterListeners` | **\Zend\Stdlib\PriorityQueue** |  |
| `$listeners` | **array&#124;\Traversable** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
