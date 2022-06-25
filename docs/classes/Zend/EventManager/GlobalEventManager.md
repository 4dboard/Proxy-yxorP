***

# GlobalEventManager

Event manager: notification system

Use the EventManager when you want to create a per-instance notification
system for your objects.

* Full name: `\Zend\EventManager\GlobalEventManager`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.



## Properties


### events



```php
protected static \Zend\EventManager\EventManagerInterface $events
```



* This property is **static**.


***

## Methods


### setEventCollection

Set the event collection on which this will operate

```php
public static setEventCollection(null|\Zend\EventManager\EventManagerInterface $events = null): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$events` | **null&#124;\Zend\EventManager\EventManagerInterface** |  |




***

### getEventCollection

Get event collection on which this operates

```php
public static getEventCollection(): \Zend\EventManager\EventManagerInterface
```



* This method is **static**.







***

### trigger

Trigger an event

```php
public static trigger(string $event, object|string $context, array|object $argv = [], null|callable $callback = null): \Zend\EventManager\ResponseCollection
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |
| `$context` | **object&#124;string** |  |
| `$argv` | **array&#124;object** |  |
| `$callback` | **null&#124;callable** |  |




***

### triggerUntil

Trigger listeners until return value of one causes a callback to evaluate
to true.

```php
public static triggerUntil(string $event, string|object $context, array|object $argv, callable $callback): \Zend\EventManager\ResponseCollection
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |
| `$context` | **string&#124;object** |  |
| `$argv` | **array&#124;object** |  |
| `$callback` | **callable** |  |




***

### attach

Attach a listener to an event

```php
public static attach(string $event, callable $callback, int $priority = 1): \Zend\Stdlib\CallbackHandler
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |
| `$callback` | **callable** |  |
| `$priority` | **int** |  |




***

### detach

Detach a callback from a listener

```php
public static detach(\Zend\Stdlib\CallbackHandler $listener): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$listener` | **\Zend\Stdlib\CallbackHandler** |  |




***

### getEvents

Retrieve list of events this object manages

```php
public static getEvents(): array
```



* This method is **static**.







***

### getListeners

Retrieve all listeners for a given event

```php
public static getListeners(string $event): \Zend\Stdlib\PriorityQueue|array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |




***

### clearListeners

Clear all listeners for a given event

```php
public static clearListeners(string $event): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
