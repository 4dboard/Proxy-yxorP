***

# AbstractEventDispatcherTest





* Full name: `\Symfony\Component\EventDispatcher\Tests\AbstractEventDispatcherTest`
* Parent class: [`TestCase`](../../../../PHPUnit/Framework/TestCase.md)
* This class is an **Abstract class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`preFoo`|public| |&#039;pre.foo&#039;|
|`postFoo`|public| |&#039;post.foo&#039;|
|`preBar`|public| |&#039;pre.bar&#039;|
|`postBar`|public| |&#039;post.bar&#039;|

## Properties


### dispatcher



```php
private \Symfony\Component\EventDispatcher\EventDispatcher $dispatcher
```






***

### listener



```php
private $listener
```






***

## Methods


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











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
