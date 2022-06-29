***

# EventListenerIntrospectionTrait

Trait providing utility methods and assertions for use in PHPUnit test cases.

This trait may be composed into a test case, and provides:

- methods for introspecting events and listeners
- methods for asserting listeners are attached at a specific priority

Some functionality in this trait duplicates functionality present in the version 2 EventManagerInterface and/or
EventManager implementation, but abstracts that functionality for use in v3. As such, components or code that is testing
for listener registration should use the methods in this trait to ensure tests are forwards-compatible between
zend-eventmanager versions.

* Full name: `\Zend\EventManager\Test\EventListenerIntrospectionTrait`

## Methods

### getEventsFromEventManager

Retrieve a list of event names from an event manager.

```php
private getEventsFromEventManager(\Zend\EventManager\EventManager $events): string[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$events` | **\Zend\EventManager\EventManager** |  |

***

### getListenersForEvent

Retrieve an interable list of listeners for an event.

```php
private getListenersForEvent(string $event, \Zend\EventManager\EventManager $events, bool $withPriority = false): \Traversable
```

Given an event and an event manager, returns an iterator with the listeners for that event, in priority order.

If $withPriority is true, the key values will be the priority at which the given listener is attached.

Do not pass $withPriority if you want to cast the iterator to an array, as many listeners will likely have the same
priority, and thus casting will collapse to the last added.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |
| `$events` | **\Zend\EventManager\EventManager** |  |
| `$withPriority` | **bool** |  |

***

### assertListenerAtPriority

Assert that a given listener exists at the specified priority.

```php
private assertListenerAtPriority(callable $expectedListener, int $expectedPriority, string $event, \Zend\EventManager\EventManager $events, string $message = &#039;&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedListener` | **callable** |  |
| `$expectedPriority` | **int** |  |
| `$event` | **string** |  |
| `$events` | **\Zend\EventManager\EventManager** |  |
| `$message` | **string** | Failure message to use, if any. |

***

### getArrayOfListenersForEvent

Returns an indexed array of listeners for an event.

```php
private getArrayOfListenersForEvent(string $event, \Zend\EventManager\EventManager $events): callable[]
```

Returns an indexed array of listeners for an event, in priority order. Priority values will not be included; use this
only for testing if specific listeners are present, or for a count of listeners.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |
| `$events` | **\Zend\EventManager\EventManager** |  |

***

### traverseListeners

Generator for traversing listeners in priority order.

```php
public traverseListeners(\Zend\Stdlib\PriorityQueue $queue, bool $withPriority = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$queue` | **\Zend\Stdlib\PriorityQueue** |  |
| `$withPriority` | **bool** | When true, yields priority as key. |

***

***


