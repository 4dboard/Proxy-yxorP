***

# PortableVisibilityConverter

* Full name: `\League\Flysystem\UnixVisibility\PortableVisibilityConverter`
* This class implements:
  [`\League\Flysystem\UnixVisibility\VisibilityConverter`](./VisibilityConverter.md)

## Properties

### filePublic

```php
private int $filePublic
```

***

### filePrivate

```php
private int $filePrivate
```

***

### directoryPublic

```php
private int $directoryPublic
```

***

### directoryPrivate

```php
private int $directoryPrivate
```

***

### defaultForDirectories

```php
private string $defaultForDirectories
```

***

## Methods

### __construct

```php
public __construct(int $filePublic = 0644, int $filePrivate = 0600, int $directoryPublic = 0755, int $directoryPrivate = 0700, string $defaultForDirectories = Visibility::PRIVATE): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filePublic` | **int** |  |
| `$filePrivate` | **int** |  |
| `$directoryPublic` | **int** |  |
| `$directoryPrivate` | **int** |  |
| `$defaultForDirectories` | **string** |  |

***

### forFile

```php
public forFile(string $visibility): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visibility` | **string** |  |

***

### forDirectory

```php
public forDirectory(string $visibility): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visibility` | **string** |  |

***

### inverseForFile

```php
public inverseForFile(int $visibility): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visibility` | **int** |  |

***

### inverseForDirectory

```php
public inverseForDirectory(int $visibility): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visibility` | **int** |  |

***

### defaultForDirectories

```php
public defaultForDirectories(): int
```

***

### fromArray

```php
public static fromArray(array $permissionMap, string $defaultForDirectories = Visibility::PRIVATE): \League\Flysystem\UnixVisibility\PortableVisibilityConverter
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissionMap` | **array** |  |
| `$defaultForDirectories` | **string** |  |

***


***

