***

# LoaderChain

Loads validation metadata from multiple {@link LoaderInterface} instances.

Pass the loaders when constructing the chain. Once
{@link} is called, that method will be called on all
loaders in the chain.

* Full name: `\Symfony\Component\Validator\Mapping\Loader\LoaderChain`
* This class implements:
[`\Symfony\Component\Validator\Mapping\Loader\LoaderInterface`](./LoaderInterface.md)



## Properties


### loaders



```php
protected $loaders
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\Validator\Mapping\Loader\LoaderInterface[] $loaders): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loaders` | **\Symfony\Component\Validator\Mapping\Loader\LoaderInterface[]** | The metadata loaders to use |




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
