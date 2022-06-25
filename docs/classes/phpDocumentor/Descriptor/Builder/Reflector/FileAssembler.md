***

# FileAssembler

Assembles an FileDescriptor using an FileReflector and ParamDescriptors.



* Full name: `\phpDocumentor\Descriptor\Builder\Reflector\FileAssembler`
* Parent class: [`\phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract`](./AssemblerAbstract.md)




## Methods


### create

Creates a Descriptor from the provided data.

```php
public create(\phpDocumentor\Reflection\FileReflector $data): \phpDocumentor\Descriptor\FileDescriptor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\phpDocumentor\Reflection\FileReflector** |  |




***

### addConstants

Registers the child constants with the generated File Descriptor.

```php
protected addConstants(\phpDocumentor\Reflection\ConstantReflector[] $constants, \phpDocumentor\Descriptor\FileDescriptor $fileDescriptor): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$constants` | **\phpDocumentor\Reflection\ConstantReflector[]** |  |
| `$fileDescriptor` | **\phpDocumentor\Descriptor\FileDescriptor** |  |




***

### addFunctions

Registers the child functions with the generated File Descriptor.

```php
protected addFunctions(\phpDocumentor\Reflection\FunctionReflector[] $functions, \phpDocumentor\Descriptor\FileDescriptor $fileDescriptor): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$functions` | **\phpDocumentor\Reflection\FunctionReflector[]** |  |
| `$fileDescriptor` | **\phpDocumentor\Descriptor\FileDescriptor** |  |




***

### addClasses

Registers the child classes with the generated File Descriptor.

```php
protected addClasses(\phpDocumentor\Reflection\ClassReflector[] $classes, \phpDocumentor\Descriptor\FileDescriptor $fileDescriptor): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classes` | **\phpDocumentor\Reflection\ClassReflector[]** |  |
| `$fileDescriptor` | **\phpDocumentor\Descriptor\FileDescriptor** |  |




***

### addInterfaces

Registers the child interfaces with the generated File Descriptor.

```php
protected addInterfaces(\phpDocumentor\Reflection\InterfaceReflector[] $interfaces, \phpDocumentor\Descriptor\FileDescriptor $fileDescriptor): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$interfaces` | **\phpDocumentor\Reflection\InterfaceReflector[]** |  |
| `$fileDescriptor` | **\phpDocumentor\Descriptor\FileDescriptor** |  |




***

### addTraits

Registers the child traits with the generated File Descriptor.

```php
protected addTraits(\phpDocumentor\Reflection\TraitReflector[] $traits, \phpDocumentor\Descriptor\FileDescriptor $fileDescriptor): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$traits` | **\phpDocumentor\Reflection\TraitReflector[]** |  |
| `$fileDescriptor` | **\phpDocumentor\Descriptor\FileDescriptor** |  |




***

### addMarkers

Registers the markers that were found in a File with the File Descriptor.

```php
protected addMarkers(string[] $markers, \phpDocumentor\Descriptor\FileDescriptor $fileDescriptor): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$markers` | **string[]** |  |
| `$fileDescriptor` | **\phpDocumentor\Descriptor\FileDescriptor** |  |




***

### overridePackageTag



```php
protected overridePackageTag( $data,  $fileDescriptor): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |
| `$fileDescriptor` | **** |  |




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
