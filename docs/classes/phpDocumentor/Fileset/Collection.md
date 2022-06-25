***

# Collection

Files container handling directory scanning, project root detection and ignores.

Always set any filtering options (extensions, ignore patterns, hidden files, symlinks)
_before_ adding any directories or files.  Such filtering is done immediately
upon loading the directory/file.  As such, setting filtering options
_after_ adding directories/files will seem as though your filters were ignored.

* Full name: `\phpDocumentor\Fileset\Collection`
* Parent class: [`ArrayObject`](../../ArrayObject.md)

**See Also:**

* http://phpdoc.org - 



## Properties


### follow_symlinks



```php
protected bool $follow_symlinks
```






***

### ignore_hidden



```php
protected bool $ignore_hidden
```






***

### ignore_patterns



```php
protected \phpDocumentor\Fileset\Collection\IgnorePatterns $ignore_patterns
```






***

### allowed_extensions



```php
protected \ArrayObject $allowed_extensions
```






***

### files



```php
protected string[] $files
```






***

## Methods


### __construct

Initializes the finding component.

```php
public __construct(): mixed
```











***

### setIgnorePatterns

Sets the patterns by which to detect which files to ignore.

```php
public setIgnorePatterns(array $patterns): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$patterns` | **array** | Glob-like patterns to filter files. |




***

### getIgnorePatterns

Returns the ignore patterns.

```php
public getIgnorePatterns(): \phpDocumentor\Fileset\Collection\IgnorePatterns
```











***

### setAllowedExtensions

Sets a list of allowed extensions; if not used php, php3 and phtml
is assumed.

```php
public setAllowedExtensions(array $extensions): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extensions` | **array** | An array containing extensions to match for. |




***

### addAllowedExtension

Adds a file extension to the list of allowed extensions.

```php
public addAllowedExtension(string $extension): void
```

No dot is necessary and will even prevent the extension from being
picked up.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extension` | **string** | Allowed file Extension to add (i.e. php). |




***

### addDirectories

Adds the content of a set of directories to the list of files to parse.

```php
public addDirectories(array $paths): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **array** | The paths whose contents to add to the collection. |




***

### addDirectory

Retrieve all files in the given directory and add them to the parsing list.

```php
public addDirectory(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | A path to a folder, may be relative, absolute or<br />even phar. |




***

### addFiles

Adds a list of individual files to the collection.

```php
public addFiles(array $paths): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **array** | File locations, may be absolute, relative or even phar. |




***

### addFile

Adds a file to the collection.

```php
public addFile(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | File location, may be absolute, relative or even phar. |




***

### getGlobbedPaths

Get a globbed list out of the given path.

```php
protected getGlobbedPaths(string $path): array
```

This wrapper method normalizes for OS-divergent behavior of the native glob() function.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### getFilenames

Returns a list of file paths that are ready to be parsed.

```php
public getFilenames(): string[]
```

Please note that the ignore pattern will be applied and all files are
converted to absolute paths.









***

### getProjectRoot

Calculates the project root from the given files by determining their
highest common path.

```php
public getProjectRoot(): string
```











***

### setIgnoreHidden

Sets whether to ignore hidden files and folders.

```php
public setIgnoreHidden(bool $ignore_hidden): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignore_hidden` | **bool** | if true skips hidden files and folders. |




***

### getIgnoreHidden

Returns whether files and folders that are hidden are ignored.

```php
public getIgnoreHidden(): bool
```











***

### setFollowSymlinks

Sets whether to follow symlinks.

```php
public setFollowSymlinks(bool $follow_symlinks): void
```

PHP version 5.2.11 is at least required since the
RecursiveDirectoryIterator does not support the FOLLOW_SYMLINKS
constant before that version.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$follow_symlinks` | **bool** |  |




***

### getFollowSymlinks

Returns whether to follow symlinks.

```php
public getFollowSymlinks(): bool
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
