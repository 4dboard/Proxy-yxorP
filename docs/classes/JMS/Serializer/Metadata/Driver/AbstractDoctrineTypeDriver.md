***

# AbstractDoctrineTypeDriver

This class decorates any other driver. If the inner driver does not provide a
a property type, the decorator will guess based on Doctrine 2 metadata.



* Full name: `\JMS\Serializer\Metadata\Driver\AbstractDoctrineTypeDriver`
* This class implements:
[`\Metadata\Driver\DriverInterface`](../../../../Metadata/Driver/DriverInterface.md)
* This class is an **Abstract class**



## Properties


### fieldMapping

Map of doctrine 2 field types to JMS\Serializer types

```php
protected array $fieldMapping
```






***

### delegate



```php
protected \Metadata\Driver\DriverInterface $delegate
```






***

### registry



```php
protected \Doctrine\Common\Persistence\ManagerRegistry $registry
```






***

## Methods


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




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
