***

# GenericEvent

Event encapsulation class.

Encapsulates events thus decoupling the observer from the subject they encapsulate.

* Full name: `\Symfony\Component\EventDispatcher\GenericEvent`
* Parent class: [`\Symfony\Component\EventDispatcher\Event`](./Event.md)
* This class implements:
  [`\ArrayAccess`](../../../ArrayAccess.md), [`\IteratorAggregate`](../../../IteratorAggregate.md)

## Properties

### subject

```php
protected $subject
```

***

### arguments

```php
protected $arguments
```

***

## Methods

### __construct

Encapsulate an event with $subject and $args.

```php
public __construct(mixed $subject = null, array $arguments = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **mixed** | The subject of the event, usually an object or a callable |
| `$arguments` | **array** | Arguments to store in the event |

***

### getSubject

Getter for subject property.

```php
public getSubject(): mixed
```

**Return Value:**

The observer subject



***

### getArgument

Get argument by key.

```php
public getArgument(string $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | Key |

**Return Value:**

Contents of array key



***

### setArgument

Add argument to event.

```php
public setArgument(string $key, mixed $value): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | Argument name |
| `$value` | **mixed** | Value |

***

### getArguments

Getter for all arguments.

```php
public getArguments(): array
```

***

### setArguments

Set args property.

```php
public setArguments(array $args = array()): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** | Arguments |

***

### hasArgument

Has argument.

```php
public hasArgument(string $key): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | Key of arguments array |

***

### offsetGet

ArrayAccess for argument getter.

```php
public offsetGet(string $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | Array key |

***

### offsetSet

ArrayAccess for argument setter.

```php
public offsetSet(string $key, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | Array key to set |
| `$value` | **mixed** | Value |

***

### offsetUnset

ArrayAccess for unset argument.

```php
public offsetUnset(string $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | Array key |

***

### offsetExists

ArrayAccess has argument.

```php
public offsetExists(string $key): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | Array key |

***

### getIterator

IteratorAggregate for iterating over the object like an array.

```php
public getIterator(): \ArrayIterator
```

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
