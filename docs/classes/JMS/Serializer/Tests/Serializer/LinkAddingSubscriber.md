***

# LinkAddingSubscriber

* Full name: `\JMS\Serializer\Tests\Serializer\LinkAddingSubscriber`
* This class implements:
  [`\JMS\Serializer\EventDispatcher\EventSubscriberInterface`](../../EventDispatcher/EventSubscriberInterface.md)

## Methods

### onPostSerialize

```php
public onPostSerialize(\JMS\Serializer\EventDispatcher\Event $event): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\JMS\Serializer\EventDispatcher\Event** |  |

***

### getSubscribedEvents

Returns the events to which this class has subscribed.

```php
public static getSubscribedEvents(): array
```

Return format:
array(
array('event' => 'the-event-name', 'method' => 'onEventName', 'class' => 'some-class', 'format' => 'json'), array(...),
)

The class may be omitted if the class wants to subscribe to events of all classes. Same goes for the format key.

* This method is **static**.

yxorP::get('REQUEST')
