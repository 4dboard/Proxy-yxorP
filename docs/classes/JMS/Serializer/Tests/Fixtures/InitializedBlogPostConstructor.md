***

# InitializedBlogPostConstructor

* Full name: `\JMS\Serializer\Tests\Fixtures\InitializedBlogPostConstructor`
* Parent
  class: [`\JMS\Serializer\Construction\UnserializeObjectConstructor`](../../Construction/UnserializeObjectConstructor.md)

## Methods

### construct

Constructs a new object.

```php
public construct(\JMS\Serializer\VisitorInterface $visitor, \JMS\Serializer\Metadata\ClassMetadata $metadata, mixed $data, array $type, \JMS\Serializer\DeserializationContext $context): object
```

Implementations could for example create a new object calling "new", use
"unserialize" techniques, reflection, or other means.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$data` | **mixed** |  |
| `$type` | **array** | [&quot;name&quot; =&gt; string, &quot;params&quot; =&gt; array] |
| `$context` | **\JMS\Serializer\DeserializationContext** |  |

***

## Inherited methods

### construct

Constructs a new object.

```php
public construct(\JMS\Serializer\VisitorInterface $visitor, \JMS\Serializer\Metadata\ClassMetadata $metadata, mixed $data, array $type, \JMS\Serializer\DeserializationContext $context): object
```

Implementations could for example create a new object calling "new", use
"unserialize" techniques, reflection, or other means.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$data` | **mixed** |  |
| `$type` | **array** | [&quot;name&quot; =&gt; string, &quot;params&quot; =&gt; array] |
| `$context` | **\JMS\Serializer\DeserializationContext** |  |

***

### getInstantiator

```php
private getInstantiator(): \Doctrine\Instantiator\Instantiator
```

yxorP::get('REQUEST')
