***

# FileLocator

FileLocator uses an array of pre-defined paths to find files.

* Full name: `\Symfony\Component\Config\FileLocator`
* This class implements:
  [`\Symfony\Component\Config\FileLocatorInterface`](./FileLocatorInterface.md)

## Properties

### paths

```php
protected $paths
```

***

## Methods

### __construct

```php
public __construct(string|array $paths = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **string&#124;array** | A path or an array of paths where to look for resources |

***

### locate

Returns a full path for a given file name.

```php
public locate(mixed $name, mixed $currentPath = null, mixed $first = true): string|array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The file name to locate |
| `$currentPath` | **mixed** | The current path |
| `$first` | **mixed** | Whether to return the first occurrence or an array of filenames |

**Return Value:**

The full path to the file or an array of file paths



***

### isAbsolutePath

Returns whether the file path is an absolute path.

```php
private isAbsolutePath(string $file): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | A file path |

yxorP::get('REQUEST')
