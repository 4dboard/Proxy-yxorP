***

# Dispatcher

Event Dispatching class.

This class provides a bridge to the Symfony2 EventDispatcher. At current this is provided by inheritance but future
iterations should solve this by making it an adapter pattern.

The class is implemented as (mockable) Singleton as this was the best solution to make the functionality available in
every class of the project.

* Full name: `\phpDocumentor\Event\Dispatcher`
* Parent
  class: [`\Symfony\Component\EventDispatcher\EventDispatcher`](../../Symfony/Component/EventDispatcher/EventDispatcher.md)

## Properties

### instances

```php
protected static \phpDocumentor\Event\Dispatcher[] $instances
```

* This property is **static**.

***

## Methods

### __construct

Override constructor to make this singleton.

```php
protected __construct(): mixed
```

***

### getInstance

Returns a named instance of the Event Dispatcher.

```php
public static getInstance(string $name = &#039;default&#039;): \phpDocumentor\Event\Dispatcher
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### setInstance

Sets a names instance of the Event Dispatcher.

```php
public static setInstance(string $name, \phpDocumentor\Event\Dispatcher $instance): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$instance` | **\phpDocumentor\Event\Dispatcher** |  |

***

### dispatch

Dispatches an event.

```php
public dispatch(string $eventName, \Symfony\Component\EventDispatcher\Event $event = null): \phpDocumentor\Event\EventAbstract
```

Please note that the typehint of this method indicates a Symfony Event and this DocBlock a phpDocumentor event. This is
because of inheritance and that the dispatch signature must remain intact.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **string** |  |
| `$event` | **\Symfony\Component\EventDispatcher\Event** |  |

***

### addListener

Adds a callable that will listen on the named event.

```php
public addListener(string $eventName, callable $listener, int $priority): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **string** |  |
| `$listener` | **callable** |  |
| `$priority` | **int** |  |

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
| `$eventName` | **
mixed** | The name of the event to dispatch. The name of<br />the event is the name of the method that is<br />invoked on listeners. |
| `$event` | **
\Symfony\Component\EventDispatcher\Event** | The event to pass to the event handlers/listeners<br />If not supplied, an empty Event instance is created |

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
| `$priority` | **
mixed** | The higher this value, the earlier an event<br />listener will be triggered in the chain (defaults to 0) |

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

This method can be overridden to add functionality that is executed for each listener.

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

yxorP::get('REQUEST')
