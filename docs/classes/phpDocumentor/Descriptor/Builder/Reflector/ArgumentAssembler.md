***

# ArgumentAssembler

Assembles an ArgumentDescriptor using an ArgumentReflector and ParamDescriptors.



* Full name: `\phpDocumentor\Descriptor\Builder\Reflector\ArgumentAssembler`
* Parent class: [`\phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract`](./AssemblerAbstract.md)




## Methods


### create

Creates a Descriptor from the provided data.

```php
public create(\phpDocumentor\Reflection\FunctionReflector\ArgumentReflector $data, \phpDocumentor\Descriptor\Tag\ParamDescriptor[] $params = array()): \phpDocumentor\Descriptor\ArgumentDescriptor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\phpDocumentor\Reflection\FunctionReflector\ArgumentReflector** |  |
| `$params` | **\phpDocumentor\Descriptor\Tag\ParamDescriptor[]** |  |




***

### overwriteTypeAndDescriptionFromParamTag

Overwrites the type and description in the Argument Descriptor with that from the tag if the names match.

```php
protected overwriteTypeAndDescriptionFromParamTag(\phpDocumentor\Reflection\FunctionReflector\ArgumentReflector $argument, \phpDocumentor\Descriptor\Tag\ParamDescriptor $paramDescriptor, \phpDocumentor\Descriptor\ArgumentDescriptor $argumentDescriptor): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$argument` | **\phpDocumentor\Reflection\FunctionReflector\ArgumentReflector** |  |
| `$paramDescriptor` | **\phpDocumentor\Descriptor\Tag\ParamDescriptor** |  |
| `$argumentDescriptor` | **\phpDocumentor\Descriptor\ArgumentDescriptor** |  |




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
