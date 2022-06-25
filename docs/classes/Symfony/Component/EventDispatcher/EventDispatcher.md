***

# EventDispatcher

The EventDispatcherInterface is the central point of Symfony's event listener system.

Listeners are registered on the manager and events are dispatched through the manager.

* Full name: `\Symfony\Component\EventDispatcher\EventDispatcher`
* This class implements:
  [`\Symfony\Component\EventDispatcher\EventDispatcherInterface`](./EventDispatcherInterface.md)

## Properties

### listeners

```php
private $listeners
```

***

### sorted

```php
private $sorted
```

***

## Methods

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
