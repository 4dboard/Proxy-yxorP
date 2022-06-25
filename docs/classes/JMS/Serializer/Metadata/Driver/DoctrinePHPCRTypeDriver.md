***

# DoctrinePHPCRTypeDriver

This class decorates any other driver. If the inner driver does not provide a a property type, the decorator will guess
based on Doctrine 2 metadata.

* Full name: `\JMS\Serializer\Metadata\Driver\DoctrinePHPCRTypeDriver`
* Parent class: [`\JMS\Serializer\Metadata\Driver\AbstractDoctrineTypeDriver`](./AbstractDoctrineTypeDriver.md)

## Methods

### hideProperty

```php
protected hideProperty(\Doctrine\Common\Persistence\Mapping\ClassMetadata $doctrineMetadata, \JMS\Serializer\Metadata\PropertyMetadata $propertyMetadata): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$doctrineMetadata` | **\Doctrine\Common\Persistence\Mapping\ClassMetadata** |  |
| `$propertyMetadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |

***

### setPropertyType

```php
protected setPropertyType(\Doctrine\Common\Persistence\Mapping\ClassMetadata $doctrineMetadata, \JMS\Serializer\Metadata\PropertyMetadata $propertyMetadata): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$doctrineMetadata` | **\Doctrine\Common\Persistence\Mapping\ClassMetadata** |  |
| `$propertyMetadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |

***

## Inherited methods

### __construct

```php
public __construct(\Metadata\Driver\DriverInterface $delegate, \Doctrine\Common\Persistence\ManagerRegistry $registry): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$delegate` | **\Metadata\Driver\DriverInterface** |  |
| `$registry` | **\Doctrine\Common\Persistence\ManagerRegistry** |  |

***

### loadMetadataForClass

```php
public loadMetadataForClass(\ReflectionClass $class): \Metadata\ClassMetadata
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |

***

### isVirtualProperty

```php
private isVirtualProperty(\JMS\Serializer\Metadata\PropertyMetadata $propertyMetadata): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$propertyMetadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |

***

### setDiscriminator

```php
protected setDiscriminator(\Doctrine\Common\Persistence\Mapping\ClassMetadata $doctrineMetadata, \JMS\Serializer\Metadata\ClassMetadata $classMetadata): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$doctrineMetadata` | **\Doctrine\Common\Persistence\Mapping\ClassMetadata** |  |
| `$classMetadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |

***

### hideProperty

```php
protected hideProperty(\Doctrine\Common\Persistence\Mapping\ClassMetadata $doctrineMetadata, \JMS\Serializer\Metadata\PropertyMetadata $propertyMetadata): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$doctrineMetadata` | **\Doctrine\Common\Persistence\Mapping\ClassMetadata** |  |
| `$propertyMetadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |

***

### setPropertyType

```php
protected setPropertyType(\Doctrine\Common\Persistence\Mapping\ClassMetadata $doctrineMetadata, \JMS\Serializer\Metadata\PropertyMetadata $propertyMetadata): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$doctrineMetadata` | **\Doctrine\Common\Persistence\Mapping\ClassMetadata** |  |
| `$propertyMetadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |

***

### tryLoadingDoctrineMetadata

```php
protected tryLoadingDoctrineMetadata(string $className): null|\Doctrine\Common\Persistence\Mapping\ClassMetadata
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |

***

### normalizeFieldType

```php
protected normalizeFieldType(string $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |

yxorP::get('REQUEST')
