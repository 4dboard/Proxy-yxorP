***

# SerializedNameAnnotationStrategy

Naming strategy which uses an annotation to translate the property name.



* Full name: `\JMS\Serializer\Naming\SerializedNameAnnotationStrategy`
* This class implements:
[`\JMS\Serializer\Naming\PropertyNamingStrategyInterface`](./PropertyNamingStrategyInterface.md)



## Properties


### delegate



```php
private $delegate
```






***

## Methods


### __construct



```php
public __construct(\JMS\Serializer\Naming\PropertyNamingStrategyInterface $namingStrategy): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namingStrategy` | **\JMS\Serializer\Naming\PropertyNamingStrategyInterface** |  |




***

### translateName

Translates the name of the property to the serialized version.

```php
public translateName(\JMS\Serializer\Metadata\PropertyMetadata $property): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
