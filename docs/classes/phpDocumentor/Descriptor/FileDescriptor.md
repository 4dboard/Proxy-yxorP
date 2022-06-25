***

# FileDescriptor

Represents a file in the project.

* Full name: `\phpDocumentor\Descriptor\FileDescriptor`
* Parent class: [`\phpDocumentor\Descriptor\DescriptorAbstract`](./DescriptorAbstract.md)
* This class implements:
  [`\phpDocumentor\Descriptor\Interfaces\FileInterface`](./Interfaces/FileInterface.md)

## Properties

### hash

```php
protected string $hash
```

***

### path

```php
protected string $path
```

***

### source

```php
protected string|null $source
```

***

### namespaceAliases

```php
protected \phpDocumentor\Descriptor\Collection $namespaceAliases
```

***

### includes

```php
protected \phpDocumentor\Descriptor\Collection $includes
```

***

### constants

```php
protected \phpDocumentor\Descriptor\Collection $constants
```

***

### functions

```php
protected \phpDocumentor\Descriptor\Collection $functions
```

***

### classes

```php
protected \phpDocumentor\Descriptor\Collection $classes
```

***

### interfaces

```php
protected \phpDocumentor\Descriptor\Collection $interfaces
```

***

### traits

```php
protected \phpDocumentor\Descriptor\Collection $traits
```

***

### markers

```php
protected \phpDocumentor\Descriptor\Collection $markers
```

***

## Methods

### __construct

Initializes a new file descriptor with the given hash of its contents.

```php
public __construct(string $hash): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hash` | **string** | An MD5 hash of the contents if this file. |

***

### getHash

Returns the hash of the contents for this file.

```php
public getHash(): string
```

***

### setHash

Sets the hash of the contents for this file.

```php
protected setHash(string $hash): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hash` | **string** |  |

***

### getSource

Retrieves the contents of this file.

```php
public getSource(): string|null
```

***

### setSource

Sets the source contents for this file.

```php
public setSource(string|null $source): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string&#124;null** |  |

***

### getNamespaceAliases

Returns the namespace aliases that have been defined in this file.

```php
public getNamespaceAliases(): \phpDocumentor\Descriptor\Collection
```

***

### setNamespaceAliases

Sets the collection of namespace aliases for this file.

```php
public setNamespaceAliases(\phpDocumentor\Descriptor\Collection $namespaceAliases): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespaceAliases` | **\phpDocumentor\Descriptor\Collection** |  |

***

### getIncludes

Returns a list of all includes that have been declared in this file.

```php
public getIncludes(): \phpDocumentor\Descriptor\Collection
```

***

### setIncludes

Sets a list of all includes that have been declared in this file.

```php
public setIncludes(\phpDocumentor\Descriptor\Collection $includes): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includes` | **\phpDocumentor\Descriptor\Collection** |  |

***

### getConstants

Returns a list of constant descriptors contained in this file.

```php
public getConstants(): \phpDocumentor\Descriptor\Collection
```

***

### setConstants

Sets a list of constant descriptors contained in this file.

```php
public setConstants(\phpDocumentor\Descriptor\Collection $constants): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$constants` | **\phpDocumentor\Descriptor\Collection** |  |

***

### getFunctions

Returns a list of function descriptors contained in this file.

```php
public getFunctions(): \phpDocumentor\Descriptor\Collection|\phpDocumentor\Descriptor\FunctionInterface[]
```

***

### setFunctions

Sets a list of function descriptors contained in this file.

```php
public setFunctions(\phpDocumentor\Descriptor\Collection $functions): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$functions` | **\phpDocumentor\Descriptor\Collection** |  |

***

### getClasses

Returns a list of class descriptors contained in this file.

```php
public getClasses(): \phpDocumentor\Descriptor\Collection|\phpDocumentor\Descriptor\ClassInterface[]
```

***

### setClasses

Sets a list of class descriptors contained in this file.

```php
public setClasses(\phpDocumentor\Descriptor\Collection $classes): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classes` | **\phpDocumentor\Descriptor\Collection** |  |

***

### getInterfaces

Returns a list of interface descriptors contained in this file.

```php
public getInterfaces(): \phpDocumentor\Descriptor\Collection|\phpDocumentor\Descriptor\InterfaceInterface[]
```

***

### setInterfaces

Sets a list of interface descriptors contained in this file.

```php
public setInterfaces(\phpDocumentor\Descriptor\Collection $interfaces): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$interfaces` | **\phpDocumentor\Descriptor\Collection** |  |

***

### getTraits

Returns a list of trait descriptors contained in this file.

```php
public getTraits(): \phpDocumentor\Descriptor\Collection|\phpDocumentor\Descriptor\TraitInterface[]
```

***

### setTraits

Sets a list of trait descriptors contained in this file.

```php
public setTraits(\phpDocumentor\Descriptor\Collection $traits): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$traits` | **\phpDocumentor\Descriptor\Collection** |  |

***

### getMarkers

Returns a series of markers contained in this file.

```php
public getMarkers(): \phpDocumentor\Descriptor\Collection
```

A marker is a special inline comment that starts with a keyword and is followed by a single line description.

Example:

```
// TODO: This is an item that needs to be done.
```

***

### setMarkers

Sets a series of markers contained in this file.

```php
public setMarkers(\phpDocumentor\Descriptor\Collection $markers): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$markers` | **\phpDocumentor\Descriptor\Collection** |  |

**See Also:**

* \phpDocumentor\Descriptor\getMarkers() - for more information on markers.

***

### getAllErrors

Returns a list of all errors in this file and all its child elements.

```php
public getAllErrors(): \phpDocumentor\Descriptor\Collection
```

***

### setPath

Sets the file path for this file relative to the project's root.

```php
public setPath(string $path): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### getPath

Returns the file path relative to the project's root.

```php
public getPath(): string
```

***

## Inherited methods

### __construct

Initializes this descriptor.

```php
public __construct(): mixed
```

***

### setFullyQualifiedStructuralElementName

Sets the Fully Qualified Structural Element Name (FQSEN) for this element.

```php
public setFullyQualifiedStructuralElementName(string $name): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getFullyQualifiedStructuralElementName

Returns the Fully Qualified Structural Element Name (FQSEN) for this element.

```php
public getFullyQualifiedStructuralElementName(): string
```

***

### setName

Sets the local name for this element.

```php
public setName(string $name): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getName

Returns the local name for this element.

```php
public getName(): string
```

***

### setNamespace

Sets the namespace (name) for this element.

```php
public setNamespace(\phpDocumentor\Descriptor\NamespaceDescriptor|string $namespace): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **\phpDocumentor\Descriptor\NamespaceDescriptor&#124;string** |  |

***

### getNamespace

Returns the namespace for this element or null if none is attached.

```php
public getNamespace(): \phpDocumentor\Descriptor\NamespaceDescriptor|string|null
```

***

### setSummary

Sets the summary describing this element in short.

```php
public setSummary(string $summary): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$summary` | **string** |  |

***

### getSummary

Returns the summary which describes this element.

```php
public getSummary(): string
```

This method will automatically attempt to inherit the parent's summary if this one has none.









***

### setDescription

Sets a description for this element.

```php
public setDescription(string $description): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$description` | **string** |  |

***

### getDescription

Returns the description for this element.

```php
public getDescription(): string
```

This method will automatically attempt to inherit the parent's description if this one has none.









***

### setLocation

Sets the file and linenumber where this element is at.

```php
public setLocation(\phpDocumentor\Descriptor\FileDescriptor $file, int $line): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\phpDocumentor\Descriptor\FileDescriptor** |  |
| `$line` | **int** |  |

***

### getPath

Returns the path to the file containing this element relative to the project's root.

```php
public getPath(): string
```

***

### getFile

Returns the file in which this element resides or null in case the element is not bound to a file.

```php
public getFile(): \phpDocumentor\Descriptor\FileDescriptor|null
```

.









***

### setFile

Sets the file to which this element is associated.

```php
public setFile(\phpDocumentor\Descriptor\FileDescriptor $file): false
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\phpDocumentor\Descriptor\FileDescriptor** |  |

***

### getLine

Returns the line number where the definition for this element can be found.

```php
public getLine(): int
```

***

### setLine

Sets the line number for this element's location in the source file.

```php
public setLine(int $lineNumber): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lineNumber` | **int** |  |

***

### setTags

Sets the tags associated with this element.

```php
public setTags(\phpDocumentor\Descriptor\Collection $tags): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tags` | **\phpDocumentor\Descriptor\Collection** |  |

***

### getTags

Returns the tags associated with this element.

```php
public getTags(): \phpDocumentor\Descriptor\Collection
```

***

### setPackage

Sets the name of the package to which this element belongs.

```php
public setPackage(\phpDocumentor\Descriptor\PackageDescriptor $package): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$package` | **\phpDocumentor\Descriptor\PackageDescriptor** |  |

***

### getPackage

Returns the package name for this element.

```php
public getPackage(): \phpDocumentor\Descriptor\PackageDescriptor
```

***

### getAuthor

```php
public getAuthor(): \phpDocumentor\Descriptor\Collection
```

***

### getVersion

Returns the versions for this element.

```php
public getVersion(): \phpDocumentor\Descriptor\Collection
```

***

### getCopyright

Returns the copyrights for this element.

```php
public getCopyright(): \phpDocumentor\Descriptor\Collection
```

***

### isDeprecated

Checks whether this element is deprecated.

```php
public isDeprecated(): bool
```

***

### setErrors

Sets a list of all errors associated with this element.

```php
public setErrors(\phpDocumentor\Descriptor\Collection $errors): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errors` | **\phpDocumentor\Descriptor\Collection** |  |

***

### getErrors

Returns all errors that occur in this element.

```php
public getErrors(): \phpDocumentor\Descriptor\Collection
```

***

### __call

Dynamically constructs a set of getters to retrieve tag (collections) with.

```php
public __call(string $name, array $arguments): \phpDocumentor\Descriptor\Collection|null
```

Important: __call() is not a fast method of access; it is preferred to directly use the getTags() collection. This
interface is provided to allow for uniform and easy access to certain tags.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$arguments` | **array** |  |

***

### __toString

Represents this object by its unique identifier, the Fully Qualified Structural Element Name.

```php
public __toString(): string
```

***

### getInheritedElement

```php
public getInheritedElement(): \phpDocumentor\Descriptor\DescriptorAbstract|null
```

yxorP::get('REQUEST')
