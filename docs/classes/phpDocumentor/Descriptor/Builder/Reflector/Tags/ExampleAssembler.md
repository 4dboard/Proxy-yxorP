***

# ExampleAssembler

This class collects data from the example tag definition of the Reflection library, tries to find the correlating
example file on disk and creates a complete Descriptor from that.

* Full name: `\phpDocumentor\Descriptor\Builder\Reflector\Tags\ExampleAssembler`
* Parent class: [`\phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract`](../AssemblerAbstract.md)

## Properties

### finder

```php
private \phpDocumentor\Descriptor\Example\Finder $finder
```

***

## Methods

### __construct

Initializes this assembler with the means to find the example file on disk.

```php
public __construct(\phpDocumentor\Descriptor\Example\Finder $finder): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$finder` | **\phpDocumentor\Descriptor\Example\Finder** |  |

***

### create

Creates a new Descriptor from the given Reflector.

```php
public create(\phpDocumentor\Reflection\DocBlock\Tag\ExampleTag $data): \phpDocumentor\Descriptor\Tag\ExampleDescriptor
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\phpDocumentor\Reflection\DocBlock\Tag\ExampleTag** |  |

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
