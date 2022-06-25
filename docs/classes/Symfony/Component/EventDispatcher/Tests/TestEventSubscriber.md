***

# TestEventSubscriber





* Full name: `\Symfony\Component\EventDispatcher\Tests\TestEventSubscriber`
* This class implements:
[`\Symfony\Component\EventDispatcher\EventSubscriberInterface`](../EventSubscriberInterface.md)




## Methods


### getSubscribedEvents

Returns an array of event names this subscriber wants to listen to.

```php
public static getSubscribedEvents(): array
```

The array keys are event names and the value can be:

 * The method name to call (priority defaults to 0)
 * An array composed of the method name to call and the priority
 * An array of arrays composed of the method names to call and respective
   priorities, or 0 if unset

For instance:

 * array('eventName' => 'methodName')
 * array('eventName' => array('methodName', $priority))
 * array('eventName' => array(array('methodName1', $priority), array('methodName2')))

* This method is **static**.





**Return Value:**

The event names to listen to



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
