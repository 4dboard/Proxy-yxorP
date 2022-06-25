***

# YamlSerializationVisitor

Serialization Visitor for the YAML format.

* Full name: `\JMS\Serializer\YamlSerializationVisitor`
* Parent class: [`\JMS\Serializer\AbstractVisitor`](./AbstractVisitor.md)

**See Also:**

* http://www.yaml.org/spec/ -

## Properties

### writer

```php
public $writer
```

***

### navigator

```php
private $navigator
```

***

### stack

```php
private $stack
```

***

### metadataStack

```php
private $metadataStack
```

***

### currentMetadata

```php
private $currentMetadata
```

***

## Methods

### __construct

```php
public __construct(\JMS\Serializer\Naming\PropertyNamingStrategyInterface $namingStrategy, \JMS\Serializer\Accessor\AccessorStrategyInterface $accessorStrategy = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namingStrategy` | **\JMS\Serializer\Naming\PropertyNamingStrategyInterface** |  |
| `$accessorStrategy` | **\JMS\Serializer\Accessor\AccessorStrategyInterface** |  |

***

### setNavigator

```php
public setNavigator(\JMS\Serializer\GraphNavigator $navigator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$navigator` | **\JMS\Serializer\GraphNavigator** |  |

***

### visitNull

```php
public visitNull(mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### visitString

```php
public visitString(mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### visitArray

```php
public visitArray(array $data, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### visitBoolean

```php
public visitBoolean(mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### visitDouble

```php
public visitDouble(mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### visitInteger

```php
public visitInteger(mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### startVisitingObject

```php
public startVisitingObject(\JMS\Serializer\Metadata\ClassMetadata $metadata, mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### visitProperty

```php
public visitProperty(\JMS\Serializer\Metadata\PropertyMetadata $metadata, mixed $data, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |
| `$data` | **mixed** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### endVisitingObject

```php
public endVisitingObject(\JMS\Serializer\Metadata\ClassMetadata $metadata, mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### setCurrentMetadata

```php
public setCurrentMetadata(\JMS\Serializer\Metadata\PropertyMetadata $metadata): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |

***

### revertCurrentMetadata

```php
public revertCurrentMetadata(): mixed
```

***

### getNavigator

```php
public getNavigator(): mixed
```

***

### getResult

```php
public getResult(): mixed
```

***

## Inherited methods

### __construct

```php
public __construct(\JMS\Serializer\Naming\PropertyNamingStrategyInterface $namingStrategy, \JMS\Serializer\Accessor\AccessorStrategyInterface $accessorStrategy = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namingStrategy` | **\JMS\Serializer\Naming\PropertyNamingStrategyInterface** |  |
| `$accessorStrategy` | **\JMS\Serializer\Accessor\AccessorStrategyInterface** |  |

***

### getNamingStrategy

```php
public getNamingStrategy(): mixed
```

***

### prepare

Allows visitors to convert the input data to a different representation before the actual serialization/deserialization
process starts.

```php
public prepare(mixed $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |

***

### getElementType

```php
protected getElementType(array $typeArray): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeArray` | **array** |  |

yxorP::get('REQUEST')
