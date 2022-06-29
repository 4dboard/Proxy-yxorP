***

# ProjectDescriptor

Represents the entire project with its files, namespaces and indexes.

* Full name: `\phpDocumentor\Descriptor\ProjectDescriptor`
* This class implements:
  [`\phpDocumentor\Descriptor\Interfaces\ProjectInterface`](./Interfaces/ProjectInterface.md)

## Properties

### name

```php
protected string $name
```

***

### namespace

```php
protected \phpDocumentor\Descriptor\NamespaceDescriptor $namespace
```

***

### files

```php
protected \phpDocumentor\Descriptor\Collection $files
```

***

### indexes

```php
protected \phpDocumentor\Descriptor\Collection $indexes
```

***

### settings

```php
protected \phpDocumentor\Descriptor\ProjectDescriptor\Settings $settings
```

***

### partials

```php
protected \phpDocumentor\Descriptor\Collection $partials
```

***

## Methods

### __construct

Initializes this descriptor.

```php
public __construct(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### setName

Sets the name for this project.

```php
public setName(string $name): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getName

Returns the name of this project.

```php
public getName(): string
```

***

### setFiles

Sets all files on this project.

```php
public setFiles(\phpDocumentor\Descriptor\Collection $files): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **\phpDocumentor\Descriptor\Collection** |  |

***

### getFiles

Returns all files with their sub-elements.

```php
public getFiles(): \phpDocumentor\Descriptor\Collection|\phpDocumentor\Descriptor\FileDescriptor[]
```

***

### setIndexes

Sets all indexes for this project.

```php
public setIndexes(\phpDocumentor\Descriptor\Collection $indexes): void
```

An index is a compilation of references to elements, usually constructed in a compiler step, that aids template
generation by providing a conveniently assembled list. An example of such an index is the 'marker' index where a list of
TODOs and FIXMEs are located in a central location for reporting.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$indexes` | **\phpDocumentor\Descriptor\Collection** |  |

***

### getIndexes

Returns all indexes in this project.

```php
public getIndexes(): \phpDocumentor\Descriptor\Collection
```

**See Also:**

* \phpDocumentor\Descriptor\setIndexes() - for more information on what indexes are.

***

### setNamespace

Sets the root namespace for this project together with all sub-namespaces.

```php
public setNamespace(\phpDocumentor\Descriptor\NamespaceDescriptor $namespace): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **\phpDocumentor\Descriptor\NamespaceDescriptor** |  |

***

### getNamespace

Returns the root (global) namespace.

```php
public getNamespace(): \phpDocumentor\Descriptor\NamespaceDescriptor
```

***

### setSettings

Sets the settings used to build the documentation for this project.

```php
public setSettings(\phpDocumentor\Descriptor\ProjectDescriptor\Settings $settings): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$settings` | **\phpDocumentor\Descriptor\ProjectDescriptor\Settings** |  |

***

### getSettings

Returns the settings used to build the documentation for this project.

```php
public getSettings(): \phpDocumentor\Descriptor\ProjectDescriptor\Settings
```

***

### setPartials

Sets all partials that can be used in a template.

```php
public setPartials(\phpDocumentor\Descriptor\Collection $partials): void
```

Partials are blocks of text that can be inserted anywhere in a template using a special indicator. An example is the
introduction partial that can add a custom piece of text to the homepage.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$partials` | **\phpDocumentor\Descriptor\Collection** |  |

***

### getPartials

Returns a list of all partials.

```php
public getPartials(): \phpDocumentor\Descriptor\Collection
```

**See Also:**

* \phpDocumentor\Descriptor\setPartials() - for more information on partials.

***

### isVisibilityAllowed

Checks whether the Project supports the given visibility.

```php
public isVisibilityAllowed(int $visibility): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visibility` | **int** | One of the VISIBILITY_* constants of the Settings class. |

**See Also:**

* \phpDocumentor\Descriptor\ProjectDescriptor\Settings - for a list of the available VISIBILITY_* constants.

***


***

