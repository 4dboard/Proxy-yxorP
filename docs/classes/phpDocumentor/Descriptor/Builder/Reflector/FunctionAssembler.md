***

# FunctionAssembler

Assembles a FunctionDescriptor from a FunctionReflector.

* Full name: `\phpDocumentor\Descriptor\Builder\Reflector\FunctionAssembler`
* Parent class: [`\phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract`](./AssemblerAbstract.md)

## Properties

### argumentAssembler

```php
protected \phpDocumentor\Descriptor\Builder\Reflector\ArgumentAssembler $argumentAssembler
```

***

## Methods

### __construct

Initializes this assembler and its dependencies.

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
public create(\phpDocumentor\Reflection\FunctionReflector $data): \phpDocumentor\Descriptor\FunctionDescriptor
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\phpDocumentor\Reflection\FunctionReflector** |  |

***

### mapReflectorPropertiesOntoDescriptor

Maps the properties of the Function reflector onto the Descriptor.

```php
protected mapReflectorPropertiesOntoDescriptor(\phpDocumentor\Reflection\FunctionReflector $reflector, \phpDocumentor\Descriptor\FunctionDescriptor $descriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflector` | **\phpDocumentor\Reflection\FunctionReflector** |  |
| `$descriptor` | **\phpDocumentor\Descriptor\FunctionDescriptor** |  |

***

### addArgumentsToFunctionDescriptor

Converts each argument reflector to an argument descriptor and adds it to the function descriptor.

```php
protected addArgumentsToFunctionDescriptor(\phpDocumentor\Reflection\FunctionReflector\ArgumentReflector[] $arguments, \phpDocumentor\Descriptor\FunctionDescriptor $functionDescriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments` | **\phpDocumentor\Reflection\FunctionReflector\ArgumentReflector[]** |  |
| `$functionDescriptor` | **\phpDocumentor\Descriptor\FunctionDescriptor** |  |

***

### addArgumentDescriptorToFunction

Adds the given argument to the function.

```php
protected addArgumentDescriptorToFunction(\phpDocumentor\Descriptor\FunctionDescriptor $functionDescriptor, \phpDocumentor\Descriptor\ArgumentDescriptor $argumentDescriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$functionDescriptor` | **\phpDocumentor\Descriptor\FunctionDescriptor** |  |
| `$argumentDescriptor` | **\phpDocumentor\Descriptor\ArgumentDescriptor** |  |

***

### createArgumentDescriptor

Creates a new ArgumentDescriptor from the given Reflector and Param.

```php
protected createArgumentDescriptor(\phpDocumentor\Descriptor\FunctionDescriptor $functionDescriptor, \phpDocumentor\Reflection\FunctionReflector\ArgumentReflector $argument): \phpDocumentor\Descriptor\ArgumentDescriptor
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$functionDescriptor` | **\phpDocumentor\Descriptor\FunctionDescriptor** |  |
| `$argument` | **\phpDocumentor\Reflection\FunctionReflector\ArgumentReflector** |  |

***

### getFullyQualifiedNamespaceName

Retrieves the Fully Qualified Namespace Name from the FunctionReflector.

```php
protected getFullyQualifiedNamespaceName(\phpDocumentor\Reflection\FunctionReflector $reflector): string
```

Reflection library formulates namespace as global but this is not wanted for phpDocumentor itself.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflector` | **\phpDocumentor\Reflection\FunctionReflector** |  |

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
