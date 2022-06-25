***

# DoctrineObjectConstructor

Doctrine object constructor for new (or existing) objects during deserialization.



* Full name: `\JMS\Serializer\Construction\DoctrineObjectConstructor`
* This class implements:
[`\JMS\Serializer\Construction\ObjectConstructorInterface`](./ObjectConstructorInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ON_MISSING_NULL`|public| |&#039;null&#039;|
|`ON_MISSING_EXCEPTION`|public| |&#039;exception&#039;|
|`ON_MISSING_FALLBACK`|public| |&#039;fallback&#039;|

## Properties


### fallbackStrategy



```php
private string $fallbackStrategy
```






***

### managerRegistry



```php
private $managerRegistry
```






***

### fallbackConstructor



```php
private $fallbackConstructor
```






***

## Methods


### __construct

Constructor.

```php
public __construct(\Doctrine\Common\Persistence\ManagerRegistry $managerRegistry, \JMS\Serializer\Construction\ObjectConstructorInterface $fallbackConstructor, string $fallbackStrategy = self::ON_MISSING_NULL): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$managerRegistry` | **\Doctrine\Common\Persistence\ManagerRegistry** | Manager registry |
| `$fallbackConstructor` | **\JMS\Serializer\Construction\ObjectConstructorInterface** | Fallback object constructor |
| `$fallbackStrategy` | **string** |  |




***

### construct

Constructs a new object.

```php
public construct(\JMS\Serializer\VisitorInterface $visitor, \JMS\Serializer\Metadata\ClassMetadata $metadata, mixed $data, array $type, \JMS\Serializer\DeserializationContext $context): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$data` | **mixed** |  |
| `$type` | **array** | [&quot;name&quot; =&gt; string, &quot;params&quot; =&gt; array] |
| `$context` | **\JMS\Serializer\DeserializationContext** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
