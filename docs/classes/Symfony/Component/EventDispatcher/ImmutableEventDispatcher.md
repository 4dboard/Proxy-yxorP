***

# ImmutableEventDispatcher

A read-only proxy for an event dispatcher.

* Full name: `\Symfony\Component\EventDispatcher\ImmutableEventDispatcher`
* This class implements:
  [`\Symfony\Component\EventDispatcher\EventDispatcherInterface`](./EventDispatcherInterface.md)

## Properties

### dispatcher

```php
private $dispatcher
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dispatcher` | **\Symfony\Component\EventDispatcher\EventDispatcherInterface** |  |

***

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

### removeSubscriber

```php
public removeSubscriber(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subscriber` | **\Symfony\Component\EventDispatcher\EventSubscriberInterface** |  |

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

{@inheritdoc}

```php
public getListenerPriority(mixed $eventName, mixed $listener): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |
| `$listener` | **mixed** |  |

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

true if the specified event has any listeners, false otherwise yxorP::get('REQUEST')
