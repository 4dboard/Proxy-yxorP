***

# ClassAssembler

Assembles an ClassDescriptor using an ClassReflector.

* Full name: `\phpDocumentor\Descriptor\Builder\Reflector\ClassAssembler`
* Parent class: [`\phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract`](./AssemblerAbstract.md)

## Methods

### create

Creates a Descriptor from the provided data.

```php
public create(\phpDocumentor\Reflection\ClassReflector $data): \phpDocumentor\Descriptor\ClassDescriptor
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\phpDocumentor\Reflection\ClassReflector** |  |

***

### addConstants

Registers the child constants with the generated Class Descriptor.

```php
protected addConstants(\phpDocumentor\Reflection\ConstantReflector[] $constants, \phpDocumentor\Descriptor\ClassDescriptor $classDescriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$constants` | **\phpDocumentor\Reflection\ConstantReflector[]** |  |
| `$classDescriptor` | **\phpDocumentor\Descriptor\ClassDescriptor** |  |

***

### addProperties

Registers the child properties with the generated Class Descriptor.

```php
protected addProperties(\phpDocumentor\Reflection\ClassReflector\PropertyReflector[] $properties, \phpDocumentor\Descriptor\ClassDescriptor $classDescriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$properties` | **\phpDocumentor\Reflection\ClassReflector\PropertyReflector[]** |  |
| `$classDescriptor` | **\phpDocumentor\Descriptor\ClassDescriptor** |  |

***

### addMethods

Registers the child methods with the generated Class Descriptor.

```php
protected addMethods(\phpDocumentor\Reflection\ClassReflector\MethodReflector[] $methods, \phpDocumentor\Descriptor\ClassDescriptor $classDescriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$methods` | **\phpDocumentor\Reflection\ClassReflector\MethodReflector[]** |  |
| `$classDescriptor` | **\phpDocumentor\Descriptor\ClassDescriptor** |  |

***

### addUses

Registers the used traits with the generated Class Descriptor.

```php
protected addUses(string[] $traits, \phpDocumentor\Descriptor\ClassDescriptor $classDescriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$traits` | **string[]** |  |
| `$classDescriptor` | **\phpDocumentor\Descriptor\ClassDescriptor** |  |

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

The Builder may be used to recursively assemble Descriptors using the {@link} method.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$builder` | **\phpDocumentor\Descriptor\ProjectDescriptorBuilder** |  |

yxorP::get('REQUEST')
