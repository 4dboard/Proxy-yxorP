***

# PropertyMetadata

Base class for property metadata.

This class is intended to be extended to add your application specific
properties, and flags.

* Full name: `\JMS\Serializer\Metadata\PropertyMetadata`
* Parent class: [`\Metadata\PropertyMetadata`](../../../Metadata/PropertyMetadata.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ACCESS_TYPE_PROPERTY`|public| |&#039;property&#039;|
|`ACCESS_TYPE_PUBLIC_METHOD`|public| |&#039;public_method&#039;|

## Properties


### sinceVersion



```php
public $sinceVersion
```






***

### untilVersion



```php
public $untilVersion
```






***

### groups



```php
public $groups
```






***

### serializedName



```php
public $serializedName
```






***

### type



```php
public $type
```






***

### xmlCollection



```php
public $xmlCollection
```






***

### xmlCollectionInline



```php
public $xmlCollectionInline
```






***

### xmlCollectionSkipWhenEmpty



```php
public $xmlCollectionSkipWhenEmpty
```






***

### xmlEntryName



```php
public $xmlEntryName
```






***

### xmlEntryNamespace



```php
public $xmlEntryNamespace
```






***

### xmlKeyAttribute



```php
public $xmlKeyAttribute
```






***

### xmlAttribute



```php
public $xmlAttribute
```






***

### xmlValue



```php
public $xmlValue
```






***

### xmlNamespace



```php
public $xmlNamespace
```






***

### xmlKeyValuePairs



```php
public $xmlKeyValuePairs
```






***

### xmlElementCData



```php
public $xmlElementCData
```






***

### getter



```php
public $getter
```






***

### setter



```php
public $setter
```






***

### inline



```php
public $inline
```






***

### skipWhenEmpty



```php
public $skipWhenEmpty
```






***

### readOnly



```php
public $readOnly
```






***

### xmlAttributeMap



```php
public $xmlAttributeMap
```






***

### maxDepth



```php
public $maxDepth
```






***

### excludeIf



```php
public $excludeIf
```






***

### typeParser



```php
private static $typeParser
```



* This property is **static**.


***

## Methods


### setAccessor



```php
public setAccessor(mixed $type, mixed $getter = null, mixed $setter = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$getter` | **mixed** |  |
| `$setter` | **mixed** |  |




***

### getValue



```php
public getValue(mixed $obj): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |




***

### setValue



```php
public setValue(mixed $obj, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |
| `$value` | **mixed** |  |




***

### setType



```php
public setType(mixed $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




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


## Inherited methods


### __construct



```php
public __construct(mixed $class, mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |
| `$name` | **mixed** |  |




***

### getValue



```php
public getValue(object $obj): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **object** |  |




***

### setValue



```php
public setValue(object $obj, string $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **object** |  |
| `$value` | **string** |  |




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
