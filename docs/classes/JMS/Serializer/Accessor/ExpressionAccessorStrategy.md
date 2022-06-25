***

# ExpressionAccessorStrategy





* Full name: `\JMS\Serializer\Accessor\ExpressionAccessorStrategy`
* This class implements:
[`\JMS\Serializer\Accessor\AccessorStrategyInterface`](./AccessorStrategyInterface.md)



## Properties


### fallback



```php
private \JMS\Serializer\Accessor\AccessorStrategyInterface $fallback
```






***

### evaluator



```php
private \JMS\Serializer\Expression\ExpressionEvaluatorInterface $evaluator
```






***

## Methods


### __construct



```php
public __construct(\JMS\Serializer\Expression\ExpressionEvaluatorInterface $evaluator, \JMS\Serializer\Accessor\AccessorStrategyInterface $fallback): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$evaluator` | **\JMS\Serializer\Expression\ExpressionEvaluatorInterface** |  |
| `$fallback` | **\JMS\Serializer\Accessor\AccessorStrategyInterface** |  |




***

### getValue



```php
public getValue(mixed $object, \JMS\Serializer\Metadata\PropertyMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |
| `$metadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |




***

### setValue



```php
public setValue(mixed $object, mixed $value, \JMS\Serializer\Metadata\PropertyMetadata $metadata): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |
| `$value` | **mixed** |  |
| `$metadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
