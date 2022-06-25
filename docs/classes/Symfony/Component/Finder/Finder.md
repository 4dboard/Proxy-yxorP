***

# Finder

Finder allows to build rules to find files and directories.

It is a thin wrapper around several specialized iterator classes.

All rules may be invoked several times.

All methods return the current Finder object to allow easy chaining:

    $finder = Finder::create()->files()->name('*.php')->in(__DIR__);

* Full name: `\Symfony\Component\Finder\Finder`
* This class implements:
[`\IteratorAggregate`](../../../IteratorAggregate.md), [`\Countable`](../../../Countable.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`IGNORE_VCS_FILES`|public| |1|
|`IGNORE_DOT_FILES`|public| |2|

## Properties


### mode



```php
private $mode
```






***

### names



```php
private $names
```






***

### notNames



```php
private $notNames
```






***

### exclude



```php
private $exclude
```






***

### filters



```php
private $filters
```






***

### depths



```php
private $depths
```






***

### sizes



```php
private $sizes
```






***

### followLinks



```php
private $followLinks
```






***

### sort



```php
private $sort
```






***

### ignore



```php
private $ignore
```






***

### dirs



```php
private $dirs
```






***

### dates



```php
private $dates
```






***

### iterators



```php
private $iterators
```






***

### contains



```php
private $contains
```






***

### notContains



```php
private $notContains
```






***

### adapters



```php
private $adapters
```






***

### paths



```php
private $paths
```






***

### notPaths



```php
private $notPaths
```






***

### ignoreUnreadableDirs



```php
private $ignoreUnreadableDirs
```






***

### vcsPatterns



```php
private static $vcsPatterns
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

### addAdapter

Registers a finder engine implementation.

```php
public addAdapter(\Symfony\Component\Finder\Adapter\AdapterInterface $adapter, int $priority): $this
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **\Symfony\Component\Finder\Adapter\AdapterInterface** | An adapter instance |
| `$priority` | **int** | Highest is selected first |




***

### useBestAdapter

Sets the selected adapter to the best one according to the current platform the code is run on.

```php
public useBestAdapter(): $this
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### setAdapter

Selects the adapter to use.

```php
public setAdapter(string $name): $this
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### removeAdapters

Removes all adapters registered in the finder.

```php
public removeAdapters(): $this
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### getAdapters

Returns registered adapters ordered by priority without extra information.

```php
public getAdapters(): \Symfony\Component\Finder\Adapter\AdapterInterface[]
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






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
public depth(string|int $level): $this
```

Usage:

$finder->depth('> 1') // the Finder will start matching at level 1.
$finder->depth('< 3') // the Finder will descend at most 3 levels of directories below the starting point.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **string&#124;int** | The depth level expression |



**See Also:**

* \Symfony\Component\Finder\Iterator\DepthRangeFilterIterator - * \Symfony\Component\Finder\Comparator\NumberComparator - 

***

### date

Adds tests for file dates (last modified).

```php
public date(string $date): $this
```

The date must be something that strtotime() is able to parse:

$finder->date('since yesterday');
$finder->date('until 2 days ago');
$finder->date('> now - 2 hours');
$finder->date('>= 2005-10-15');






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **string** | A date range string |



**See Also:**

* \Symfony\Component\Finder\strtotime - * \Symfony\Component\Finder\Iterator\DateRangeFilterIterator - * \Symfony\Component\Finder\Comparator\DateComparator - 

***

### name

Adds rules that files must match.

```php
public name(string $pattern): $this
```

You can use patterns (delimited with / sign), globs or simple strings.

$finder->name('*.php')
$finder->name('/\.php$/') // same as above
$finder->name('test.php')






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** | A pattern (a regexp, a glob, or a string) |



**See Also:**

* \Symfony\Component\Finder\Iterator\FilenameFilterIterator - 

***

### notName

Adds rules that files must not match.

```php
public notName(string $pattern): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** | A pattern (a regexp, a glob, or a string) |



**See Also:**

* \Symfony\Component\Finder\Iterator\FilenameFilterIterator - 

***

### contains

Adds tests that file contents must match.

```php
public contains(string $pattern): $this
```

Strings or PCRE patterns can be used:

$finder->contains('Lorem ipsum')
$finder->contains('/Lorem ipsum/i')






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** | A pattern (string or regexp) |



**See Also:**

* \Symfony\Component\Finder\Iterator\FilecontentFilterIterator - 

***

### notContains

Adds tests that file contents must not match.

```php
public notContains(string $pattern): $this
```

Strings or PCRE patterns can be used:

$finder->notContains('Lorem ipsum')
$finder->notContains('/Lorem ipsum/i')






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** | A pattern (string or regexp) |



**See Also:**

* \Symfony\Component\Finder\Iterator\FilecontentFilterIterator - 

***

### path

Adds rules that filenames must match.

```php
public path(string $pattern): $this
```

You can use patterns (delimited with / sign) or simple strings.

    $finder->path('some/special/dir')
    $finder->path('/some\/special\/dir/') // same as above

Use only / as dirname separator.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** | A pattern (a regexp or a string) |



**See Also:**

* \Symfony\Component\Finder\Iterator\FilenameFilterIterator - 

***

### notPath

Adds rules that filenames must not match.

```php
public notPath(string $pattern): $this
```

You can use patterns (delimited with / sign) or simple strings.

    $finder->notPath('some/special/dir')
    $finder->notPath('/some\/special\/dir/') // same as above

Use only / as dirname separator.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** | A pattern (a regexp or a string) |



**See Also:**

* \Symfony\Component\Finder\Iterator\FilenameFilterIterator - 

***

### size

Adds tests for file sizes.

```php
public size(string|int $size): $this
```

$finder->size('> 10K');
$finder->size('<= 1Ki');
$finder->size(4);






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **string&#124;int** | A size range string or an integer |



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
| `$ignoreDotFiles` | **bool** | Whether to exclude &quot;hidden&quot; files or not |



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
| `$ignoreVCS` | **bool** | Whether to exclude VCS files or not |



**See Also:**

* \Symfony\Component\Finder\Iterator\ExcludeDirectoryFilterIterator - 

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
public sortByName(): $this
```

This can be slow as all the matching files and directories must be retrieved for comparison.








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
public in(string|array $dirs): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirs` | **string&#124;array** | A directory path or an array of directories |




***

### getIterator

Returns an Iterator for the current Finder configuration.

```php
public getIterator(): \Iterator|\Symfony\Component\Finder\SplFileInfo[]
```

This method implements the IteratorAggregate interface.







**Return Value:**

An iterator



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

### count

Counts all the results collected by the iterators.

```php
public count(): int
```











***

### sortAdapters



```php
private sortAdapters(): $this
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

### buildAdapter



```php
private buildAdapter(\Symfony\Component\Finder\Adapter\AdapterInterface $adapter): \Symfony\Component\Finder\Adapter\AdapterInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **\Symfony\Component\Finder\Adapter\AdapterInterface** |  |




***

### resetAdapterSelection

Unselects all adapters.

```php
private resetAdapterSelection(): mixed
```











***

### initDefaultAdapters



```php
private initDefaultAdapters(): mixed
```











***

### normalizeDir

Normalizes given directory names by removing trailing slashes.

```php
private normalizeDir(string $dir): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
