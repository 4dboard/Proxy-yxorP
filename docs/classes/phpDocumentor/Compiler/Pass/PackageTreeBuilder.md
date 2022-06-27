***

# PackageTreeBuilder

Rebuilds the package tree from the elements found in files.

On every compiler pass is the package tree rebuild to aid in the process of incremental updates.

If the package tree were to be persisted then both locations needed to be invalidated if a file were to change.

* Full name: `\phpDocumentor\Compiler\Pass\PackageTreeBuilder`
* This class implements:
  [`\phpDocumentor\Compiler\CompilerPassInterface`](../CompilerPassInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COMPILER_PRIORITY`|public| |9001|

## Methods

### getDescription

Returns a textual description of what this pass does for output purposes.

```php
public getDescription(): string
```

***

### execute

Compiles a 'packages' index on the project and create all Package Descriptors necessary.

```php
public execute(\phpDocumentor\Descriptor\ProjectDescriptor $project): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |

***

### addElementsOfTypeToPackage

Adds the given elements of a specific type to their respective Package Descriptors.

```php
protected addElementsOfTypeToPackage(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Descriptor\DescriptorAbstract[] $elements, string $type): void
```

This method will assign the given elements to the package as registered in the package field of that element. If a
package does not exist yet it will automatically be created.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |
| `$elements` | **
\phpDocumentor\Descriptor\DescriptorAbstract[]** | Series of elements to add to their respective package. |
| `$type` | **
string** | Declares which field of the package will be populated with the given<br />series of elements. This name will be transformed to a getter which must exist. Out of performance<br />considerations will no effort be done to verify whether the provided type is valid. |

***

### createPackageDescriptorTree

Creates a tree of PackageDescriptors based on the provided FQNN (package name).

```php
protected createPackageDescriptorTree(\phpDocumentor\Descriptor\ProjectDescriptor $project, string $packageName): void
```

This method will examine the package name and create a package descriptor for each part of the FQNN if it doesn't exist
in the packages field of the current package (starting with the root Package in the Project Descriptor),

As an intended side effect this method also populates the *elements* index of the ProjectDescriptor with all created
PackageDescriptors. Each index key is prefixed with a tilde (~) so that it will not conflict with other FQSEN's, such as
classes or interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |
| `$packageName` | **string** | A FQNN of the package (and parents) to create. |

**See Also:**

* \phpDocumentor\Descriptor\ProjectDescriptor::getPackage() - for the root package.*
  \phpDocumentor\Descriptor\PackageDescriptor::getChildren() - for the child packages of a given package.

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
