***

# PreDeserializeEvent





* Full name: `\JMS\Serializer\EventDispatcher\PreDeserializeEvent`
* Parent class: [`\JMS\Serializer\EventDispatcher\Event`](./Event.md)



## Properties


### data



```php
private $data
```






***

## Methods


### __construct



```php
public __construct(\JMS\Serializer\DeserializationContext $context, mixed $data, array $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\JMS\Serializer\DeserializationContext** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |




***

### setType



```php
public setType(mixed $name, array $params = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$params` | **array** |  |




***

### getData



```php
public getData(): mixed
```











***

### setData



```php
public setData(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




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

If multiple event listeners are connected to the same event, no
further event listener will be triggered once any trigger calls
stopPropagation().









***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
