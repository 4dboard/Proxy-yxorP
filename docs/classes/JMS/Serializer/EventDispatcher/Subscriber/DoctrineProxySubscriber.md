***

# DoctrineProxySubscriber





* Full name: `\JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber`
* This class implements:
[`\JMS\Serializer\EventDispatcher\EventSubscriberInterface`](../EventSubscriberInterface.md)



## Properties


### skipVirtualTypeInit



```php
private bool $skipVirtualTypeInit
```






***

### initializeExcluded



```php
private bool $initializeExcluded
```






***

## Methods


### __construct



```php
public __construct(mixed $skipVirtualTypeInit = false, mixed $initializeExcluded = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$skipVirtualTypeInit` | **mixed** |  |
| `$initializeExcluded` | **mixed** |  |




***

### onPreSerialize



```php
public onPreSerialize(\JMS\Serializer\EventDispatcher\PreSerializeEvent $event): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\JMS\Serializer\EventDispatcher\PreSerializeEvent** |  |




***

### onPreSerializeTypedProxy



```php
public onPreSerializeTypedProxy(\JMS\Serializer\EventDispatcher\PreSerializeEvent $event, mixed $eventName, mixed $class, mixed $format, \JMS\Serializer\EventDispatcher\EventDispatcherInterface $dispatcher): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\JMS\Serializer\EventDispatcher\PreSerializeEvent** |  |
| `$eventName` | **mixed** |  |
| `$class` | **mixed** |  |
| `$format` | **mixed** |  |
| `$dispatcher` | **\JMS\Serializer\EventDispatcher\EventDispatcherInterface** |  |




***

### getSubscribedEvents

Returns the events to which this class has subscribed.

```php
public static getSubscribedEvents(): array
```

Return format:
    array(
        array('event' => 'the-event-name', 'method' => 'onEventName', 'class' => 'some-class', 'format' => 'json'),
        array(...),
    )

The class may be omitted if the class wants to subscribe to events of all classes.
Same goes for the format key.

* This method is **static**.







***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
