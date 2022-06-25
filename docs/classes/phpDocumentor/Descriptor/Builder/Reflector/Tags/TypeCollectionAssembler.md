***

# TypeCollectionAssembler

Creates a Collection of type-related value objects for the given Type Collection from the Reflector.



* Full name: `\phpDocumentor\Descriptor\Builder\Reflector\Tags\TypeCollectionAssembler`
* Parent class: [`\phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract`](../AssemblerAbstract.md)



## Properties


### typeToValueObjectClassName



```php
protected string[] $typeToValueObjectClassName
```






***

## Methods


### create

Creates a Descriptor from the provided data.

```php
public create(\phpDocumentor\Reflection\DocBlock\Type\Collection $data): \phpDocumentor\Descriptor\Collection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\phpDocumentor\Reflection\DocBlock\Type\Collection** |  |




***

### createDescriptorForType

Creates a Type ValueObject (Descriptor) for the provided type string.

```php
protected createDescriptorForType(string $type): \phpDocumentor\Descriptor\DescriptorAbstract
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |




***

### isArrayNotation

Detects if the given string representing a type equals an array.

```php
protected isArrayNotation(string $type): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |




***

### extractTypeFromArrayNotation

Returns the value-type from an array notation.

```php
protected extractTypeFromArrayNotation(string $type): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |




***

### convertToArrayDescriptor

Wraps the given Descriptor inside a Collection Descriptor of type array and returns that.

```php
protected convertToArrayDescriptor(\phpDocumentor\Descriptor\DescriptorAbstract $descriptor): \phpDocumentor\Descriptor\Type\CollectionDescriptor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$descriptor` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |




***

### findClassNameForType

Returns the class name of the Value Object class associated with a given type or false if the type is unknown.

```php
protected findClassNameForType(string $type): string|bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |




***


## Inherited methods


### assembleDocBlock

Assemble DocBlock.

```php
protected assembleDocBlock(\phpDocumentor\Reflection\DocBlock|null $docBlock, \phpDocumentor\Descriptor\DescriptorAbstract $target): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docBlock` | **\phpDocumentor\Reflection\DocBlock&#124;null** |  |
| `$target` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |




***

### extractPackageFromDocBlock

Extracts the package from the DocBlock.

```php
protected extractPackageFromDocBlock(\phpDocumentor\Reflection\DocBlock $docBlock): string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docBlock` | **\phpDocumentor\Reflection\DocBlock** |  |




***

### getBuilder

Returns the builder for this Assembler or null if none is set.

```php
public getBuilder(): null|\phpDocumentor\Descriptor\ProjectDescriptorBuilder
```











***

### setBuilder

Registers the Builder with this Assembler.

```php
public setBuilder(\phpDocumentor\Descriptor\ProjectDescriptorBuilder $builder): void
```

The Builder may be used to recursively assemble Descriptors using
the {@link} method.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$builder` | **\phpDocumentor\Descriptor\ProjectDescriptorBuilder** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
