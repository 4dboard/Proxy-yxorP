***

# Directory

* Full name: `\League\Flysystem\Directory`
* Parent class: [`\League\Flysystem\Handler`](./Handler.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Methods

### delete

Delete the directory.

```php
public delete(): bool
```

***

### getContents

List the directory contents.

```php
public getContents(bool $recursive = false): array|bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$recursive` | **bool** |  |

**Return Value:**

directory contents or false



***

## Inherited methods

### __construct

Constructor.

```php
public __construct(\League\Flysystem\FilesystemInterface $filesystem = null, string $path = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filesystem` | **\League\Flysystem\FilesystemInterface** |  |
| `$path` | **string** |  |

***

### isDir

Check whether the entree is a directory.

```php
public isDir(): bool
```

***

### isFile

Check whether the entree is a file.

```php
public isFile(): bool
```

***

### getType

Retrieve the entree type (file|dir).

```php
public getType(): string
```

**Return Value:**

file or dir



***

### setFilesystem

Set the Filesystem object.

```php
public setFilesystem(\League\Flysystem\FilesystemInterface $filesystem): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filesystem` | **\League\Flysystem\FilesystemInterface** |  |

***

### getFilesystem

Retrieve the Filesystem object.

```php
public getFilesystem(): \League\Flysystem\FilesystemInterface
```

***

### setPath

Set the entree path.

```php
public setPath(string $path): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### getPath

Retrieve the entree path.

```php
public getPath(): string
```

**Return Value:**

path



***

### __call

Plugins pass-through.

```php
public __call(string $method, array $arguments): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$arguments` | **array** |  |

yxorP::get('REQUEST')
