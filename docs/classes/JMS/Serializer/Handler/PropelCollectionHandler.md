***

# PropelCollectionHandler

* Full name: `\JMS\Serializer\Handler\PropelCollectionHandler`
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

### serializeCollection

```php
public serializeCollection(\JMS\Serializer\VisitorInterface $visitor, \PropelCollection $collection, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$collection` | **\PropelCollection** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### deserializeCollection

```php
public deserializeCollection(\JMS\Serializer\VisitorInterface $visitor, mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

yxorP::get('REQUEST')
