***

# AssemblerAbstract

Base class for all assemblers.

* Full name: `\phpDocumentor\Descriptor\Builder\AssemblerAbstract`
* This class implements:
  [`\phpDocumentor\Descriptor\Builder\AssemblerInterface`](./AssemblerInterface.md)
* This class is an **Abstract class**

## Properties

### builder

```php
protected \phpDocumentor\Descriptor\ProjectDescriptorBuilder|null $builder
```

***

## Methods

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
