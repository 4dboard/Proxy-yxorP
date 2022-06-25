***

# Local

* Full name: `\League\Flysystem\Adapter\Local`
* Parent class: [`\League\Flysystem\Adapter\AbstractAdapter`](./AbstractAdapter.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SKIP_LINKS`|public|int|01|
|`DISALLOW_LINKS`|public|int|02|

## Properties

### permissions

```php
protected static array $permissions
```

* This property is **static**.

***

### pathSeparator

```php
protected string $pathSeparator
```

***

### permissionMap

```php
protected array $permissionMap
```

***

### writeFlags

```php
protected int $writeFlags
```

***

### linkHandling

```php
private int $linkHandling
```

***

## Methods

### __construct

Constructor.

```php
public __construct(string $root, int $writeFlags = LOCK_EX, int $linkHandling = self::DISALLOW_LINKS, array $permissions = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **string** |  |
| `$writeFlags` | **int** |  |
| `$linkHandling` | **int** |  |
| `$permissions` | **array** |  |

***

### ensureDirectory

Ensure the root directory exists.

```php
protected ensureDirectory(string $root): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **string** | root directory path |

***

### has

```php
public has(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### write

```php
public write(mixed $path, mixed $contents, \League\Flysystem\Config $config): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$contents` | **mixed** |  |
| `$config` | **\League\Flysystem\Config** |  |

***

### writeStream

```php
public writeStream(mixed $path, mixed $resource, \League\Flysystem\Config $config): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$resource` | **mixed** |  |
| `$config` | **\League\Flysystem\Config** |  |

***

### readStream

```php
public readStream(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### updateStream

```php
public updateStream(mixed $path, mixed $resource, \League\Flysystem\Config $config): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$resource` | **mixed** |  |
| `$config` | **\League\Flysystem\Config** |  |

***

### update

```php
public update(mixed $path, mixed $contents, \League\Flysystem\Config $config): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$contents` | **mixed** |  |
| `$config` | **\League\Flysystem\Config** |  |

***

### read

```php
public read(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### rename

```php
public rename(mixed $path, mixed $newpath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$newpath` | **mixed** |  |

***

### copy

```php
public copy(mixed $path, mixed $newpath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$newpath` | **mixed** |  |

***

### delete

```php
public delete(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### listContents

```php
public listContents(mixed $directory = &#039;&#039;, mixed $recursive = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **mixed** |  |
| `$recursive` | **mixed** |  |

***

### getMetadata

```php
public getMetadata(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### getSize

```php
public getSize(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### getMimetype

```php
public getMimetype(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### getTimestamp

```php
public getTimestamp(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### getVisibility

```php
public getVisibility(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### setVisibility

```php
public setVisibility(mixed $path, mixed $visibility): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$visibility` | **mixed** |  |

***

### createDir

```php
public createDir(mixed $dirname, \League\Flysystem\Config $config): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirname` | **mixed** |  |
| `$config` | **\League\Flysystem\Config** |  |

***

### deleteDir

```php
public deleteDir(mixed $dirname): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirname` | **mixed** |  |

***

### deleteFileInfoObject

```php
protected deleteFileInfoObject(\SplFileInfo $file): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\SplFileInfo** |  |

***

### normalizeFileInfo

Normalize the file info.

```php
protected normalizeFileInfo(\SplFileInfo $file): array|void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\SplFileInfo** |  |

***

### getFilePath

Get the normalized path from a SplFileInfo object.

```php
protected getFilePath(\SplFileInfo $file): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\SplFileInfo** |  |

***

### getRecursiveDirectoryIterator

```php
protected getRecursiveDirectoryIterator(string $path, int $mode = RecursiveIteratorIterator::SELF_FIRST): \RecursiveIteratorIterator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$mode` | **int** |  |

***

### getDirectoryIterator

```php
protected getDirectoryIterator(string $path): \DirectoryIterator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### mapFileInfo

```php
protected mapFileInfo(\SplFileInfo $file): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\SplFileInfo** |  |

***

### guardAgainstUnreadableFileInfo

```php
protected guardAgainstUnreadableFileInfo(\SplFileInfo $file): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\SplFileInfo** |  |

***

## Inherited methods

### setPathPrefix

Set the path prefix.

```php
public setPathPrefix(string $prefix): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |

***

### getPathPrefix

Get the path prefix.

```php
public getPathPrefix(): string|null
```

**Return Value:**

path prefix or null if pathPrefix is empty



***

### applyPathPrefix

Prefix a path.

```php
public applyPathPrefix(string $path): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

**Return Value:**

prefixed path



***

### removePathPrefix

Remove a path prefix.

```php
public removePathPrefix(string $path): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

**Return Value:**

path without the prefix yxorP::get('REQUEST')
