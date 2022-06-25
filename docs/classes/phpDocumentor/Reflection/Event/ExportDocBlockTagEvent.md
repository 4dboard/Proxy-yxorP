***

# ExportDocBlockTagEvent

Abstract class representing the base elements of a phpDocumentor event.



* Full name: `\phpDocumentor\Reflection\Event\ExportDocBlockTagEvent`
* Parent class: [`\phpDocumentor\Event\EventAbstract`](../../Event/EventAbstract.md)



## Properties


### xml



```php
protected \DOMNode $xml
```






***

### object



```php
protected \phpDocumentor\Reflection\DocBlock\Tag $object
```






***

## Methods


### getXml



```php
public getXml(): \DOMNode|null
```











***

### getObject



```php
public getObject(): \phpDocumentor\Reflection\DocBlock\Tag|null
```











***

### setObject



```php
public setObject(\phpDocumentor\Reflection\DocBlock\Tag $object = null): \phpDocumentor\Reflection\Event\ExportDocBlockTagEvent
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **\phpDocumentor\Reflection\DocBlock\Tag** |  |




***

### setXml



```php
public setXml(\DOMNode $xml = null): \phpDocumentor\Reflection\Event\ExportDocBlockTagEvent
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xml` | **\DOMNode** |  |




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
