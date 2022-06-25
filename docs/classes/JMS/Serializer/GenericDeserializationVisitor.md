***

# GenericDeserializationVisitor

Generic Deserialization Visitor.

* Full name: `\JMS\Serializer\GenericDeserializationVisitor`
* Parent class: [`\JMS\Serializer\AbstractVisitor`](./AbstractVisitor.md)
* This class is an **Abstract class**

## Properties

### navigator

```php
private $navigator
```

***

### result

```php
private $result
```

***

### objectStack

```php
private $objectStack
```

***

### currentObject

```php
private $currentObject
```

***

## Methods

### setNavigator

```php
public setNavigator(\JMS\Serializer\GraphNavigator $navigator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$navigator` | **\JMS\Serializer\GraphNavigator** |  |

***

### getNavigator

```php
public getNavigator(): mixed
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

### visitArray

```php
public visitArray(mixed $data, array $type, \JMS\Serializer\Context $context): mixed
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
public startVisitingObject(\JMS\Serializer\Metadata\ClassMetadata $metadata, mixed $object, array $type, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$object` | **mixed** |  |
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

### getResult

```php
public getResult(): mixed
```

***

### setCurrentObject

```php
public setCurrentObject(mixed $object): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |

***

### getCurrentObject

```php
public getCurrentObject(): mixed
```

***

### revertCurrentObject

```php
public revertCurrentObject(): mixed
```

***

### decode

```php
protected decode(mixed $str): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |

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
