***

# EventDispatcherTest

* Full name: `\Symfony\Component\EventDispatcher\Tests\EventDispatcherTest`
* Parent
  class: [`\Symfony\Component\EventDispatcher\Tests\AbstractEventDispatcherTest`](./AbstractEventDispatcherTest.md)

## Methods

### createEventDispatcher

```php
protected createEventDispatcher(): mixed
```

***

## Inherited methods

### setUp

```php
protected setUp(): mixed
```

***

### tearDown

```php
protected tearDown(): mixed
```

***

### createEventDispatcher

```php
protected createEventDispatcher(): mixed
```

* This method is **abstract**.

***

### testInitialState

```php
public testInitialState(): mixed
```

***

### testAddListener

```php
public testAddListener(): mixed
```

***

### testGetListenersSortsByPriority

```php
public testGetListenersSortsByPriority(): mixed
```

***

### testGetAllListenersSortsByPriority

```php
public testGetAllListenersSortsByPriority(): mixed
```

***

### testGetListenerPriority

```php
public testGetListenerPriority(): mixed
```

***

### testDispatch

```php
public testDispatch(): mixed
```

***

### testLegacyDispatch

```php
public testLegacyDispatch(): mixed
```

***

### testDispatchForClosure

```php
public testDispatchForClosure(): mixed
```

***

### testStopEventPropagation

```php
public testStopEventPropagation(): mixed
```

***

### testDispatchByPriority

```php
public testDispatchByPriority(): mixed
```

***

### testRemoveListener

```php
public testRemoveListener(): mixed
```

***

### testAddSubscriber

```php
public testAddSubscriber(): mixed
```

***

### testAddSubscriberWithPriorities

```php
public testAddSubscriberWithPriorities(): mixed
```

***

### testAddSubscriberWithMultipleListeners

```php
public testAddSubscriberWithMultipleListeners(): mixed
```

***

### testRemoveSubscriber

```php
public testRemoveSubscriber(): mixed
```

***

### testRemoveSubscriberWithPriorities

```php
public testRemoveSubscriberWithPriorities(): mixed
```

***

### testRemoveSubscriberWithMultipleListeners

```php
public testRemoveSubscriberWithMultipleListeners(): mixed
```

***

### testLegacyEventReceivesTheDispatcherInstance

```php
public testLegacyEventReceivesTheDispatcherInstance(): mixed
```

***

### testEventReceivesTheDispatcherInstanceAsArgument

```php
public testEventReceivesTheDispatcherInstanceAsArgument(): mixed
```

***

### testWorkaroundForPhpBug62976

```php
public testWorkaroundForPhpBug62976(): mixed
```

**See Also:**

* https://bugs.php.net/bug.php?id=62976 - This bug affects:

- The PHP 5.3 branch for versions < 5.3.18
- The PHP 5.4 branch for versions < 5.4.8
- The PHP 5.5 branch is not affected

***

### testHasListenersWhenAddedCallbackListenerIsRemoved

```php
public testHasListenersWhenAddedCallbackListenerIsRemoved(): mixed
```

***

### testGetListenersWhenAddedCallbackListenerIsRemoved

```php
public testGetListenersWhenAddedCallbackListenerIsRemoved(): mixed
```

***

### testHasListenersWithoutEventsReturnsFalseAfterHasListenersWithEventHasBeenCalled

```php
public testHasListenersWithoutEventsReturnsFalseAfterHasListenersWithEventHasBeenCalled(): mixed
```

yxorP::get('REQUEST')
