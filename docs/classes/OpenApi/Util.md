***

# Util

Convenient utility functions that don't neatly fit anywhere else.



* Full name: `\OpenApi\Util`




## Methods


### getRelativePath

Turns the given $fullPath into a relative path based on $basePaths, which can either
be a single string path, or a list of possible paths. If a list is given, the first
matching basePath in the list will be used to compute the relative path. If no
relative path could be computed, the original string will be returned because there
is always a chance it was a valid relative path to begin with.

```php
public static getRelativePath(string $fullPath, array|string $basePaths): string
```

It should be noted that these are "relative paths" primarily in Finder's sense of them,
and conform specifically to what is expected by functions like `exclude()` and `notPath()`.
In particular, leading and trailing slashes are removed.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fullPath` | **string** |  |
| `$basePaths` | **array&#124;string** |  |




***

### removePrefix

Removes a prefix from the start of a string if it exists, or null otherwise.

```php
private static removePrefix(string $str, string $prefix): ?string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |
| `$prefix` | **string** |  |




***

### finder

Build a Symfony Finder object that scans the given $directory.

```php
public static finder(array|\Symfony\Component\Finder\Finder|string $directory, null|array|string $exclude = null, null|string $pattern = null): \Symfony\Component\Finder\Finder
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **array&#124;\Symfony\Component\Finder\Finder&#124;string** | The directory(s) or filename(s) |
| `$exclude` | **null&#124;array&#124;string** | The directory(s) or filename(s) to exclude (as absolute or relative paths) |
| `$pattern` | **null&#124;string** | The pattern of the files to scan |




***

### refEncode

Escapes the special characters "/" and "~".

```php
public static refEncode(string $raw): string
```

https://swagger.io/docs/specification/using-ref/
https://tools.ietf.org/html/rfc6901#page-3

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$raw` | **string** |  |




***

### refDecode

Converted the escaped characters "~1" and "~" back to "/" and "~".

```php
public static refDecode(string $encoded): string
```

https://swagger.io/docs/specification/using-ref/
https://tools.ietf.org/html/rfc6901#page-3

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encoded` | **string** |  |




***

### shorten

Shorten class name(s).

```php
public static shorten(array|object|string $classes): string|string[]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classes` | **array&#124;object&#124;string** | Class(es) to shorten |


**Return Value:**

One or more shortened class names



***


***

