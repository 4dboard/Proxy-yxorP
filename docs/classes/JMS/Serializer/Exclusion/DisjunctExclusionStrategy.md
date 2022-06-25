***

# DisjunctExclusionStrategy

Disjunct Exclusion Strategy.

This strategy is short-circuiting and will skip a class, or property as soon as one of the delegates skips it.

* Full name: `\JMS\Serializer\Exclusion\DisjunctExclusionStrategy`
* This class implements:
  [`\JMS\Serializer\Exclusion\ExclusionStrategyInterface`](./ExclusionStrategyInterface.md)

## Properties

### delegates

```php
private \PhpCollection\SequenceInterface $delegates
```

***

## Methods

### __construct

```php
public __construct(\JMS\Serializer\Exclusion\ExclusionStrategyInterface[]|\PhpCollection\SequenceInterface $delegates): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$delegates` | **\JMS\Serializer\Exclusion\ExclusionStrategyInterface[]&#124;\PhpCollection\SequenceInterface** |  |

***

### addStrategy

```php
public addStrategy(\JMS\Serializer\Exclusion\ExclusionStrategyInterface $strategy): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strategy` | **\JMS\Serializer\Exclusion\ExclusionStrategyInterface** |  |

***

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
