***

# XmlDeserializationVisitor





* Full name: `\JMS\Serializer\XmlDeserializationVisitor`
* Parent class: [`\JMS\Serializer\AbstractVisitor`](./AbstractVisitor.md)



## Properties


### objectStack



```php
private $objectStack
```






***

### metadataStack



```php
private $metadataStack
```






***

### objectMetadataStack



```php
private $objectMetadataStack
```






***

### currentObject



```php
private $currentObject
```






***

### currentMetadata



```php
private $currentMetadata
```






***

### result



```php
private $result
```






***

### navigator



```php
private $navigator
```






***

### disableExternalEntities



```php
private $disableExternalEntities
```






***

### doctypeWhitelist



```php
private $doctypeWhitelist
```






***

## Methods


### enableExternalEntities



```php
public enableExternalEntities(): mixed
```











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

### getNavigator



```php
public getNavigator(): mixed
```











***

### prepare

Allows visitors to convert the input data to a different representation
before the actual serialization/deserialization process starts.

```php
public prepare(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### emptyStringToSpaceCharacter



```php
private emptyStringToSpaceCharacter(mixed $data): mixed
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

### setCurrentMetadata



```php
public setCurrentMetadata(\JMS\Serializer\Metadata\PropertyMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |




***

### getCurrentMetadata



```php
public getCurrentMetadata(): mixed
```











***

### revertCurrentMetadata



```php
public revertCurrentMetadata(): mixed
```











***

### getResult



```php
public getResult(): mixed
```











***

### setDoctypeWhitelist



```php
public setDoctypeWhitelist(string[] $doctypeWhitelist): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$doctypeWhitelist` | **string[]** |  |




***

### getDoctypeWhitelist



```php
public getDoctypeWhitelist(): string[]
```











***

### getDomDocumentTypeEntitySubset

Retrieves internalSubset even in bugfixed php versions

```php
private getDomDocumentTypeEntitySubset(string $data): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **string** |  |




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

Allows visitors to convert the input data to a different representation
before the actual serialization/deserialization process starts.

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




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
