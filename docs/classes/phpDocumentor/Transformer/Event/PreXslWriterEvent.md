***

# PreXslWriterEvent

Event launched during the Xsl Transformation of an individual output file.

If the XSL Writer loops through a resultset then this event will be thrown for each result.

* Full name: `\phpDocumentor\Transformer\Event\PreXslWriterEvent`
* Parent class: [`\phpDocumentor\Event\EventAbstract`](../../Event/EventAbstract.md)

## Properties

### element

```php
protected \DOMElement $element
```

***

### progress

```php
protected int[] $progress
```

***

## Methods

### setElement

Sets the currently parsed element in this event.

```php
public setElement(\DOMElement $element): \phpDocumentor\Transformer\Event\PreXslWriterEvent
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |

***

### getElement

Returns the event that is currently being parsed.

```php
public getElement(): \DOMElement
```

***

### setProgress

Sets a progress indication for this XSL Writer session.

```php
public setProgress(int[] $progress): \phpDocumentor\Transformer\Event\PreXslWriterEvent
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$progress` | **
int[]** | Array containing 2 integer values, the current<br />step in the process and the total number of steps involved. |

***

### getProgress

Returns the current step and tot number of steps as progress.

```php
public getProgress(): int[]
```

**See Also:**

* \phpDocumentor\Transformer\Event\setProgress() - for a complete description of this array.

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
