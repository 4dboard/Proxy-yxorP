***

# DebugEvent

Event representing some debugging information for phpDocumentor.

The information logged by this event will only be visible if the verbose option is provided to phpDocumentor.

* Full name: `\phpDocumentor\Event\DebugEvent`
* Parent class: [`\phpDocumentor\Event\EventAbstract`](./EventAbstract.md)

## Properties

### message

```php
protected string $message
```

***

### priority

```php
protected int $priority
```

***

### context

```php
protected string[] $context
```

***

## Methods

### setMessage

Provides the message that is to be shown with this event.

```php
public setMessage(string $message): \phpDocumentor\Event\DebugEvent
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |

***

### getMessage

Returns the message that was provided with this event.

```php
public getMessage(): string
```

***

### getPriority

Returns the priority level associated with this logging event.

```php
public getPriority(): int
```

***

### setContext

Sets additional context (parameters) to use when translating messages.

```php
public setContext(string[] $context): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **string[]** |  |

***

### getContext

Returns the context for this event.

```php
public getContext(): string[]
```

***

## Inherited methods

### __construct

Initializes this event with the given subject.

```php
public __construct(object $subject): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **object** |  |

***

### getSubject

Returns the object that is the subject of this event.

```php
public getSubject(): object
```

***

### createInstance

Creates a new instance of a derived object and return that.

```php
public static createInstance(object $subject): static
```

Used as convenience method for fluent interfaces.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **object** |  |

***

### isPropagationStopped

Returns whether further event listeners should be triggered.

```php
public isPropagationStopped(): bool
```

**Return Value:**

Whether propagation was already stopped for this event

**See Also:**

* \Symfony\Component\EventDispatcher\Event::stopPropagation() -

***

### stopPropagation

Stops the propagation of the event to further event listeners.

```php
public stopPropagation(): mixed
```

If multiple event listeners are connected to the same event, no further event listener will be triggered once any
trigger calls stopPropagation().









***

### setDispatcher

Stores the EventDispatcher that dispatches this Event.

```php
public setDispatcher(\Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dispatcher` | **\Symfony\Component\EventDispatcher\EventDispatcherInterface** |  |

***

### getDispatcher

Returns the EventDispatcher that dispatches this Event.

```php
public getDispatcher(): \Symfony\Component\EventDispatcher\EventDispatcherInterface
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### getName

Gets the event's name.

```php
public getName(): string
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### setName

Sets the event's name property.

```php
public setName(string $name): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The event name |

yxorP::get('REQUEST')
