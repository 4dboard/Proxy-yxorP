***

# SplFileInfo

Extends \SplFileInfo to support relative paths.

* Full name: `\Symfony\Component\Finder\SplFileInfo`
* Parent class: [`SplFileInfo`](../../../SplFileInfo.md)

## Properties

### relativePath

```php
private $relativePath
```

***

### relativePathname

```php
private $relativePathname
```

***

## Methods

### __construct

```php
public __construct(string $file, string $relativePath, string $relativePathname): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | The file name |
| `$relativePath` | **string** | The relative path |
| `$relativePathname` | **string** | The relative path name |

***

### getRelativePath

Returns the relative path.

```php
public getRelativePath(): string
```

This path does not contain the file name.

**Return Value:**

the relative path



***

### getRelativePathname

Returns the relative path name.

```php
public getRelativePathname(): string
```

This path contains the file name.

**Return Value:**

the relative path name



***

### getContents

Returns the contents of the file.

```php
public getContents(): string
```

**Return Value:**

the contents of the file yxorP::get('REQUEST')
