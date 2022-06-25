***

# InitializedObjectConstructor

Object constructor that allows deserialization into already constructed objects passed through the deserialization
context

* Full name: `\JMS\Serializer\Tests\Fixtures\InitializedObjectConstructor`
* This class implements:
  [`\JMS\Serializer\Construction\ObjectConstructorInterface`](../../Construction/ObjectConstructorInterface.md)

## Properties

### fallbackConstructor

```php
private $fallbackConstructor
```

***

## Methods

### __construct

Constructor.

```php
public __construct(\JMS\Serializer\Construction\ObjectConstructorInterface $fallbackConstructor): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fallbackConstructor` | **\JMS\Serializer\Construction\ObjectConstructorInterface** | Fallback object constructor |

***

### construct

Constructs a new object.

```php
public construct(\JMS\Serializer\VisitorInterface $visitor, \JMS\Serializer\Metadata\ClassMetadata $metadata, mixed $data, array $type, \JMS\Serializer\DeserializationContext $context): object
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$data` | **mixed** |  |
| `$type` | **array** | [&quot;name&quot; =&gt; string, &quot;params&quot; =&gt; array] |
| `$context` | **\JMS\Serializer\DeserializationContext** |  |

yxorP::get('REQUEST')
