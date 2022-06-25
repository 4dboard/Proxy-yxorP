***

# ClassMetadata

Class Metadata used to customize the serialization process.



* Full name: `\JMS\Serializer\Metadata\ClassMetadata`
* Parent class: [`\Metadata\MergeableClassMetadata`](../../../Metadata/MergeableClassMetadata.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ACCESSOR_ORDER_UNDEFINED`|public| |&#039;undefined&#039;|
|`ACCESSOR_ORDER_ALPHABETICAL`|public| |&#039;alphabetical&#039;|
|`ACCESSOR_ORDER_CUSTOM`|public| |&#039;custom&#039;|

## Properties


### preSerializeMethods



```php
public \ReflectionMethod[] $preSerializeMethods
```






***

### postSerializeMethods



```php
public \ReflectionMethod[] $postSerializeMethods
```






***

### postDeserializeMethods



```php
public \ReflectionMethod[] $postDeserializeMethods
```






***

### xmlRootName



```php
public $xmlRootName
```






***

### xmlRootNamespace



```php
public $xmlRootNamespace
```






***

### xmlNamespaces



```php
public $xmlNamespaces
```






***

### accessorOrder



```php
public $accessorOrder
```






***

### customOrder



```php
public $customOrder
```






***

### usingExpression



```php
public $usingExpression
```






***

### handlerCallbacks



```php
public $handlerCallbacks
```






***

### discriminatorDisabled



```php
public $discriminatorDisabled
```






***

### discriminatorBaseClass



```php
public $discriminatorBaseClass
```






***

### discriminatorFieldName



```php
public $discriminatorFieldName
```






***

### discriminatorValue



```php
public $discriminatorValue
```






***

### discriminatorMap



```php
public $discriminatorMap
```






***

### discriminatorGroups



```php
public $discriminatorGroups
```






***

### xmlDiscriminatorAttribute



```php
public $xmlDiscriminatorAttribute
```






***

### xmlDiscriminatorCData



```php
public $xmlDiscriminatorCData
```






***

### xmlDiscriminatorNamespace



```php
public $xmlDiscriminatorNamespace
```






***

## Methods


### setDiscriminator



```php
public setDiscriminator(mixed $fieldName, array $map, array $groups = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fieldName` | **mixed** |  |
| `$map` | **array** |  |
| `$groups` | **array** |  |




***

### setAccessorOrder

Sets the order of properties in the class.

```php
public setAccessorOrder(string $order, array $customOrder = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$order` | **string** |  |
| `$customOrder` | **array** |  |




***

### addPropertyMetadata



```php
public addPropertyMetadata(\Metadata\PropertyMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Metadata\PropertyMetadata** |  |




***

### addPreSerializeMethod



```php
public addPreSerializeMethod(\Metadata\MethodMetadata $method): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **\Metadata\MethodMetadata** |  |




***

### addPostSerializeMethod



```php
public addPostSerializeMethod(\Metadata\MethodMetadata $method): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **\Metadata\MethodMetadata** |  |




***

### addPostDeserializeMethod



```php
public addPostDeserializeMethod(\Metadata\MethodMetadata $method): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **\Metadata\MethodMetadata** |  |




***

### addHandlerCallback



```php
public addHandlerCallback(int $direction, string|int $format, string $methodName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$direction` | **int** |  |
| `$format` | **string&#124;int** |  |
| `$methodName` | **string** |  |




***

### merge



```php
public merge(\Metadata\MergeableInterface $object): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **\Metadata\MergeableInterface** |  |




***

### registerNamespace



```php
public registerNamespace(mixed $uri, mixed $prefix = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **mixed** |  |
| `$prefix` | **mixed** |  |




***

### serialize



```php
public serialize(): mixed
```











***

### unserialize



```php
public unserialize(mixed $str): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |




***

### sortProperties



```php
private sortProperties(): mixed
```











***


## Inherited methods


### merge



```php
public merge(\Metadata\MergeableInterface $object): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **\Metadata\MergeableInterface** |  |




***

### __construct



```php
public __construct(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### addMethodMetadata



```php
public addMethodMetadata(\Metadata\MethodMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Metadata\MethodMetadata** |  |




***

### addPropertyMetadata



```php
public addPropertyMetadata(\Metadata\PropertyMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Metadata\PropertyMetadata** |  |




***

### isFresh



```php
public isFresh(mixed $timestamp = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timestamp` | **mixed** |  |




***

### serialize



```php
public serialize(): mixed
```











***

### unserialize



```php
public unserialize(mixed $str): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
