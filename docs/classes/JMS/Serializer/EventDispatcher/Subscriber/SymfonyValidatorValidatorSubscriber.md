***

# SymfonyValidatorValidatorSubscriber

* Full name: `\JMS\Serializer\EventDispatcher\Subscriber\SymfonyValidatorValidatorSubscriber`
* This class implements:
  [`\JMS\Serializer\EventDispatcher\EventSubscriberInterface`](../EventSubscriberInterface.md)

## Properties

### validator

```php
private \Symfony\Component\Validator\Validator\ValidatorInterface $validator
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Validator\Validator\ValidatorInterface $validator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$validator` | **\Symfony\Component\Validator\Validator\ValidatorInterface** |  |

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

***

### onPostDeserialize

```php
public onPostDeserialize(\JMS\Serializer\EventDispatcher\Event $event): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\JMS\Serializer\EventDispatcher\Event** |  |

yxorP::get('REQUEST')
