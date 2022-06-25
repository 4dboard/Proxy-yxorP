***

# Filesystem

Provides basic utility to manipulate the file system.

* Full name: `\Symfony\Component\Filesystem\Filesystem`

## Methods

### copy

Copies a file.

```php
public copy(string $originFile, string $targetFile, bool $overwriteNewerFiles = false): mixed
```

If the target file is older than the origin file, it's always overwritten. If the target file is newer, it is
overwritten only when the $overwriteNewerFiles option is set to true.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$originFile` | **string** | The original filename |
| `$targetFile` | **string** | The target filename |
| `$overwriteNewerFiles` | **bool** | If true, target files newer than origin files are overwritten |

***

### mkdir

Creates a directory recursively.

```php
public mkdir(string|array|\Traversable $dirs, int $mode = 0777): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirs` | **string&#124;array&#124;\Traversable** | The directory path |
| `$mode` | **int** | The directory mode |

***

### exists

Checks the existence of files or directories.

```php
public exists(string|array|\Traversable $files): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **
string&#124;array&#124;\Traversable** | A filename, an array of files, or a \Traversable instance to check |

**Return Value:**

true if the file exists, false otherwise



***

### touch

Sets access and modification time of file.

```php
public touch(string|array|\Traversable $files, int $time = null, int $atime = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **
string&#124;array&#124;\Traversable** | A filename, an array of files, or a \Traversable instance to create |
| `$time` | **int** | The touch time as a Unix timestamp |
| `$atime` | **int** | The access time as a Unix timestamp |

***

### remove

Removes files or directories.

```php
public remove(string|array|\Traversable $files): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **
string&#124;array&#124;\Traversable** | A filename, an array of files, or a \Traversable instance to remove |

***

### chmod

Change mode for an array of files or directories.

```php
public chmod(string|array|\Traversable $files, int $mode, int $umask = 00, bool $recursive = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **
string&#124;array&#124;\Traversable** | A filename, an array of files, or a \Traversable instance to change mode |
| `$mode` | **int** | The new mode (octal) |
| `$umask` | **int** | The mode mask (octal) |
| `$recursive` | **bool** | Whether change the mod recursively or not |

***

### chown

Change the owner of an array of files or directories.

```php
public chown(string|array|\Traversable $files, string $user, bool $recursive = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **
string&#124;array&#124;\Traversable** | A filename, an array of files, or a \Traversable instance to change owner |
| `$user` | **string** | The new owner user name |
| `$recursive` | **bool** | Whether change the owner recursively or not |

***

### chgrp

Change the group of an array of files or directories.

```php
public chgrp(string|array|\Traversable $files, string $group, bool $recursive = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **
string&#124;array&#124;\Traversable** | A filename, an array of files, or a \Traversable instance to change group |
| `$group` | **string** | The group name |
| `$recursive` | **bool** | Whether change the group recursively or not |

***

### rename

Renames a file or a directory.

```php
public rename(string $origin, string $target, bool $overwrite = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$origin` | **string** | The origin filename or directory |
| `$target` | **string** | The new filename or directory |
| `$overwrite` | **bool** | Whether to overwrite the target if it already exists |

***

### isReadable

Tells whether a file exists and is readable.

```php
private isReadable(string $filename): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | Path to the file |

***

### symlink

Creates a symbolic link or copy a directory.

```php
public symlink(string $originDir, string $targetDir, bool $copyOnWindows = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$originDir` | **string** | The origin directory path |
| `$targetDir` | **string** | The symbolic link name |
| `$copyOnWindows` | **bool** | Whether to copy files if on Windows |

***

### makePathRelative

Given an existing path, convert it to a path relative to a given starting path.

```php
public makePathRelative(string $endPath, string $startPath): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endPath` | **string** | Absolute path of target |
| `$startPath` | **string** | Absolute path where traversal begins |

**Return Value:**

Path of target relative to starting path



***

### mirror

Mirrors a directory to another.

```php
public mirror(string $originDir, string $targetDir, \Traversable $iterator = null, array $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$originDir` | **string** | The origin directory |
| `$targetDir` | **string** | The target directory |
| `$iterator` | **\Traversable** | A Traversable instance |
| `$options` | **
array** | An array of boolean options<br />Valid options are:<br />- $options[&#039;override&#039;] Whether to override an existing file on copy or not (see copy())<br />- $options[&#039;copy_on_windows&#039;] Whether to copy files instead of links on Windows (see symlink())<br />- $options[&#039;delete&#039;] Whether to delete files that are not in the source directory (defaults to false) |

***

### isAbsolutePath

Returns whether the file path is an absolute path.

```php
public isAbsolutePath(string $file): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | A file path |

***

### tempnam

Creates a temporary file with support for custom stream wrappers.

```php
public tempnam(string $dir, string $prefix): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **string** | The directory where the temporary filename will be created |
| `$prefix` | **
string** | The prefix of the generated temporary filename<br />Note: Windows uses only the first three characters of prefix |

**Return Value:**

The new temporary filename (with path), or throw an exception on failure



***

### dumpFile

Atomically dumps content into a file.

```php
public dumpFile(string $filename, string $content): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | The file to be written to |
| `$content` | **string** | The data to write into the file |

***

### toIterator

```php
private toIterator(mixed $files): \Traversable
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **mixed** |  |

***

### getSchemeAndHierarchy

Gets a 2-tuple of scheme (may be null) and hierarchical part of a filename (e.g. file:///tmp -> array(file, tmp)).

```php
private getSchemeAndHierarchy(string $filename): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | The filename to be parsed |

**Return Value:**

The filename scheme and hierarchical part yxorP::get('REQUEST')
