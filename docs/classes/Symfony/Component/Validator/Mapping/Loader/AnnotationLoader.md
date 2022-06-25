***

# AnnotationLoader

Loads validation metadata using a Doctrine annotation {@link Reader}.



* Full name: `\Symfony\Component\Validator\Mapping\Loader\AnnotationLoader`
* This class implements:
[`\Symfony\Component\Validator\Mapping\Loader\LoaderInterface`](./LoaderInterface.md)



## Properties


### reader



```php
protected $reader
```






***

## Methods


### __construct



```php
public __construct(\Doctrine\Common\Annotations\Reader $reader): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reader` | **\Doctrine\Common\Annotations\Reader** |  |




***

### loadClassMetadata

Loads validation metadata into a {@link ClassMetadata} instance.

```php
public loadClassMetadata(\Symfony\Component\Validator\Mapping\ClassMetadata $metadata): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Symfony\Component\Validator\Mapping\ClassMetadata** |  |


**Return Value:**

Whether the loader succeeded



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
