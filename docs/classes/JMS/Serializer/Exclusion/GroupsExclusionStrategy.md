***

# GroupsExclusionStrategy

* Full name: `\JMS\Serializer\Exclusion\GroupsExclusionStrategy`
* This class implements:
  [`\JMS\Serializer\Exclusion\ExclusionStrategyInterface`](./ExclusionStrategyInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DEFAULT_GROUP`|public| |&#039;Default&#039;|

## Properties

### groups

```php
private $groups
```

***

## Methods

### __construct

```php
public __construct(array $groups): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$groups` | **array** |  |

***

### shouldSkipClass

Whether the class should be skipped.

```php
public shouldSkipClass(\JMS\Serializer\Metadata\ClassMetadata $metadata, \JMS\Serializer\Context $navigatorContext): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$navigatorContext` | **\JMS\Serializer\Context** |  |

***

### shouldSkipProperty

Whether the property should be skipped.

```php
public shouldSkipProperty(\JMS\Serializer\Metadata\PropertyMetadata $property, \JMS\Serializer\Context $navigatorContext): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |
| `$navigatorContext` | **\JMS\Serializer\Context** |  |

***

### shouldSkipUsingGroups

```php
private shouldSkipUsingGroups(\JMS\Serializer\Metadata\PropertyMetadata $property, mixed $groups): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |
| `$groups` | **mixed** |  |

***

### getGroupsFor

```php
private getGroupsFor(\JMS\Serializer\Context $navigatorContext): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$navigatorContext` | **\JMS\Serializer\Context** |  |

yxorP::get('REQUEST')
