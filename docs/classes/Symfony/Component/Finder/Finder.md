***

# Finder

Finder allows to build rules to find files and directories.

It is a thin wrapper around several specialized iterator classes.

All rules may be invoked several times.

All methods return the current Finder object to allow chaining:

    $finder = Finder::create()->files()->name('*.php')->in(__DIR__);

* Full name: `\Symfony\Component\Finder\Finder`
* This class implements:
  [`\IteratorAggregate`](../../../IteratorAggregate.md), [`\Countable`](../../../Countable.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`IGNORE_VCS_FILES`|public| |1|
|`IGNORE_DOT_FILES`|public| |2|
|`IGNORE_VCS_IGNORED_FILES`|public| |4|

## Properties

### mode

```php
private int $mode
```

***

### names

```php
private array $names
```

***

### notNames

```php
private array $notNames
```

***

### exclude

```php
private array $exclude
```

***

### filters

```php
private array $filters
```

***

### depths

```php
private array $depths
```

***

### sizes

```php
private array $sizes
```

***

### followLinks

```php
private bool $followLinks
```

***

### reverseSorting

```php
private bool $reverseSorting
```

***

### sort

```php
private \Closure|int|false $sort
```

***

### ignore

```php
private int $ignore
```

***

### dirs

```php
private array $dirs
```

***

### dates

```php
private array $dates
```

***

### iterators

```php
private array $iterators
```

***

### contains

```php
private array $contains
```

***

### notContains

```php
private array $notContains
```

***

### paths

```php
private array $paths
```

***

### notPaths

```php
private array $notPaths
```

***

### ignoreUnreadableDirs

```php
private bool $ignoreUnreadableDirs
```

***

### vcsPatterns

```php
private static array $vcsPatterns
```

* This property is **static**.

***

## Methods

### __construct

```php
public __construct(): mixed
```

***

### create

Creates a new Finder.

```php
public static create(): static
```

* This method is **static**.

***

### directories

Restricts the matching to directories only.

```php
public directories(): $this
```

***

### files

Restricts the matching to files only.

```php
public files(): $this
```

***

### depth

Adds tests for the directory depth.

```php
public depth(string|int|string[]|int[] $levels): $this
```

Usage:

$finder->depth('> 1') // the Finder will start matching at level 1.
$finder->depth('< 3') // the Finder will descend at most 3 levels of directories below the starting point.
$finder->depth(['>= 1', '< 3'])

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$levels` | **string&#124;int&#124;string[]&#124;int[]** | The depth level expression or an array of depth levels |

**See Also:**

* \Symfony\Component\Finder\Iterator\DepthRangeFilterIterator - * \Symfony\Component\Finder\Comparator\NumberComparator
  -

***

### date

Adds tests for file dates (last modified).

```php
public date(string|string[] $dates): $this
```

The date must be something that strtotime() is able to parse:

$finder->date('since yesterday');
$finder->date('until 2 days ago');
$finder->date('> now - 2 hours');
$finder->date('>= 2005-10-15');
$finder->date(['>= 2005-10-15', '<= 2006-05-27']);

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dates` | **string&#124;string[]** | A date range string or an array of date ranges |

**See Also:**

* \Symfony\Component\Finder\strtotime - * \Symfony\Component\Finder\Iterator\DateRangeFilterIterator - *
  \Symfony\Component\Finder\Comparator\DateComparator -

***

### name

Adds rules that files must match.

```php
public name(string|string[] $patterns): $this
```

You can use patterns (delimited with / sign), globs or simple strings.

$finder->name('*.php')
$finder->name('/\.php$/') // same as above
$finder->name('test.php')
$finder->name(['test.py', 'test.php'])

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$patterns` | **string&#124;string[]** | A pattern (a regexp, a glob, or a string) or an array of patterns |

**See Also:**

* \Symfony\Component\Finder\Iterator\FilenameFilterIterator -

***

### notName

Adds rules that files must not match.

```php
public notName(string|string[] $patterns): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$patterns` | **string&#124;string[]** | A pattern (a regexp, a glob, or a string) or an array of patterns |

**See Also:**

* \Symfony\Component\Finder\Iterator\FilenameFilterIterator -

***

### contains

Adds tests that file contents must match.

```php
public contains(string|string[] $patterns): $this
```

Strings or PCRE patterns can be used:

$finder->contains('Lorem ipsum')
$finder->contains('/Lorem ipsum/i')
$finder->contains(['dolor', '/ipsum/i'])

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$patterns` | **string&#124;string[]** | A pattern (string or regexp) or an array of patterns |

**See Also:**

* \Symfony\Component\Finder\Iterator\FilecontentFilterIterator -

***

### notContains

Adds tests that file contents must not match.

```php
public notContains(string|string[] $patterns): $this
```

Strings or PCRE patterns can be used:

$finder->notContains('Lorem ipsum')
$finder->notContains('/Lorem ipsum/i')
$finder->notContains(['lorem', '/dolor/i'])

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$patterns` | **string&#124;string[]** | A pattern (string or regexp) or an array of patterns |

**See Also:**

* \Symfony\Component\Finder\Iterator\FilecontentFilterIterator -

***

### path

Adds rules that filenames must match.

```php
public path(string|string[] $patterns): $this
```

You can use patterns (delimited with / sign) or simple strings.

    $finder->path('some/special/dir')
    $finder->path('/some\/special\/dir/') // same as above
    $finder->path(['some dir', 'another/dir'])

Use only / as dirname separator.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$patterns` | **string&#124;string[]** | A pattern (a regexp or a string) or an array of patterns |

**See Also:**

* \Symfony\Component\Finder\Iterator\FilenameFilterIterator -

***

### notPath

Adds rules that filenames must not match.

```php
public notPath(string|string[] $patterns): $this
```

You can use patterns (delimited with / sign) or simple strings.

    $finder->notPath('some/special/dir')
    $finder->notPath('/some\/special\/dir/') // same as above
    $finder->notPath(['some/file.txt', 'another/file.log'])

Use only / as dirname separator.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$patterns` | **string&#124;string[]** | A pattern (a regexp or a string) or an array of patterns |

**See Also:**

* \Symfony\Component\Finder\Iterator\FilenameFilterIterator -

***

### size

Adds tests for file sizes.

```php
public size(string|int|string[]|int[] $sizes): $this
```

$finder->size('> 10K');
$finder->size('<= 1Ki');
$finder->size(4);
$finder->size(['> 10K', '< 20K'])

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sizes` | **string&#124;int&#124;string[]&#124;int[]** | A size range string or an integer or an array of size ranges |

**See Also:**

* \Symfony\Component\Finder\Iterator\SizeRangeFilterIterator - * \Symfony\Component\Finder\Comparator\NumberComparator -

***

### exclude

Excludes directories.

```php
public exclude(string|array $dirs): $this
```

Directories passed as argument must be relative to the ones defined with the `in()` method. For example:

$finder->in(__DIR__)->exclude('ruby');
<<<<<<< HEAD
=======





>>>>>>> 9f62fca1b3d18300dfe5a27f82022a98f38e98ac

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirs` | **string&#124;array** | A directory path or an array of directories |

**See Also:**

* \Symfony\Component\Finder\Iterator\ExcludeDirectoryFilterIterator -

***

### ignoreDotFiles

Excludes "hidden" directories and files (starting with a dot).

```php
public ignoreDotFiles(bool $ignoreDotFiles): $this
```

This option is enabled by default.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignoreDotFiles` | **bool** |  |

**See Also:**

* \Symfony\Component\Finder\Iterator\ExcludeDirectoryFilterIterator -

***

### ignoreVCS

Forces the finder to ignore version control directories.

```php
public ignoreVCS(bool $ignoreVCS): $this
```

This option is enabled by default.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignoreVCS` | **bool** |  |

**See Also:**

* \Symfony\Component\Finder\Iterator\ExcludeDirectoryFilterIterator -

***

### ignoreVCSIgnored

Forces Finder to obey .gitignore and ignore files based on rules listed there.

```php
public ignoreVCSIgnored(bool $ignoreVCSIgnored): $this
```

This option is disabled by default.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignoreVCSIgnored` | **bool** |  |

***

### addVCSPattern

Adds VCS patterns.

```php
public static addVCSPattern(string|string[] $pattern): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string&#124;string[]** | VCS patterns to ignore |

**See Also:**

* \Symfony\Component\Finder\ignoreVCS() -

***

### sort

Sorts files and directories by an anonymous function.

```php
public sort(\Closure $closure): $this
```

The anonymous function receives two \SplFileInfo instances to compare.

This can be slow as all the matching files and directories must be retrieved for comparison.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$closure` | **\Closure** |  |

**See Also:**

* \Symfony\Component\Finder\Iterator\SortableIterator -

***

### sortByName

Sorts files and directories by name.

```php
public sortByName(bool $useNaturalSort = false): $this
```

This can be slow as all the matching files and directories must be retrieved for comparison.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$useNaturalSort` | **bool** |  |

**See Also:**

* \Symfony\Component\Finder\Iterator\SortableIterator -

***

### sortByType

Sorts files and directories by type (directories before files), then by name.

```php
public sortByType(): $this
```

This can be slow as all the matching files and directories must be retrieved for comparison.

**See Also:**

* \Symfony\Component\Finder\Iterator\SortableIterator -

***

### sortByAccessedTime

Sorts files and directories by the last accessed time.

```php
public sortByAccessedTime(): $this
```

This is the time that the file was last accessed, read or written to.

This can be slow as all the matching files and directories must be retrieved for comparison.

**See Also:**

* \Symfony\Component\Finder\Iterator\SortableIterator -

***

### reverseSorting

Reverses the sorting.

```php
public reverseSorting(): $this
```

***

### sortByChangedTime

Sorts files and directories by the last inode changed time.

```php
public sortByChangedTime(): $this
```

This is the time that the inode information was last modified (permissions, owner, group or other metadata).

On Windows, since inode is not available, changed time is actually the file creation time.

This can be slow as all the matching files and directories must be retrieved for comparison.

**See Also:**

* \Symfony\Component\Finder\Iterator\SortableIterator -

***

### sortByModifiedTime

Sorts files and directories by the last modified time.

```php
public sortByModifiedTime(): $this
```

This is the last time the actual contents of the file were last modified.

This can be slow as all the matching files and directories must be retrieved for comparison.

**See Also:**

* \Symfony\Component\Finder\Iterator\SortableIterator -

***

### filter

Filters the iterator with an anonymous function.

```php
public filter(\Closure $closure): $this
```

The anonymous function receives a \SplFileInfo and must return false
to remove files.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$closure` | **\Closure** |  |

**See Also:**

* \Symfony\Component\Finder\Iterator\CustomFilterIterator -

***

### followLinks

Forces the following of symlinks.

```php
public followLinks(): $this
```

***

### ignoreUnreadableDirs

Tells finder to ignore unreadable directories.

```php
public ignoreUnreadableDirs(bool $ignore = true): $this
```

By default, scanning unreadable directories content throws an AccessDeniedException.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignore` | **bool** |  |

***

### in

Searches files and directories which match defined rules.

```php
public in(string|string[] $dirs): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirs` | **string&#124;string[]** | A directory path or an array of directories |

***

### getIterator

Returns an Iterator for the current Finder configuration.

```php
public getIterator(): \Iterator&lt;string,\Symfony\Component\Finder\SplFileInfo&gt;
```

This method implements the IteratorAggregate interface.









***

### append

Appends an existing set of files/directories to the finder.

```php
public append(iterable $iterator): $this
```

The set can be another Finder, an Iterator, an IteratorAggregate, or even a plain array.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **iterable** |  |

***

### hasResults

Check if any results were found.

```php
public hasResults(): bool
```

***

### count

Counts all the results collected by the iterators.

```php
public count(): int
```

***

### searchInDirectory

```php
private searchInDirectory(string $dir): \Iterator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **string** |  |

***

### normalizeDir

Normalizes given directory names by removing trailing slashes.

```php
private normalizeDir(string $dir): string
```

Excluding: (s)ftp:// or ssh2.(s)ftp:// wrapper

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **string** |  |

***


***

