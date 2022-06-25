***

# Linker

The linker contains all rules to replace FQSENs in the ProjectDescriptor with aliases to objects.

This object contains a list of class FQCNs for Descriptors and their associated linker rules.

An example scenario should be:

    The Descriptor ``\phpDocumentor\Descriptor\ClassDescriptor`` has a *Substitute* rule determining that the
    contents of the ``Parent`` field should be substituted with another ClassDescriptor with the FQCN
    represented by the value of the Parent field. In addition (second element) it has an *Analyse* rule
    specifying that the contents of the ``Methods`` field should be interpreted by the linker. Because that field
    contains an array or Descriptor Collection will each element be analysed by the linker.

As can be seen in the above example is it possible to analyse a tree structure and substitute FQSENs where
encountered.

* Full name: `\phpDocumentor\Compiler\Linker\Linker`
* This class implements:
[`\phpDocumentor\Compiler\CompilerPassInterface`](../CompilerPassInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COMPILER_PRIORITY`|public| |10000|
|`CONTEXT_MARKER`|public| |&#039;@context&#039;|

## Properties


### elementList



```php
protected \phpDocumentor\Descriptor\DescriptorAbstract[] $elementList
```






***

### substitutions



```php
protected string[][] $substitutions
```






***

### processedObjects



```php
protected string[] $processedObjects
```






***

## Methods


### getDescription

Returns a textual description of what this pass does for output purposes.

```php
public getDescription(): string
```











***

### __construct

Initializes the linker with a series of Descriptors to link to.

```php
public __construct(array|string[][] $substitutions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$substitutions` | **array&#124;string[][]** |  |




***

### execute

Executes the linker.

```php
public execute(\phpDocumentor\Descriptor\ProjectDescriptor $project): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** | Representation of the Object Graph that can be manipulated. |




***

### getSubstitutions

Returns the list of substitutions for the linker.

```php
public getSubstitutions(): string[]
```











***

### setObjectAliasesList

Sets the list of object aliases to resolve the FQSENs with.

```php
public setObjectAliasesList(\phpDocumentor\Descriptor\DescriptorAbstract[] $elementList): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elementList` | **\phpDocumentor\Descriptor\DescriptorAbstract[]** |  |




***

### substitute

Substitutes the given item or its children's FQCN with an object alias.

```php
public substitute(string|object|\Traversable|array $item, \phpDocumentor\Descriptor\DescriptorAbstract|null $container = null): null|string|\phpDocumentor\Descriptor\DescriptorAbstract
```

This method may do either of the following depending on the item's type

String
    If the given item is a string then this method will attempt to find an appropriate Class, Interface or
    TraitDescriptor object and return that. See {@see} for more information on the normalization
    of these strings.

Array or Traversable
    Iterate through each item, pass each key's contents to a new call to substitute and replace the key's
    contents if the contents is not an object (objects automatically update and saves performance).

Object
    Determines all eligible substitutions using the substitutions property, construct a getter and retrieve
    the field's contents. Pass these contents to a new call of substitute and use a setter to replace the field's
    contents if anything other than null is returned.

This method will return null if no substitution was possible and all of the above should not update the parent
item when null is passed.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **string&#124;object&#124;\Traversable&#124;array** |  |
| `$container` | **\phpDocumentor\Descriptor\DescriptorAbstract&#124;null** | A descriptor that acts as container for all elements<br />underneath or null if there is no current container. |




***

### findAlias

Attempts to find a Descriptor object alias with the FQSEN of the element it represents.

```php
public findAlias(string $fqsen, \phpDocumentor\Descriptor\DescriptorAbstract|null $container = null): \phpDocumentor\Descriptor\DescriptorAbstract|string|null
```

This method will try to fetch an element after normalizing the provided FQSEN. The FQSEN may contain references
(bindings) that can only be resolved during linking (such as `self`) or it may contain a context marker
{@see}.

If there is a context marker then this method will see if a child of the given container exists that matches the
element following the marker. If such a child does not exist in the current container then the namespace is
queried if a child exists there that matches.

For example:

    Given the Fqsen `@context::myFunction()` and the lastContainer `\My\Class` will this method first check
    to see if `\My\Class::myFunction()` exists; if it doesn't it will then check if `\My\myFunction()` exists.

If neither element exists then this method assumes it is an undocumented class/trait/interface and change the
given FQSEN by returning the namespaced element name (thus in the example above that would be
`\My\myFunction()`). The calling method {@see} will then replace the value of the field containing
the context marker with this normalized string.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqsen` | **string** |  |
| `$container` | **\phpDocumentor\Descriptor\DescriptorAbstract&#124;null** |  |




***

### findFieldValue

Returns the value of a field in the given object.

```php
public findFieldValue(object $object, string $fieldName): string|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **object** |  |
| `$fieldName` | **string** |  |




***

### isDescriptorContainer

Returns true if the given Descriptor is a container type.

```php
protected isDescriptorContainer(\phpDocumentor\Descriptor\DescriptorAbstract|mixed $item): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **\phpDocumentor\Descriptor\DescriptorAbstract&#124;mixed** |  |




***

### replacePseudoTypes

Replaces pseudo-types, such as `self`, into a normalized version based on the last container that was
encountered.

```php
protected replacePseudoTypes(string $fqsen, \phpDocumentor\Descriptor\DescriptorAbstract|null $container): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqsen` | **string** |  |
| `$container` | **\phpDocumentor\Descriptor\DescriptorAbstract&#124;null** |  |




***

### isContextMarkerInFqsen

Returns true if the context marker is found in the given FQSEN.

```php
protected isContextMarkerInFqsen(string $fqsen): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqsen` | **string** |  |




***

### getTypeWithClassAsContext

Normalizes the given FQSEN as if the context marker represents a class/interface/trait as parent.

```php
protected getTypeWithClassAsContext(string $fqsen, \phpDocumentor\Descriptor\DescriptorAbstract $container): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqsen` | **string** |  |
| `$container` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |




***

### getTypeWithNamespaceAsContext

Normalizes the given FQSEN as if the context marker represents a class/interface/trait as parent.

```php
protected getTypeWithNamespaceAsContext(string $fqsen, \phpDocumentor\Descriptor\DescriptorAbstract $container): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqsen` | **string** |  |
| `$container` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |




***

### getTypeWithGlobalNamespaceAsContext

Normalizes the given FQSEN as if the context marker represents the global namespace as parent.

```php
protected getTypeWithGlobalNamespaceAsContext(string $fqsen): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqsen` | **string** |  |




***

### fetchElementByFqsen

Attempts to find an element with the given Fqsen in the list of elements for this project and returns null if
it cannot find it.

```php
protected fetchElementByFqsen(string $fqsen): \phpDocumentor\Descriptor\DescriptorAbstract|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqsen` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
