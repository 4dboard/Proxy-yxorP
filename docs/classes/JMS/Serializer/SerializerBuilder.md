***

# SerializerBuilder

Builder for serializer instances.

This object makes serializer construction a breeze for projects that do not use any special dependency injection
container.

* Full name: `\JMS\Serializer\SerializerBuilder`

## Properties

### metadataDirs

```php
private $metadataDirs
```

***

### handlerRegistry

```php
private $handlerRegistry
```

***

### handlersConfigured

```php
private $handlersConfigured
```

***

### eventDispatcher

```php
private $eventDispatcher
```

***

### listenersConfigured

```php
private $listenersConfigured
```

***

### objectConstructor

```php
private $objectConstructor
```

***

### serializationVisitors

```php
private $serializationVisitors
```

***

### deserializationVisitors

```php
private $deserializationVisitors
```

***

### visitorsAdded

```php
private $visitorsAdded
```

***

### propertyNamingStrategy

```php
private $propertyNamingStrategy
```

***

### debug

```php
private $debug
```

***

### cacheDir

```php
private $cacheDir
```

***

### annotationReader

```php
private $annotationReader
```

***

### includeInterfaceMetadata

```php
private $includeInterfaceMetadata
```

***

### driverFactory

```php
private $driverFactory
```

***

### serializationContextFactory

```php
private $serializationContextFactory
```

***

### deserializationContextFactory

```php
private $deserializationContextFactory
```

***

### expressionEvaluator

```php
private \JMS\Serializer\Expression\ExpressionEvaluatorInterface $expressionEvaluator
```

***

### accessorStrategy

```php
private \JMS\Serializer\Accessor\AccessorStrategyInterface $accessorStrategy
```

***

## Methods

### create

```php
public static create(): mixed
```

* This method is **static**.

***

### __construct

```php
public __construct(): mixed
```

***

### setAccessorStrategy

```php
public setAccessorStrategy(\JMS\Serializer\Accessor\AccessorStrategyInterface $accessorStrategy): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$accessorStrategy` | **\JMS\Serializer\Accessor\AccessorStrategyInterface** |  |

***

### getAccessorStrategy

```php
protected getAccessorStrategy(): mixed
```

***

### setExpressionEvaluator

```php
public setExpressionEvaluator(\JMS\Serializer\Expression\ExpressionEvaluatorInterface $expressionEvaluator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expressionEvaluator` | **\JMS\Serializer\Expression\ExpressionEvaluatorInterface** |  |

***

### setAnnotationReader

```php
public setAnnotationReader(\Doctrine\Common\Annotations\Reader $reader): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reader` | **\Doctrine\Common\Annotations\Reader** |  |

***

### setDebug

```php
public setDebug(mixed $bool): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bool` | **mixed** |  |

***

### setCacheDir

```php
public setCacheDir(mixed $dir): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **mixed** |  |

***

### addDefaultHandlers

```php
public addDefaultHandlers(): mixed
```

***

### configureHandlers

```php
public configureHandlers(\Closure $closure): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$closure` | **\Closure** |  |

***

### addDefaultListeners

```php
public addDefaultListeners(): mixed
```

***

### configureListeners

```php
public configureListeners(\Closure $closure): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$closure` | **\Closure** |  |

***

### setObjectConstructor

```php
public setObjectConstructor(\JMS\Serializer\Construction\ObjectConstructorInterface $constructor): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$constructor` | **\JMS\Serializer\Construction\ObjectConstructorInterface** |  |

***

### setPropertyNamingStrategy

```php
public setPropertyNamingStrategy(\JMS\Serializer\Naming\PropertyNamingStrategyInterface $propertyNamingStrategy): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$propertyNamingStrategy` | **\JMS\Serializer\Naming\PropertyNamingStrategyInterface** |  |

***

### setSerializationVisitor

```php
public setSerializationVisitor(mixed $format, \JMS\Serializer\VisitorInterface $visitor): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **mixed** |  |
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |

***

### setDeserializationVisitor

```php
public setDeserializationVisitor(mixed $format, \JMS\Serializer\VisitorInterface $visitor): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **mixed** |  |
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |

***

### addDefaultSerializationVisitors

```php
public addDefaultSerializationVisitors(): mixed
```

***

### addDefaultDeserializationVisitors

```php
public addDefaultDeserializationVisitors(): mixed
```

***

### includeInterfaceMetadata

```php
public includeInterfaceMetadata(bool $include): \JMS\Serializer\SerializerBuilder
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$include` | **bool** | Whether to include the metadata from the interfaces |

***

### setMetadataDirs

Sets a map of namespace prefixes to directories.

```php
public setMetadataDirs(array&lt;string,string&gt; $namespacePrefixToDirMap): \JMS\Serializer\SerializerBuilder
```

This method overrides any previously defined directories.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespacePrefixToDirMap` | **array<string,string>** |  |

***

### addMetadataDir

Adds a directory where the serializer will look for class metadata.

```php
public addMetadataDir(string $dir, string $namespacePrefix = &#039;&#039;): \JMS\Serializer\SerializerBuilder
```

The namespace prefix will make the names of the actual metadata files a bit shorter. For example, let's assume that you
have a directory where you only store metadata files for the ``MyApplication\Entity`` namespace.

If you use an empty prefix, your metadata files would need to look like:

``my-dir/MyApplication.Entity.SomeObject.yml``
``my-dir/MyApplication.Entity.OtherObject.xml``

If you use ``MyApplication\Entity`` as prefix, your metadata files would need to look like:

``my-dir/SomeObject.yml``
``my-dir/OtherObject.yml``

Please keep in mind that you currently may only have one directory per namespace prefix.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **string** | The directory where metadata files are located. |
| `$namespacePrefix` | **
string** | An optional prefix if you only store metadata for specific namespaces in this directory. |

***

### addMetadataDirs

Adds a map of namespace prefixes to directories.

```php
public addMetadataDirs(array&lt;string,string&gt; $namespacePrefixToDirMap): \JMS\Serializer\SerializerBuilder
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespacePrefixToDirMap` | **array<string,string>** |  |

***

### replaceMetadataDir

Similar to addMetadataDir(), but overrides an existing entry.

```php
public replaceMetadataDir(string $dir, string $namespacePrefix = &#039;&#039;): \JMS\Serializer\SerializerBuilder
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **string** |  |
| `$namespacePrefix` | **string** |  |

***

### setMetadataDriverFactory

```php
public setMetadataDriverFactory(\JMS\Serializer\Builder\DriverFactoryInterface $driverFactory): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driverFactory` | **\JMS\Serializer\Builder\DriverFactoryInterface** |  |

***

### setSerializationContextFactory

```php
public setSerializationContextFactory(\JMS\Serializer\ContextFactory\SerializationContextFactoryInterface|callable $serializationContextFactory): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serializationContextFactory` | **
\JMS\Serializer\ContextFactory\SerializationContextFactoryInterface&#124;callable** |  |

***

### setDeserializationContextFactory

```php
public setDeserializationContextFactory(\JMS\Serializer\ContextFactory\DeserializationContextFactoryInterface|callable $deserializationContextFactory): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$deserializationContextFactory` | **
\JMS\Serializer\ContextFactory\DeserializationContextFactoryInterface&#124;callable** |  |

***

### build

```php
public build(): mixed
```

***

### initializePropertyNamingStrategy

```php
private initializePropertyNamingStrategy(): mixed
```

***

### createDir

```php
private createDir(mixed $dir): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **mixed** |  |

yxorP::get('REQUEST')
