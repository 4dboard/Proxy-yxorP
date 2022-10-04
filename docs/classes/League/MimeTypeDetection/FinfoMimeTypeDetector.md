***

# FinfoMimeTypeDetector

* Full name: `\League\MimeTypeDetection\FinfoMimeTypeDetector`
* This class implements:
  [`\League\MimeTypeDetection\MimeTypeDetector`](./MimeTypeDetector.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`INCONCLUSIVE_MIME_TYPES`|private| |[&#039;application/x-empty&#039;, &#039;text/plain&#039;, &#039;text/x-asm&#039;, &#039;application/octet-stream&#039;, &#039;inode/x-empty&#039;]|

## Properties

### finfo

```php
private \finfo $finfo
```

***

### extensionMap

```php
private \League\MimeTypeDetection\ExtensionToMimeTypeMap $extensionMap
```

***

### bufferSampleSize

```php
private int|null $bufferSampleSize
```

***

### inconclusiveMimetypes

```php
private string[] $inconclusiveMimetypes
```

***

## Methods

### __construct

```php
public __construct(string $magicFile = &#039;&#039;, \League\MimeTypeDetection\ExtensionToMimeTypeMap $extensionMap = null, ?int $bufferSampleSize = null, array $inconclusiveMimetypes = self::INCONCLUSIVE_MIME_TYPES): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$magicFile` | **string** |  |
| `$extensionMap` | **\League\MimeTypeDetection\ExtensionToMimeTypeMap** |  |
| `$bufferSampleSize` | **?int** |  |
| `$inconclusiveMimetypes` | **array** |  |

***

### detectMimeType

```php
public detectMimeType(string $path, mixed $contents): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$contents` | **mixed** |  |

***

### detectMimeTypeFromPath

```php
public detectMimeTypeFromPath(string $path): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### detectMimeTypeFromFile

```php
public detectMimeTypeFromFile(string $path): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### detectMimeTypeFromBuffer

```php
public detectMimeTypeFromBuffer(string $contents): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contents` | **string** |  |

***

### takeSample

```php
private takeSample(string $contents): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contents` | **string** |  |

***


***

