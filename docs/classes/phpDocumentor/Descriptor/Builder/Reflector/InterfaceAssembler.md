***

# InterfaceAssembler

Assembles an InterfaceDescriptor using an InterfaceReflector.



* Full name: `\phpDocumentor\Descriptor\Builder\Reflector\InterfaceAssembler`
* Parent class: [`\phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract`](./AssemblerAbstract.md)




## Methods


### create

Creates a Descriptor from the provided data.

```php
public create(\phpDocumentor\Reflection\InterfaceReflector $data): \phpDocumentor\Descriptor\InterfaceDescriptor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\phpDocumentor\Reflection\InterfaceReflector** |  |




***

### addConstants

Registers the child constants with the generated Interface Descriptor.

```php
protected addConstants(\phpDocumentor\Reflection\ConstantReflector[] $constants, \phpDocumentor\Descriptor\InterfaceDescriptor $interfaceDescriptor): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$constants` | **\phpDocumentor\Reflection\ConstantReflector[]** |  |
| `$interfaceDescriptor` | **\phpDocumentor\Descriptor\InterfaceDescriptor** |  |




***

### addMethods

Registers the child methods with the generated Interface Descriptor.

```php
protected addMethods(\phpDocumentor\Reflection\ClassReflector\MethodReflector[] $methods, \phpDocumentor\Descriptor\InterfaceDescriptor $interfaceDescriptor): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$methods` | **\phpDocumentor\Reflection\ClassReflector\MethodReflector[]** |  |
| `$interfaceDescriptor` | **\phpDocumentor\Descriptor\InterfaceDescriptor** |  |




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
