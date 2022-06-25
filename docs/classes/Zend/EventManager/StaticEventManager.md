***

# StaticEventManager

Static version of EventManager



* Full name: `\Zend\EventManager\StaticEventManager`
* Parent class: [`\Zend\EventManager\SharedEventManager`](./SharedEventManager.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.



## Properties


### instance



```php
protected static \Zend\EventManager\SharedEventManagerInterface $instance
```



* This property is **static**.


***

## Methods


### __construct

Singleton

```php
protected __construct(): mixed
```











***

### __clone

Singleton

```php
private __clone(): void
```











***

### getInstance

Retrieve instance

```php
public static getInstance(): \Zend\EventManager\StaticEventManager
```



* This method is **static**.







***

### setInstance

Set the singleton to a specific SharedEventManagerInterface instance

```php
public static setInstance(\Zend\EventManager\SharedEventManagerInterface $instance): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$instance` | **\Zend\EventManager\SharedEventManagerInterface** |  |




***

### hasInstance

Is a singleton instance defined?

```php
public static hasInstance(): bool
```



* This method is **static**.







***

### resetInstance

Reset the singleton instance

```php
public static resetInstance(): void
```



* This method is **static**.







***


## Inherited methods


### attach

Attach a listener to an event

```php
public attach(string|array $id, string $event, callable $callback, int $priority = 1): \Zend\Stdlib\CallbackHandler|array
```

Allows attaching a callback to an event offered by one or more
identifying components. As an example, the following connects to the
"getAll" event of both an AbstractResource and EntityResource:

<code>
$sharedEventManager = new SharedEventManager();
$sharedEventManager->attach(
    array('My\Resource\AbstractResource', 'My\Resource\EntityResource'),
    'getAll',
    function ($e) use ($cache) {
        if (!$id = $e->getParam('id', false)) {
            return;
        }
        if (!$data = $cache->load(get_class($resource) . '::getOne::' . $id )) {
            return;
        }
        return $data;
    }
);
</code>






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string&#124;array** | Identifier(s) for event emitting component(s) |
| `$event` | **string** |  |
| `$callback` | **callable** | PHP Callback |
| `$priority` | **int** | Priority at which listener should execute |


**Return Value:**

Either CallbackHandler or array of CallbackHandlers



***

### attachAggregate

Attach a listener aggregate

```php
public attachAggregate(\Zend\EventManager\SharedListenerAggregateInterface $aggregate, int $priority = 1): mixed
```

Listener aggregates accept an EventManagerInterface instance, and call attachShared()
one or more times, typically to attach to multiple events using local
methods.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aggregate` | **\Zend\EventManager\SharedListenerAggregateInterface** |  |
| `$priority` | **int** | If provided, a suggested priority for the aggregate to use |


**Return Value:**

return value of {@link}



***

### detach

Detach a listener from an event offered by a given resource

```php
public detach(string|int $id, \Zend\Stdlib\CallbackHandler $listener): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string&#124;int** |  |
| `$listener` | **\Zend\Stdlib\CallbackHandler** |  |


**Return Value:**

Returns true if event and listener found, and unsubscribed; returns false if either event or listener not found



***

### detachAggregate

Detach a listener aggregate

```php
public detachAggregate(\Zend\EventManager\SharedListenerAggregateInterface $aggregate): mixed
```

Listener aggregates accept a SharedEventManagerInterface instance, and call detachShared()
of all previously attached listeners.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aggregate` | **\Zend\EventManager\SharedListenerAggregateInterface** |  |


**Return Value:**

return value of {@link}



***

### getEvents

Retrieve all registered events for a given resource

```php
public getEvents(string|int $id): array
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string&#124;int** |  |




***

### getListeners

Retrieve all listeners for a given identifier and event

```php
public getListeners(string|int $id, string|int $event): false|\Zend\Stdlib\PriorityQueue
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string&#124;int** |  |
| `$event` | **string&#124;int** |  |




***

### clearListeners

Clear all listeners for a given identifier, optionally for a specific event

```php
public clearListeners(string|int $id, null|string $event = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string&#124;int** |  |
| `$event` | **null&#124;string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
