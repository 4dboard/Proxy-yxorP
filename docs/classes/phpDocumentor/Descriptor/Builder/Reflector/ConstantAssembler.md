***

# ConstantAssembler

Assembles a ConstantDescriptor from a ConstantReflector.

* Full name: `\phpDocumentor\Descriptor\Builder\Reflector\ConstantAssembler`
* Parent class: [`\phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract`](./AssemblerAbstract.md)

## Methods

### create

Creates a Descriptor from the provided data.

```php
public create(\phpDocumentor\Reflection\ConstantReflector $data): \phpDocumentor\Descriptor\ConstantDescriptor
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\phpDocumentor\Reflection\ConstantReflector** |  |

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
