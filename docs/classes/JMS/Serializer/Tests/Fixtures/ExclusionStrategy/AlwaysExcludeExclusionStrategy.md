***

# AlwaysExcludeExclusionStrategy

* Full name: `\JMS\Serializer\Tests\Fixtures\ExclusionStrategy\AlwaysExcludeExclusionStrategy`
* This class implements:
  [`\JMS\Serializer\Exclusion\ExclusionStrategyInterface`](../../../Exclusion/ExclusionStrategyInterface.md)

## Methods

### shouldSkipClass

Whether the class should be skipped.

```php
public shouldSkipClass(\JMS\Serializer\Metadata\ClassMetadata $metadata, \JMS\Serializer\Context $context): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### shouldSkipProperty

Whether the property should be skipped.

```php
public shouldSkipProperty(\JMS\Serializer\Metadata\PropertyMetadata $property, \JMS\Serializer\Context $context): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |
| `$context` | **\JMS\Serializer\Context** |  |

yxorP::get('REQUEST')
