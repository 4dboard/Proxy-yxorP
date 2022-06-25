***

# TraceableEventDispatcher

Collects some data about event listeners.

This event dispatcher delegates the dispatching to another one.

* Full name: `\Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcher`
* This class implements:
  [`\Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcherInterface`](./TraceableEventDispatcherInterface.md)

## Properties

### logger

```php
protected $logger
```

***

### stopwatch

```php
protected $stopwatch
```

***

### called

```php
private $called
```

***

### dispatcher

```php
private $dispatcher
```

***

### wrappedListeners

```php
private $wrappedListeners
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher, \Symfony\Component\Stopwatch\Stopwatch $stopwatch, \Psr\Log\LoggerInterface $logger = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dispatcher` | **\Symfony\Component\EventDispatcher\EventDispatcherInterface** |  |
| `$stopwatch` | **\Symfony\Component\Stopwatch\Stopwatch** |  |
| `$logger` | **\Psr\Log\LoggerInterface** |  |

***

### addListener

{@inheritdoc}

```php
public addListener(mixed $eventName, mixed $listener, mixed $priority): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |
| `$listener` | **mixed** |  |
| `$priority` | **mixed** |  |

***

### addSubscriber

{@inheritdoc}

```php
public addSubscriber(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subscriber` | **\Symfony\Component\EventDispatcher\EventSubscriberInterface** |  |

***

### removeListener

{@inheritdoc}

```php
public removeListener(mixed $eventName, mixed $listener): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |
| `$listener` | **mixed** |  |

***

### removeSubscriber

{@inheritdoc}

```php
public removeSubscriber(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subscriber` | **\Symfony\Component\EventDispatcher\EventSubscriberInterface** |  |

***

### getListeners

{@inheritdoc}

```php
public getListeners(mixed $eventName = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |

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

{@inheritdoc}

```php
public hasListeners(mixed $eventName = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |

***

### dispatch

{@inheritdoc}

```php
public dispatch(mixed $eventName, \Symfony\Component\EventDispatcher\Event $event = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |
| `$event` | **\Symfony\Component\EventDispatcher\Event** |  |

***

### getCalledListeners

Gets the called listeners.

```php
public getCalledListeners(): array
```

**Return Value:**

An array of called listeners



***

### getNotCalledListeners

Gets the not called listeners.

```php
public getNotCalledListeners(): array
```

**Return Value:**

An array of not called listeners



***

### __call

Proxies all method calls to the original event dispatcher.

```php
public __call(string $method, array $arguments): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | The method name |
| `$arguments` | **array** | The method arguments |

***

### preDispatch

Called before dispatching the event.

```php
protected preDispatch(string $eventName, \Symfony\Component\EventDispatcher\Event $event): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **string** | The event name |
| `$event` | **\Symfony\Component\EventDispatcher\Event** | The event |

***

### postDispatch

Called after dispatching the event.

```php
protected postDispatch(string $eventName, \Symfony\Component\EventDispatcher\Event $event): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **string** | The event name |
| `$event` | **\Symfony\Component\EventDispatcher\Event** | The event |

***

### preProcess

```php
private preProcess(mixed $eventName): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |

***

### postProcess

```php
private postProcess(mixed $eventName): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |

***

### getListenerInfo

Returns information about the listener.

```php
private getListenerInfo(object $listener, string $eventName): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$listener` | **object** | The listener |
| `$eventName` | **string** | The event name |

**Return Value:**

Information about the listener



***

### sortListenersByPriority

```php
private sortListenersByPriority(mixed $a, mixed $b): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$a` | **mixed** |  |
| `$b` | **mixed** |  |

yxorP::get('REQUEST')
