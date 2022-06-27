***

# NamespaceTreeBuilder

Rebuilds the namespace tree from the elements found in files.

On every compiler pass is the namespace tree rebuild to aid in the process of incremental updates. The Files Collection
in the Project Descriptor is the only location where aliases to elements may be serialized.

If the namespace tree were to be persisted then both locations needed to be invalidated if a file were to change.

* Full name: `\phpDocumentor\Compiler\Pass\NamespaceTreeBuilder`
* This class implements:
  [`\phpDocumentor\Compiler\CompilerPassInterface`](../CompilerPassInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COMPILER_PRIORITY`|public| |9000|

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

### addElementsOfTypeToNamespace

Adds the given elements of a specific type to their respective Namespace Descriptors.

```php
protected addElementsOfTypeToNamespace(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Descriptor\DescriptorAbstract[] $elements, string $type): void
```

This method will assign the given elements to the namespace as registered in the namespace field of that element. If a
namespace does not exist yet it will automatically be created.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |
| `$elements` | **
\phpDocumentor\Descriptor\DescriptorAbstract[]** | Series of elements to add to their respective namespace. |
| `$type` | **
string** | Declares which field of the namespace will be populated with the given<br />series of elements. This name will be transformed to a getter which must exist. Out of performance<br />considerations will no effort be done to verify whether the provided type is valid. |

***

### createNamespaceDescriptorTree

Creates a tree of NamespaceDescriptors based on the provided FQNN (namespace name).

```php
protected createNamespaceDescriptorTree(\phpDocumentor\Descriptor\ProjectDescriptor $project, string $namespaceName): void
```

This method will examine the namespace name and create a namespace descriptor for each part of the FQNN if it doesn't
exist in the namespaces field of the current namespace (starting with the root Namespace in the Project Descriptor),

As an intended side effect this method also populates the *elements* index of the ProjectDescriptor with all created
NamespaceDescriptors. Each index key is prefixed with a tilde (~) so that it will not conflict with other FQSEN's, such
as classes or interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |
| `$namespaceName` | **string** | A FQNN of the namespace (and parents) to create. |

**See Also:**

* \phpDocumentor\Descriptor\ProjectDescriptor::getNamespace() - for the root namespace.*
  \phpDocumentor\Descriptor\NamespaceDescriptor::getNamespaces() - for the child namespaces of a given namespace.

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
