***

# GenericSerializationVisitor





* Full name: `\JMS\Serializer\GenericSerializationVisitor`
* Parent class: [`\JMS\Serializer\AbstractVisitor`](./AbstractVisitor.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class is an **Abstract class**



## Properties


### navigator



```php
private $navigator
```






***

### root



```php
private $root
```






***

### dataStack



```php
private $dataStack
```






***

### data



```php
private $data
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
public getNavigator(): \JMS\Serializer\GraphNavigator
```











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
public visitArray(array $data, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |
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

### addData

Allows you to add additional data to the current object/root element.

```php
public addData(string $key, int|float|bool|string|array|null $value): mixed
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **int&#124;float&#124;bool&#124;string&#124;array&#124;null** | This value must either be a regular scalar, or an array.<br />It must not contain any objects anymore. |




***

### hasData

Checks if some data key exists.

```php
public hasData(string $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### setData

Allows you to replace existing data on the current object/root element.

```php
public setData(string $key, int|float|bool|string|array|null $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **int&#124;float&#124;bool&#124;string&#124;array&#124;null** | This value must either be a regular scalar, or an array.<br />It must not contain any objects anymore. |




***

### getRoot



```php
public getRoot(): mixed
```











***

### setRoot



```php
public setRoot(array|\ArrayObject $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array&#124;\ArrayObject** | the passed data must be understood by whatever encoding function is applied later. |




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
