***

# FakeMetadataFactory





* Full name: `\Symfony\Component\Validator\Tests\Fixtures\FakeMetadataFactory`
* This class implements:
[`\Symfony\Component\Validator\MetadataFactoryInterface`](../../MetadataFactoryInterface.md)



## Properties


### metadatas



```php
protected $metadatas
```






***

## Methods


### getMetadataFor

Returns the metadata for the given value.

```php
public getMetadataFor(mixed $class): \Symfony\Component\Validator\MetadataInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |


**Return Value:**

The metadata for the value



***

### hasMetadataFor

Returns whether the class is able to return metadata for the given value.

```php
public hasMetadataFor(mixed $class): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |


**Return Value:**

Whether metadata can be returned for that value



***

### addMetadata



```php
public addMetadata(mixed $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **mixed** |  |




***

### addMetadataForValue



```php
public addMetadataForValue(mixed $value, \Symfony\Component\Validator\MetadataInterface $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$metadata` | **\Symfony\Component\Validator\MetadataInterface** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
