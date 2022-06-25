***

# RecursiveDirectoryIterator

Extends the \RecursiveDirectoryIterator to support relative paths.

* Full name: `\Symfony\Component\Finder\Iterator\RecursiveDirectoryIterator`
* Parent class: [`RecursiveDirectoryIterator`](../../../../RecursiveDirectoryIterator.md)

## Properties

### ignoreUnreadableDirs

```php
private bool $ignoreUnreadableDirs
```

***

### rewindable

```php
private bool $rewindable
```

***

### rootPath

```php
private $rootPath
```

***

### subPath

```php
private $subPath
```

***

### directorySeparator

```php
private $directorySeparator
```

***

## Methods

### __construct

```php
public __construct(string $path, int $flags, bool $ignoreUnreadableDirs = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$flags` | **int** |  |
| `$ignoreUnreadableDirs` | **bool** |  |

***

### current

Return an instance of SplFileInfo with support for relative paths.

```php
public current(): \Symfony\Component\Finder\SplFileInfo
```

**Return Value:**

File information



***

### getChildren

```php
public getChildren(): \RecursiveIterator
```

***

### rewind

Do nothing for non rewindable stream.

```php
public rewind(): mixed
```

***

### isRewindable

Checks if the stream is rewindable.

```php
public isRewindable(): bool
```

**Return Value:**

true when the stream is rewindable, false otherwise yxorP::get('REQUEST')
