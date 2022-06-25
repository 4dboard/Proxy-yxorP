***

# StaticMethodLoader

Loads validation metadata by calling a static method on the loaded class.



* Full name: `\Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader`
* This class implements:
[`\Symfony\Component\Validator\Mapping\Loader\LoaderInterface`](./LoaderInterface.md)



## Properties


### methodName



```php
protected $methodName
```






***

## Methods


### __construct

Creates a new loader.

```php
public __construct(string $methodName = &#039;loadValidatorMetadata&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$methodName` | **string** | The name of the static method to call |




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
