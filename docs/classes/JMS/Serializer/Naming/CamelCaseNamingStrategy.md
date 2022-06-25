***

# CamelCaseNamingStrategy

Generic naming strategy which translates a camel-cased property name.



* Full name: `\JMS\Serializer\Naming\CamelCaseNamingStrategy`
* This class implements:
[`\JMS\Serializer\Naming\PropertyNamingStrategyInterface`](./PropertyNamingStrategyInterface.md)



## Properties


### separator



```php
private $separator
```






***

### lowerCase



```php
private $lowerCase
```






***

## Methods


### __construct



```php
public __construct(mixed $separator = &#039;_&#039;, mixed $lowerCase = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$separator` | **mixed** |  |
| `$lowerCase` | **mixed** |  |




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
