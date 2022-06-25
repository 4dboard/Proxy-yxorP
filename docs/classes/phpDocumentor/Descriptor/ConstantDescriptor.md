***

# ConstantDescriptor

Descriptor representing a constant

* Full name: `\phpDocumentor\Descriptor\ConstantDescriptor`
* Parent class: [`\phpDocumentor\Descriptor\DescriptorAbstract`](./DescriptorAbstract.md)
* This class implements:
  [`\phpDocumentor\Descriptor\Interfaces\ConstantInterface`](./Interfaces/ConstantInterface.md)

## Properties

### parent

```php
protected \phpDocumentor\Descriptor\ClassDescriptor|\phpDocumentor\Descriptor\InterfaceDescriptor|null $parent
```

***

### types

```php
protected string[]|null $types
```

***

### value

```php
protected string $value
```

***

## Methods

### setParent

Registers a parent class or interface with this constant.

```php
public setParent(\phpDocumentor\Descriptor\ClassDescriptor|\phpDocumentor\Descriptor\InterfaceDescriptor|null $parent): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **
\phpDocumentor\Descriptor\ClassDescriptor&#124;\phpDocumentor\Descriptor\InterfaceDescriptor&#124;null** |  |

***

### getParent

```php
public getParent(): null|\phpDocumentor\Descriptor\ClassDescriptor|\phpDocumentor\Descriptor\InterfaceDescriptor
```

***

### setTypes

Sets the types that this constant may contain.

```php
public setTypes(\phpDocumentor\Descriptor\Collection $types): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **\phpDocumentor\Descriptor\Collection** |  |

***

### getTypes

Returns the types that may be present in this constant.

```php
public getTypes(): array[]
```

***

### setValue

Sets the value representation for this constant.

```php
public setValue(mixed $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### getValue

Retrieves a textual representation of the value in this constant.

```php
public getValue(): string
```

***

### getVar

```php
public getVar(): \phpDocumentor\Descriptor\Collection
```

***

### getFile

Returns the file associated with the parent class, interface or trait when inside a container.

```php
public getFile(): \phpDocumentor\Descriptor\FileDescriptor
```

***

### getInheritedElement

Returns the Constant from which this one should inherit, if any.

```php
public getInheritedElement(): \phpDocumentor\Descriptor\ConstantDescriptor|null
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
