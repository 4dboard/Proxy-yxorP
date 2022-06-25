***

# ObjectEvent

* Full name: `\JMS\Serializer\EventDispatcher\ObjectEvent`
* Parent class: [`\JMS\Serializer\EventDispatcher\Event`](./Event.md)

## Properties

### object

```php
private $object
```

***

## Methods

### __construct

```php
public __construct(\JMS\Serializer\Context $context, mixed $object, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\JMS\Serializer\Context** |  |
| `$object` | **mixed** |  |
| `$type` | **array** |  |

***

### getObject

```php
public getObject(): mixed
```

***

## Inherited methods

### __construct

```php
public __construct(\JMS\Serializer\Context $context, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\JMS\Serializer\Context** |  |
| `$type` | **array** |  |

***

### getVisitor

```php
public getVisitor(): mixed
```

***

### getContext

```php
public getContext(): mixed
```

***

### getType

```php
public getType(): mixed
```

***

### isPropagationStopped

Returns whether further event listeners should be triggered.

```php
public isPropagationStopped(): bool
```

**Return Value:**

Whether propagation was already stopped for this event

**See Also:**

* \JMS\Serializer\EventDispatcher\Event::stopPropagation() -

***

### stopPropagation

Stops the propagation of the event to further event listeners.

```php
public stopPropagation(): mixed
```

If multiple event listeners are connected to the same event, no further event listener will be triggered once any
trigger calls stopPropagation().

yxorP::get('REQUEST')
