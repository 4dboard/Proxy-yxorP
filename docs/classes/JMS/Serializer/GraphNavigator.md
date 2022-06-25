***

# GraphNavigator

Handles traversal along the object graph.

This class handles traversal along the graph, and calls different methods
on visitors, or custom handlers to process its nodes.

* Full name: `\JMS\Serializer\GraphNavigator`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DIRECTION_SERIALIZATION`|public| |1|
|`DIRECTION_DESERIALIZATION`|public| |2|

## Properties


### expressionExclusionStrategy



```php
private \JMS\Serializer\Exclusion\ExpressionLanguageExclusionStrategy $expressionExclusionStrategy
```






***

### dispatcher



```php
private $dispatcher
```






***

### metadataFactory



```php
private $metadataFactory
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

## Methods


### parseDirection

Parses a direction string to one of the direction constants.

```php
public static parseDirection(string $dirStr): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirStr` | **string** |  |




***

### __construct



```php
public __construct(\Metadata\MetadataFactoryInterface $metadataFactory, \JMS\Serializer\Handler\HandlerRegistryInterface $handlerRegistry, \JMS\Serializer\Construction\ObjectConstructorInterface $objectConstructor, \JMS\Serializer\EventDispatcher\EventDispatcherInterface $dispatcher = null, \JMS\Serializer\Expression\ExpressionEvaluatorInterface $expressionEvaluator = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadataFactory` | **\Metadata\MetadataFactoryInterface** |  |
| `$handlerRegistry` | **\JMS\Serializer\Handler\HandlerRegistryInterface** |  |
| `$objectConstructor` | **\JMS\Serializer\Construction\ObjectConstructorInterface** |  |
| `$dispatcher` | **\JMS\Serializer\EventDispatcher\EventDispatcherInterface** |  |
| `$expressionEvaluator` | **\JMS\Serializer\Expression\ExpressionEvaluatorInterface** |  |




***

### accept

Called for each node of the graph that is being traversed.

```php
public accept(mixed $data, null|array $type = null, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** | the data depends on the direction, and type of visitor |
| `$type` | **null&#124;array** | array has the format [&quot;name&quot; =&gt; string, &quot;params&quot; =&gt; array] |
| `$context` | **\JMS\Serializer\Context** |  |


**Return Value:**

the return value depends on the direction, and type of visitor



***

### resolveMetadata



```php
private resolveMetadata(mixed $data, \JMS\Serializer\Metadata\ClassMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |




***

### leaveScope



```php
private leaveScope(\JMS\Serializer\Context $context, mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\JMS\Serializer\Context** |  |
| `$data` | **mixed** |  |




***

### afterVisitingObject



```php
private afterVisitingObject(\JMS\Serializer\Metadata\ClassMetadata $metadata, mixed $object, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$object` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
