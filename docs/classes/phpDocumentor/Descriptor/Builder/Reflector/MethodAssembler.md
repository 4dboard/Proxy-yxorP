***

# MethodAssembler

Assembles a MethodDescriptor from a MethodReflector.

* Full name: `\phpDocumentor\Descriptor\Builder\Reflector\MethodAssembler`
* Parent class: [`\phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract`](./AssemblerAbstract.md)

## Properties

### argumentAssembler

```php
protected \phpDocumentor\Descriptor\Builder\Reflector\ArgumentAssembler $argumentAssembler
```

***

## Methods

### __construct

Initializes this assembler with its dependencies.

```php
public __construct(\phpDocumentor\Descriptor\Builder\Reflector\ArgumentAssembler $argumentAssembler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$argumentAssembler` | **\phpDocumentor\Descriptor\Builder\Reflector\ArgumentAssembler** |  |

***

### create

Creates a Descriptor from the provided data.

```php
public create(\phpDocumentor\Reflection\ClassReflector\MethodReflector $data): \phpDocumentor\Descriptor\MethodDescriptor
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\phpDocumentor\Reflection\ClassReflector\MethodReflector** |  |

***

### mapReflectorToDescriptor

Maps the fields to the reflector to the descriptor.

```php
protected mapReflectorToDescriptor(\phpDocumentor\Reflection\ClassReflector\MethodReflector $reflector, \phpDocumentor\Descriptor\MethodDescriptor $descriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflector` | **\phpDocumentor\Reflection\ClassReflector\MethodReflector** |  |
| `$descriptor` | **\phpDocumentor\Descriptor\MethodDescriptor** |  |

***

### addArguments

Adds the reflected Arguments to the Descriptor.

```php
protected addArguments(\phpDocumentor\Reflection\ClassReflector\MethodReflector $reflector, \phpDocumentor\Descriptor\MethodDescriptor $descriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflector` | **\phpDocumentor\Reflection\ClassReflector\MethodReflector** |  |
| `$descriptor` | **\phpDocumentor\Descriptor\MethodDescriptor** |  |

***

### addArgument

Adds a single reflected Argument to the Method Descriptor.

```php
protected addArgument(\phpDocumentor\Reflection\FunctionReflector\ArgumentReflector $argument, \phpDocumentor\Descriptor\MethodDescriptor $descriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$argument` | **\phpDocumentor\Reflection\FunctionReflector\ArgumentReflector** |  |
| `$descriptor` | **\phpDocumentor\Descriptor\MethodDescriptor** |  |

***

### addVariadicArgument

Checks if there is a variadic argument in the `@param` tags and adds it to the list of Arguments in the Descriptor
unless there is already one present.

```php
protected addVariadicArgument(\phpDocumentor\Reflection\ClassReflector\MethodReflector $data, \phpDocumentor\Descriptor\MethodDescriptor $methodDescriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\phpDocumentor\Reflection\ClassReflector\MethodReflector** |  |
| `$methodDescriptor` | **\phpDocumentor\Descriptor\MethodDescriptor** |  |

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
