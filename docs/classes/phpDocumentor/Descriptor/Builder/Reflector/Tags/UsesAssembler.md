***

# UsesAssembler

Base class for all assemblers.



* Full name: `\phpDocumentor\Descriptor\Builder\Reflector\Tags\UsesAssembler`
* Parent class: [`\phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract`](../AssemblerAbstract.md)




## Methods


### create

Creates a new Descriptor from the given Reflector.

```php
public create(\phpDocumentor\Reflection\DocBlock\Tag\UsesTag $data): \phpDocumentor\Descriptor\Tag\UsesDescriptor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\phpDocumentor\Reflection\DocBlock\Tag\UsesTag** |  |




***

### setFirstReferencePartAsType



```php
private setFirstReferencePartAsType(\phpDocumentor\Reflection\DocBlock\Context $context, string[] $referenceParts): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\phpDocumentor\Reflection\DocBlock\Context** |  |
| `$referenceParts` | **string[]** |  |


**Return Value:**

The returned array will consist of a Collection object with the type, and strings for methods, etc.



***

### referenceIsNamespaceAlias

When you have a relative reference to a class, we need to check if this class exists in the namespace aliases

```php
private referenceIsNamespaceAlias(string $reference, \phpDocumentor\Reflection\DocBlock\Context $context): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **string** |  |
| `$context` | **\phpDocumentor\Reflection\DocBlock\Context** |  |




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
