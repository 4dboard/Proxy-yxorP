***

# VersionExclusionStrategy





* Full name: `\JMS\Serializer\Exclusion\VersionExclusionStrategy`
* This class implements:
[`\JMS\Serializer\Exclusion\ExclusionStrategyInterface`](./ExclusionStrategyInterface.md)



## Properties


### version



```php
private $version
```






***

## Methods


### __construct



```php
public __construct(mixed $version): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **mixed** |  |




***

### shouldSkipClass

Whether the class should be skipped.

```php
public shouldSkipClass(\JMS\Serializer\Metadata\ClassMetadata $metadata, \JMS\Serializer\Context $navigatorContext): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$navigatorContext` | **\JMS\Serializer\Context** |  |




***

### shouldSkipProperty

Whether the property should be skipped.

```php
public shouldSkipProperty(\JMS\Serializer\Metadata\PropertyMetadata $property, \JMS\Serializer\Context $navigatorContext): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |
| `$navigatorContext` | **\JMS\Serializer\Context** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
