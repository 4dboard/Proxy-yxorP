***

# UnknownTypeDescriptor

This class represents any Type that could not be identified.

Sometimes DocBlocks refer to types, such as classes, that are outside the generated project's scope; in these
cases we want to identify them as such with an unknown type descriptor.

* Full name: `\phpDocumentor\Descriptor\Type\UnknownTypeDescriptor`
* This class implements:
[`\phpDocumentor\Descriptor\Interfaces\TypeInterface`](../Interfaces/TypeInterface.md)



## Properties


### name



```php
protected string $name
```






***

## Methods


### __construct

Creates an unknown type with the given name.

```php
public __construct(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getName

Returns the name for this identifier.

```php
public getName(): string
```











***

### __toString

Returns a human-readable name for this type.

```php
public __toString(): string
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
