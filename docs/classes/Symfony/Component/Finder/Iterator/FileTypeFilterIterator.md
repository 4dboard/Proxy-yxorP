***

# FileTypeFilterIterator

FileTypeFilterIterator only keeps files, directories, or both.

* Full name: `\Symfony\Component\Finder\Iterator\FileTypeFilterIterator`
* Parent class: [`\Symfony\Component\Finder\Iterator\FilterIterator`](./FilterIterator.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ONLY_FILES`|public| |1|
|`ONLY_DIRECTORIES`|public| |2|

## Properties

### mode

```php
private $mode
```

***

## Methods

### __construct

```php
public __construct(\Iterator $iterator, int $mode): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Iterator** | The Iterator to filter |
| `$mode` | **int** | The mode (self::ONLY_FILES or self::ONLY_DIRECTORIES) |

***

### accept

Filters the iterator values.

```php
public accept(): bool
```

**Return Value:**

true if the value should be kept, false otherwise



***

## Inherited methods

### rewind

This is a workaround for the problem with \FilterIterator leaving inner \FilesystemIterator in wrong state after rewind
in some cases.

```php
public rewind(): mixed
```

**See Also:**

* \Symfony\Component\Finder\Iterator\FilterIterator::rewind() -

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
