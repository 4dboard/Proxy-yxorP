***

# EventAbstract

Abstract class representing the base elements of a phpDocumentor event.

* Full name: `\phpDocumentor\Event\EventAbstract`
* Parent class: [`\Symfony\Component\EventDispatcher\Event`](../../Symfony/Component/EventDispatcher/Event.md)
* This class is an **Abstract class**

## Properties

### subject

```php
protected object $subject
```

***

## Methods

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

## Inherited methods

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
