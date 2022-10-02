***

# FileAttributes

* Full name: `\League\Flysystem\FileAttributes`
* This class implements:
  [`\League\Flysystem\StorageAttributes`](./StorageAttributes.md)

## Properties

### type

```php
private string $type
```

***

### path

```php
private string $path
```

***

### fileSize

```php
private int|null $fileSize
```

***

### visibility

```php
private string|null $visibility
```

***

### lastModified

```php
private int|null $lastModified
```

***

### mimeType

```php
private string|null $mimeType
```

***

### extraMetadata

```php
private array $extraMetadata
```

***

## Methods

### __construct

```php
public __construct(string $path, ?int $fileSize = null, ?string $visibility = null, ?int $lastModified = null, ?string $mimeType = null, array $extraMetadata = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$fileSize` | **?int** |  |
| `$visibility` | **?string** |  |
| `$lastModified` | **?int** |  |
| `$mimeType` | **?string** |  |
| `$extraMetadata` | **array** |  |

***

### type

```php
public type(): string
```

***

### path

```php
public path(): string
```

***

### fileSize

```php
public fileSize(): ?int
```

***

### visibility

```php
public visibility(): ?string
```

***

### lastModified

```php
public lastModified(): ?int
```

***

### mimeType

```php
public mimeType(): ?string
```

***

### extraMetadata

```php
public extraMetadata(): array
```

***

### isFile

```php
public isFile(): bool
```

***

### isDir

```php
public isDir(): bool
```

***

### withPath

```php
public withPath(string $path): \League\Flysystem\StorageAttributes
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### fromArray

```php
public static fromArray(array $attributes): \League\Flysystem\StorageAttributes
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attributes` | **array** |  |

***

### jsonSerialize

```php
public jsonSerialize(): array
```

***


***

