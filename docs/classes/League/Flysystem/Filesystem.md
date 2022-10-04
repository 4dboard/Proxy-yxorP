***

# Filesystem

* Full name: `\League\Flysystem\Filesystem`
* This class implements:
  [`\League\Flysystem\FilesystemOperator`](./FilesystemOperator.md)

## Properties

### adapter

```php
private \League\Flysystem\FilesystemAdapter $adapter
```

***

### config

```php
private \League\Flysystem\Config $config
```

***

### pathNormalizer

```php
private \League\Flysystem\PathNormalizer $pathNormalizer
```

***

## Methods

### __construct

```php
public __construct(\League\Flysystem\FilesystemAdapter $adapter, array $config = [], \League\Flysystem\PathNormalizer $pathNormalizer = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **\League\Flysystem\FilesystemAdapter** |  |
| `$config` | **array** |  |
| `$pathNormalizer` | **\League\Flysystem\PathNormalizer** |  |

***

### fileExists

```php
public fileExists(string $location): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |

***

### directoryExists

```php
public directoryExists(string $location): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |

***

### has

```php
public has(string $location): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |

***

### write

```php
public write(string $location, string $contents, array $config = []): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$contents` | **string** |  |
| `$config` | **array** |  |

***

### writeStream

```php
public writeStream(string $location, mixed $contents, array $config = []): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$contents` | **mixed** |  |
| `$config` | **array** |  |

***

### read

```php
public read(string $location): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |

***

### readStream

```php
public readStream(string $location): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |

***

### delete

```php
public delete(string $location): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |

***

### deleteDirectory

```php
public deleteDirectory(string $location): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |

***

### createDirectory

```php
public createDirectory(string $location, array $config = []): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$config` | **array** |  |

***

### listContents

```php
public listContents(string $location, bool $deep = self::LIST_SHALLOW): \League\Flysystem\DirectoryListing
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$deep` | **bool** |  |

***

### move

```php
public move(string $source, string $destination, array $config = []): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** |  |
| `$destination` | **string** |  |
| `$config` | **array** |  |

***

### copy

```php
public copy(string $source, string $destination, array $config = []): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** |  |
| `$destination` | **string** |  |
| `$config` | **array** |  |

***

### lastModified

```php
public lastModified(string $path): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### fileSize

```php
public fileSize(string $path): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### mimeType

```php
public mimeType(string $path): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### setVisibility

```php
public setVisibility(string $path, string $visibility): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$visibility` | **string** |  |

***

### visibility

```php
public visibility(string $path): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### assertIsResource

```php
private assertIsResource(mixed $contents): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contents` | **mixed** |  |

***

### rewindStream

```php
private rewindStream(resource $resource): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **resource** |  |

***


***

