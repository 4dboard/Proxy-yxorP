***

# BlackHoleMetadataFactory

Metadata factory that does not store metadata.

This implementation is useful if you want to validate values against
constraints only and you don't need to add constraints to classes and
properties.

* Full name: `\Symfony\Component\Validator\Mapping\Factory\BlackHoleMetadataFactory`
* This class implements:
[`\Symfony\Component\Validator\Mapping\Factory\MetadataFactoryInterface`](./MetadataFactoryInterface.md)




## Methods


### getMetadataFor

{@inheritdoc}

```php
public getMetadataFor(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### hasMetadataFor

{@inheritdoc}

```php
public hasMetadataFor(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
