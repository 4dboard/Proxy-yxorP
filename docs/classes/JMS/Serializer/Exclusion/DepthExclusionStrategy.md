***

# DepthExclusionStrategy





* Full name: `\JMS\Serializer\Exclusion\DepthExclusionStrategy`
* This class implements:
[`\JMS\Serializer\Exclusion\ExclusionStrategyInterface`](./ExclusionStrategyInterface.md)




## Methods


### shouldSkipClass

Whether the class should be skipped.

```php
public shouldSkipClass(\JMS\Serializer\Metadata\ClassMetadata $metadata, \JMS\Serializer\Context $context): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### shouldSkipProperty

Whether the property should be skipped.

```php
public shouldSkipProperty(\JMS\Serializer\Metadata\PropertyMetadata $property, \JMS\Serializer\Context $context): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### isTooDeep



```php
private isTooDeep(\JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\JMS\Serializer\Context** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
