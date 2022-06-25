***

# Event





* Full name: `\JMS\Serializer\EventDispatcher\Event`



## Properties


### propagationStopped



```php
private bool $propagationStopped
```






***

### type



```php
protected $type
```






***

### context



```php
private $context
```






***

## Methods


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

If multiple event listeners are connected to the same event, no
further event listener will be triggered once any trigger calls
stopPropagation().









***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
