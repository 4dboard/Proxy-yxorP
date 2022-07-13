***

# NullAdapter

* Full name: `\League\Flysystem\Adapter\NullAdapter`
* Parent class: [`\League\Flysystem\Adapter\AbstractAdapter`](./AbstractAdapter.md)

## Methods

### has

Check whether a file is present.

```php
public has(string $path): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

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

## Inherited methods

### copy

Copy a file.

```php
public copy(string $path, string $newpath): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$newpath` | **string** |  |

***

### readStream

```php
public readStream(string $path): resource
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### writeStream

```php
public writeStream(string $path, resource $resource, \League\Flysystem\Config $config): resource
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$resource` | **resource** |  |
| `$config` | **\League\Flysystem\Config** |  |

***

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

path without the prefix



***


***

