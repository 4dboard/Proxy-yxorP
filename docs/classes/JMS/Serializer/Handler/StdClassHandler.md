***

# StdClassHandler

* Full name: `\JMS\Serializer\Handler\StdClassHandler`
* This class implements:
  [`\JMS\Serializer\Handler\SubscribingHandlerInterface`](./SubscribingHandlerInterface.md)

## Methods

### getSubscribingMethods

Return format:

```php
public static getSubscribingMethods(): array
```

array(
array(
'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
'format' => 'json',
'type' => 'DateTime',
'method' => 'serializeDateTimeToJson',
),
)

The direction and method keys can be omitted.

* This method is **static**.

***

### serializeStdClass

```php
public serializeStdClass(\JMS\Serializer\VisitorInterface $visitor, \stdClass $stdClass, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$stdClass` | **\stdClass** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

yxorP::get('REQUEST')
