***

# ListPaths

* Full name: `\League\Flysystem\Plugin\ListPaths`
* Parent class: [`\League\Flysystem\Plugin\AbstractPlugin`](./AbstractPlugin.md)

## Methods

### getMethod

Get the method name.

```php
public getMethod(): string
```

***

### handle

List all paths.

```php
public handle(string $directory = &#039;&#039;, bool $recursive = false): string[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **string** |  |
| `$recursive` | **bool** |  |

**Return Value:**

paths



***

## Inherited methods

### setFilesystem

Set the Filesystem object.

```php
public setFilesystem(\League\Flysystem\FilesystemInterface $filesystem): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filesystem` | **\League\Flysystem\FilesystemInterface** |  |

***


***

