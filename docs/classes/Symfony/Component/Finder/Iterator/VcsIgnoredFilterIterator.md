***

# VcsIgnoredFilterIterator

* Full name: `\Symfony\Component\Finder\Iterator\VcsIgnoredFilterIterator`
* Parent class: [`FilterIterator`](../../../../FilterIterator.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### baseDir

```php
private string $baseDir
```

***

### gitignoreFilesCache

```php
private $gitignoreFilesCache
```

***

### ignoredPathsCache

```php
private array&lt;string,bool&gt; $ignoredPathsCache
```

***

## Methods

### __construct

```php
public __construct(\Iterator $iterator, string $baseDir): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Iterator** |  |
| `$baseDir` | **string** |  |

***

### accept

```php
public accept(): bool
```

***

### isIgnored

```php
private isIgnored(string $fileRealPath): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fileRealPath` | **string** |  |

***

### parentsDirectoryDownward

```php
private parentsDirectoryDownward(string $fileRealPath): list&lt;string&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fileRealPath` | **string** |  |

***

### readGitignoreFile

```php
private readGitignoreFile(string $path): ?array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### normalizePath

```php
private normalizePath(string $path): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***


***

