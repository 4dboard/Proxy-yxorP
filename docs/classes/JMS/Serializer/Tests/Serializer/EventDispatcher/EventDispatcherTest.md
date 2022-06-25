***

# EventDispatcherTest

* Full name: `\JMS\Serializer\Tests\Serializer\EventDispatcher\EventDispatcherTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../../../PHPUnit_Framework_TestCase.md)

## Properties

### dispatcher

```php
private \JMS\Serializer\EventDispatcher\EventDispatcher $dispatcher
```

***

### event

```php
private $event
```

***

## Methods

### testHasListeners

```php
public testHasListeners(): mixed
```

***

### testDispatch

```php
public testDispatch(): mixed
```

***

### testListenerCanStopPropagation

```php
public testListenerCanStopPropagation(): mixed
```

***

### testListenerCanDispatchEvent

```php
public testListenerCanDispatchEvent(): mixed
```

***

### testAddSubscriber

```php
public testAddSubscriber(): mixed
```

***

### setUp

```php
protected setUp(): mixed
```

***

### dispatch

```php
private dispatch(mixed $eventName, mixed $class = &#039;Foo&#039;, mixed $format = &#039;json&#039;, \JMS\Serializer\EventDispatcher\Event $event = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventName` | **mixed** |  |
| `$class` | **mixed** |  |
| `$format` | **mixed** |  |
| `$event` | **\JMS\Serializer\EventDispatcher\Event** |  |

yxorP::get('REQUEST')
