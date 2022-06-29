***

# ExcludeDirectoryFilterIterator

ExcludeDirectoryFilterIterator filters out directories.

* Full name: `\Symfony\Component\Finder\Iterator\ExcludeDirectoryFilterIterator`
* Parent class: [`\Symfony\Component\Finder\Iterator\FilterIterator`](./FilterIterator.md)
* This class implements:
  [`\RecursiveIterator`](../../../../RecursiveIterator.md)

## Properties

### iterator

```php
private $iterator
```

***

### isRecursive

```php
private $isRecursive
```

***

### excludedDirs

```php
private $excludedDirs
```

***

### excludedPattern

```php
private $excludedPattern
```

***

## Methods

### __construct

```php
public __construct(\Iterator $iterator, array $directories): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Iterator** | The Iterator to filter |
| `$directories` | **array** | An array of directories to exclude |

***

### accept

Filters the iterator values.

```php
public accept(): bool
```

**Return Value:**

True if the value should be kept, false otherwise



***

### hasChildren

```php
public hasChildren(): mixed
```

***

### getChildren

```php
public getChildren(): mixed
```

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

