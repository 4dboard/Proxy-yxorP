***

# DateHandler

* Full name: `\JMS\Serializer\Handler\DateHandler`
* This class implements:
  [`\JMS\Serializer\Handler\SubscribingHandlerInterface`](./SubscribingHandlerInterface.md)

## Properties

### defaultFormat

```php
private $defaultFormat
```

***

### defaultTimezone

```php
private $defaultTimezone
```

***

### xmlCData

```php
private $xmlCData
```

***

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

### __construct

```php
public __construct(mixed $defaultFormat = DateTime::ISO8601, mixed $defaultTimezone = &#039;UTC&#039;, mixed $xmlCData = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$defaultFormat` | **mixed** |  |
| `$defaultTimezone` | **mixed** |  |
| `$xmlCData` | **mixed** |  |

***

### serializeDateTimeInterface

```php
private serializeDateTimeInterface(\JMS\Serializer\VisitorInterface $visitor, \DateTimeInterface $date, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$date` | **\DateTimeInterface** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### serializeDateTime

```php
public serializeDateTime(\JMS\Serializer\VisitorInterface $visitor, \DateTime $date, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$date` | **\DateTime** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### serializeDateTimeImmutable

```php
public serializeDateTimeImmutable(\JMS\Serializer\VisitorInterface $visitor, \DateTimeImmutable $date, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$date` | **\DateTimeImmutable** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### serializeDateInterval

```php
public serializeDateInterval(\JMS\Serializer\VisitorInterface $visitor, \DateInterval $date, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$date` | **\DateInterval** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### isDataXmlNull

```php
private isDataXmlNull(mixed $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |

***

### deserializeDateTimeFromXml

```php
public deserializeDateTimeFromXml(\JMS\Serializer\XmlDeserializationVisitor $visitor, mixed $data, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\XmlDeserializationVisitor** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |

***

### deserializeDateTimeImmutableFromXml

```php
public deserializeDateTimeImmutableFromXml(\JMS\Serializer\XmlDeserializationVisitor $visitor, mixed $data, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\XmlDeserializationVisitor** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |

***

### deserializeDateIntervalFromXml

```php
public deserializeDateIntervalFromXml(\JMS\Serializer\XmlDeserializationVisitor $visitor, mixed $data, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\XmlDeserializationVisitor** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |

***

### deserializeDateTimeFromJson

```php
public deserializeDateTimeFromJson(\JMS\Serializer\JsonDeserializationVisitor $visitor, mixed $data, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\JsonDeserializationVisitor** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |

***

### deserializeDateTimeImmutableFromJson

```php
public deserializeDateTimeImmutableFromJson(\JMS\Serializer\JsonDeserializationVisitor $visitor, mixed $data, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\JsonDeserializationVisitor** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |

***

### deserializeDateIntervalFromJson

```php
public deserializeDateIntervalFromJson(\JMS\Serializer\JsonDeserializationVisitor $visitor, mixed $data, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\JsonDeserializationVisitor** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |

***

### parseDateTime

```php
private parseDateTime(mixed $data, array $type, mixed $immutable = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$immutable` | **mixed** |  |

***

### parseDateInterval

```php
private parseDateInterval(mixed $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |

***

### getFormat

```php
private getFormat(array $type): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **array** |  |

***

### format

```php
public format(\DateInterval $dateInterval): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dateInterval` | **\DateInterval** |  |

yxorP::get('REQUEST')
