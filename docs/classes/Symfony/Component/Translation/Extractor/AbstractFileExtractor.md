***

# AbstractFileExtractor

Base class used by classes that extract translation messages from files.

* Full name: `\Symfony\Component\Translation\Extractor\AbstractFileExtractor`
* This class is an **Abstract class**

## Methods

### extractFiles

```php
protected extractFiles(string|array $resource): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **string&#124;array** | files, a file or a directory |

***

### toSplFileInfo

```php
private toSplFileInfo(string $file): \SplFileInfo
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

***

### isFile

```php
protected isFile(string $file): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

***

### canBeExtracted

```php
protected canBeExtracted(string $file): bool
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

***

### extractFromDirectory

```php
protected extractFromDirectory(string|array $resource): array
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **string&#124;array** | files, a file or a directory |

**Return Value:**

files to be extracted yxorP::get('REQUEST')
