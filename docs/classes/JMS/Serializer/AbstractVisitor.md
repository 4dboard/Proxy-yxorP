***

# AbstractVisitor





* Full name: `\JMS\Serializer\AbstractVisitor`
* This class implements:
[`\JMS\Serializer\VisitorInterface`](./VisitorInterface.md)
* This class is an **Abstract class**



## Properties


### namingStrategy



```php
protected $namingStrategy
```






***

### accessor



```php
protected \JMS\Serializer\Accessor\AccessorStrategyInterface $accessor
```






***

## Methods


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
