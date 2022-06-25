***

# Serializer

Serializer Implementation.

* Full name: `\JMS\Serializer\Serializer`
* This class implements:
  [`\JMS\Serializer\SerializerInterface`](./SerializerInterface.md)
  , [`\JMS\Serializer\ArrayTransformerInterface`](./ArrayTransformerInterface.md)

## Properties

### factory

```php
private $factory
```

***

### handlerRegistry

```php
private $handlerRegistry
```

***

### objectConstructor

```php
private $objectConstructor
```

***

### dispatcher

```php
private $dispatcher
```

***

### typeParser

```php
private $typeParser
```

***

### serializationVisitors

```php
private \PhpCollection\MapInterface $serializationVisitors
```

***

### deserializationVisitors

```php
private \PhpCollection\MapInterface $deserializationVisitors
```

***

### navigator

```php
private $navigator
```

***

### serializationContextFactory

```php
private \JMS\Serializer\ContextFactory\SerializationContextFactoryInterface $serializationContextFactory
```

***

### deserializationContextFactory

```php
private \JMS\Serializer\ContextFactory\DeserializationContextFactoryInterface $deserializationContextFactory
```

***

## Methods

### __construct

Constructor.

```php
public __construct(\Metadata\MetadataFactoryInterface $factory, \JMS\Serializer\Handler\HandlerRegistryInterface $handlerRegistry, \JMS\Serializer\Construction\ObjectConstructorInterface $objectConstructor, \PhpCollection\MapInterface $serializationVisitors, \PhpCollection\MapInterface $deserializationVisitors, \JMS\Serializer\EventDispatcher\EventDispatcherInterface $dispatcher = null, \JMS\Serializer\TypeParser $typeParser = null, \JMS\Serializer\Expression\ExpressionEvaluatorInterface|null $expressionEvaluator = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$factory` | **\Metadata\MetadataFactoryInterface** |  |
| `$handlerRegistry` | **\JMS\Serializer\Handler\HandlerRegistryInterface** |  |
| `$objectConstructor` | **\JMS\Serializer\Construction\ObjectConstructorInterface** |  |
| `$serializationVisitors` | **\PhpCollection\MapInterface** | of VisitorInterface |
| `$deserializationVisitors` | **\PhpCollection\MapInterface** | of VisitorInterface |
| `$dispatcher` | **\JMS\Serializer\EventDispatcher\EventDispatcherInterface** |  |
| `$typeParser` | **\JMS\Serializer\TypeParser** |  |
| `$expressionEvaluator` | **\JMS\Serializer\Expression\ExpressionEvaluatorInterface&#124;null** |  |

***

### serialize

Serializes the given data to the specified output format.

```php
public serialize(mixed $data, mixed $format, \JMS\Serializer\SerializationContext $context = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$format` | **mixed** |  |
| `$context` | **\JMS\Serializer\SerializationContext** |  |

***

### deserialize

Deserializes the given data to the specified type.

```php
public deserialize(mixed $data, mixed $type, mixed $format, \JMS\Serializer\DeserializationContext $context = null): object|array|scalar
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **mixed** |  |
| `$format` | **mixed** |  |
| `$context` | **\JMS\Serializer\DeserializationContext** |  |

***

### toArray

Converts objects to an array structure.

```php
public toArray(mixed $data, \JMS\Serializer\SerializationContext $context = null): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** | anything that converts to an array, typically an object or an array of objects |
| `$context` | **\JMS\Serializer\SerializationContext** |  |

***

### fromArray

Restores objects from an array structure.

```php
public fromArray(array $data, mixed $type, \JMS\Serializer\DeserializationContext $context = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |
| `$type` | **mixed** |  |
| `$context` | **\JMS\Serializer\DeserializationContext** |  |

**Return Value:**

this returns whatever the passed type is, typically an object or an array of objects



***

### visit

```php
private visit(\JMS\Serializer\VisitorInterface $visitor, \JMS\Serializer\Context $context, mixed $data, mixed $format, array $type = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$context` | **\JMS\Serializer\Context** |  |
| `$data` | **mixed** |  |
| `$format` | **mixed** |  |
| `$type` | **array** |  |

***

### handleDeserializeResult

```php
private handleDeserializeResult(mixed $visitorResult, mixed $navigatorResult): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitorResult` | **mixed** |  |
| `$navigatorResult` | **mixed** |  |

***

### convertArrayObjects

```php
private convertArrayObjects(mixed $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |

***

### getMetadataFactory

```php
public getMetadataFactory(): \Metadata\MetadataFactoryInterface
```

***

### setSerializationContextFactory

```php
public setSerializationContextFactory(\JMS\Serializer\ContextFactory\SerializationContextFactoryInterface $serializationContextFactory): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serializationContextFactory` | **\JMS\Serializer\ContextFactory\SerializationContextFactoryInterface** |  |

***

### setDeserializationContextFactory

```php
public setDeserializationContextFactory(\JMS\Serializer\ContextFactory\DeserializationContextFactoryInterface $deserializationContextFactory): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$deserializationContextFactory` | **\JMS\Serializer\ContextFactory\DeserializationContextFactoryInterface** |  |

yxorP::get('REQUEST')
