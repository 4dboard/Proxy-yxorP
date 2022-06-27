***

# EventManagerAwareTrait

A trait for objects that provide events.

If you use this trait in an object, you will probably want to also implement EventManagerAwareInterface, which will make
it so the default initializer in a ZF2 MVC application will automatically inject an instance of the EventManager into
your object when it is pulled from the ServiceManager.

* Full name: `\Zend\EventManager\EventManagerAwareTrait`

**See Also:**

* \Zend\EventManager\Zend\Mvc\Service\ServiceManagerConfig -

## Properties

### events

```php
protected \Zend\EventManager\EventManagerInterface $events
```

***

## Methods

### setEventManager

Set the event manager instance used by this context.

```php
public setEventManager(\Zend\EventManager\EventManagerInterface $events): mixed
```

For convenience, this method will also set the class name / LSB name as identifiers, in addition to any string or array
of strings set to the $this->eventIdentifier property.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$events` | **\Zend\EventManager\EventManagerInterface** |  |

***

### getEventManager

Retrieve the event manager

```php
public getEventManager(): \Zend\EventManager\EventManagerInterface
```

Lazy-loads an EventManager instance if none registered.









***

***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)

