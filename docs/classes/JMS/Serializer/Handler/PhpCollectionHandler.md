***

# PhpCollectionHandler

* Full name: `\JMS\Serializer\Handler\PhpCollectionHandler`
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

### serializeMap

```php
public serializeMap(\JMS\Serializer\VisitorInterface $visitor, \PhpCollection\Map $map, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$map` | **\PhpCollection\Map** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### deserializeMap

```php
public deserializeMap(\JMS\Serializer\VisitorInterface $visitor, mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### serializeSequence

```php
public serializeSequence(\JMS\Serializer\VisitorInterface $visitor, \PhpCollection\Sequence $sequence, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$sequence` | **\PhpCollection\Sequence** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### deserializeSequence

```php
public deserializeSequence(\JMS\Serializer\VisitorInterface $visitor, mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

yxorP::get('REQUEST')
