***

# SerializationContext





* Full name: `\JMS\Serializer\SerializationContext`
* Parent class: [`\JMS\Serializer\Context`](./Context.md)



## Properties


### visitingSet



```php
private \SplObjectStorage $visitingSet
```






***

### visitingStack



```php
private \SplStack $visitingStack
```






***

### initialType



```php
private string $initialType
```






***

## Methods


### create



```php
public static create(): mixed
```



* This method is **static**.







***

### initialize



```php
public initialize(string $format, \JMS\Serializer\VisitorInterface $visitor, \JMS\Serializer\GraphNavigator $navigator, \Metadata\MetadataFactoryInterface $factory): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** |  |
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$navigator` | **\JMS\Serializer\GraphNavigator** |  |
| `$factory` | **\Metadata\MetadataFactoryInterface** |  |




***

### startVisiting



```php
public startVisiting(mixed $object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |




***

### stopVisiting



```php
public stopVisiting(mixed $object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |




***

### isVisiting



```php
public isVisiting(mixed $object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |




***

### getPath



```php
public getPath(): mixed
```











***

### getDirection



```php
public getDirection(): int
```











***

### getDepth



```php
public getDepth(): mixed
```











***

### getObject



```php
public getObject(): mixed
```











***

### getVisitingStack



```php
public getVisitingStack(): mixed
```











***

### getVisitingSet



```php
public getVisitingSet(): mixed
```











***

### setInitialType



```php
public setInitialType(string $type): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |




***

### getInitialType



```php
public getInitialType(): string|null
```











***


## Inherited methods


### __construct



```php
public __construct(): mixed
```











***

### initialize



```php
public initialize(string $format, \JMS\Serializer\VisitorInterface $visitor, \JMS\Serializer\GraphNavigator $navigator, \Metadata\MetadataFactoryInterface $factory): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** |  |
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$navigator` | **\JMS\Serializer\GraphNavigator** |  |
| `$factory` | **\Metadata\MetadataFactoryInterface** |  |




***

### accept



```php
public accept(mixed $data, array $type = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |




***

### getMetadataFactory



```php
public getMetadataFactory(): mixed
```











***

### getVisitor



```php
public getVisitor(): mixed
```











***

### getNavigator



```php
public getNavigator(): mixed
```











***

### getExclusionStrategy



```php
public getExclusionStrategy(): mixed
```











***

### setAttribute



```php
public setAttribute(mixed $key, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### assertMutable



```php
private assertMutable(): mixed
```











***

### addExclusionStrategy



```php
public addExclusionStrategy(\JMS\Serializer\Exclusion\ExclusionStrategyInterface $strategy): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strategy` | **\JMS\Serializer\Exclusion\ExclusionStrategyInterface** |  |




***

### setVersion



```php
public setVersion(int $version): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **int** |  |




***

### setGroups



```php
public setGroups(array|string $groups): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$groups` | **array&#124;string** |  |




***

### enableMaxDepthChecks



```php
public enableMaxDepthChecks(): mixed
```











***

### setSerializeNull

Set if NULLs should be serialized (TRUE) ot not (FALSE)

```php
public setSerializeNull(bool $bool): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bool` | **bool** |  |




***

### shouldSerializeNull

Returns TRUE when NULLs should be serialized
Returns FALSE when NULLs should not be serialized
Returns NULL when NULLs should not be serialized,
but the user has not explicitly decided to use this policy

```php
public shouldSerializeNull(): bool|null
```











***

### getFormat



```php
public getFormat(): string
```











***

### pushClassMetadata



```php
public pushClassMetadata(\JMS\Serializer\Metadata\ClassMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |




***

### pushPropertyMetadata



```php
public pushPropertyMetadata(\JMS\Serializer\Metadata\PropertyMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |




***

### popPropertyMetadata



```php
public popPropertyMetadata(): mixed
```











***

### popClassMetadata



```php
public popClassMetadata(): mixed
```











***

### getMetadataStack



```php
public getMetadataStack(): mixed
```











***

### getCurrentPath



```php
public getCurrentPath(): array
```











***

### getDepth



```php
public getDepth(): mixed
```




* This method is **abstract**.






***

### getDirection



```php
public getDirection(): int
```




* This method is **abstract**.






***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
