***

# Event

Event is the base class for classes containing event data.

This class contains no event data. It is used by events that do not pass
state information to an event handler when an event is raised.

You can call the method stopPropagation() to abort the execution of
further listeners in your event listener.

* Full name: `\Symfony\Component\EventDispatcher\Event`



## Properties


### propagationStopped



```php
private bool $propagationStopped
```






***

### dispatcher



```php
private \Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher
```






***

### name



```php
private string $name
```






***

## Methods


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

If multiple event listeners are connected to the same event, no
further event listener will be triggered once any trigger calls
stopPropagation().









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




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
