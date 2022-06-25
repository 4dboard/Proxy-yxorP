***

# EventDispatcher

Light-weight event dispatcher.

This implementation focuses primarily on performance, and dispatching events for certain classes. It is not a general
purpose event dispatcher.

* Full name: `\JMS\Serializer\EventDispatcher\EventDispatcher`
* This class implements:
  [`\JMS\Serializer\EventDispatcher\EventDispatcherInterface`](./EventDispatcherInterface.md)

## Properties

### listeners

```php
private $listeners
```

***

### classListeners

```php
private $classListeners
```

***

## Methods

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

The listeners/subscribers are called in the same order in which they were added to the dispatcher.

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

An array of listeners yxorP::get('REQUEST')
