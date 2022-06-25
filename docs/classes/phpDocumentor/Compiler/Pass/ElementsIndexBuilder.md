***

# ElementsIndexBuilder

This class constructs the index 'elements' and populates it with all Structural Elements.

Please note that due to a conflict between namespace FQSEN's and that of classes, interfaces, traits and functions will
the namespace FQSEN be prefixed with a tilde (~).

* Full name: `\phpDocumentor\Compiler\Pass\ElementsIndexBuilder`
* This class implements:
  [`\phpDocumentor\Compiler\CompilerPassInterface`](../CompilerPassInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COMPILER_PRIORITY`|public| |15000|

## Methods

### getDescription

Returns a textual description of what this pass does for output purposes.

```php
public getDescription(): string
```

***

### execute

Executes a compiler pass.

```php
public execute(\phpDocumentor\Descriptor\ProjectDescriptor $project): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **
\phpDocumentor\Descriptor\ProjectDescriptor** | Representation of the Object Graph that can be manipulated. |

***

### getSubElements

Returns any sub-elements for the given element.

```php
protected getSubElements(\phpDocumentor\Descriptor\DescriptorAbstract $element): \phpDocumentor\Descriptor\DescriptorAbstract[]
```

This method checks whether the given element is a class, interface or trait and returns their methods, properties and
constants accordingly, or an empty array if no sub-elements are applicable.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |

***

### addElementsToIndexes

Adds a series of descriptors to the given list of collections.

```php
protected addElementsToIndexes(\phpDocumentor\Descriptor\DescriptorAbstract|\phpDocumentor\Descriptor\DescriptorAbstract[] $elements, \phpDocumentor\Descriptor\Collection[] $indexes): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **
\phpDocumentor\Descriptor\DescriptorAbstract&#124;\phpDocumentor\Descriptor\DescriptorAbstract[]** |  |
| `$indexes` | **\phpDocumentor\Descriptor\Collection[]** |  |

***

### getIndexKey

Retrieves a key for the index for the provided element.

```php
protected getIndexKey(\phpDocumentor\Descriptor\DescriptorAbstract $element): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |

yxorP::get('REQUEST')
